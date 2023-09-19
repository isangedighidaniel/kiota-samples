// tslint:disable
// eslint-disable
// Generated by Microsoft Kiota
import { createExtensionFromDiscriminatorValue } from './createExtensionFromDiscriminatorValue';
import { type Extension } from './extension';
import { type ExtensionCollectionResponse } from './extensionCollectionResponse';
import { serializeExtension } from './serializeExtension';
import { type AdditionalDataHolder, type Parsable, type ParseNode, type SerializationWriter } from '@microsoft/kiota-abstractions';

export function deserializeIntoExtensionCollectionResponse(extensionCollectionResponse: ExtensionCollectionResponse | undefined = {} as ExtensionCollectionResponse) : Record<string, (node: ParseNode) => void> {
    return {
        "@odata.nextLink": n => { extensionCollectionResponse.odataNextLink = n.getStringValue(); },
        "value": n => { extensionCollectionResponse.value = n.getCollectionOfObjectValues<Extension>(createExtensionFromDiscriminatorValue); },
    }
}
// tslint:enable
// eslint-enable
