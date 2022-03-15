<?php



$tdatacsa_audit = array();
$tdatacsa_audit[".searchableFields"] = array();
$tdatacsa_audit[".ShortName"] = "csa_audit";
$tdatacsa_audit[".OwnerID"] = "";
$tdatacsa_audit[".OriginalTable"] = "csa_audit";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacsa_audit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacsa_audit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacsa_audit[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscsa_audit = array();
$fieldToolTipscsa_audit = array();
$pageTitlescsa_audit = array();
$placeHolderscsa_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscsa_audit["English"] = array();
	$fieldToolTipscsa_audit["English"] = array();
	$placeHolderscsa_audit["English"] = array();
	$pageTitlescsa_audit["English"] = array();
	$fieldLabelscsa_audit["English"]["id"] = "Id";
	$fieldToolTipscsa_audit["English"]["id"] = "";
	$placeHolderscsa_audit["English"]["id"] = "";
	$fieldLabelscsa_audit["English"]["datetime"] = "Datetime";
	$fieldToolTipscsa_audit["English"]["datetime"] = "";
	$placeHolderscsa_audit["English"]["datetime"] = "";
	$fieldLabelscsa_audit["English"]["ip"] = "Ip";
	$fieldToolTipscsa_audit["English"]["ip"] = "";
	$placeHolderscsa_audit["English"]["ip"] = "";
	$fieldLabelscsa_audit["English"]["user"] = "User";
	$fieldToolTipscsa_audit["English"]["user"] = "";
	$placeHolderscsa_audit["English"]["user"] = "";
	$fieldLabelscsa_audit["English"]["table"] = "Table";
	$fieldToolTipscsa_audit["English"]["table"] = "";
	$placeHolderscsa_audit["English"]["table"] = "";
	$fieldLabelscsa_audit["English"]["action"] = "Action";
	$fieldToolTipscsa_audit["English"]["action"] = "";
	$placeHolderscsa_audit["English"]["action"] = "";
	$fieldLabelscsa_audit["English"]["description"] = "Description";
	$fieldToolTipscsa_audit["English"]["description"] = "";
	$placeHolderscsa_audit["English"]["description"] = "";
	if (count($fieldToolTipscsa_audit["English"]))
		$tdatacsa_audit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscsa_audit["Afrikaans"] = array();
	$fieldToolTipscsa_audit["Afrikaans"] = array();
	$placeHolderscsa_audit["Afrikaans"] = array();
	$pageTitlescsa_audit["Afrikaans"] = array();
	$fieldLabelscsa_audit["Afrikaans"]["id"] = "ተ.ቁ";
	$fieldToolTipscsa_audit["Afrikaans"]["id"] = "";
	$placeHolderscsa_audit["Afrikaans"]["id"] = "ተ.ቁ";
	$fieldLabelscsa_audit["Afrikaans"]["datetime"] = "ቀን እና ሰዐት";
	$fieldToolTipscsa_audit["Afrikaans"]["datetime"] = "";
	$placeHolderscsa_audit["Afrikaans"]["datetime"] = "ቀን እና ሰዐት";
	$fieldLabelscsa_audit["Afrikaans"]["ip"] = "ኤይፒ";
	$fieldToolTipscsa_audit["Afrikaans"]["ip"] = "";
	$placeHolderscsa_audit["Afrikaans"]["ip"] = "ኤይፒ";
	$fieldLabelscsa_audit["Afrikaans"]["user"] = "ተጠቃሚ";
	$fieldToolTipscsa_audit["Afrikaans"]["user"] = "";
	$placeHolderscsa_audit["Afrikaans"]["user"] = "ተጠቃሚ";
	$fieldLabelscsa_audit["Afrikaans"]["table"] = "ቴብል";
	$fieldToolTipscsa_audit["Afrikaans"]["table"] = "";
	$placeHolderscsa_audit["Afrikaans"]["table"] = "ቴብል";
	$fieldLabelscsa_audit["Afrikaans"]["action"] = "እንቅስቃሴ";
	$fieldToolTipscsa_audit["Afrikaans"]["action"] = "";
	$placeHolderscsa_audit["Afrikaans"]["action"] = "እንቅስቃሴ";
	$fieldLabelscsa_audit["Afrikaans"]["description"] = "መግለጫ";
	$fieldToolTipscsa_audit["Afrikaans"]["description"] = "";
	$placeHolderscsa_audit["Afrikaans"]["description"] = "መግለጫ";
	$pageTitlescsa_audit["Afrikaans"]["add"] = "እንቅስቃሴዎችን ማሳያ አዲስ ማስገቢያ";
	$pageTitlescsa_audit["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlescsa_audit["Afrikaans"]["search"] = "እንቅስቃሴዎችን ማሳያ ";
	$pageTitlescsa_audit["Afrikaans"]["view"] = "እንቅስቃሴዎችን ማሳያ";
	if (count($fieldToolTipscsa_audit["Afrikaans"]))
		$tdatacsa_audit[".isUseToolTips"] = true;
}


	$tdatacsa_audit[".NCSearch"] = true;



$tdatacsa_audit[".shortTableName"] = "csa_audit";
$tdatacsa_audit[".nSecOptions"] = 0;

$tdatacsa_audit[".mainTableOwnerID"] = "";
$tdatacsa_audit[".entityType"] = 0;

$tdatacsa_audit[".strOriginalTableName"] = "csa_audit";

		 



$tdatacsa_audit[".showAddInPopup"] = false;

$tdatacsa_audit[".showEditInPopup"] = false;

$tdatacsa_audit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacsa_audit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacsa_audit[".listAjax"] = false;
//	temporary
$tdatacsa_audit[".listAjax"] = false;

	$tdatacsa_audit[".audit"] = true;

	$tdatacsa_audit[".locking"] = true;


$pages = $tdatacsa_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacsa_audit[".edit"] = true;
	$tdatacsa_audit[".afterEditAction"] = 1;
	$tdatacsa_audit[".closePopupAfterEdit"] = 1;
	$tdatacsa_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacsa_audit[".add"] = true;
$tdatacsa_audit[".afterAddAction"] = 1;
$tdatacsa_audit[".closePopupAfterAdd"] = 1;
$tdatacsa_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacsa_audit[".list"] = true;
}



$tdatacsa_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacsa_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacsa_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacsa_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacsa_audit[".printFriendly"] = true;
}



$tdatacsa_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacsa_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacsa_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacsa_audit[".isUseAjaxSuggest"] = true;

$tdatacsa_audit[".rowHighlite"] = true;



			

$tdatacsa_audit[".ajaxCodeSnippetAdded"] = false;

$tdatacsa_audit[".buttonsAdded"] = false;

$tdatacsa_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacsa_audit[".isUseTimeForSearch"] = false;


$tdatacsa_audit[".badgeColor"] = "D2AF80";


$tdatacsa_audit[".allSearchFields"] = array();
$tdatacsa_audit[".filterFields"] = array();
$tdatacsa_audit[".requiredSearchFields"] = array();

$tdatacsa_audit[".googleLikeFields"] = array();
$tdatacsa_audit[".googleLikeFields"][] = "id";
$tdatacsa_audit[".googleLikeFields"][] = "datetime";
$tdatacsa_audit[".googleLikeFields"][] = "ip";
$tdatacsa_audit[".googleLikeFields"][] = "user";
$tdatacsa_audit[".googleLikeFields"][] = "table";
$tdatacsa_audit[".googleLikeFields"][] = "action";
$tdatacsa_audit[".googleLikeFields"][] = "description";



$tdatacsa_audit[".tableType"] = "list";

$tdatacsa_audit[".printerPageOrientation"] = 0;
$tdatacsa_audit[".nPrinterPageScale"] = 100;

$tdatacsa_audit[".nPrinterSplitRecords"] = 40;

$tdatacsa_audit[".geocodingEnabled"] = false;










$tdatacsa_audit[".pageSize"] = 20;

$tdatacsa_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacsa_audit[".strOrderBy"] = $tstrOrderBy;

$tdatacsa_audit[".orderindexes"] = array();

$tdatacsa_audit[".sqlHead"] = "SELECT `id`,  	`datetime`,  	`ip`,  	`user`,  	`table`,  	`action`,  	`description`";
$tdatacsa_audit[".sqlFrom"] = "FROM `csa_audit`";
$tdatacsa_audit[".sqlWhereExpr"] = "";
$tdatacsa_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacsa_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacsa_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatacsa_audit[".highlightSearchResults"] = true;

$tableKeyscsa_audit = array();
$tableKeyscsa_audit[] = "id";
$tdatacsa_audit[".Keys"] = $tableKeyscsa_audit;


$tdatacsa_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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


	$tdatacsa_audit["id"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatacsa_audit["datetime"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","ip");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "ip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ip`";

	
	
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


		$edata["strEditMask"] = "999.999.999.999";

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacsa_audit["ip"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","user");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "ID";

	
	
	
	

	
	
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


	$tdatacsa_audit["user"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatacsa_audit["table"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","action");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "action";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatacsa_audit["action"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "csa_audit";
	$fdata["Label"] = GetFieldLabel("csa_audit","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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


	$tdatacsa_audit["description"] = $fdata;
		$tdatacsa_audit[".searchableFields"][] = "description";


$tables_data["csa_audit"]=&$tdatacsa_audit;
$field_labels["csa_audit"] = &$fieldLabelscsa_audit;
$fieldToolTips["csa_audit"] = &$fieldToolTipscsa_audit;
$placeHolders["csa_audit"] = &$placeHolderscsa_audit;
$page_titles["csa_audit"] = &$pageTitlescsa_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["csa_audit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["csa_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_csa_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`datetime`,  	`ip`,  	`user`,  	`table`,  	`action`,  	`description`";
$proto0["m_strFrom"] = "FROM `csa_audit`";
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
	"m_strName" => "id",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "csa_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "csa_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto10["m_sql"] = "`ip`";
$proto10["m_srcTableName"] = "csa_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "csa_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "csa_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "csa_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "csa_audit",
	"m_srcTableName" => "csa_audit"
));

$proto18["m_sql"] = "`description`";
$proto18["m_srcTableName"] = "csa_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "csa_audit";
$proto21["m_srcTableName"] = "csa_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`csa_audit`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "csa_audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="csa_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_csa_audit = createSqlQuery_csa_audit();


	
					
;

							

$tdatacsa_audit[".sqlquery"] = $queryData_csa_audit;

include_once(getabspath("include/csa_audit_events.php"));
$tableEvents["csa_audit"] = new eventclass_csa_audit;
$tdatacsa_audit[".hasEvents"] = true;

?>