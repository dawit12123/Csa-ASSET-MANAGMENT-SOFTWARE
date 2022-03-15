<?php
$dalTablejobhistory = array();
$dalTablejobhistory["start_date"] = array("type"=>7,"varname"=>"start_date", "name" => "start_date");
$dalTablejobhistory["end_date"] = array("type"=>7,"varname"=>"end_date", "name" => "end_date");
$dalTablejobhistory["job_id"] = array("type"=>3,"varname"=>"job_id", "name" => "job_id");
$dalTablejobhistory["workunit_id"] = array("type"=>3,"varname"=>"workunit_id", "name" => "workunit_id");
$dalTablejobhistory["jobh_id"] = array("type"=>3,"varname"=>"jobh_id", "name" => "jobh_id");
$dalTablejobhistory["empid"] = array("type"=>3,"varname"=>"empid", "name" => "empid");
	$dalTablejobhistory["jobh_id"]["key"]=true;

$dal_info["csaasset_at_localhost__jobhistory"] = &$dalTablejobhistory;
?>