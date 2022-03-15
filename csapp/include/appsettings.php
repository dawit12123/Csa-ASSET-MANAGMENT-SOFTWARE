<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$page_options = array();
$pd_pages = array();
$all_pd_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
$all_page_layouts = array();
$all_page_types = null;
$all_pages = null;
$detailsTablesData = array();
$masterTablesData = array();

// .NET convertor needs this
$tdataGLOBAL = array();
$pages = array();
$defaultPages = array();

/**
 * Breadcrumb label templates

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));
include(getabspath('classes/pdlayout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Afrikaans"] = array();
	$custom_labels["Afrikaans"]['MODEL20_REQUEST_FORM'] = "ሞዲል 20 የመጠየቂያ ፎርም";
		$custom_labels["Afrikaans"]['INVALID_WEEK_DAY'] = "የተሳሳተ ሳምንታዊ ቀን";
		$custom_labels["Afrikaans"]['ERROR_OCCURED_'] = "ችግር ተፈጥሯል";
		$custom_labels["Afrikaans"]['REQUIST_FORM'] = "የመጠየቂያ ፎርም";
		$custom_labels["Afrikaans"]['ASSET_INFORMATION'] = "የእቃዎች መረጃ";
		$custom_labels["Afrikaans"]['RECEIVED_FORM'] = "የገቢ ማድረጊያ ፎርም";
		$custom_labels["Afrikaans"]['ISSUED_FORM'] = "ወጪ ፎርም";
		$custom_labels["Afrikaans"]['EMPLOYEE_DATA'] = "የሰራተኞች መረጃ";
		$custom_labels["Afrikaans"]['SOFTWARE_ACTIVITY'] = "የሶፍትዌሩ አንቅስቃሴዎች";
		$custom_labels["Afrikaans"]['VALUE__VALUE__ALREADY_EXISTS'] = "ይህ%value% የመጠቀሚያ ስም በጥቅም ላይ ውሏል ሌላ ይጠቀሙ";
		$custom_labels["Afrikaans"]['VALUE__VALUE__ALREADY_EXISTS1'] = "ይህ %value% በጥቅም ላይ ውሏል";
		$custom_labels["Afrikaans"]['this_is_not_your_employment_id_please_choose_your_id'] = "";
		$custom_labels["Afrikaans"]['CHECKED_MSG_LABEL'] = "ተመርጧል";
		$custom_labels["Afrikaans"]['UNCHECKED_MSG_LABEL'] = "አልተመረጠም";
		$custom_labels["Afrikaans"]['this_is_not_your_username_please_choose_your_own_username'] = "ይሄ የእርስዎ አደለም ኣባክዎ የራስዎን መለያ ያስቀምጡ";
		$custom_labels["Afrikaans"]['ASSETCATEGORY_DESCRIPTION'] = "የእቃዎች ምድብ መግለጫ";
		$custom_labels["Afrikaans"]['ASSETNUMBER_DESCRIPTION'] = "የእቃዎች ብዛት መግለጫ";
		$custom_labels["Afrikaans"]['ASSETSTATUS_DESCRIPTION'] = "የእቃዎች ያሉበት ሁኔታ መግለጫ";
		$custom_labels["Afrikaans"]['ASSETSUPPLIERS_DESCRIPTION'] = "የእቃ አቅራቢ መግለጫ";
		$custom_labels["Afrikaans"]['ASSET_DESCRIPTION'] = "የእቃዎች መግለጫ";
		$custom_labels["Afrikaans"]['CUSTOM'] = "የተጠቃሚዎችን አንቅሳቃሴ መግልጫ";
	$custom_labels["Afrikaans"]['CUSTOM1'] = "የተቆለፉ ተጠቃሚዎች";
	$custom_labels["Afrikaans"]['CUSTOM2'] = "ማስተካከያዎች";
	$custom_labels["Afrikaans"]['CUSTOM3'] = "ተጠቃሚዎች";
	$custom_labels["Afrikaans"]['CUSTOM4'] = "ዲፓርትመንት";
	$custom_labels["Afrikaans"]['CUSTOM5'] = "የመውሰጃ ገጽ";
	$custom_labels["Afrikaans"]['CUSTOM6'] = "ተቀጣሪ ሰራተኞች";
	$custom_labels["Afrikaans"]['DISPLAYING'] = "";
									$custom_labels["Afrikaans"]['ASSET_IN_THE_STORE'] = "ያልተወሰዱ እቃዎች ዝርዝር";
		$custom_labels["Afrikaans"]['APP_LOGS'] = "አፕ ሎግ";
		$custom_labels["Afrikaans"]['ASSET_DESCRIPTION1'] = "የንብረት መግለጫ";
		$custom_labels["Afrikaans"]['ASSETCATEGORY_DESCRIPTION1'] = "የንብረት ምድብ መግለጫ";
		$custom_labels["Afrikaans"]['ASSETNUMBER_DESCRIPTION1'] = "የንብረት ቁጥር መግለጫ";
		$custom_labels["Afrikaans"]['ASSETSTATUS_DESCRIPTION1'] = "የንብረት ሁኔታ መግለጫ";
		$custom_labels["Afrikaans"]['ASSET_IN_THE_STORE1'] = "ያልተወሰዱ ንብረት ዝርዝር";
		$custom_labels["Afrikaans"]['_________'] = "የደረሰኝ ቁጥር: -";
		$custom_labels["Afrikaans"]['______'] = "ሞዴል ፳፪";
		$custom_labels["Afrikaans"]['____________________________________________________________________BR___RECEIPT_FOR_ARTICLES_OR_PROPERTY_RECEIVED'] = "የዕቃ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ወይም&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የንብረት&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ገቢ ደረሰኝ</br> 
<U>RECEIPT FOR ARTICLES OR PROPERTY RECEIVED</U>";
		$custom_labels["Afrikaans"]['_P_ID__SIMPLE_GRID_FIELD11____P_'] = "<p id=\"simple_grid_field11\"></p>";
		$custom_labels["Afrikaans"]['HJH'] = "<p id=\"simple_grid_field11\"></p>";
		$custom_labels["Afrikaans"]['____NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP_____NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP_______NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__________BR__'] = "የዕቃ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ወይም&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የንብረት&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ገቢ ደረሰኝ</br> ";
		$custom_labels["Afrikaans"]['______1'] = "ሞዴል ፲፱";
		$custom_labels["Afrikaans"]['______2'] = "ሞዴል ፲፱";
		$custom_labels["Afrikaans"]['SIGNATURE'] = "ፊርማ";
		$custom_labels["Afrikaans"]['VIEW'] = "ተመልከት";
		$custom_labels["Afrikaans"]['_____'] = "ተመልከት";
		$custom_labels["Afrikaans"]['______3'] = "አስተካክል";
		$custom_labels["Afrikaans"]['______4'] = "አስተካክል";
		$custom_labels["Afrikaans"]['___'] = "አሳይ";
		$custom_labels["Afrikaans"]['EDIT'] = "አስተካክል";
		$custom_labels["Afrikaans"]['VIEW1'] = "አሳይ";
		$custom_labels["Afrikaans"]['SIGNATURE1'] = "አስተካክል";
		$custom_labels["Afrikaans"]['VIEW2'] = "አሳይ";
	$custom_labels["English"] = array();
		$custom_labels["English"]['MODEL20_REQUEST_FORM'] = "Model20";
		$custom_labels["English"]['INVALID_WEEK_DAY'] = "Invalid week day";
		$custom_labels["English"]['ERROR_OCCURED_'] = "Error occured.";
		$custom_labels["English"]['REQUIST_FORM'] = "Requist Form";
		$custom_labels["English"]['ASSET_INFORMATION'] = "Asset information";
		$custom_labels["English"]['RECEIVED_FORM'] = "Received Form";
		$custom_labels["English"]['ISSUED_FORM'] = "Issued Form";
		$custom_labels["English"]['EMPLOYEE_DATA'] = "Employee data";
		$custom_labels["English"]['SOFTWARE_ACTIVITY'] = "Software Activity";
		$custom_labels["English"]['VALUE__VALUE__ALREADY_EXISTS'] = "Value %value% already exists";
		$custom_labels["English"]['VALUE__VALUE__ALREADY_EXISTS1'] = "Value %value% already exists";
		$custom_labels["English"]['this_is_not_your_employment_id_please_choose_your_id'] = "";
		$custom_labels["English"]['CHECKED_MSG_LABEL'] = "Checked";
		$custom_labels["English"]['UNCHECKED_MSG_LABEL'] = "Unchecked";
		$custom_labels["English"]['this_is_not_your_username_please_choose_your_own_username'] = "";
		$custom_labels["English"]['ASSETCATEGORY_DESCRIPTION'] = "Assetcategory description";
		$custom_labels["English"]['ASSETNUMBER_DESCRIPTION'] = "Assetnumber description";
		$custom_labels["English"]['ASSETSTATUS_DESCRIPTION'] = "Assetstatus description";
		$custom_labels["English"]['ASSETSUPPLIERS_DESCRIPTION'] = "Assetsuppliers description";
		$custom_labels["English"]['ASSET_DESCRIPTION'] = "Asset description";
									$custom_labels["English"]['DISPLAYING'] = "Displaying %first% - %last% of %total%";
	$custom_labels["English"]['CUSTOM'] = "";
	$custom_labels["English"]['CUSTOM1'] = "";
	$custom_labels["English"]['CUSTOM2'] = "";
	$custom_labels["English"]['CUSTOM3'] = "";
	$custom_labels["English"]['CUSTOM4'] = "";
	$custom_labels["English"]['CUSTOM5'] = "";
	$custom_labels["English"]['CUSTOM6'] = "";
		$custom_labels["English"]['ASSET_IN_THE_STORE'] = "asset in the store";
		$custom_labels["English"]['APP_LOGS'] = "App Logs";
		$custom_labels["English"]['ASSET_DESCRIPTION1'] = "Asset description";
		$custom_labels["English"]['ASSETCATEGORY_DESCRIPTION1'] = "Assetcategory description";
		$custom_labels["English"]['ASSETNUMBER_DESCRIPTION1'] = "Assetnumber description";
		$custom_labels["English"]['ASSETSTATUS_DESCRIPTION1'] = "Assetstatus description";
		$custom_labels["English"]['ASSET_IN_THE_STORE1'] = "asset in the store";
		$custom_labels["English"]['_________'] = "Serial No";
		$custom_labels["English"]['______'] = "Model 22";
		$custom_labels["English"]['____________________________________________________________________BR___RECEIPT_FOR_ARTICLES_OR_PROPERTY_RECEIVED'] = "የዕቃ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ወይም&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የንብረት&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ገቢ ደረሰኝ</br> 
<U>RECEIPT FOR ARTICLES OR PROPERTY RECEIVED</U>";
		$custom_labels["English"]['_P_ID__SIMPLE_GRID_FIELD11____P_'] = "<p id=\"simple_grid_field11\"></p>";
		$custom_labels["English"]['HJH'] = "<p id=\"simple_grid_field11\"></p>";
		$custom_labels["English"]['____NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP_____NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP_______NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__NBSP__________BR__'] = "የዕቃ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ወይም&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የንብረት&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ገቢ ደረሰኝ</br> ";
		$custom_labels["English"]['______1'] = "MODEL 19";
		$custom_labels["English"]['______2'] = "MODEL 19";
		$custom_labels["English"]['SIGNATURE'] = "Signature";
		$custom_labels["English"]['VIEW'] = "view";
		$custom_labels["English"]['_____'] = "view";
		$custom_labels["English"]['______3'] = "edit
";
		$custom_labels["English"]['______4'] = "edit";
		$custom_labels["English"]['___'] = "view";
		$custom_labels["English"]['EDIT'] = "edit";
		$custom_labels["English"]['VIEW1'] = "view";
		$custom_labels["English"]['SIGNATURE1'] = "signature";
		$custom_labels["English"]['VIEW2'] = "view";

define('GLOBAL_PAGES_SHORT', ".global");
define('GLOBAL_PAGES', "<global>");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");
define('PAGE_ADMIN_RIGHTS', "admin_rights_list");
define('PAGE_ADMIN_MEMBERS', "admin_members_list");
define('PAGE_ADMIN_ADMEMBERS', "admin_admembers_list");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);
define("ADD_MASTER_DASH",7);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard
define("VIEW_PDFJSON",3); 	//	prepare json for PDF

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("EXPORT_SIMPLE", 0);
define("EXPORT_POPUP", 1);

define("EXPORT_RAW", 0);
define("EXPORT_FORMATTED", 1);
define("EXPORT_BOTH", 2);


define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);
define("LIST_POPUPDETAILS",12);
define("PRINT_SIMPLE",13);
define("PRINT_PDFJSON",14); 	//	prepare json for PDF
define("LIST_PDFJSON",15); 	//	prepare details table json for PDF



define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);
define("SEARCH_POPUP", 3);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);
define("ENCRYPTION_ALG_AES_256", 256);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define ML String type constants */
define("ML_TEXT", 0);
define("ML_CUSTOM_LABEL", 1);
define("ML_MESSAGE", 2);


/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);
define('PD_BS_LAYOUT', 4); // temp

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);



define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 'SEND');
define('RPM_RESET', 'RESET');

define('CONTEXT_GLOBAL', 0);	//	global context
define('CONTEXT_PAGE', 1);		//	page where pageObject is available
define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
define('CONTEXT_LOOKUP', 3);	//	dependent lookup
define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)

define('BOTH_RECORDS', 0);
define('NEXT_RECORD', 1);
define('PREV_RECORD', 2);

// login form types
define('LOGIN_SEPARATE', 0);
//define('LOGIN_POPUP', 1);
//define('LOGIN_EMBEDED', 2);
define('NO_LOGIN', 3);

define('MEDIA_DESKTOP', 0);
define('MEDIA_MOBILE', 1);
define('MEDIA_MOBILE_EXPANDED', 2);


$globalSettings = array();
$g_defaultOptionValues = array();
$g_settingsType = array();

$globalSettings["nLoginMethod"] = 1;

$twilioSID = "";
$twilioAuth = "";
$twilioNumber = "";
$globalSettings["bTwoFactorAuth"] = false;





$globalSettings["popupPagesLayoutNames"] = array();
					
;
$globalSettings["popupPagesLayoutNames"]["login"] = "login";

//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = false;

$globalSettings["strSMTPUser"] = "";
$globalSettings["strSMTPServer"] = "localhost";
$globalSettings["strSMTPPort"] = "25";
$globalSettings["strSMTPPassword"] = "";
$globalSettings["strFromEmail"] = "";

//


$ajaxSearchStartsWith = true;




$globalSettings["LandingPageType"] = 2;
$globalSettings["LandingTable"] = "Dashboard";
$globalSettings["LandingPage"] = "dashboard";
$globalSettings["LandingURL"] = "dashboard_dashboard.php?page=dashboard";
$globalSettings["LandingPageId"] = "dashboard";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Afrikaans"] = "<b><img src=\"/images/csalogo.png\" height=\"52\" width=\"52\"/>ማአካላዊ ስታትስቲክስ</b>";
$globalSettings["ProjectLogo"]["English"] = "<b><img src=\"/images/csalogo.png\" height=\"52\" width=\"52\"/>Central Statics Agency</b>";

$globalSettings["CookieBanner"] = array();
$globalSettings["CookieBanner"]["Afrikaans"] = "የተጠቃሚውን ማንነት ለማረጋገጥ ይህ ሶፍትዌር ኩኪስ ይጠቀማል ";
$globalSettings["CookieBanner"]["English"] = "የተጠቃሚውን ማንነት ለማረጋገጥ ይህ ሶፍትዌር ኩኪስ ይጠቀማል ";

$globalSettings["useCookieBanner"] = 1 != 0;


$globalSettings["createLoginPage"] = true;
$globalSettings["userGroupCount"] = 7;

$globalSettings["isSection508"] = true;

$globalSettings["apiGoogleMapsCode"] = "";

$globalSettings["SpUserIdField"] = "fullname";

	
	
//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 8;
$globalSettings["pwdUnique"] = 1;
$globalSettings["pwdDigits"] = 2;
$globalSettings["pwdUpperLower"] = true;


/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$styleOverrides = array();

$styleOverrides["model19frompurchase_print"] = array(
	"theme" => "united",
	"size" => "normal",
);

$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 0;
$globalSettings["CaptchaSettings"]["siteKey"] = "";
$globalSettings["CaptchaSettings"]["secretKey"] = "";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";


$bsProjectTheme = "united";
$bsProjectSize = "normal";

$wr_pagestylepath = "OfficeOffice";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "csa_users";
$cDisplayNameField = "fullname";
$cUserNameField	= "username";
$cPasswordField	= "password";
$cUserGroupField = "groupid";
$cEmailField = "email";
$globalSettings["usersTableInProject"] = true;
$globalSettings["usersDatasourceTable"] = "csa_users";

$globalSettings["jwtSecret"] = "s2dgfsg-43f";

if( $cDisplayNameField == '' )
	$cDisplayNameField = $cUserNameField;

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

$arrCustomPages = array();

												$cUserNameFieldType	= 200;
												$cPasswordFieldType	= 200;
												$cEmailFieldType = 200;
																																																															

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$projectBuildKey = "524_1582840978";
$wizardBuildKey = "33793";
$projectBuildNumber = "524";

$mlang_messages = array();
$mlang_charsets = array();


$projectMenus = array();
$projectMenus[] = "main";


$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;





// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["asset"] = "Asset";
$tableCaptions["English"]["assetcategory"] = "Assetcategory";
$tableCaptions["English"]["assetsuppliers"] = "Assetsuppliers";
$tableCaptions["English"]["csa1_uggroups"] = "Csa1 Uggroups";
$tableCaptions["English"]["csa_audit"] = "Csa Audit";
$tableCaptions["English"]["csa_locking"] = "Csa Locking";
$tableCaptions["English"]["csa_settings"] = "Csa Settings";
$tableCaptions["English"]["csa_uggroups"] = "Csa Uggroups";
$tableCaptions["English"]["csa_users"] = "Csa Users";
$tableCaptions["English"]["departments"] = "Departments";
$tableCaptions["English"]["eaempassets"] = "Eaempassets";
$tableCaptions["English"]["jobhistory"] = "Jobhistory";
$tableCaptions["English"]["jobs"] = "Jobs";
$tableCaptions["English"]["model19fromemployee"] = "Model19fromemployee";
$tableCaptions["English"]["model19frompurchase"] = "Model19frompurchase";
$tableCaptions["English"]["model20"] = "Model20";
$tableCaptions["English"]["price"] = "Price";
$tableCaptions["English"]["request_info"] = "Request Info";
$tableCaptions["English"]["sourceinfo"] = "Sourceinfo";
$tableCaptions["English"]["workunit"] = "Workunit";
$tableCaptions["English"]["employee"] = "Employee";
$tableCaptions["English"]["app_logs"] = "App Logs";
$tableCaptions["English"]["mode22"] = "Mode22";
$tableCaptions["English"]["checkapproval"] = "Checkapproval";
$tableCaptions["English"]["assettype"] = "Assettype";
$tableCaptions["English"]["Dashboard"] = "Dashboard";
$tableCaptions["English"]["asset_in_store"] = "asset in store";
$tableCaptions["Afrikaans"] = array();
$tableCaptions["Afrikaans"][""] = "";
$tableCaptions["Afrikaans"]["asset"] = "እቃዎች";
$tableCaptions["Afrikaans"]["assetcategory"] = "የእቃዎች ምድብ";
$tableCaptions["Afrikaans"]["assetsuppliers"] = "የእቃ አቅራቢዎች";
$tableCaptions["Afrikaans"]["csa1_uggroups"] = "ተጠቃሚ ግሩፓች";
$tableCaptions["Afrikaans"]["csa_audit"] = "እንቅስቃሴዎችን ማሳያ";
$tableCaptions["Afrikaans"]["csa_locking"] = "የተቆለፉ";
$tableCaptions["Afrikaans"]["csa_settings"] = "ሴቲንግ";
$tableCaptions["Afrikaans"]["csa_uggroups"] = "ከግሩፕ የወጡ";
$tableCaptions["Afrikaans"]["csa_users"] = "ተጠቃሚዎች";
$tableCaptions["Afrikaans"]["departments"] = "ዲፓርትመንት";
$tableCaptions["Afrikaans"]["eaempassets"] = "የእቃ መውሰጃ";
$tableCaptions["Afrikaans"]["jobhistory"] = "የስራ ሂደት";
$tableCaptions["Afrikaans"]["jobs"] = "ስራ";
$tableCaptions["Afrikaans"]["model19fromemployee"] = "ሞዴል 19(የእቃ ገቢ ማድረጊያ";
$tableCaptions["Afrikaans"]["model19frompurchase"] = "ሞዴል 19 ከግዢ ክፍል";
$tableCaptions["Afrikaans"]["model20"] = "ሞዴል 20 (የእቃ መጠየቂያ ፎርም";
$tableCaptions["Afrikaans"]["price"] = "የእቃ ዋጋ";
$tableCaptions["Afrikaans"]["request_info"] = "የቀረቡ ጥያቄዎች";
$tableCaptions["Afrikaans"]["sourceinfo"] = "የምንጭ መረጃ";
$tableCaptions["Afrikaans"]["workunit"] = "የስራ ምድብ";
$tableCaptions["Afrikaans"]["employee"] = "ሰራተኞች";
$tableCaptions["Afrikaans"]["app_logs"] = "አፕ ሎግ";
$tableCaptions["Afrikaans"]["mode22"] = "ሞዴል 22(የእቃ ወጪ ማድረጊያ";
$tableCaptions["Afrikaans"]["checkapproval"] = "ማረጋገጫ";
$tableCaptions["Afrikaans"]["assettype"] = "የንብረቱ አይነት";
$tableCaptions["Afrikaans"]["Dashboard"] = "Dashboard";
$tableCaptions["Afrikaans"]["asset_in_store"] = "asset in store";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();
$dalTables = array();
$tableinfo_cache = array();

require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("connections/ConnectionManager.php") );
include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));
require_once( getabspath('classes/db.php') );
require_once( getabspath('classes/context.php') );
require_once(getabspath("classes/cipherer.php"));
require_once( getabspath('classes/wheretabs.php') );

$contextStack = new RunnerContext;

$cman = new ConnectionManager();

$currentConnection = null;

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));

$mediaType = $_COOKIE["mediaType"];
$mediaType = $mediaType ? $mediaType : 0;



$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="Afrikaans")
{
				$page_titles[".global"]["Afrikaans"] = array();
	$page_titles[".global"]["Afrikaans"]["login"] = "መግቢያ";
				$page_titles[".global"]["Afrikaans"]["menu"] = "ሜኑ";
}

$globalSettings["showDetailedError"] = true;


// SearchClause::getSearchObject
$_cachedSeachClauses = array();

$auditMaxFieldLength = 300;



// default connection link #9875
$conn = $cman->getDefault()->conn;


//	delete old username & password cookies
if( $_COOKIE["password"] ) {
	setcookie("username", "", time() - 1, "", "", false, false);
	setcookie("password", "", time() - 1, "", "", false, false);
}


$logoutPerformed = false;
$scriptname = getFileNameFromURL();
	if(!isLogged() && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php" && $scriptname!="checkduplicates.php")
{
	Security::doGuestLogin();
}


$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;


$menuNodesIndex=0;

/**
 *	Sundry data the page classes want pass to their JS counterparts
 * 	TODO: Move proxy here
 *
 *	$pagesData[<pageid>] = array( 	<key> => <value>
 *									<key> => <value> ... )
 *					)
 */
$pagesData = array();

$pageInConstruction = null;

?>