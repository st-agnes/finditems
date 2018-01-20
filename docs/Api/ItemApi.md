# Swagger\Client\ItemApi

All URIs are relative to *https://api.ebay.com/buy/browse/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getItem**](ItemApi.md#getItem) | **GET** /item/{item_id} | 
[**getItemByLegacyId**](ItemApi.md#getItemByLegacyId) | **GET** /item/get_item_by_legacy_id | 
[**getItemsByItemGroup**](ItemApi.md#getItemsByItemGroup) | **GET** /item/get_items_by_item_group | 


# **getItem**
> \Swagger\Client\Model\Item getItem($item_id, $fieldgroups)



This call retrieves the details of a specific item, such as description, price, category, all item aspects, condition, return policies, seller feedback and score, shipping options, shipping costs, estimated delivery, and other information the buyer needs to make a purchasing decision. The Buy APIs are designed to let you create an eBay shopping experience in your app or website. This means you will need to know when something, such as the availability, quantity, etc., has changed in any eBay item you are offering. You can do this easily by setting the fieldgroups URI parameter. This parameter lets you control what is returned in the response. Setting fieldgroups to COMPACT reduces the response to only the five fields that you need in order to check if any item detail has changed. Setting fieldgroups to PRODUCT, adds additional fields to the default response that return information about the product of the item. You can use either COMPACT or PRODUCT but not both. For more information, see fieldgroups. Request headers You will want to use the X-EBAY-C-ENDUSERCTX request header with this call. If you are an eBay Network Partner you must use affiliateCampaignId=ePNCampaignId,affiliateReferenceId=referenceId in the header in order to be paid for selling eBay items on your site and it is strongly recommended you use contextualLocation to improved the estimated delivery window information. For details see, Request headers in the Buy APIs Overview. Restrictions For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = "item_id_example"; // string | The eBay identifier of an item. This Id is returned by the Browse and Feed API calls. The Id must be in RESTful item Id format. For example: v1|262446562346|561248611424 or v1|112330214619|0. For more information about item Id for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview.
$fieldgroups = "fieldgroups_example"; // string | This parameter lets you control what is returned in the response. If you do not set this field, the call returns all the details of the item. Valid values: PRODUCT - This adds the additionalImages, additionalProductIdentities, aspectGroups, description, gtins, image, and title product fields to the response, which describe the product associated with the item. See Product for more information about these fields. COMPACT - This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item's top-rated plus status has changed for items you have stored. itemId - The identifier of the item. sellerItemRevision - An identifier generated/incremented when a seller revises the item. There are two types of item revisions; seller changes, such as changing the title, and eBay system changes, such as changing the quantity when an item is purchased. This Id is changed only when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. topRatedBuyingExperience - A boolean value indicating if this item is a top-rated plus item. A change in the item's top rated plus standing is not tracked by the revision Id. See topRatedBuyingExperience for more information. price - This is tracked by the revision Id but is returned here to enable you to quickly verify the price of the item. estimatedAvailabilities - Returns the item availability information, which is based on the item's quantity. Changes in quantity are not tracked by the revision Id. For Example To check if a stored item's information is current, do following. Pass in the item Id and set fieldgroups to COMPACT. item/v1|46566502948|0?fieldgroups=COMPACT Do one of the following: If the sellerItemRevision field is returned and you haven't stored a revision number for this item, record the number and pass in the item Id in the getItem call to get the latest information. If the revision number is different from the value you have stored, update the value and pass in the item Id in the getItem call to get the latest information. If the sellerItemRevision field is not returned or has not changed, where needed, update the item information with the information returned in the response. Maximum value: 1 If more than one values is specified, the first value will be used.

try {
    $result = $apiInstance->getItem($item_id, $fieldgroups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**| The eBay identifier of an item. This Id is returned by the Browse and Feed API calls. The Id must be in RESTful item Id format. For example: v1|262446562346|561248611424 or v1|112330214619|0. For more information about item Id for RESTful APIs, see the Legacy API compatibility section of the Buy APIs Overview. |
 **fieldgroups** | **string**| This parameter lets you control what is returned in the response. If you do not set this field, the call returns all the details of the item. Valid values: PRODUCT - This adds the additionalImages, additionalProductIdentities, aspectGroups, description, gtins, image, and title product fields to the response, which describe the product associated with the item. See Product for more information about these fields. COMPACT - This returns only the following fields, which let you quickly check if the availability or price of the item has changed, if the item has been revised by the seller, or if an item&#39;s top-rated plus status has changed for items you have stored. itemId - The identifier of the item. sellerItemRevision - An identifier generated/incremented when a seller revises the item. There are two types of item revisions; seller changes, such as changing the title, and eBay system changes, such as changing the quantity when an item is purchased. This Id is changed only when the seller makes a change to the item. This means you cannot use this value to determine if the quantity has changed. topRatedBuyingExperience - A boolean value indicating if this item is a top-rated plus item. A change in the item&#39;s top rated plus standing is not tracked by the revision Id. See topRatedBuyingExperience for more information. price - This is tracked by the revision Id but is returned here to enable you to quickly verify the price of the item. estimatedAvailabilities - Returns the item availability information, which is based on the item&#39;s quantity. Changes in quantity are not tracked by the revision Id. For Example To check if a stored item&#39;s information is current, do following. Pass in the item Id and set fieldgroups to COMPACT. item/v1|46566502948|0?fieldgroups&#x3D;COMPACT Do one of the following: If the sellerItemRevision field is returned and you haven&#39;t stored a revision number for this item, record the number and pass in the item Id in the getItem call to get the latest information. If the revision number is different from the value you have stored, update the value and pass in the item Id in the getItem call to get the latest information. If the sellerItemRevision field is not returned or has not changed, where needed, update the item information with the information returned in the response. Maximum value: 1 If more than one values is specified, the first value will be used. | [optional]

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemByLegacyId**
> \Swagger\Client\Model\Item getItemByLegacyId($legacy_item_id, $fieldgroups, $legacy_variation_id, $legacy_variation_sku)



This call is a bridge between the eBay legacy APIs, such as Trading, Shopping, and Finding and the eBay Buy APIs. There are differences between how legacy APIs and RESTful APIs return the identifier of an &quot;item&quot;. There is also a difference in what the item Id represents and in the format of the item Id value returned. This call lets you use the legacy item Ids retrieve the details of a specific item, such as description, price, and other information the buyer needs to make a purchasing decision. It also returns the RESTful item Id, which you can use with all the Buy API calls. For more information about how to use legacy Ids with the Buy APIs, see Legacy API compatibility in the Buying Integration guide. This call returns the item details and requires you to pass in either the item Id of a non-variation item or the item Ids of both the parent and child of a item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. When an item group is created, one of the item variations, such as the red shirt size L, is chosen as the &quot;parent&quot;. All the other items in the group are the children, such as the blue shirt size L, red shirt size M, etc. The fieldgroups URI parameter lets you control what is returned in the response. Setting fieldgroups to PRODUCT, adds additional fields to the default response that return information about the product of the item. For more information, see fieldgroups. Request headers You will want to use the X-EBAY-C-ENDUSERCTX request header with this call. If you are an eBay Network Partner you must use affiliateCampaignId=ePNCampaignId,affiliateReferenceId=referenceId in the header in order to be paid for selling eBay items on your site and it is strongly recommended you use contextualLocation to improved the estimated delivery window information. For details see, Request headers in the Buy APIs Overview. Restrictions For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legacy_item_id = "legacy_item_id_example"; // string | Specifies either: The legacy item Id of an item that is not part of a group. The legacy item Id of a group, which is the Id of the &quot;parent&quot; of the group of items. Note: If you pass in a group Id, you must also use the legacy_variation_id field and pass in the legacy Id of the specific item variation (child Id). Legacy Ids are returned by eBay traditional APIs, such as the Trading API or Finding API. The following is an example of using the value of the ItemID field for a specific item from Trading to get the RESTful itemId value. &nbsp;&nbsp;&nbsp; browse/v1/item/get_item_by_legacy_id?legacy_item_id=110039490209 Maximum: 1
$fieldgroups = "fieldgroups_example"; // string | This field lets you control what is returned in the response. If you do not set this field, the call returns all the details of the item. Note: In this call, the only value supported is PRODUCT. Valid values: PRODUCT - This adds the additionalImages, additionalProductIdentities, aspectGroups, description, gtins, image, and title fields to the response, which describe the item's product. See Product for more information about these fields.
$legacy_variation_id = "legacy_variation_id_example"; // string | Specifies the legacy item Id of a specific item in an item group, such as the red shirt size L. Legacy Ids are returned by eBay traditional APIs, such as the Trading API or Finding API. Maximum: 1 Requirement: You must always pass in the legacy_item_id with the legacy_variation_id
$legacy_variation_sku = "legacy_variation_sku_example"; // string | Specifics the legacy SKU of the item. SKU are item Ids created by the seller. Legacy SKUs are returned by eBay traditional APIs, such as the Trading API or Finding API. The following is an example of using the value of the ItemID and SKU fields, which were returned by the Trading API, to get the RESTful itemId value. &nbsp;&nbsp;&nbsp; browse/v1/item/get_item_by_legacy_id?legacy_item_id=110039490209&amp;legacy_variation_sku=V-00031-WHM Maximum: 1 Requirement: You must always pass in the legacy_item_id with the legacy_variation_sku

try {
    $result = $apiInstance->getItemByLegacyId($legacy_item_id, $fieldgroups, $legacy_variation_id, $legacy_variation_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemByLegacyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **legacy_item_id** | **string**| Specifies either: The legacy item Id of an item that is not part of a group. The legacy item Id of a group, which is the Id of the &amp;quot;parent&amp;quot; of the group of items. Note: If you pass in a group Id, you must also use the legacy_variation_id field and pass in the legacy Id of the specific item variation (child Id). Legacy Ids are returned by eBay traditional APIs, such as the Trading API or Finding API. The following is an example of using the value of the ItemID field for a specific item from Trading to get the RESTful itemId value. &amp;nbsp;&amp;nbsp;&amp;nbsp; browse/v1/item/get_item_by_legacy_id?legacy_item_id&#x3D;110039490209 Maximum: 1 |
 **fieldgroups** | **string**| This field lets you control what is returned in the response. If you do not set this field, the call returns all the details of the item. Note: In this call, the only value supported is PRODUCT. Valid values: PRODUCT - This adds the additionalImages, additionalProductIdentities, aspectGroups, description, gtins, image, and title fields to the response, which describe the item&#39;s product. See Product for more information about these fields. | [optional]
 **legacy_variation_id** | **string**| Specifies the legacy item Id of a specific item in an item group, such as the red shirt size L. Legacy Ids are returned by eBay traditional APIs, such as the Trading API or Finding API. Maximum: 1 Requirement: You must always pass in the legacy_item_id with the legacy_variation_id | [optional]
 **legacy_variation_sku** | **string**| Specifics the legacy SKU of the item. SKU are item Ids created by the seller. Legacy SKUs are returned by eBay traditional APIs, such as the Trading API or Finding API. The following is an example of using the value of the ItemID and SKU fields, which were returned by the Trading API, to get the RESTful itemId value. &amp;nbsp;&amp;nbsp;&amp;nbsp; browse/v1/item/get_item_by_legacy_id?legacy_item_id&#x3D;110039490209&amp;amp;legacy_variation_sku&#x3D;V-00031-WHM Maximum: 1 Requirement: You must always pass in the legacy_item_id with the legacy_variation_sku | [optional]

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemsByItemGroup**
> \Swagger\Client\Model\Items getItemsByItemGroup($item_group_id)



This call retrieves the details of the individual items in an item group. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. You pass in the item group Id as a URI parameter. You use this call to show the item details of items with multiple aspects, such as color, size, storage capacity, etc. This call returns two main containers; items and commonDescriptions. The items container has an array of containers with the details of each item in the group. The commonDescriptions container has an array of containers for a description and the item Ids of all the items that have this exact description. Because items within an item group often have the same description, this decreases the size of the response. Request headers You will want to use the X-EBAY-C-ENDUSERCTX request header with this call. If you are an eBay Network Partner you must use affiliateCampaignId=ePNCampaignId,affiliateReferenceId=referenceId in the header in order to be paid for selling eBay items on your site and it is strongly recommended you use contextualLocation to improved the estimated delivery window information. For details see, Request headers in the Buy APIs Overview. Restrictions For a list of supported sites and other restrictions, see API Restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_group_id = "item_group_id_example"; // string | Identifier of the item group to return. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. This Id is returned in the itemGroupHref field of the search and getItem calls. For Example: https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id=351825690866

try {
    $result = $apiInstance->getItemsByItemGroup($item_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemsByItemGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_group_id** | **string**| Identifier of the item group to return. An item group is an item that has various aspect differences, such as color, size, storage capacity, etc. This Id is returned in the itemGroupHref field of the search and getItem calls. For Example: https://api.ebay.com/buy/browse/v1/item/get_items_by_item_group?item_group_id&#x3D;351825690866 |

### Return type

[**\Swagger\Client\Model\Items**](../Model/Items.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

