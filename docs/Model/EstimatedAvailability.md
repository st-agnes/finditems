# EstimatedAvailability

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_threshold** | **int** | The &#39;display item quantity&#39; threshold value the seller has set. | [optional] 
**availability_threshold_type** | **string** | Only returns MORE_THAN, which indicates that the seller has more that the &#39;quantity display preference&#39; value in stock for this item. This field depends on how the seller has set their item quantity display preference. Let&#39;s say the following are the quantity display preferences the seller can choose between. Display &amp;quot;More than 10 available&amp;quot; in your listing (if applicable) If the seller enables this preference, this field is returned as long as there are more than 10 in inventory of this item. If the quantity is equal to 10 or drops below 10, this field is not returned and the actual quantity of the item is returned in the estimatedAvailableQuantity field. Display the exact quantity in your listings If the seller enables this preference, the availabilityThresholdType field is not returned and the actual quantity of the item is returned in the estimatedAvailableQuantity field. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/browse/types/AvailabilityThresholdEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**delivery_options** | **string[]** | An array of available delivery options. | [optional] 
**estimated_availability_status** | **string** | Indicates the estimated availability of this item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/browse/types/AvailabilityStatusEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**estimated_available_quantity** | **int** | The estimated number of a specific item that are available for purchase. | [optional] 
**estimated_sold_quantity** | **int** | The estimated number of a specific item that have been sold. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


