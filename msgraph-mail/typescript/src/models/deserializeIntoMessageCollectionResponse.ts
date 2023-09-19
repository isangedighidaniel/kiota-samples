// tslint:disable
// eslint-disable
// Generated by Microsoft Kiota
import { createMessageFromDiscriminatorValue } from './createMessageFromDiscriminatorValue';
import { type Message } from './message';
import { type MessageCollectionResponse } from './messageCollectionResponse';
import { serializeMessage } from './serializeMessage';
import { type AdditionalDataHolder, type Parsable, type ParseNode, type SerializationWriter } from '@microsoft/kiota-abstractions';

export function deserializeIntoMessageCollectionResponse(messageCollectionResponse: MessageCollectionResponse | undefined = {} as MessageCollectionResponse) : Record<string, (node: ParseNode) => void> {
    return {
        "@odata.nextLink": n => { messageCollectionResponse.odataNextLink = n.getStringValue(); },
        "value": n => { messageCollectionResponse.value = n.getCollectionOfObjectValues<Message>(createMessageFromDiscriminatorValue); },
    }
}
// tslint:enable
// eslint-enable
