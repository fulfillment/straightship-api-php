# Insurance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**declared_value** | **double** | Declared value per order  Limited support by carrier, see also &#x60;Insurance&#x60; field | [optional] 
**declared_value_type** | **string** | Declared value type (UPS only)  01 - EVS (shipper declared value)  02 - DVS (declared value) | [optional] 
**declared_value_currency_code** | **string** | Declared value currency code (DHL Express only)  If not set, &#x60;Currency&#x60; from order is used, and if &#x60;Currency&#x60; not set then client config value is used | [optional] 
**insurance** | **bool** | Is insurance required.  If set to true, value to insure pulled from &#x60;DeclaredValue&#x60; on shipment or package level (depending on carrier) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

