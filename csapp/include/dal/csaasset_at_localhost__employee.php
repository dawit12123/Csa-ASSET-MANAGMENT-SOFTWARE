<?php
$dalTableemployee = array();
$dalTableemployee["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableemployee["firstname"] = array("type"=>200,"varname"=>"firstname", "name" => "firstname");
$dalTableemployee["lastname"] = array("type"=>200,"varname"=>"lastname", "name" => "lastname");
$dalTableemployee["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableemployee["phone"] = array("type"=>3,"varname"=>"phone", "name" => "phone");
$dalTableemployee["hire_date"] = array("type"=>7,"varname"=>"hire_date", "name" => "hire_date");
$dalTableemployee["salary"] = array("type"=>3,"varname"=>"salary", "name" => "salary");
$dalTableemployee["house_no"] = array("type"=>3,"varname"=>"house_no", "name" => "house_no");
$dalTableemployee["status"] = array("type"=>3,"varname"=>"status", "name" => "status");
$dalTableemployee["job_id"] = array("type"=>3,"varname"=>"job_id", "name" => "job_id");
$dalTableemployee["manager_id"] = array("type"=>3,"varname"=>"manager_id", "name" => "manager_id");
$dalTableemployee["workunit_id"] = array("type"=>3,"varname"=>"workunit_id", "name" => "workunit_id");
$dalTableemployee["photo"] = array("type"=>200,"varname"=>"photo", "name" => "photo");
$dalTableemployee["department"] = array("type"=>200,"varname"=>"department", "name" => "department");
	$dalTableemployee["id"]["key"]=true;

$dal_info["csaasset_at_localhost__employee"] = &$dalTableemployee;
?>