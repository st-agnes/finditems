# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\Swagger\Client\Model\Image[]**](Image.md) | An array of containers with the URLs for the product images that are in addition to the primary image. | [optional] 
**additional_product_identities** | [**\Swagger\Client\Model\AdditionalProductIdentity[]**](AdditionalProductIdentity.md) | A product can have more than one identifier value for a product type, such as UPC, EAN, etc. For example, the same product UPC can have an identifier that is 12, 13, or 14 digits. This container returns an array of all the product identifiers (type/value pairs) associated with the product. These are in addition to the identifiers returned in the mpn and gitn fields. | [optional] 
**aspect_groups** | [**\Swagger\Client\Model\AspectGroup[]**](AspectGroup.md) | An array of containers for the product aspects. Each group contains the aspect group name and the aspect name/value pairs. | [optional] 
**brand** | **string** | The brand associated with product. To identify the product, this is always used along with MPN (manufacturer part number). | [optional] 
**description** | **string** | The rich description of an eBay product, which might contain HTML. | [optional] 
**gtins** | **string[]** | An array of all the possible GTINs values associated with the product. A GTIN is a unique Global Trade Item number of the item as defined by http://www.gtin.info. This can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN (International Standard Book Number) value. | [optional] 
**image** | [**\Swagger\Client\Model\Image**](Image.md) |  | [optional] 
**mpns** | **string[]** | An array of all possible MPN values associated with the product. A MPNs is manufacturer part number of the product. To identify the product, this is always used along with brand. | [optional] 
**title** | **string** | The title of the product. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


