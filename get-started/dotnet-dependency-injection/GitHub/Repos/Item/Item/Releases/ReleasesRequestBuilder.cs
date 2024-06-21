// <auto-generated/>
using GitHub.ApiClient.Repos.Item.Item.Releases.Item;
using Microsoft.Kiota.Abstractions;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;
using System;
namespace GitHub.ApiClient.Repos.Item.Item.Releases
{
    /// <summary>
    /// Builds and executes requests for operations under \repos\{owner}\{repo}\releases
    /// </summary>
    public class ReleasesRequestBuilder : BaseRequestBuilder
    {
        /// <summary>Gets an item from the GitHub.ApiClient.repos.item.item.releases.item collection</summary>
        /// <param name="position">The name of the release</param>
        /// <returns>A <see cref="GitHub.ApiClient.Repos.Item.Item.Releases.Item.WithReleaseNameItemRequestBuilder"/></returns>
        public GitHub.ApiClient.Repos.Item.Item.Releases.Item.WithReleaseNameItemRequestBuilder this[string position]
        {
            get
            {
                var urlTplParams = new Dictionary<string, object>(PathParameters);
                urlTplParams.Add("releaseName", position);
                return new GitHub.ApiClient.Repos.Item.Item.Releases.Item.WithReleaseNameItemRequestBuilder(urlTplParams, RequestAdapter);
            }
        }
        /// <summary>
        /// Instantiates a new <see cref="GitHub.ApiClient.Repos.Item.Item.Releases.ReleasesRequestBuilder"/> and sets the default values.
        /// </summary>
        /// <param name="pathParameters">Path parameters for the request</param>
        /// <param name="requestAdapter">The request adapter to use to execute the requests.</param>
        public ReleasesRequestBuilder(Dictionary<string, object> pathParameters, IRequestAdapter requestAdapter) : base(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/releases", pathParameters)
        {
        }
        /// <summary>
        /// Instantiates a new <see cref="GitHub.ApiClient.Repos.Item.Item.Releases.ReleasesRequestBuilder"/> and sets the default values.
        /// </summary>
        /// <param name="rawUrl">The raw URL to use for the request builder.</param>
        /// <param name="requestAdapter">The request adapter to use to execute the requests.</param>
        public ReleasesRequestBuilder(string rawUrl, IRequestAdapter requestAdapter) : base(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/releases", rawUrl)
        {
        }
    }
}
