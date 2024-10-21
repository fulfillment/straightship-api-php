# DangerousGoodsDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dangerous_goods_dhl** | [**Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsDhl[]**](DangerousGoodsDetailsDhl.md) | List of dangerous goods used with DHL carrier | [optional] 
**dangerous_goods_basic** | [**Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsBasic[]**](DangerousGoodsDetailsBasic.md) | List of dangerous goods used for generating basic DG form | [optional] 
**container_type** | **string** | Container type  The type of package used to contain the regulated good. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode &#x3D; LQ or FR.  Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX | [optional] 
**radioactive_container_class** | **string** | Container class for radioactive materials  Leave null if shipping non-radioactive | [optional] 
**dangerous_goods_fedex** | [**Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsFedex[]**](DangerousGoodsDetailsFedex.md) | List of dangerous goods used with Fedex carrier | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

