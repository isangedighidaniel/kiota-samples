package kiotaposts;

import java.util.List;

import com.microsoft.kiota.authentication.AnonymousAuthenticationProvider;
import com.microsoft.kiota.http.OkHttpRequestAdapter;

import kiotaposts.client.PostsClient;
import kiotaposts.client.models.Post;

public class App {

    public static void main(String[] args) {
        // API requires no authentication, so use the anonymous
        // authentication provider
        final AnonymousAuthenticationProvider authProvider =
            new AnonymousAuthenticationProvider();
        final OkHttpRequestAdapter adapter = new OkHttpRequestAdapter(authProvider);

        final PostsClient client = new PostsClient(adapter);

        // GET /posts
        final List<Post> allPosts = client.posts().get();
        System.out.printf("Retrieved %d posts.%n", allPosts.size());

        // GET /posts/{id}
        final Integer specificPostId = 5;
        final Post specificPost = client.posts().byPostId(specificPostId).get();
        System.out.printf("Retrieved post - ID: %d, Title: %s, Body: %s%n",
            specificPost.getId(), specificPost.getTitle(), specificPost.getBody());

        // POST /posts
        final Post newPost = new Post();
        newPost.setUserId(42);
        newPost.setTitle("Testing Kiota-generated API client");
        newPost.setBody("Hello world!");

        final Post createdPost = client.posts().post(newPost);
        System.out.printf("Created new post with ID: %d%n", createdPost.getId());

        // PATCH /posts/{id}
        final Post update = new Post();
        // Only update title
        update.setTitle("Updated title");

        final Post updatedPost = client.posts().byPostId(specificPostId).patch(update);
        System.out.printf("Updated post - ID: %d, Title: %s, Body: %s%n",
            updatedPost.getId(), updatedPost.getTitle(), updatedPost.getBody());

        // DELETE /posts/{id}
        client.posts().byPostId(specificPostId).delete();
    }
}