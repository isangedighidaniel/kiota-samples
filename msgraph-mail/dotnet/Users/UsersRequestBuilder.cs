// <auto-generated/>
using Graphdotnetv4.Users.Item;
using Microsoft.Kiota.Abstractions;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;
using System;
namespace Graphdotnetv4.Users {
    /// <summary>
    /// Builds and executes requests for operations under \users
    /// </summary>
    public class UsersRequestBuilder : BaseRequestBuilder 
    {
        /// <summary>Gets an item from the Graphdotnetv4.users.item collection</summary>
        /// <param name="position">The unique identifier of user</param>
        /// <returns>A <see cref="UserItemRequestBuilder"/></returns>
        public UserItemRequestBuilder this[string position]
        {
            get
            {
                var urlTplParams = new Dictionary<string, object>(PathParameters);
                urlTplParams.Add("user%2Did", position);
                return new UserItemRequestBuilder(urlTplParams, RequestAdapter);
            }
        }
        /// <summary>
        /// Instantiates a new <see cref="UsersRequestBuilder"/> and sets the default values.
        /// </summary>
        /// <param name="pathParameters">Path parameters for the request</param>
        /// <param name="requestAdapter">The request adapter to use to execute the requests.</param>
        public UsersRequestBuilder(Dictionary<string, object> pathParameters, IRequestAdapter requestAdapter) : base(requestAdapter, "{+baseurl}/users", pathParameters)
        {
        }
        /// <summary>
        /// Instantiates a new <see cref="UsersRequestBuilder"/> and sets the default values.
        /// </summary>
        /// <param name="rawUrl">The raw URL to use for the request builder.</param>
        /// <param name="requestAdapter">The request adapter to use to execute the requests.</param>
        public UsersRequestBuilder(string rawUrl, IRequestAdapter requestAdapter) : base(requestAdapter, "{+baseurl}/users", rawUrl)
        {
        }
    }
}
