<?php
$dalTablejobs = array();
$dalTablejobs["job_id"] = array("type"=>3,"varname"=>"job_id", "name" => "job_id");
$dalTablejobs["job_title"] = array("type"=>200,"varname"=>"job_title", "name" => "job_title");
$dalTablejobs["min_salary"] = array("type"=>3,"varname"=>"min_salary", "name" => "min_salary");
$dalTablejobs["max_salary"] = array("type"=>3,"varname"=>"max_salary", "name" => "max_salary");
	$dalTablejobs["job_id"]["key"]=true;

$dal_info["csaasset_at_localhost__jobs"] = &$dalTablejobs;
?>