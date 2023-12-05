// tslint:disable
// eslint-disable
// Generated by Microsoft Kiota
import { InferenceClassificationRequestBuilder } from './inferenceClassification/';
import { MailFoldersRequestBuilder } from './mailFolders/';
import { MessagesRequestBuilder } from './messages/';
import { BaseRequestBuilder, type RequestAdapter } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /users/{user-id}
 */
export class UserItemRequestBuilder extends BaseRequestBuilder<UserItemRequestBuilder> {
    /**
     * The inferenceClassification property
     */
    public get inferenceClassification(): InferenceClassificationRequestBuilder {
        return new InferenceClassificationRequestBuilder(this.pathParameters, this.requestAdapter);
    }
    /**
     * The mailFolders property
     */
    public get mailFolders(): MailFoldersRequestBuilder {
        return new MailFoldersRequestBuilder(this.pathParameters, this.requestAdapter);
    }
    /**
     * The messages property
     */
    public get messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder(this.pathParameters, this.requestAdapter);
    }
    /**
     * Instantiates a new UserItemRequestBuilder and sets the default values.
     * @param pathParameters The raw url or the Url template parameters for the request.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public constructor(pathParameters: Record<string, unknown> | string | undefined, requestAdapter: RequestAdapter) {
        super(pathParameters, requestAdapter, "{+baseurl}/users/{user%2Did}", (x, y) => new UserItemRequestBuilder(x, y));
    }
}
// tslint:enable
// eslint-enable
