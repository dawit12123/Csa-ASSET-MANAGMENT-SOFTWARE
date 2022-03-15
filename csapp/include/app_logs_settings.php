<?php



$tdataapp_logs = array();
$tdataapp_logs[".searchableFields"] = array();
$tdataapp_logs[".ShortName"] = "app_logs";
$tdataapp_logs[".OwnerID"] = "";
$tdataapp_logs[".OriginalTable"] = "app_logs";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataapp_logs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataapp_logs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataapp_logs[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsapp_logs = array();
$fieldToolTipsapp_logs = array();
$pageTitlesapp_logs = array();
$placeHoldersapp_logs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapp_logs["English"] = array();
	$fieldToolTipsapp_logs["English"] = array();
	$placeHoldersapp_logs["English"] = array();
	$pageTitlesapp_logs["English"] = array();
	$fieldLabelsapp_logs["English"]["log_id"] = "Log Id";
	$fieldToolTipsapp_logs["English"]["log_id"] = "";
	$placeHoldersapp_logs["English"]["log_id"] = "";
	$fieldLabelsapp_logs["English"]["Timestamp"] = "Timestamp";
	$fieldToolTipsapp_logs["English"]["Timestamp"] = "";
	$placeHoldersapp_logs["English"]["Timestamp"] = "";
	$fieldLabelsapp_logs["English"]["Action"] = "Action";
	$fieldToolTipsapp_logs["English"]["Action"] = "";
	$placeHoldersapp_logs["English"]["Action"] = "";
	$fieldLabelsapp_logs["English"]["TableName"] = "Table Name";
	$fieldToolTipsapp_logs["English"]["TableName"] = "";
	$placeHoldersapp_logs["English"]["TableName"] = "";
	$fieldLabelsapp_logs["English"]["RecordID"] = "Record ID";
	$fieldToolTipsapp_logs["English"]["RecordID"] = "";
	$placeHoldersapp_logs["English"]["RecordID"] = "";
	$fieldLabelsapp_logs["English"]["SqlQuery"] = "Sql Query";
	$fieldToolTipsapp_logs["English"]["SqlQuery"] = "";
	$placeHoldersapp_logs["English"]["SqlQuery"] = "";
	$fieldLabelsapp_logs["English"]["UserID"] = "User ID";
	$fieldToolTipsapp_logs["English"]["UserID"] = "";
	$placeHoldersapp_logs["English"]["UserID"] = "";
	$fieldLabelsapp_logs["English"]["ServerIP"] = "Server IP";
	$fieldToolTipsapp_logs["English"]["ServerIP"] = "";
	$placeHoldersapp_logs["English"]["ServerIP"] = "";
	$fieldLabelsapp_logs["English"]["RequestUrl"] = "Request Url";
	$fieldToolTipsapp_logs["English"]["RequestUrl"] = "";
	$placeHoldersapp_logs["English"]["RequestUrl"] = "";
	$fieldLabelsapp_logs["English"]["RequestData"] = "Request Data";
	$fieldToolTipsapp_logs["English"]["RequestData"] = "";
	$placeHoldersapp_logs["English"]["RequestData"] = "";
	$fieldLabelsapp_logs["English"]["RequestCompleted"] = "Request Completed";
	$fieldToolTipsapp_logs["English"]["RequestCompleted"] = "";
	$placeHoldersapp_logs["English"]["RequestCompleted"] = "";
	$fieldLabelsapp_logs["English"]["RequestMsg"] = "Request Msg";
	$fieldToolTipsapp_logs["English"]["RequestMsg"] = "";
	$placeHoldersapp_logs["English"]["RequestMsg"] = "";
	if (count($fieldToolTipsapp_logs["English"]))
		$tdataapp_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsapp_logs["Afrikaans"] = array();
	$fieldToolTipsapp_logs["Afrikaans"] = array();
	$placeHoldersapp_logs["Afrikaans"] = array();
	$pageTitlesapp_logs["Afrikaans"] = array();
	$fieldLabelsapp_logs["Afrikaans"]["log_id"] = "መለያ";
	$fieldToolTipsapp_logs["Afrikaans"]["log_id"] = "";
	$placeHoldersapp_logs["Afrikaans"]["log_id"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["Timestamp"] = "ቀን እና ሰዐት";
	$fieldToolTipsapp_logs["Afrikaans"]["Timestamp"] = "";
	$placeHoldersapp_logs["Afrikaans"]["Timestamp"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["Action"] = "እንቅስቃሴ";
	$fieldToolTipsapp_logs["Afrikaans"]["Action"] = "";
	$placeHoldersapp_logs["Afrikaans"]["Action"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["TableName"] = "የቴብሉ ስም";
	$fieldToolTipsapp_logs["Afrikaans"]["TableName"] = "";
	$placeHoldersapp_logs["Afrikaans"]["TableName"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["RecordID"] = "የሪከርዱ መለያ";
	$fieldToolTipsapp_logs["Afrikaans"]["RecordID"] = "";
	$placeHoldersapp_logs["Afrikaans"]["RecordID"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["SqlQuery"] = "ኤስኪውል ኪዌሪ";
	$fieldToolTipsapp_logs["Afrikaans"]["SqlQuery"] = "";
	$placeHoldersapp_logs["Afrikaans"]["SqlQuery"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["UserID"] = "የተጠቃሚ መለያ";
	$fieldToolTipsapp_logs["Afrikaans"]["UserID"] = "";
	$placeHoldersapp_logs["Afrikaans"]["UserID"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["ServerIP"] = "የሰርቨር አድራሻ";
	$fieldToolTipsapp_logs["Afrikaans"]["ServerIP"] = "";
	$placeHoldersapp_logs["Afrikaans"]["ServerIP"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["RequestUrl"] = "የጥያቄው ዩአረኢውል";
	$fieldToolTipsapp_logs["Afrikaans"]["RequestUrl"] = "";
	$placeHoldersapp_logs["Afrikaans"]["RequestUrl"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["RequestData"] = "የተጠየቀው መረጃ";
	$fieldToolTipsapp_logs["Afrikaans"]["RequestData"] = "";
	$placeHoldersapp_logs["Afrikaans"]["RequestData"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["RequestCompleted"] = "ጥያቂው ተጠናቋል";
	$fieldToolTipsapp_logs["Afrikaans"]["RequestCompleted"] = "";
	$placeHoldersapp_logs["Afrikaans"]["RequestCompleted"] = "";
	$fieldLabelsapp_logs["Afrikaans"]["RequestMsg"] = "የጥያቄው መልዕክት";
	$fieldToolTipsapp_logs["Afrikaans"]["RequestMsg"] = "";
	$placeHoldersapp_logs["Afrikaans"]["RequestMsg"] = "";
	if (count($fieldToolTipsapp_logs["Afrikaans"]))
		$tdataapp_logs[".isUseToolTips"] = true;
}


	$tdataapp_logs[".NCSearch"] = true;



$tdataapp_logs[".shortTableName"] = "app_logs";
$tdataapp_logs[".nSecOptions"] = 0;

$tdataapp_logs[".mainTableOwnerID"] = "";
$tdataapp_logs[".entityType"] = 0;

$tdataapp_logs[".strOriginalTableName"] = "app_logs";

		 



$tdataapp_logs[".showAddInPopup"] = false;

$tdataapp_logs[".showEditInPopup"] = false;

$tdataapp_logs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapp_logs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapp_logs[".listAjax"] = false;
//	temporary
$tdataapp_logs[".listAjax"] = false;

	$tdataapp_logs[".audit"] = true;

	$tdataapp_logs[".locking"] = true;


$pages = $tdataapp_logs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataapp_logs[".edit"] = true;
	$tdataapp_logs[".afterEditAction"] = 1;
	$tdataapp_logs[".closePopupAfterEdit"] = 1;
	$tdataapp_logs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataapp_logs[".add"] = true;
$tdataapp_logs[".afterAddAction"] = 1;
$tdataapp_logs[".closePopupAfterAdd"] = 1;
$tdataapp_logs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataapp_logs[".list"] = true;
}



$tdataapp_logs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataapp_logs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataapp_logs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataapp_logs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataapp_logs[".printFriendly"] = true;
}



$tdataapp_logs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataapp_logs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataapp_logs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataapp_logs[".isUseAjaxSuggest"] = true;

$tdataapp_logs[".rowHighlite"] = true;



			

$tdataapp_logs[".ajaxCodeSnippetAdded"] = false;

$tdataapp_logs[".buttonsAdded"] = false;

$tdataapp_logs[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapp_logs[".isUseTimeForSearch"] = false;


$tdataapp_logs[".badgeColor"] = "D2AF80";


$tdataapp_logs[".allSearchFields"] = array();
$tdataapp_logs[".filterFields"] = array();
$tdataapp_logs[".requiredSearchFields"] = array();

$tdataapp_logs[".googleLikeFields"] = array();
$tdataapp_logs[".googleLikeFields"][] = "log_id";
$tdataapp_logs[".googleLikeFields"][] = "Timestamp";
$tdataapp_logs[".googleLikeFields"][] = "Action";
$tdataapp_logs[".googleLikeFields"][] = "TableName";
$tdataapp_logs[".googleLikeFields"][] = "RecordID";
$tdataapp_logs[".googleLikeFields"][] = "SqlQuery";
$tdataapp_logs[".googleLikeFields"][] = "UserID";
$tdataapp_logs[".googleLikeFields"][] = "ServerIP";
$tdataapp_logs[".googleLikeFields"][] = "RequestUrl";
$tdataapp_logs[".googleLikeFields"][] = "RequestData";
$tdataapp_logs[".googleLikeFields"][] = "RequestCompleted";
$tdataapp_logs[".googleLikeFields"][] = "RequestMsg";



$tdataapp_logs[".tableType"] = "list";

$tdataapp_logs[".printerPageOrientation"] = 0;
$tdataapp_logs[".nPrinterPageScale"] = 100;

$tdataapp_logs[".nPrinterSplitRecords"] = 40;

$tdataapp_logs[".geocodingEnabled"] = false;










$tdataapp_logs[".pageSize"] = 20;

$tdataapp_logs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapp_logs[".strOrderBy"] = $tstrOrderBy;

$tdataapp_logs[".orderindexes"] = array();

$tdataapp_logs[".sqlHead"] = "SELECT `log_id`,  	`Timestamp`,  	`Action`,  	`TableName`,  	`RecordID`,  	`SqlQuery`,  	`UserID`,  	`ServerIP`,  	`RequestUrl`,  	`RequestData`,  	`RequestCompleted`,  	`RequestMsg`";
$tdataapp_logs[".sqlFrom"] = "FROM `app_logs`";
$tdataapp_logs[".sqlWhereExpr"] = "";
$tdataapp_logs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapp_logs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapp_logs[".arrGroupsPerPage"] = $arrGPP;

$tdataapp_logs[".highlightSearchResults"] = true;

$tableKeysapp_logs = array();
$tableKeysapp_logs[] = "log_id";
$tdataapp_logs[".Keys"] = $tableKeysapp_logs;


$tdataapp_logs[".hideMobileList"] = array();




//	log_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "log_id";
	$fdata["GoodName"] = "log_id";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","log_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "log_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`log_id`";

	
	
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


	$tdataapp_logs["log_id"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "log_id";
//	Timestamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Timestamp";
	$fdata["GoodName"] = "Timestamp";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","Timestamp");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Timestamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Timestamp`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["Timestamp"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "Timestamp";
//	Action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Action";
	$fdata["GoodName"] = "Action";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","Action");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Action`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["Action"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "Action";
//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","TableName");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "TableName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TableName`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["TableName"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "TableName";
//	RecordID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RecordID";
	$fdata["GoodName"] = "RecordID";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","RecordID");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "RecordID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RecordID`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["RecordID"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "RecordID";
//	SqlQuery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SqlQuery";
	$fdata["GoodName"] = "SqlQuery";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","SqlQuery");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "SqlQuery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SqlQuery`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["SqlQuery"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "SqlQuery";
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","UserID");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "UserID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`UserID`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["UserID"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "UserID";
//	ServerIP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ServerIP";
	$fdata["GoodName"] = "ServerIP";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","ServerIP");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "ServerIP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ServerIP`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["ServerIP"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "ServerIP";
//	RequestUrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RequestUrl";
	$fdata["GoodName"] = "RequestUrl";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","RequestUrl");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "RequestUrl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RequestUrl`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataapp_logs["RequestUrl"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "RequestUrl";
//	RequestData
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RequestData";
	$fdata["GoodName"] = "RequestData";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","RequestData");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "RequestData";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RequestData`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataapp_logs["RequestData"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "RequestData";
//	RequestCompleted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RequestCompleted";
	$fdata["GoodName"] = "RequestCompleted";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","RequestCompleted");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "RequestCompleted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RequestCompleted`";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataapp_logs["RequestCompleted"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "RequestCompleted";
//	RequestMsg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "RequestMsg";
	$fdata["GoodName"] = "RequestMsg";
	$fdata["ownerTable"] = "app_logs";
	$fdata["Label"] = GetFieldLabel("app_logs","RequestMsg");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "RequestMsg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RequestMsg`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataapp_logs["RequestMsg"] = $fdata;
		$tdataapp_logs[".searchableFields"][] = "RequestMsg";


$tables_data["app_logs"]=&$tdataapp_logs;
$field_labels["app_logs"] = &$fieldLabelsapp_logs;
$fieldToolTips["app_logs"] = &$fieldToolTipsapp_logs;
$placeHolders["app_logs"] = &$placeHoldersapp_logs;
$page_titles["app_logs"] = &$pageTitlesapp_logs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["app_logs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["app_logs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_app_logs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`log_id`,  	`Timestamp`,  	`Action`,  	`TableName`,  	`RecordID`,  	`SqlQuery`,  	`UserID`,  	`ServerIP`,  	`RequestUrl`,  	`RequestData`,  	`RequestCompleted`,  	`RequestMsg`";
$proto0["m_strFrom"] = "FROM `app_logs`";
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
	"m_strName" => "log_id",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto6["m_sql"] = "`log_id`";
$proto6["m_srcTableName"] = "app_logs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Timestamp",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto8["m_sql"] = "`Timestamp`";
$proto8["m_srcTableName"] = "app_logs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Action",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto10["m_sql"] = "`Action`";
$proto10["m_srcTableName"] = "app_logs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TableName",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto12["m_sql"] = "`TableName`";
$proto12["m_srcTableName"] = "app_logs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RecordID",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto14["m_sql"] = "`RecordID`";
$proto14["m_srcTableName"] = "app_logs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SqlQuery",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto16["m_sql"] = "`SqlQuery`";
$proto16["m_srcTableName"] = "app_logs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto18["m_sql"] = "`UserID`";
$proto18["m_srcTableName"] = "app_logs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ServerIP",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto20["m_sql"] = "`ServerIP`";
$proto20["m_srcTableName"] = "app_logs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RequestUrl",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto22["m_sql"] = "`RequestUrl`";
$proto22["m_srcTableName"] = "app_logs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "RequestData",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto24["m_sql"] = "`RequestData`";
$proto24["m_srcTableName"] = "app_logs";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RequestCompleted",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto26["m_sql"] = "`RequestCompleted`";
$proto26["m_srcTableName"] = "app_logs";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "RequestMsg",
	"m_strTable" => "app_logs",
	"m_srcTableName" => "app_logs"
));

$proto28["m_sql"] = "`RequestMsg`";
$proto28["m_srcTableName"] = "app_logs";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "app_logs";
$proto31["m_srcTableName"] = "app_logs";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "log_id";
$proto31["m_columns"][] = "Timestamp";
$proto31["m_columns"][] = "Action";
$proto31["m_columns"][] = "TableName";
$proto31["m_columns"][] = "RecordID";
$proto31["m_columns"][] = "SqlQuery";
$proto31["m_columns"][] = "UserID";
$proto31["m_columns"][] = "ServerIP";
$proto31["m_columns"][] = "RequestUrl";
$proto31["m_columns"][] = "RequestData";
$proto31["m_columns"][] = "RequestCompleted";
$proto31["m_columns"][] = "RequestMsg";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`app_logs`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "app_logs";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="app_logs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_app_logs = createSqlQuery_app_logs();


	
					
;

												

$tdataapp_logs[".sqlquery"] = $queryData_app_logs;

include_once(getabspath("include/app_logs_events.php"));
$tableEvents["app_logs"] = new eventclass_app_logs;
$tdataapp_logs[".hasEvents"] = true;

?>