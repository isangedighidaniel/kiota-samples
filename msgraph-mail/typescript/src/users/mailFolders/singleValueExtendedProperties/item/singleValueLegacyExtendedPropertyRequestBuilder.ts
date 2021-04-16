import {SerializationWriter, HttpCore, HttpMethod, RequestInfo, ResponseHandler} from '@microsoft/kiota-abstractions';
import {SingleValueLegacyExtendedProperty} from '../../../singleValueLegacyExtendedProperty';

/** Builds and executes requests for operations under /users/{user-id}/mailFolders/{mailFolder-id}/singleValueExtendedProperties/{singleValueLegacyExtendedProperty-id}  */
export class SingleValueLegacyExtendedPropertyRequestBuilder {
    /**
     * Get singleValueExtendedProperties from users
     * @param q Request query parameters
     * @param h Request headers
     * @param responseHandler Response handler to use in place of the default response handling provided by the core service
     * @returns a Promise of SingleValueLegacyExtendedProperty
     */
    public get (q?: {
                    select?: string[],
                    expand?: string[]
                    } | undefined, h?: object | undefined, responseHandler?: ResponseHandler | undefined) : Promise<SingleValueLegacyExtendedProperty | undefined> {
        const requestInfo = this.createGetRequestInfo(
            q, h
        );
        return this.httpCore?.sendAsync<SingleValueLegacyExtendedProperty>(requestInfo, SingleValueLegacyExtendedProperty, responseHandler) ?? Promise.reject(new Error('http core is null'));
    };
    /**
     * Get singleValueExtendedProperties from users
     * @param q Request query parameters
     * @param h Request headers
     * @returns a RequestInfo
     */
    public createGetRequestInfo (q?: {
                    select?: string[],
                    expand?: string[]
                    } | undefined, h?: object | undefined) : RequestInfo {
        const requestInfo = new RequestInfo();
        requestInfo.URI = (this.currentPath ?? '') + this.pathSegment,
        requestInfo.httpMethod = HttpMethod.GET,
        h && requestInfo.setHeadersFromRawObject(h);
        q && requestInfo.setQueryStringParametersFromRawObject(q);
        return requestInfo;
    };
    /**
     * Update the navigation property singleValueExtendedProperties in users
     * @param body 
     * @param h Request headers
     * @param responseHandler Response handler to use in place of the default response handling provided by the core service
     * @returns a Promise of void
     */
    public patch (body: SingleValueLegacyExtendedProperty, h?: object | undefined, responseHandler?: ResponseHandler | undefined) : Promise<void> {
        const requestInfo = this.createPatchRequestInfo(
            body, h
        );
        return this.httpCore?.sendNoResponseContentAsync(requestInfo, responseHandler) ?? Promise.reject(new Error('http core is null'));
    };
    /**
     * Update the navigation property singleValueExtendedProperties in users
     * @param body 
     * @param h Request headers
     * @returns a RequestInfo
     */
    public createPatchRequestInfo (body: SingleValueLegacyExtendedProperty, h?: object | undefined) : RequestInfo {
        const requestInfo = new RequestInfo();
        requestInfo.URI = (this.currentPath ?? '') + this.pathSegment,
        requestInfo.httpMethod = HttpMethod.PATCH,
        h && requestInfo.setHeadersFromRawObject(h);
        requestInfo.setJsonContentFromParsable(body, this.serializerFactory);
        return requestInfo;
    };
    /**
     * Delete navigation property singleValueExtendedProperties for users
     * @param h Request headers
     * @param responseHandler Response handler to use in place of the default response handling provided by the core service
     * @returns a Promise of void
     */
    public delete (h?: object | undefined, responseHandler?: ResponseHandler | undefined) : Promise<void> {
        const requestInfo = this.createDeleteRequestInfo(
            h
        );
        return this.httpCore?.sendNoResponseContentAsync(requestInfo, responseHandler) ?? Promise.reject(new Error('http core is null'));
    };
    /**
     * Delete navigation property singleValueExtendedProperties for users
     * @param h Request headers
     * @returns a RequestInfo
     */
    public createDeleteRequestInfo (h?: object | undefined) : RequestInfo {
        const requestInfo = new RequestInfo();
        requestInfo.URI = (this.currentPath ?? '') + this.pathSegment,
        requestInfo.httpMethod = HttpMethod.DELETE,
        h && requestInfo.setHeadersFromRawObject(h);
        return requestInfo;
    };
    /** Path segment to use to build the URL for the current request builder  */
    private readonly pathSegment: string = "";
    /** Current path for the request  */
    public currentPath?: string | undefined;
    /** Core service to use to execute the requests  */
    public httpCore?: HttpCore | undefined;
    /** Factory to use to get a serializer for payload serialization  */
    public serializerFactory?: ((mediaType: string) => SerializationWriter) | undefined;
}
