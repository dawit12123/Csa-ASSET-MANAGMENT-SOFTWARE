<?php
$dalTablerequest_info = array();
$dalTablerequest_info["rq_id"] = array("type"=>3,"varname"=>"rq_id", "name" => "rq_id");
$dalTablerequest_info["employee_id"] = array("type"=>3,"varname"=>"employee_id", "name" => "employee_id");
$dalTablerequest_info["asset_id"] = array("type"=>3,"varname"=>"asset_id", "name" => "asset_id");
$dalTablerequest_info["model"] = array("type"=>200,"varname"=>"model", "name" => "model");
$dalTablerequest_info["quantity"] = array("type"=>3,"varname"=>"quantity", "name" => "quantity");
$dalTablerequest_info["approve_status_from_dept_manager"] = array("type"=>200,"varname"=>"approve_status_from_dept_manager", "name" => "approve_status_from_dept_manager");
$dalTablerequest_info["approve_status_from_asset_dept_manager"] = array("type"=>200,"varname"=>"approve_status_from_asset_dept_manager", "name" => "approve_status_from_asset_dept_manager");
$dalTablerequest_info["date"] = array("type"=>135,"varname"=>"date", "name" => "date");
$dalTablerequest_info["department"] = array("type"=>3,"varname"=>"department", "name" => "department");
$dalTablerequest_info["seen"] = array("type"=>200,"varname"=>"seen", "name" => "seen");
$dalTablerequest_info["taked"] = array("type"=>200,"varname"=>"taked", "name" => "taked");
	$dalTablerequest_info["rq_id"]["key"]=true;

$dal_info["csaasset_at_localhost__request_info"] = &$dalTablerequest_info;
?>