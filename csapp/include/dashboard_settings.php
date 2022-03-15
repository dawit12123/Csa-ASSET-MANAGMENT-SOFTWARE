<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$pages = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$defaultPages = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );

$tdatadashboard[".pages"] = $pages;
$tdatadashboard[".defaultPages"] = $defaultPages;


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdashboard["English"] = array();
	$fieldLabelsdashboard["English"]["request_info_rq_id"] = "Rq Id";
	$fieldLabelsdashboard["English"]["request_info_employee_id"] = "Employee Id";
	$fieldLabelsdashboard["English"]["request_info_asset_id"] = "Asset Id";
	$fieldLabelsdashboard["English"]["request_info_model"] = "Model";
	$fieldLabelsdashboard["English"]["request_info_quantity"] = "Quantity";
	$fieldLabelsdashboard["English"]["request_info_approve_status_from_dept_manager"] = "Approve Status From Dept Manager";
	$fieldLabelsdashboard["English"]["request_info_approve_status_from_asset_dept_manager"] = "Approve Status From Asset Dept Manager";
	$fieldLabelsdashboard["English"]["request_info_date"] = "Date";
	$fieldLabelsdashboard["English"]["request_info_department"] = "Department";
	$fieldLabelsdashboard["English"]["request_info_taked"] = "Taked";
	$fieldLabelsdashboard["English"]["request_info_seen"] = "Seen";
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsdashboard["Afrikaans"] = array();
	$fieldLabelsdashboard["Afrikaans"]["request_info_rq_id"] = "ተ.ቁ";
	$fieldLabelsdashboard["Afrikaans"]["request_info_employee_id"] = "የሰራተኛው መለያ";
	$fieldLabelsdashboard["Afrikaans"]["request_info_asset_id"] = "የእቃው አይነት";
	$fieldLabelsdashboard["Afrikaans"]["request_info_model"] = "ሞዴል";
	$fieldLabelsdashboard["Afrikaans"]["request_info_quantity"] = "ብዛት";
	$fieldLabelsdashboard["Afrikaans"]["request_info_approve_status_from_dept_manager"] = "ከዲፓርትመንት ማናጀረ ማረጋገጫ";
	$fieldLabelsdashboard["Afrikaans"]["request_info_approve_status_from_asset_dept_manager"] = "ማረጋገጫ ከንብረት ቁጥጥር ዳይሬክተር";
	$fieldLabelsdashboard["Afrikaans"]["request_info_date"] = "ቀን";
	$fieldLabelsdashboard["Afrikaans"]["request_info_department"] = "ዲፓርትመንት";
	$fieldLabelsdashboard["Afrikaans"]["request_info_taked"] = "ተሰርቷል";
	$fieldLabelsdashboard["Afrikaans"]["request_info_seen"] = "ታይቷል";
}

//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"rq_id" );
$tdatadashboard[".searchFields"]["request_info_rq_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"employee_id" );
$tdatadashboard[".searchFields"]["request_info_employee_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"asset_id" );
$tdatadashboard[".searchFields"]["request_info_asset_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"model" );
$tdatadashboard[".searchFields"]["request_info_model"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"quantity" );
$tdatadashboard[".searchFields"]["request_info_quantity"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"approve_status_from_dept_manager" );
$tdatadashboard[".searchFields"]["request_info_approve_status_from_dept_manager"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"approve_status_from_asset_dept_manager" );
$tdatadashboard[".searchFields"]["request_info_approve_status_from_asset_dept_manager"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"date" );
$tdatadashboard[".searchFields"]["request_info_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"department" );
$tdatadashboard[".searchFields"]["request_info_department"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"taked" );
$tdatadashboard[".searchFields"]["request_info_taked"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"request_info", "field"=>"seen" );
$tdatadashboard[".searchFields"]["request_info_seen"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "request_info_rq_id";
$tdatadashboard[".allSearchFields"][] = "request_info_employee_id";
$tdatadashboard[".allSearchFields"][] = "request_info_asset_id";
$tdatadashboard[".allSearchFields"][] = "request_info_model";
$tdatadashboard[".allSearchFields"][] = "request_info_quantity";
$tdatadashboard[".allSearchFields"][] = "request_info_approve_status_from_dept_manager";
$tdatadashboard[".allSearchFields"][] = "request_info_approve_status_from_asset_dept_manager";
$tdatadashboard[".allSearchFields"][] = "request_info_date";
$tdatadashboard[".allSearchFields"][] = "request_info_department";
$tdatadashboard[".allSearchFields"][] = "request_info_taked";
$tdatadashboard[".allSearchFields"][] = "request_info_seen";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "request_info_rq_id";
$tdatadashboard[".googleLikeFields"][] = "request_info_employee_id";
$tdatadashboard[".googleLikeFields"][] = "request_info_asset_id";
$tdatadashboard[".googleLikeFields"][] = "request_info_model";
$tdatadashboard[".googleLikeFields"][] = "request_info_quantity";
$tdatadashboard[".googleLikeFields"][] = "request_info_approve_status_from_dept_manager";
$tdatadashboard[".googleLikeFields"][] = "request_info_approve_status_from_asset_dept_manager";
$tdatadashboard[".googleLikeFields"][] = "request_info_date";
$tdatadashboard[".googleLikeFields"][] = "request_info_department";
$tdatadashboard[".googleLikeFields"][] = "request_info_taked";
$tdatadashboard[".googleLikeFields"][] = "request_info_seen";

$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "request_info_record", "table" => "request_info", 
		 "pageName" => "","type" => 3);
	$dbelement["cellName"] = "cell_0_0";

		$dbelement["reload"] = 43;
			$dbelement["tabsPageTypes"] = array();
	$dbelement["pageNames"] = array();
		$dbelement["tabsPageTypes"][] = PAGE_VIEW;
	$dbelement["pageNames"][ PAGE_VIEW ] = "";
				$dbelement["initialTabPageType"] = PAGE_VIEW;


	$tdatadashboard[".dashElements"][] = $dbelement;

$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;



$tableEvents["Dashboard"] = new eventsBase;
$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";


	
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>