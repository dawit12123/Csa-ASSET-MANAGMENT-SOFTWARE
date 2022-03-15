<?php



$tdatarequest_info = array();
$tdatarequest_info[".searchableFields"] = array();
$tdatarequest_info[".ShortName"] = "request_info";
$tdatarequest_info[".OwnerID"] = "";
$tdatarequest_info[".OriginalTable"] = "request_info";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list1\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatarequest_info[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list1\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarequest_info[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list1\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarequest_info[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsrequest_info = array();
$fieldToolTipsrequest_info = array();
$pageTitlesrequest_info = array();
$placeHoldersrequest_info = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrequest_info["English"] = array();
	$fieldToolTipsrequest_info["English"] = array();
	$placeHoldersrequest_info["English"] = array();
	$pageTitlesrequest_info["English"] = array();
	$fieldLabelsrequest_info["English"]["rq_id"] = "Rq Id";
	$fieldToolTipsrequest_info["English"]["rq_id"] = "";
	$placeHoldersrequest_info["English"]["rq_id"] = "";
	$fieldLabelsrequest_info["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsrequest_info["English"]["employee_id"] = "";
	$placeHoldersrequest_info["English"]["employee_id"] = "";
	$fieldLabelsrequest_info["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsrequest_info["English"]["asset_id"] = "";
	$placeHoldersrequest_info["English"]["asset_id"] = "";
	$fieldLabelsrequest_info["English"]["model"] = "Model";
	$fieldToolTipsrequest_info["English"]["model"] = "";
	$placeHoldersrequest_info["English"]["model"] = "";
	$fieldLabelsrequest_info["English"]["quantity"] = "Quantity";
	$fieldToolTipsrequest_info["English"]["quantity"] = "";
	$placeHoldersrequest_info["English"]["quantity"] = "";
	$fieldLabelsrequest_info["English"]["approve_status_from_dept_manager"] = "Approve Status From Dept Manager";
	$fieldToolTipsrequest_info["English"]["approve_status_from_dept_manager"] = "";
	$placeHoldersrequest_info["English"]["approve_status_from_dept_manager"] = "";
	$fieldLabelsrequest_info["English"]["date"] = "Date";
	$fieldToolTipsrequest_info["English"]["date"] = "";
	$placeHoldersrequest_info["English"]["date"] = "";
	$fieldLabelsrequest_info["English"]["department"] = "Department";
	$fieldToolTipsrequest_info["English"]["department"] = "";
	$placeHoldersrequest_info["English"]["department"] = "";
	$fieldLabelsrequest_info["English"]["taked"] = "Taked";
	$fieldToolTipsrequest_info["English"]["taked"] = "";
	$placeHoldersrequest_info["English"]["taked"] = "";
	$fieldLabelsrequest_info["English"]["approve_status_from_asset_dept_manager"] = "Approve Status From Asset Dept Manager";
	$fieldToolTipsrequest_info["English"]["approve_status_from_asset_dept_manager"] = "";
	$placeHoldersrequest_info["English"]["approve_status_from_asset_dept_manager"] = "";
	$fieldLabelsrequest_info["English"]["seen"] = "Seen";
	$fieldToolTipsrequest_info["English"]["seen"] = "";
	$placeHoldersrequest_info["English"]["seen"] = "";
	if (count($fieldToolTipsrequest_info["English"]))
		$tdatarequest_info[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsrequest_info["Afrikaans"] = array();
	$fieldToolTipsrequest_info["Afrikaans"] = array();
	$placeHoldersrequest_info["Afrikaans"] = array();
	$pageTitlesrequest_info["Afrikaans"] = array();
	$fieldLabelsrequest_info["Afrikaans"]["rq_id"] = "ተ.ቁ";
	$fieldToolTipsrequest_info["Afrikaans"]["rq_id"] = "";
	$placeHoldersrequest_info["Afrikaans"]["rq_id"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["employee_id"] = "የሰራተኛው መለያ";
	$fieldToolTipsrequest_info["Afrikaans"]["employee_id"] = "";
	$placeHoldersrequest_info["Afrikaans"]["employee_id"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["asset_id"] = "የእቃው አይነት";
	$fieldToolTipsrequest_info["Afrikaans"]["asset_id"] = "";
	$placeHoldersrequest_info["Afrikaans"]["asset_id"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["model"] = "ሞዴል";
	$fieldToolTipsrequest_info["Afrikaans"]["model"] = "";
	$placeHoldersrequest_info["Afrikaans"]["model"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["quantity"] = "ብዛት";
	$fieldToolTipsrequest_info["Afrikaans"]["quantity"] = "";
	$placeHoldersrequest_info["Afrikaans"]["quantity"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["approve_status_from_dept_manager"] = "ከዲፓርትመንት ማናጀረ ማረጋገጫ";
	$fieldToolTipsrequest_info["Afrikaans"]["approve_status_from_dept_manager"] = "";
	$placeHoldersrequest_info["Afrikaans"]["approve_status_from_dept_manager"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["date"] = "ቀን";
	$fieldToolTipsrequest_info["Afrikaans"]["date"] = "";
	$placeHoldersrequest_info["Afrikaans"]["date"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["department"] = "ዲፓርትመንት";
	$fieldToolTipsrequest_info["Afrikaans"]["department"] = "";
	$placeHoldersrequest_info["Afrikaans"]["department"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["taked"] = "ተሰርቷል";
	$fieldToolTipsrequest_info["Afrikaans"]["taked"] = "";
	$placeHoldersrequest_info["Afrikaans"]["taked"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["approve_status_from_asset_dept_manager"] = "ማረጋገጫ ከንብረት ቁጥጥር ዳይሬክተር";
	$fieldToolTipsrequest_info["Afrikaans"]["approve_status_from_asset_dept_manager"] = "";
	$placeHoldersrequest_info["Afrikaans"]["approve_status_from_asset_dept_manager"] = "";
	$fieldLabelsrequest_info["Afrikaans"]["seen"] = "ታይቷል";
	$fieldToolTipsrequest_info["Afrikaans"]["seen"] = "";
	$placeHoldersrequest_info["Afrikaans"]["seen"] = "";
	$pageTitlesrequest_info["Afrikaans"]["edit"] = "የቀረቡ ጥያቄዎች ማስተካከያ";
	$pageTitlesrequest_info["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesrequest_info["Afrikaans"]["search"] = "የቀረቡ ጥያቄዎች መፈለጊያ";
	$pageTitlesrequest_info["Afrikaans"]["view"] = "የቀረቡ ጥያቄዎች ማሳያ";
	if (count($fieldToolTipsrequest_info["Afrikaans"]))
		$tdatarequest_info[".isUseToolTips"] = true;
}


	$tdatarequest_info[".NCSearch"] = true;



$tdatarequest_info[".shortTableName"] = "request_info";
$tdatarequest_info[".nSecOptions"] = 0;

$tdatarequest_info[".mainTableOwnerID"] = "";
$tdatarequest_info[".entityType"] = 0;

$tdatarequest_info[".strOriginalTableName"] = "request_info";

		 



$tdatarequest_info[".showAddInPopup"] = false;

$tdatarequest_info[".showEditInPopup"] = false;

$tdatarequest_info[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarequest_info[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarequest_info[".listAjax"] = false;
//	temporary
$tdatarequest_info[".listAjax"] = false;

	$tdatarequest_info[".audit"] = true;

	$tdatarequest_info[".locking"] = true;


$pages = $tdatarequest_info[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarequest_info[".edit"] = true;
	$tdatarequest_info[".afterEditAction"] = 1;
	$tdatarequest_info[".closePopupAfterEdit"] = 1;
	$tdatarequest_info[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarequest_info[".add"] = true;
$tdatarequest_info[".afterAddAction"] = 1;
$tdatarequest_info[".closePopupAfterAdd"] = 1;
$tdatarequest_info[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarequest_info[".list"] = true;
}



$tdatarequest_info[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarequest_info[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarequest_info[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarequest_info[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarequest_info[".printFriendly"] = true;
}



$tdatarequest_info[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarequest_info[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarequest_info[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarequest_info[".isUseAjaxSuggest"] = true;

$tdatarequest_info[".rowHighlite"] = true;



			

$tdatarequest_info[".ajaxCodeSnippetAdded"] = false;

$tdatarequest_info[".buttonsAdded"] = false;

$tdatarequest_info[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarequest_info[".isUseTimeForSearch"] = false;


$tdatarequest_info[".badgeColor"] = "D2691E";


$tdatarequest_info[".allSearchFields"] = array();
$tdatarequest_info[".filterFields"] = array();
$tdatarequest_info[".requiredSearchFields"] = array();

$tdatarequest_info[".googleLikeFields"] = array();
$tdatarequest_info[".googleLikeFields"][] = "rq_id";
$tdatarequest_info[".googleLikeFields"][] = "employee_id";
$tdatarequest_info[".googleLikeFields"][] = "asset_id";
$tdatarequest_info[".googleLikeFields"][] = "model";
$tdatarequest_info[".googleLikeFields"][] = "quantity";
$tdatarequest_info[".googleLikeFields"][] = "approve_status_from_dept_manager";
$tdatarequest_info[".googleLikeFields"][] = "approve_status_from_asset_dept_manager";
$tdatarequest_info[".googleLikeFields"][] = "date";
$tdatarequest_info[".googleLikeFields"][] = "department";
$tdatarequest_info[".googleLikeFields"][] = "seen";
$tdatarequest_info[".googleLikeFields"][] = "taked";



$tdatarequest_info[".tableType"] = "list";

$tdatarequest_info[".printerPageOrientation"] = 0;
$tdatarequest_info[".nPrinterPageScale"] = 100;

$tdatarequest_info[".nPrinterSplitRecords"] = 40;

$tdatarequest_info[".geocodingEnabled"] = false;










$tdatarequest_info[".pageSize"] = 20;

$tdatarequest_info[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarequest_info[".strOrderBy"] = $tstrOrderBy;

$tdatarequest_info[".orderindexes"] = array();

$tdatarequest_info[".sqlHead"] = "SELECT `rq_id`,  	`employee_id`,  	`asset_id`,  	`model`,  	`quantity`,  	`approve_status_from_dept_manager`,  	`approve_status_from_asset_dept_manager`,  	`date`,  	`department`,  	`seen`,  	`taked`";
$tdatarequest_info[".sqlFrom"] = "FROM `request_info`";
$tdatarequest_info[".sqlWhereExpr"] = "";
$tdatarequest_info[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarequest_info[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarequest_info[".arrGroupsPerPage"] = $arrGPP;

$tdatarequest_info[".highlightSearchResults"] = true;

$tableKeysrequest_info = array();
$tableKeysrequest_info[] = "rq_id";
$tdatarequest_info[".Keys"] = $tableKeysrequest_info;


$tdatarequest_info[".hideMobileList"] = array();




//	rq_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rq_id";
	$fdata["GoodName"] = "rq_id";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","rq_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "rq_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rq_id`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["rq_id"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "rq_id";
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","employee_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`employee_id`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["employee_id"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "employee_id";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","asset_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "asset_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_id`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["asset_id"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "asset_id";
//	model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "model";
	$fdata["GoodName"] = "model";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","model");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "model";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`model`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["model"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "model";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","quantity");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`quantity`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["quantity"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "quantity";
//	approve_status_from_dept_manager
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "approve_status_from_dept_manager";
	$fdata["GoodName"] = "approve_status_from_dept_manager";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","approve_status_from_dept_manager");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "approve_status_from_dept_manager";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`approve_status_from_dept_manager`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "csa_users";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "empid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

				$edata["LookupWhere"] = "groupid='2' or groupid='3'";


	
	$edata["LookupOrderBy"] = "groupid";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "rq_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["approve_status_from_dept_manager"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "approve_status_from_dept_manager";
//	approve_status_from_asset_dept_manager
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "approve_status_from_asset_dept_manager";
	$fdata["GoodName"] = "approve_status_from_asset_dept_manager";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","approve_status_from_asset_dept_manager");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "approve_status_from_asset_dept_manager";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`approve_status_from_asset_dept_manager`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "csa_users";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "empid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

				$edata["LookupWhere"] = "groupid='3'";


	
	$edata["LookupOrderBy"] = "ID";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "rq_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["approve_status_from_asset_dept_manager"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "approve_status_from_asset_dept_manager";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","date");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["date"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "date";
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","department");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`department`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["department"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "department";
//	seen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "seen";
	$fdata["GoodName"] = "seen";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","seen");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "seen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seen`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "yes";
	$edata["LookupValues"][] = "no";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["seen"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "seen";
//	taked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "taked";
	$fdata["GoodName"] = "taked";
	$fdata["ownerTable"] = "request_info";
	$fdata["Label"] = GetFieldLabel("request_info","taked");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "taked";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`taked`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "yes";
	$edata["LookupValues"][] = "no";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "taked";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarequest_info["taked"] = $fdata;
		$tdatarequest_info[".searchableFields"][] = "taked";


$tables_data["request_info"]=&$tdatarequest_info;
$field_labels["request_info"] = &$fieldLabelsrequest_info;
$fieldToolTips["request_info"] = &$fieldToolTipsrequest_info;
$placeHolders["request_info"] = &$placeHoldersrequest_info;
$page_titles["request_info"] = &$pageTitlesrequest_info;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["request_info"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["request_info"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_request_info()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`rq_id`,  	`employee_id`,  	`asset_id`,  	`model`,  	`quantity`,  	`approve_status_from_dept_manager`,  	`approve_status_from_asset_dept_manager`,  	`date`,  	`department`,  	`seen`,  	`taked`";
$proto0["m_strFrom"] = "FROM `request_info`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "rq_id",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto6["m_sql"] = "`rq_id`";
$proto6["m_srcTableName"] = "request_info";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto8["m_sql"] = "`employee_id`";
$proto8["m_srcTableName"] = "request_info";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto10["m_sql"] = "`asset_id`";
$proto10["m_srcTableName"] = "request_info";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "model",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto12["m_sql"] = "`model`";
$proto12["m_srcTableName"] = "request_info";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto14["m_sql"] = "`quantity`";
$proto14["m_srcTableName"] = "request_info";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "approve_status_from_dept_manager",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto16["m_sql"] = "`approve_status_from_dept_manager`";
$proto16["m_srcTableName"] = "request_info";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "approve_status_from_asset_dept_manager",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto18["m_sql"] = "`approve_status_from_asset_dept_manager`";
$proto18["m_srcTableName"] = "request_info";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto20["m_sql"] = "`date`";
$proto20["m_srcTableName"] = "request_info";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto22["m_sql"] = "`department`";
$proto22["m_srcTableName"] = "request_info";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "seen",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto24["m_sql"] = "`seen`";
$proto24["m_srcTableName"] = "request_info";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "taked",
	"m_strTable" => "request_info",
	"m_srcTableName" => "request_info"
));

$proto26["m_sql"] = "`taked`";
$proto26["m_srcTableName"] = "request_info";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "request_info";
$proto29["m_srcTableName"] = "request_info";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "rq_id";
$proto29["m_columns"][] = "employee_id";
$proto29["m_columns"][] = "asset_id";
$proto29["m_columns"][] = "model";
$proto29["m_columns"][] = "quantity";
$proto29["m_columns"][] = "approve_status_from_dept_manager";
$proto29["m_columns"][] = "approve_status_from_asset_dept_manager";
$proto29["m_columns"][] = "date";
$proto29["m_columns"][] = "department";
$proto29["m_columns"][] = "seen";
$proto29["m_columns"][] = "taked";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`request_info`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "request_info";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="request_info";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_request_info = createSqlQuery_request_info();


	
					
;

											

$tdatarequest_info[".sqlquery"] = $queryData_request_info;

include_once(getabspath("include/request_info_events.php"));
$tableEvents["request_info"] = new eventclass_request_info;
$tdatarequest_info[".hasEvents"] = true;

?>