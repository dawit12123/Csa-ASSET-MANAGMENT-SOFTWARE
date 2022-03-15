<?php
$dalTabledepartments = array();
$dalTabledepartments["department_id"] = array("type"=>3,"varname"=>"department_id", "name" => "department_id");
$dalTabledepartments["department_name"] = array("type"=>200,"varname"=>"department_name", "name" => "department_name");
$dalTabledepartments["branch"] = array("type"=>200,"varname"=>"branch", "name" => "branch");
$dalTabledepartments["manager_id"] = array("type"=>3,"varname"=>"manager_id", "name" => "manager_id");
	$dalTabledepartments["department_id"]["key"]=true;

$dal_info["csaasset_at_localhost__departments"] = &$dalTabledepartments;
?>