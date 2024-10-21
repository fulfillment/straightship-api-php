# InputOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packages** | [**Fulfillment\StraightShip\Client\Model\InputPackage[]**](InputPackage.md) | Packages | [optional] 
**transaction_number** | **string** | Mandatory unique shipment number | [optional] 
**client_code** | **string** | Client code for order | [optional] 
**customer_order** | **string** | Optional customer reference 1 | [optional] 
**customer_po** | **string** | Optional customer reference 2 | [optional] 
**customer_number** | **string** | Optional customer reference 3 | [optional] 
**batch_number** | **string** | Optional batch number. If batch already exists, order is added to existing batch | [optional] 
**order_import_source** | **string** | Optional import source | [optional] 
**manifest_id** | **string** | A manifest ID associated with an order. This is typically used for end-of-day  processing, defining a truckload (one manifest per truck), or for each pickup (one manifest per pickup).                Note:  - This field is optional. The system will automatically assign a value if left empty.  - Avoid populating this field with an order number. Doing so can lead to a one-to-one     mapping of a manifest to an order, which can cause performance issues.  - This ID is intended for grouping multiple orders into batches (e.g., an end-of-day batch,     a truckload, or a pickup), not for individual order tracking. | [optional] 
**package_description** | **string** |  | [optional] 
**terms** | **string** | Optional order terms. This is free-form reference field for packing slips only. Do not use it to specify freight payment terms. To specify who pays for label, use field named &#x60;FreightPaymentTerms&#x60; | [optional] 
**instruction** | **string** | Optional order delivery instructions | [optional] 
**currency_code** | **string** | Default order currency code for all input price fields (such as unit price, COD, insurance. etc.) | [optional] 
**ship_from_address** | [**Fulfillment\StraightShip\Client\Model\Address**](Address.md) |  | [optional] 
**label_from_address** | [**Fulfillment\StraightShip\Client\Model\Address**](Address.md) |  | [optional] 
**ship_to_address** | [**Fulfillment\StraightShip\Client\Model\ShipToAddress**](ShipToAddress.md) |  | [optional] 
**bill_to_address** | [**Fulfillment\StraightShip\Client\Model\Address**](Address.md) |  | [optional] 
**exporter_address** | [**Fulfillment\StraightShip\Client\Model\Address**](Address.md) |  | [optional] 
**importer_address** | [**Fulfillment\StraightShip\Client\Model\Address**](Address.md) |  | [optional] 
**routing** | [**Fulfillment\StraightShip\Client\Model\Routing**](Routing.md) |  | [optional] 
**customs** | [**Fulfillment\StraightShip\Client\Model\Customs**](Customs.md) |  | [optional] 
**shipping_options** | [**Fulfillment\StraightShip\Client\Model\ShippingOptions**](ShippingOptions.md) |  | [optional] 
**ltl_options** | [**Fulfillment\StraightShip\Client\Model\LTLOptions**](LTLOptions.md) |  | [optional] 
**insurance** | [**Fulfillment\StraightShip\Client\Model\Insurance**](Insurance.md) |  | [optional] 
**dangerous_goods_header** | [**Fulfillment\StraightShip\Client\Model\DangerousGoodsHeader**](DangerousGoodsHeader.md) |  | [optional] 
**custom_fields** | [**Fulfillment\StraightShip\Client\Model\CustomField[]**](CustomField.md) | Custom fields to pass with order | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

