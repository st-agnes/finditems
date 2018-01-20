# ItemSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\Swagger\Client\Model\Image[]**](Image.md) | This container is an array of URLs for Gallery Plus images of the item listing. | [optional] 
**adult_only** | **bool** | This indicates if the item is for adults only. For more information about adult-only items on eBay, see Adult items policy for sellers and Searching for adult only items for buyers. | [optional] 
**bid_count** | **int** | This integer value indicates the total number of bids that have been placed for an auction item. This field is only returned for auction listings. | [optional] 
**buying_options** | **string[]** | The value returned in this field indicates the buying option for the item. FIXED_PRICE is returned for basic fixed-price listings, AUCTION is returned for auction listings without Buy It Now feature, and both FIXED_PRICE and AUCTION are returned for auction listings enabled with the Buy It Now feature. | [optional] 
**categories** | [**\Swagger\Client\Model\Category[]**](Category.md) | This container consists of the primary listing category Id of the item (as well as secondary listing category if item was listed in two categories). | [optional] 
**condition** | **string** | The condition of the item, such as New or Used. | [optional] 
**condition_id** | **string** | The identifier of the condition. For example, 1000 is the identifier for NEW. | [optional] 
**current_bid_price** | [**\Swagger\Client\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional] 
**distance_from_pickup_location** | [**\Swagger\Client\Model\TargetLocation**](TargetLocation.md) |  | [optional] 
**energy_efficiency_class** | **string** | The value returned in this field indicates the energy efficiency rating of the item. Energy efficiency ratings apply to products listed by commercial vendors in electronics categories only. Currently, this field is only applicable for the Germany site, and this field is only returned if the seller specified the energy efficiency rating through item specifics at listing time. Rating values include A+++, A++, A+, A, B, C, D, E, F, and G. | [optional] 
**epid** | **string** | An EPID is the eBay product identifier of a product from the eBay product catalog. This indicates the product in which the item belongs. | [optional] 
**image** | [**\Swagger\Client\Model\Image**](Image.md) |  | [optional] 
**item_affiliate_web_url** | **string** | The URL to the View Item page of the item, which includes the affiliate tracking Id. This field is only returned if the seller enables affiliate tracking for the listing by including the X-EBAY-C-ENDUSERCTX request header in the call. | [optional] 
**item_group_href** | **string** | The HATEOAS reference of the parent page of the item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. Note: This field is returned only for item groups. | [optional] 
**item_group_type** | **string** | Indicates the item group type. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. Currently only SELLER_DEFINED_VARIATIONS is supported and indicates this is an item group created by the seller. Note: This field is returned only for item groups. | [optional] 
**item_href** | **string** | The URI of the item. This field is always populated. | [optional] 
**item_id** | **string** | The unique identifier of the item. For example: v1|150006693022|450002439078 | [optional] 
**item_location** | [**\Swagger\Client\Model\ItemLocationImpl**](ItemLocationImpl.md) |  | [optional] 
**item_web_url** | **string** | The URL to the View Item page of the item. | [optional] 
**marketing_price** | [**\Swagger\Client\Model\MarketingPrice**](MarketingPrice.md) |  | [optional] 
**pickup_options** | [**\Swagger\Client\Model\PickupOptionSummary[]**](PickupOptionSummary.md) | This container lists the local pickup options available to the buyer. This container is only returned if the user is searching for local pickup items and set the local pickup filters in the call request. | [optional] 
**price** | [**\Swagger\Client\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional] 
**seller** | [**\Swagger\Client\Model\Seller0**](Seller0.md) |  | [optional] 
**shipping_options** | [**\Swagger\Client\Model\ShippingOptionSummary[]**](ShippingOptionSummary.md) | This container returns the shipping options available to ship the item. | [optional] 
**thumbnail_images** | [**\Swagger\Client\Model\Image[]**](Image.md) | This container is an array of thumbnail images for the item. For each image, the URL to the image is given. | [optional] 
**title** | **string** | The seller-created title of the item. The maximum length is 80 characters. | [optional] 
**unit_price** | [**\Swagger\Client\Model\ConvertedAmount**](ConvertedAmount.md) |  | [optional] 
**unit_pricing_measure** | **string** | The designation, such as size, weight, volume, count, etc., that was used to specify the quantity of the item. This helps buyers compare prices. For example, the following tells the buyer that the item is 7.99 per 100 grams. &amp;quot;unitPricingMeasure&amp;quot;: &amp;quot;100g&amp;quot;, &amp;quot;unitPrice&amp;quot;: { &amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot;: &amp;quot;7.99&amp;quot;, &amp;nbsp;&amp;nbsp;&amp;quot;currency&amp;quot;: &amp;quot;GBP&amp;quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


