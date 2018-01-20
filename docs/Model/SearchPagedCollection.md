# SearchPagedCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The URI of the current result set. For example: https://api.ebay.com/buy/v1/item/search?q&#x3D;shirt&amp;amp;price&#x3D;[20..80]&amp;amp;limit&#x3D;5 This query is for a shirt, that is priced between 20 and 80 dollars and limit the response to 5 items. | [optional] 
**item_summaries** | [**\Swagger\Client\Model\ItemSummary[]**](ItemSummary.md) | An array of items in one result set. The items are sorted according to the sorting method specified in the request. | [optional] 
**limit** | **int** | The maximum number of items that can be returned in a result set. The limit value is set in the request. | [optional] 
**next** | **string** | The URL for the next result set. This is returned if there is a next result set. The following example returns items 11 thru 20 from the list of items. https://api.ebay.com/buy/v1/item/search?query&#x3D;t-shirts&amp;amp;limit&#x3D;10&amp;amp;offset&#x3D;0 | [optional] 
**offset** | **int** | This value indicates the current &#39;page&#39; of items being displayed. This value is 0 for the first page of data, 1 for the second page of data, and so on. | [optional] 
**prev** | **string** | The URL for the previous result set. This is returned if there is a previous result set. The following example returns items 1 thru 10 from the list of items. https://api.ebay.com/buy/v1/item/search?query&#x3D;t-shirts&amp;amp;limit&#x3D;10&amp;amp;offset&#x3D;0 | [optional] 
**refinement** | [**\Swagger\Client\Model\Refinement**](Refinement.md) |  | [optional] 
**total** | **int** | The total number of items that match the input criteria. | [optional] 
**warnings** | [**\Swagger\Client\Model\Error[]**](Error.md) | The container with all the warnings for the input request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


