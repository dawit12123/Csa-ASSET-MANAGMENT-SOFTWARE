<?php
$dalTablecsa_users = array();
$dalTablecsa_users["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTablecsa_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTablecsa_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTablecsa_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablecsa_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTablecsa_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid");
$dalTablecsa_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTablecsa_users["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
$dalTablecsa_users["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token");
$dalTablecsa_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date");
$dalTablecsa_users["empid"] = array("type"=>3,"varname"=>"empid", "name" => "empid");
	$dalTablecsa_users["ID"]["key"]=true;

$dal_info["csaasset_at_localhost__csa_users"] = &$dalTablecsa_users;
?>