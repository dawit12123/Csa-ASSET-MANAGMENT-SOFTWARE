<?php
$dalTableasset = array();
$dalTableasset["asset_id"] = array("type"=>3,"varname"=>"asset_id", "name" => "asset_id");
$dalTableasset["asset_name"] = array("type"=>200,"varname"=>"asset_name", "name" => "asset_name");
$dalTableasset["asset_model"] = array("type"=>200,"varname"=>"asset_model", "name" => "asset_model");
$dalTableasset["asset_serial"] = array("type"=>200,"varname"=>"asset_serial", "name" => "asset_serial");
$dalTableasset["manufactured_date"] = array("type"=>7,"varname"=>"manufactured_date", "name" => "manufactured_date");
$dalTableasset["manufacturer"] = array("type"=>200,"varname"=>"manufacturer", "name" => "manufacturer");
$dalTableasset["category_id"] = array("type"=>3,"varname"=>"category_id", "name" => "category_id");
$dalTableasset["suplier_id"] = array("type"=>3,"varname"=>"suplier_id", "name" => "suplier_id");
$dalTableasset["status_id"] = array("type"=>3,"varname"=>"status_id", "name" => "status_id");
$dalTableasset["registration_date"] = array("type"=>7,"varname"=>"registration_date", "name" => "registration_date");
$dalTableasset["purchased_date"] = array("type"=>7,"varname"=>"purchased_date", "name" => "purchased_date");
$dalTableasset["image"] = array("type"=>200,"varname"=>"image", "name" => "image");
$dalTableasset["taken"] = array("type"=>200,"varname"=>"taken", "name" => "taken");
	$dalTableasset["asset_id"]["key"]=true;

$dal_info["csaasset_at_localhost__asset"] = &$dalTableasset;
?>