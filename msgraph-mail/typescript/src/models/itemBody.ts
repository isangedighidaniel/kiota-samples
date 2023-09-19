// tslint:disable
// eslint-disable
// Generated by Microsoft Kiota
import { BodyType } from './bodyType';
import { type AdditionalDataHolder, type Parsable } from '@microsoft/kiota-abstractions';

export interface ItemBody extends AdditionalDataHolder, Parsable {
    /**
     * Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     */
    additionalData?: Record<string, unknown>;
    /**
     * The content of the item.
     */
    content?: string;
    /**
     * The contentType property
     */
    contentType?: BodyType;
}
// tslint:enable
// eslint-enable
