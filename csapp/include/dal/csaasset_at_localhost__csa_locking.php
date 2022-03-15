<?php
$dalTablecsa_locking = array();
$dalTablecsa_locking["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecsa_locking["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTablecsa_locking["startdatetime"] = array("type"=>135,"varname"=>"startdatetime", "name" => "startdatetime");
$dalTablecsa_locking["confirmdatetime"] = array("type"=>135,"varname"=>"confirmdatetime", "name" => "confirmdatetime");
$dalTablecsa_locking["keys"] = array("type"=>200,"varname"=>"keys", "name" => "keys");
$dalTablecsa_locking["sessionid"] = array("type"=>200,"varname"=>"sessionid", "name" => "sessionid");
$dalTablecsa_locking["userid"] = array("type"=>200,"varname"=>"userid", "name" => "userid");
$dalTablecsa_locking["action"] = array("type"=>3,"varname"=>"action", "name" => "action");
	$dalTablecsa_locking["id"]["key"]=true;

$dal_info["csaasset_at_localhost__csa_locking"] = &$dalTablecsa_locking;
?>