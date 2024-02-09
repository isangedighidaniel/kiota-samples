/* tslint:disable */
/* eslint-disable */
// Generated by Microsoft Kiota
import { type UserItemRequestBuilder, UserItemRequestBuilderNavigationMetadata } from './item/';
import { type BaseRequestBuilder, type KeysToExcludeForNavigationMetadata, type NavigationMetadata } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /users
 */
export interface UsersRequestBuilder extends BaseRequestBuilder<UsersRequestBuilder> {
    /**
     * Gets an item from the graphtypescriptv4.utilities.users.item collection
     * @param userId The unique identifier of user
     * @returns {UserItemRequestBuilder}
     */
     byUserId(userId: string) : UserItemRequestBuilder;
}
/**
 * Uri template for the request builder.
 */
export const UsersRequestBuilderUriTemplate = "{+baseurl}/users";
/**
 * Metadata for all the navigation properties in the request builder.
 */
export const UsersRequestBuilderNavigationMetadata: Record<Exclude<keyof UsersRequestBuilder, KeysToExcludeForNavigationMetadata>, NavigationMetadata> = {
    byUserId: {
        navigationMetadata: UserItemRequestBuilderNavigationMetadata,
        pathParametersMappings: ["user%2Did"],
    },
};
/* tslint:enable */
/* eslint-enable */
