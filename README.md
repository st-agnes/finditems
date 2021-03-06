# SwaggerClient-php
The Browse API lets shoppers search for specific items by keyword, category, product, or item aspects and retrieve the details of an item.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1_beta.10.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.ebay.com/buy/browse/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /item/{item_id} | 
*ItemApi* | [**getItemByLegacyId**](docs/Api/ItemApi.md#getitembylegacyid) | **GET** /item/get_item_by_legacy_id | 
*ItemApi* | [**getItemsByItemGroup**](docs/Api/ItemApi.md#getitemsbyitemgroup) | **GET** /item/get_items_by_item_group | 
*ItemSummaryApi* | [**search**](docs/Api/ItemSummaryApi.md#search) | **GET** /item_summary/search | 


## Documentation For Models

 - [AdditionalProductIdentity](docs/Model/AdditionalProductIdentity.md)
 - [Address](docs/Model/Address.md)
 - [Aspect](docs/Model/Aspect.md)
 - [AspectDistribution](docs/Model/AspectDistribution.md)
 - [AspectGroup](docs/Model/AspectGroup.md)
 - [AspectValueDistribution](docs/Model/AspectValueDistribution.md)
 - [BuyingOptionDistribution](docs/Model/BuyingOptionDistribution.md)
 - [Category](docs/Model/Category.md)
 - [CategoryDistribution](docs/Model/CategoryDistribution.md)
 - [CommonDescriptions](docs/Model/CommonDescriptions.md)
 - [ConditionDistribution](docs/Model/ConditionDistribution.md)
 - [ConvertedAmount](docs/Model/ConvertedAmount.md)
 - [Error](docs/Model/Error.md)
 - [ErrorParameter](docs/Model/ErrorParameter.md)
 - [EstimatedAvailability](docs/Model/EstimatedAvailability.md)
 - [Image](docs/Model/Image.md)
 - [Item](docs/Model/Item.md)
 - [ItemGroupSummary](docs/Model/ItemGroupSummary.md)
 - [ItemLocationImpl](docs/Model/ItemLocationImpl.md)
 - [ItemReturnTerms](docs/Model/ItemReturnTerms.md)
 - [ItemSummary](docs/Model/ItemSummary.md)
 - [Items](docs/Model/Items.md)
 - [LegalAddress](docs/Model/LegalAddress.md)
 - [MarketingPrice](docs/Model/MarketingPrice.md)
 - [PickupOptionSummary](docs/Model/PickupOptionSummary.md)
 - [Product](docs/Model/Product.md)
 - [ProductIdentity](docs/Model/ProductIdentity.md)
 - [RatingHistogram](docs/Model/RatingHistogram.md)
 - [Refinement](docs/Model/Refinement.md)
 - [Region](docs/Model/Region.md)
 - [ReviewRating](docs/Model/ReviewRating.md)
 - [SearchPagedCollection](docs/Model/SearchPagedCollection.md)
 - [Seller](docs/Model/Seller.md)
 - [Seller0](docs/Model/Seller0.md)
 - [SellerLegalInfo](docs/Model/SellerLegalInfo.md)
 - [ShipToLocation](docs/Model/ShipToLocation.md)
 - [ShipToLocations](docs/Model/ShipToLocations.md)
 - [ShippingOption](docs/Model/ShippingOption.md)
 - [ShippingOptionSummary](docs/Model/ShippingOptionSummary.md)
 - [TargetLocation](docs/Model/TargetLocation.md)
 - [TaxJurisdiction](docs/Model/TaxJurisdiction.md)
 - [Taxes](docs/Model/Taxes.md)
 - [TimeDuration](docs/Model/TimeDuration.md)
 - [TypedNameValue](docs/Model/TypedNameValue.md)
 - [VatDetail](docs/Model/VatDetail.md)


## Documentation For Authorization


## Client Credentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **https://api.ebay.com/oauth/api_scope**: View public data from eBay


## Author




