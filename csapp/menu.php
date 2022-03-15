<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/asset_events.php"));
$tableEvents["asset"] = new eventclass_asset;
include_once(getabspath("include/csa_audit_events.php"));
$tableEvents["csa_audit"] = new eventclass_csa_audit;
include_once(getabspath("include/csa_users_events.php"));
$tableEvents["csa_users"] = new eventclass_csa_users;
include_once(getabspath("include/departments_events.php"));
$tableEvents["departments"] = new eventclass_departments;
include_once(getabspath("include/eaempassets_events.php"));
$tableEvents["eaempassets"] = new eventclass_eaempassets;
include_once(getabspath("include/model19fromemployee_events.php"));
$tableEvents["model19fromemployee"] = new eventclass_model19fromemployee;
include_once(getabspath("include/model19frompurchase_events.php"));
$tableEvents["model19frompurchase"] = new eventclass_model19frompurchase;
include_once(getabspath("include/model20_events.php"));
$tableEvents["model20"] = new eventclass_model20;
include_once(getabspath("include/price_events.php"));
$tableEvents["price"] = new eventclass_price;
include_once(getabspath("include/request_info_events.php"));
$tableEvents["request_info"] = new eventclass_request_info;
include_once(getabspath("include/employee_events.php"));
$tableEvents["employee"] = new eventclass_employee;
include_once(getabspath("include/app_logs_events.php"));
$tableEvents["app_logs"] = new eventclass_app_logs;
include_once(getabspath("include/mode22_events.php"));
$tableEvents["mode22"] = new eventclass_mode22;
include_once(getabspath("include/checkapproval_events.php"));
$tableEvents["checkapproval"] = new eventclass_checkapproval;
include_once(getabspath("include/asset_in_store_events.php"));
$tableEvents["asset in store"] = new eventclass_asset_in_store;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>