<?php



$tdatamodel20 = array();
$tdatamodel20[".searchableFields"] = array();
$tdatamodel20[".ShortName"] = "model20";
$tdatamodel20[".OwnerID"] = "";
$tdatamodel20[".OriginalTable"] = "model20";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamodel20[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamodel20[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamodel20[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmodel20 = array();
$fieldToolTipsmodel20 = array();
$pageTitlesmodel20 = array();
$placeHoldersmodel20 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodel20["English"] = array();
	$fieldToolTipsmodel20["English"] = array();
	$placeHoldersmodel20["English"] = array();
	$pageTitlesmodel20["English"] = array();
	$fieldLabelsmodel20["English"]["m20_id"] = "M20 Id";
	$fieldToolTipsmodel20["English"]["m20_id"] = "";
	$placeHoldersmodel20["English"]["m20_id"] = "";
	$fieldLabelsmodel20["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsmodel20["English"]["asset_id"] = "";
	$placeHoldersmodel20["English"]["asset_id"] = "";
	$fieldLabelsmodel20["English"]["quantity"] = "Quantity";
	$fieldToolTipsmodel20["English"]["quantity"] = "";
	$placeHoldersmodel20["English"]["quantity"] = "";
	$fieldLabelsmodel20["English"]["modification"] = "Modification";
	$fieldToolTipsmodel20["English"]["modification"] = "";
	$placeHoldersmodel20["English"]["modification"] = "";
	$fieldLabelsmodel20["English"]["manager_id"] = "Manager Id";
	$fieldToolTipsmodel20["English"]["manager_id"] = "";
	$placeHoldersmodel20["English"]["manager_id"] = "";
	$fieldLabelsmodel20["English"]["empid"] = "Empid";
	$fieldToolTipsmodel20["English"]["empid"] = "";
	$placeHoldersmodel20["English"]["empid"] = "";
	$fieldLabelsmodel20["English"]["date"] = "Date";
	$fieldToolTipsmodel20["English"]["date"] = "";
	$placeHoldersmodel20["English"]["date"] = "";
	$fieldLabelsmodel20["English"]["department"] = "Department";
	$fieldToolTipsmodel20["English"]["department"] = "";
	$placeHoldersmodel20["English"]["department"] = "";
	if (count($fieldToolTipsmodel20["English"]))
		$tdatamodel20[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmodel20["Afrikaans"] = array();
	$fieldToolTipsmodel20["Afrikaans"] = array();
	$placeHoldersmodel20["Afrikaans"] = array();
	$pageTitlesmodel20["Afrikaans"] = array();
	$fieldLabelsmodel20["Afrikaans"]["m20_id"] = "ተ.ቁ";
	$fieldToolTipsmodel20["Afrikaans"]["m20_id"] = "";
	$placeHoldersmodel20["Afrikaans"]["m20_id"] = "";
	$fieldLabelsmodel20["Afrikaans"]["asset_id"] = "የእቃው ኣይነት";
	$fieldToolTipsmodel20["Afrikaans"]["asset_id"] = "";
	$placeHoldersmodel20["Afrikaans"]["asset_id"] = "";
	$fieldLabelsmodel20["Afrikaans"]["quantity"] = "ብዛት";
	$fieldToolTipsmodel20["Afrikaans"]["quantity"] = "";
	$placeHoldersmodel20["Afrikaans"]["quantity"] = "";
	$fieldLabelsmodel20["Afrikaans"]["modification"] = "ማሻሻያ";
	$fieldToolTipsmodel20["Afrikaans"]["modification"] = "";
	$placeHoldersmodel20["Afrikaans"]["modification"] = "";
	$fieldLabelsmodel20["Afrikaans"]["manager_id"] = "ማናጀር";
	$fieldToolTipsmodel20["Afrikaans"]["manager_id"] = "";
	$placeHoldersmodel20["Afrikaans"]["manager_id"] = "";
	$fieldLabelsmodel20["Afrikaans"]["empid"] = "የሰራተኛው መለያ";
	$fieldToolTipsmodel20["Afrikaans"]["empid"] = "";
	$placeHoldersmodel20["Afrikaans"]["empid"] = "";
	$fieldLabelsmodel20["Afrikaans"]["date"] = "ቀን";
	$fieldToolTipsmodel20["Afrikaans"]["date"] = "";
	$placeHoldersmodel20["Afrikaans"]["date"] = "";
	$fieldLabelsmodel20["Afrikaans"]["department"] = "ዲፓርትመንት";
	$fieldToolTipsmodel20["Afrikaans"]["department"] = "";
	$placeHoldersmodel20["Afrikaans"]["department"] = "";
	$pageTitlesmodel20["Afrikaans"]["add"] = "ሞዴል 20 (የእቃ መጠየቂታ ፎርም አዲስ ማስገቢያ";
	$pageTitlesmodel20["Afrikaans"]["edit"] = "ሞዴል 20 (የእቃ መጠየቂታ ፎርም ማስተካከያ";
	$pageTitlesmodel20["Afrikaans"]["import"] = "ሞዴል 20 (የእቃ መጠየቂታ ፎርም ማስገቢያ";
	$pageTitlesmodel20["Afrikaans"]["search"] = "ሞዴል 20 (የእቃ መጠየቂታ ፎርም መፈለጊያ";
	$pageTitlesmodel20["Afrikaans"]["view"] = "ሞዴል 20 ማሳያ";
	if (count($fieldToolTipsmodel20["Afrikaans"]))
		$tdatamodel20[".isUseToolTips"] = true;
}


	$tdatamodel20[".NCSearch"] = true;



$tdatamodel20[".shortTableName"] = "model20";
$tdatamodel20[".nSecOptions"] = 0;

$tdatamodel20[".mainTableOwnerID"] = "";
$tdatamodel20[".entityType"] = 0;

$tdatamodel20[".strOriginalTableName"] = "model20";

		 



$tdatamodel20[".showAddInPopup"] = false;

$tdatamodel20[".showEditInPopup"] = false;

$tdatamodel20[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodel20[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodel20[".listAjax"] = false;
//	temporary
$tdatamodel20[".listAjax"] = false;

	$tdatamodel20[".audit"] = true;

	$tdatamodel20[".locking"] = false;


$pages = $tdatamodel20[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamodel20[".edit"] = true;
	$tdatamodel20[".afterEditAction"] = 1;
	$tdatamodel20[".closePopupAfterEdit"] = 1;
	$tdatamodel20[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamodel20[".add"] = true;
$tdatamodel20[".afterAddAction"] = 1;
$tdatamodel20[".closePopupAfterAdd"] = 1;
$tdatamodel20[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamodel20[".list"] = true;
}



$tdatamodel20[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamodel20[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamodel20[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamodel20[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamodel20[".printFriendly"] = true;
}



$tdatamodel20[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamodel20[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamodel20[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamodel20[".isUseAjaxSuggest"] = true;

$tdatamodel20[".rowHighlite"] = true;



			

$tdatamodel20[".ajaxCodeSnippetAdded"] = false;

$tdatamodel20[".buttonsAdded"] = false;

$tdatamodel20[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodel20[".isUseTimeForSearch"] = false;


$tdatamodel20[".badgeColor"] = "4682B4";


$tdatamodel20[".allSearchFields"] = array();
$tdatamodel20[".filterFields"] = array();
$tdatamodel20[".requiredSearchFields"] = array();

$tdatamodel20[".googleLikeFields"] = array();
$tdatamodel20[".googleLikeFields"][] = "m20_id";
$tdatamodel20[".googleLikeFields"][] = "asset_id";
$tdatamodel20[".googleLikeFields"][] = "quantity";
$tdatamodel20[".googleLikeFields"][] = "modification";
$tdatamodel20[".googleLikeFields"][] = "manager_id";
$tdatamodel20[".googleLikeFields"][] = "empid";
$tdatamodel20[".googleLikeFields"][] = "date";
$tdatamodel20[".googleLikeFields"][] = "department";



$tdatamodel20[".tableType"] = "list";

$tdatamodel20[".printerPageOrientation"] = 0;
$tdatamodel20[".nPrinterPageScale"] = 100;

$tdatamodel20[".nPrinterSplitRecords"] = 40;

$tdatamodel20[".geocodingEnabled"] = false;




$tdatamodel20[".isDisplayLoading"] = true;






$tdatamodel20[".pageSize"] = 20;

$tdatamodel20[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodel20[".strOrderBy"] = $tstrOrderBy;

$tdatamodel20[".orderindexes"] = array();

$tdatamodel20[".sqlHead"] = "SELECT `m20_id`,  	`asset_id`,  	`quantity`,  	`modification`,  	`manager_id`,  	`empid`,  	`date`,  	`department`";
$tdatamodel20[".sqlFrom"] = "FROM `model20`";
$tdatamodel20[".sqlWhereExpr"] = "";
$tdatamodel20[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodel20[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodel20[".arrGroupsPerPage"] = $arrGPP;

$tdatamodel20[".highlightSearchResults"] = true;

$tableKeysmodel20 = array();
$tableKeysmodel20[] = "m20_id";
$tdatamodel20[".Keys"] = $tableKeysmodel20;


$tdatamodel20[".hideMobileList"] = array();




//	m20_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m20_id";
	$fdata["GoodName"] = "m20_id";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","m20_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "m20_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`m20_id`";

	
	
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


	$tdatamodel20["m20_id"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "m20_id";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","asset_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "asset";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "asset_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "asset_name";

				$edata["LookupWhere"] = "taken='no'";


	
	$edata["LookupOrderBy"] = "asset_id";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamodel20["asset_id"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "asset_id";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","quantity");
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


	$tdatamodel20["quantity"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "quantity";
//	modification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "modification";
	$fdata["GoodName"] = "modification";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","modification");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "modification";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`modification`";

	
	
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


	$tdatamodel20["modification"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "modification";
//	manager_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "manager_id";
	$fdata["GoodName"] = "manager_id";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","manager_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "manager_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`manager_id`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "employee";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "manager_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "manager_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "empid", "lookup" => "id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamodel20["manager_id"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "manager_id";
//	empid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "empid";
	$fdata["GoodName"] = "empid";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","empid");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "empid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`empid`";

	
	
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


	$tdatamodel20["empid"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "empid";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","date");
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


	$tdatamodel20["date"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "date";
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "model20";
	$fdata["Label"] = GetFieldLabel("model20","department");
	$fdata["FieldType"] = 200;

	
	
	
										

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "departments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "department_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "department_name";

	

	
	$edata["LookupOrderBy"] = "department_id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamodel20["department"] = $fdata;
		$tdatamodel20[".searchableFields"][] = "department";


$tables_data["model20"]=&$tdatamodel20;
$field_labels["model20"] = &$fieldLabelsmodel20;
$fieldToolTips["model20"] = &$fieldToolTipsmodel20;
$placeHolders["model20"] = &$placeHoldersmodel20;
$page_titles["model20"] = &$pageTitlesmodel20;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["model20"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["model20"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_model20()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`m20_id`,  	`asset_id`,  	`quantity`,  	`modification`,  	`manager_id`,  	`empid`,  	`date`,  	`department`";
$proto0["m_strFrom"] = "FROM `model20`";
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
	"m_strName" => "m20_id",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto6["m_sql"] = "`m20_id`";
$proto6["m_srcTableName"] = "model20";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto8["m_sql"] = "`asset_id`";
$proto8["m_srcTableName"] = "model20";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto10["m_sql"] = "`quantity`";
$proto10["m_srcTableName"] = "model20";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "modification",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto12["m_sql"] = "`modification`";
$proto12["m_srcTableName"] = "model20";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "manager_id",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto14["m_sql"] = "`manager_id`";
$proto14["m_srcTableName"] = "model20";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "empid",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto16["m_sql"] = "`empid`";
$proto16["m_srcTableName"] = "model20";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto18["m_sql"] = "`date`";
$proto18["m_srcTableName"] = "model20";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "model20",
	"m_srcTableName" => "model20"
));

$proto20["m_sql"] = "`department`";
$proto20["m_srcTableName"] = "model20";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "model20";
$proto23["m_srcTableName"] = "model20";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "m20_id";
$proto23["m_columns"][] = "asset_id";
$proto23["m_columns"][] = "quantity";
$proto23["m_columns"][] = "modification";
$proto23["m_columns"][] = "manager_id";
$proto23["m_columns"][] = "empid";
$proto23["m_columns"][] = "date";
$proto23["m_columns"][] = "department";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`model20`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "model20";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="model20";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_model20 = createSqlQuery_model20();


	
					
;

								

$tdatamodel20[".sqlquery"] = $queryData_model20;

include_once(getabspath("include/model20_events.php"));
$tableEvents["model20"] = new eventclass_model20;
$tdatamodel20[".hasEvents"] = true;

?>