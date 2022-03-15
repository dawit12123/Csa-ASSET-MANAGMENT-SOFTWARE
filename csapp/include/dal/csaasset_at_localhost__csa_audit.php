<?php
$dalTablecsa_audit = array();
$dalTablecsa_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecsa_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTablecsa_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip");
$dalTablecsa_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user");
$dalTablecsa_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTablecsa_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action");
$dalTablecsa_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
	$dalTablecsa_audit["id"]["key"]=true;

$dal_info["csaasset_at_localhost__csa_audit"] = &$dalTablecsa_audit;
?>