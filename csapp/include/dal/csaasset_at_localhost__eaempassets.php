<?php
$dalTableeaempassets = array();
$dalTableeaempassets["eaempassets"] = array("type"=>3,"varname"=>"eaempassets", "name" => "eaempassets");
$dalTableeaempassets["asset_id"] = array("type"=>3,"varname"=>"asset_id", "name" => "asset_id");
$dalTableeaempassets["employee_id"] = array("type"=>3,"varname"=>"employee_id", "name" => "employee_id");
$dalTableeaempassets["ea_id"] = array("type"=>3,"varname"=>"ea_id", "name" => "ea_id");
$dalTableeaempassets["issued_date"] = array("type"=>7,"varname"=>"issued_date", "name" => "issued_date");
$dalTableeaempassets["returned_date"] = array("type"=>7,"varname"=>"returned_date", "name" => "returned_date");
$dalTableeaempassets["transfer_date"] = array("type"=>7,"varname"=>"transfer_date", "name" => "transfer_date");
$dalTableeaempassets["transaction"] = array("type"=>200,"varname"=>"transaction", "name" => "transaction");
	$dalTableeaempassets["eaempassets"]["key"]=true;

$dal_info["csaasset_at_localhost__eaempassets"] = &$dalTableeaempassets;
?>