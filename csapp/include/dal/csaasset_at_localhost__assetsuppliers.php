<?php
$dalTableassetsuppliers = array();
$dalTableassetsuppliers["supplier_id"] = array("type"=>3,"varname"=>"supplier_id", "name" => "supplier_id");
$dalTableassetsuppliers["supplier_name"] = array("type"=>200,"varname"=>"supplier_name", "name" => "supplier_name");
$dalTableassetsuppliers["supplier_email"] = array("type"=>200,"varname"=>"supplier_email", "name" => "supplier_email");
$dalTableassetsuppliers["supplier_phone"] = array("type"=>3,"varname"=>"supplier_phone", "name" => "supplier_phone");
$dalTableassetsuppliers["webste"] = array("type"=>200,"varname"=>"webste", "name" => "webste");
$dalTableassetsuppliers["country"] = array("type"=>200,"varname"=>"country", "name" => "country");
	$dalTableassetsuppliers["supplier_id"]["key"]=true;

$dal_info["csaasset_at_localhost__assetsuppliers"] = &$dalTableassetsuppliers;
?>