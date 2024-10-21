# ShippingOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signature_required** | **bool** | Signature required | [optional] 
**signature_adult** | **bool** | Is adult signature required  Limited support by carriers | [optional] 
**signature_indirect** | **bool** | Indirect signature | [optional] 
**saturday_pickup** | **bool** | Is saturday pickup required  Limited support by carriers | [optional] 
**saturday_delivery** | **bool** | Is saturday delivery required  Limited support by carriers | [optional] 
**proof_of_age18** | **bool** | Is proof of age 18 required (only _Canada Post_) | [optional] 
**proof_of_age19** | **bool** | Is proof of age 19 required? (Applicable only to Canada Post) | [optional] 
**hold_at_location** | **bool** | Should carrier hold at post office location  Limited support by carriers | [optional] 
**appointment_delivery** | **bool** | Is delivery appointment required  Limited support by carriers | [optional] 
**dry_ice** | **bool** | Is dry ice shipment  Limited support by carriers | [optional] 
**special_handling** | **bool** | Is special handling needed  Limited support by carriers | [optional] 
**post_office_id** | **string** | Post office id for hold for pickup option | [optional] 
**hold_for_pickup_indicator** | **bool** | Keep shipment at post office for pickup (if suppored by carrier) | [optional] 
**dangerous_goods** | **bool** | Dangerous goods flag | [optional] 
**explosive** | **bool** | Explosive flag | [optional] 
**alcohol** | **bool** | Alcohol flag | [optional] 
**is_no_rts** | **bool** | IsNoRTS flag | [optional] 
**perishable** | **bool** | Perishable flag | [optional] 
**keep_frozen** | **bool** | Keep frozen flag | [optional] 
**two_persons** | **bool** | Two persons flag | [optional] 
**controlled_substance** | **bool** | Controlled substance flag | [optional] 
**delivery_options** | **string** | Post office id for hold for pickup option | [optional] 
**origin_signature_not_required** | **bool** | OSNR (origin signature not required) (Purolator only) | [optional] 
**lift_gate_for_pick_up_indicator** | **bool** | Lift gate for pickup, limited support for LTL carriers | [optional] 
**lift_gate_for_delivery_indicator** | **bool** | Lift gate for delivery, limited support for LTL carriers | [optional] 
**request_pickup** | **bool** | Is pickup required (option is used only if carrier plugin has pickup request implemented  and pickup mode on client settings set to &#x27;On order (manual)&#x27; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

