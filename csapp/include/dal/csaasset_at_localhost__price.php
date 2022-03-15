<?php
$dalTableprice = array();
$dalTableprice["price_id"] = array("type"=>3,"varname"=>"price_id", "name" => "price_id");
$dalTableprice["item_id"] = array("type"=>3,"varname"=>"item_id", "name" => "item_id");
$dalTableprice["sourceinfo_id"] = array("type"=>3,"varname"=>"sourceinfo_id", "name" => "sourceinfo_id");
$dalTableprice["pricedate"] = array("type"=>7,"varname"=>"pricedate", "name" => "pricedate");
$dalTableprice["price"] = array("type"=>3,"varname"=>"price", "name" => "price");
	$dalTableprice["price_id"]["key"]=true;

$dal_info["csaasset_at_localhost__price"] = &$dalTableprice;
?>