// tslint:disable
// eslint-disable
// Generated by Microsoft Kiota
import { type ODataError } from '../../../../../models/oDataErrors/';
import { createODataErrorFromDiscriminatorValue, deserializeIntoODataError, serializeODataError } from '../../../../../models/oDataErrors/oDataError';
import { BaseRequestBuilder, HttpMethod, RequestInformation, type Parsable, type ParsableFactory, type RequestAdapter, type RequestConfiguration, type RequestOption } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /users/{user-id}/messages/{message-id}/$value
 */
export class ContentRequestBuilder extends BaseRequestBuilder {
    /**
     * Instantiates a new ContentRequestBuilder and sets the default values.
     * @param pathParameters The raw url or the Url template parameters for the request.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public constructor(pathParameters: Record<string, unknown> | string | undefined, requestAdapter: RequestAdapter) {
        super(pathParameters, requestAdapter, "{+baseurl}/users/{user%2Did}/messages/{message%2Did}/$value");
    };
    /**
     * Get media content for the navigation property messages from users
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns a Promise of ArrayBuffer
     * @see {@link https://learn.microsoft.com/graph/api/opentypeextension-get?view=graph-rest-1.0|Find more info here}
     */
    public get(requestConfiguration?: RequestConfiguration<object> | undefined) : Promise<ArrayBuffer | undefined> {
        const requestInfo = this.toGetRequestInformation(
            requestConfiguration
        );
        const errorMapping = {
            "4XX": createODataErrorFromDiscriminatorValue,
            "5XX": createODataErrorFromDiscriminatorValue,
        } as Record<string, ParsableFactory<Parsable>>;
        return this.requestAdapter.sendPrimitiveAsync<ArrayBuffer>(requestInfo, "ArrayBuffer", errorMapping);
    };
    /**
     * Update media content for the navigation property messages in users
     * @param body Binary request body
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns a Promise of ArrayBuffer
     */
    public put(body: ArrayBuffer | undefined, requestConfiguration?: RequestConfiguration<object> | undefined) : Promise<ArrayBuffer | undefined> {
        const requestInfo = this.toPutRequestInformation(
            body, requestConfiguration
        );
        const errorMapping = {
            "4XX": createODataErrorFromDiscriminatorValue,
            "5XX": createODataErrorFromDiscriminatorValue,
        } as Record<string, ParsableFactory<Parsable>>;
        return this.requestAdapter.sendPrimitiveAsync<ArrayBuffer>(requestInfo, "ArrayBuffer", errorMapping);
    };
    /**
     * Get media content for the navigation property messages from users
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns a RequestInformation
     */
    public toGetRequestInformation(requestConfiguration?: RequestConfiguration<object> | undefined) : RequestInformation {
        const requestInfo = new RequestInformation(HttpMethod.GET, this.urlTemplate, this.pathParameters);
        requestInfo.configure(requestConfiguration);
        requestInfo.headers.tryAdd("Accept", "application/octet-stream, application/json");
        return requestInfo;
    };
    /**
     * Update media content for the navigation property messages in users
     * @param body Binary request body
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns a RequestInformation
     */
    public toPutRequestInformation(body: ArrayBuffer | undefined, requestConfiguration?: RequestConfiguration<object> | undefined) : RequestInformation {
        if(!body) throw new Error("body cannot be undefined");
        const requestInfo = new RequestInformation(HttpMethod.PUT, this.urlTemplate, this.pathParameters);
        requestInfo.configure(requestConfiguration);
        requestInfo.headers.tryAdd("Accept", "application/json");
        requestInfo.setStreamContent(body, "application/octet-stream");
        return requestInfo;
    };
    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param rawUrl The raw URL to use for the request builder.
     * @returns a ContentRequestBuilder
     */
    public withUrl(rawUrl: string) : ContentRequestBuilder {
        if(!rawUrl) throw new Error("rawUrl cannot be undefined");
        return new ContentRequestBuilder(rawUrl, this.requestAdapter);
    };
}
// tslint:enable
// eslint-enable
