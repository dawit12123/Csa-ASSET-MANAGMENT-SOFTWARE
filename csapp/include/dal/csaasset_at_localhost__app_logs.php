<?php
$dalTableapp_logs = array();
$dalTableapp_logs["log_id"] = array("type"=>3,"varname"=>"log_id", "name" => "log_id");
$dalTableapp_logs["Timestamp"] = array("type"=>200,"varname"=>"Timestamp", "name" => "Timestamp");
$dalTableapp_logs["Action"] = array("type"=>200,"varname"=>"Action", "name" => "Action");
$dalTableapp_logs["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName");
$dalTableapp_logs["RecordID"] = array("type"=>200,"varname"=>"RecordID", "name" => "RecordID");
$dalTableapp_logs["SqlQuery"] = array("type"=>200,"varname"=>"SqlQuery", "name" => "SqlQuery");
$dalTableapp_logs["UserID"] = array("type"=>200,"varname"=>"UserID", "name" => "UserID");
$dalTableapp_logs["ServerIP"] = array("type"=>200,"varname"=>"ServerIP", "name" => "ServerIP");
$dalTableapp_logs["RequestUrl"] = array("type"=>201,"varname"=>"RequestUrl", "name" => "RequestUrl");
$dalTableapp_logs["RequestData"] = array("type"=>201,"varname"=>"RequestData", "name" => "RequestData");
$dalTableapp_logs["RequestCompleted"] = array("type"=>200,"varname"=>"RequestCompleted", "name" => "RequestCompleted");
$dalTableapp_logs["RequestMsg"] = array("type"=>201,"varname"=>"RequestMsg", "name" => "RequestMsg");
	$dalTableapp_logs["log_id"]["key"]=true;

$dal_info["csaasset_at_localhost__app_logs"] = &$dalTableapp_logs;
?>