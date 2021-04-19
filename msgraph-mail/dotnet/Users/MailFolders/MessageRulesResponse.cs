using Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.Linq;
namespace Graphdotnetv4.Users.MailFolders {
    public class MessageRulesResponse : IParsable<MessageRulesResponse> {
        public List<MessageRule> Value { get; set; }
        public string NextLink { get; set; }
        public IDictionary<string, Action<MessageRulesResponse, IParseNode>> DeserializeFields => new Dictionary<string, Action<MessageRulesResponse, IParseNode>> {
            {
                "value", (o,n) => { o.Value = n.GetCollectionOfObjectValues<MessageRule>().ToList(); }
            },
            {
                "nextLink", (o,n) => { o.NextLink = n.GetStringValue(); }
            },
        };
        public void Serialize(ISerializationWriter writer) {
            writer.WriteCollectionOfObjectValues<MessageRule>("value", Value);
            writer.WriteStringValue("nextLink", NextLink);
        }
    }
}
