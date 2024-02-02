/* tslint:disable */
/* eslint-disable */
// Generated by Microsoft Kiota
import { serializeUser, type User } from '../../models/';
import { type BaseRequestBuilder, type Parsable, type ParsableFactory, type RequestConfiguration, type RequestInformation, type RequestsMetadata } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /user/createWithArray
 */
export interface CreateWithArrayRequestBuilder extends BaseRequestBuilder<CreateWithArrayRequestBuilder> {
    /**
     * Creates list of users with given input array
     * @param body The request body
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns a Promise of ArrayBuffer
     */
     post(body: User[], requestConfiguration?: RequestConfiguration<object> | undefined) : Promise<ArrayBuffer | undefined>;
    /**
     * @param body The request body
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns a RequestInformation
     */
     toPostRequestInformation(body: User[], requestConfiguration?: RequestConfiguration<object> | undefined) : RequestInformation;
}
/**
 * Metadata for all the requests in the request builder.
 */
export const CreateWithArrayRequestBuilderRequestsMetadata: RequestsMetadata = {
    post: {
        responseBodyContentType: "application/json, application/xml",
        adapterMethodName: "sendPrimitiveAsync",
        responseBodyFactory:  "ArrayBuffer",
        requestBodyContentType: "application/json",
        requestBodySerializer: serializeUser,
        requestInformationContentSetMethod: "setContentFromParsable",
    },
};
/**
 * Uri template for the request builder.
 */
export const CreateWithArrayRequestBuilderUriTemplate = "{+baseurl}/user/createWithArray";
/* tslint:enable */
/* eslint-enable */