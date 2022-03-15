<?php



$tdatacsa_locking = array();
$tdatacsa_locking[".searchableFields"] = array();
$tdatacsa_locking[".ShortName"] = "csa_locking";
$tdatacsa_locking[".OwnerID"] = "";
$tdatacsa_locking[".OriginalTable"] = "csa_locking";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacsa_locking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacsa_locking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacsa_locking[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscsa_locking = array();
$fieldToolTipscsa_locking = array();
$pageTitlescsa_locking = array();
$placeHolderscsa_locking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscsa_locking["English"] = array();
	$fieldToolTipscsa_locking["English"] = array();
	$placeHolderscsa_locking["English"] = array();
	$pageTitlescsa_locking["English"] = array();
	$fieldLabelscsa_locking["English"]["id"] = "Id";
	$fieldToolTipscsa_locking["English"]["id"] = "";
	$placeHolderscsa_locking["English"]["id"] = "";
	$fieldLabelscsa_locking["English"]["table"] = "Table";
	$fieldToolTipscsa_locking["English"]["table"] = "";
	$placeHolderscsa_locking["English"]["table"] = "";
	$fieldLabelscsa_locking["English"]["startdatetime"] = "Startdatetime";
	$fieldToolTipscsa_locking["English"]["startdatetime"] = "";
	$placeHolderscsa_locking["English"]["startdatetime"] = "";
	$fieldLabelscsa_locking["English"]["confirmdatetime"] = "Confirmdatetime";
	$fieldToolTipscsa_locking["English"]["confirmdatetime"] = "";
	$placeHolderscsa_locking["English"]["confirmdatetime"] = "";
	$fieldLabelscsa_locking["English"]["keys"] = "Keys";
	$fieldToolTipscsa_locking["English"]["keys"] = "";
	$placeHolderscsa_locking["English"]["keys"] = "";
	$fieldLabelscsa_locking["English"]["sessionid"] = "Sessionid";
	$fieldToolTipscsa_locking["English"]["sessionid"] = "";
	$placeHolderscsa_locking["English"]["sessionid"] = "";
	$fieldLabelscsa_locking["English"]["userid"] = "Userid";
	$fieldToolTipscsa_locking["English"]["userid"] = "";
	$placeHolderscsa_locking["English"]["userid"] = "";
	$fieldLabelscsa_locking["English"]["action"] = "Action";
	$fieldToolTipscsa_locking["English"]["action"] = "";
	$placeHolderscsa_locking["English"]["action"] = "";
	if (count($fieldToolTipscsa_locking["English"]))
		$tdatacsa_locking[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscsa_locking["Afrikaans"] = array();
	$fieldToolTipscsa_locking["Afrikaans"] = array();
	$placeHolderscsa_locking["Afrikaans"] = array();
	$pageTitlescsa_locking["Afrikaans"] = array();
	$fieldLabelscsa_locking["Afrikaans"]["id"] = "ተ.ቁ";
	$fieldToolTipscsa_locking["Afrikaans"]["id"] = "";
	$placeHolderscsa_locking["Afrikaans"]["id"] = "ተ.ቁ";
	$fieldLabelscsa_locking["Afrikaans"]["table"] = "ቴብል";
	$fieldToolTipscsa_locking["Afrikaans"]["table"] = "";
	$placeHolderscsa_locking["Afrikaans"]["table"] = "ቴብል";
	$fieldLabelscsa_locking["Afrikaans"]["startdatetime"] = "የጀመረበት ቀን";
	$fieldToolTipscsa_locking["Afrikaans"]["startdatetime"] = "";
	$placeHolderscsa_locking["Afrikaans"]["startdatetime"] = "የጀመረበት ቀን";
	$fieldLabelscsa_locking["Afrikaans"]["confirmdatetime"] = "ያረጋገጠበት ቀን";
	$fieldToolTipscsa_locking["Afrikaans"]["confirmdatetime"] = "";
	$placeHolderscsa_locking["Afrikaans"]["confirmdatetime"] = "ያረጋገጠበት ቀን";
	$fieldLabelscsa_locking["Afrikaans"]["keys"] = "ቁልፍ";
	$fieldToolTipscsa_locking["Afrikaans"]["keys"] = "";
	$placeHolderscsa_locking["Afrikaans"]["keys"] = "ቁልፍ";
	$fieldLabelscsa_locking["Afrikaans"]["sessionid"] = "ሴዥን አይዲ";
	$fieldToolTipscsa_locking["Afrikaans"]["sessionid"] = "";
	$placeHolderscsa_locking["Afrikaans"]["sessionid"] = "ሴዥን አይዲ";
	$fieldLabelscsa_locking["Afrikaans"]["userid"] = "የተጠቃሚው መለያ";
	$fieldToolTipscsa_locking["Afrikaans"]["userid"] = "";
	$placeHolderscsa_locking["Afrikaans"]["userid"] = "የተጠቃሚው መለያ";
	$fieldLabelscsa_locking["Afrikaans"]["action"] = "እንቅስቃሴ";
	$fieldToolTipscsa_locking["Afrikaans"]["action"] = "";
	$placeHolderscsa_locking["Afrikaans"]["action"] = "እንቅስቃሴ";
	$pageTitlescsa_locking["Afrikaans"]["add"] = "የተቆለፉ አዲስ ማስገቢያ";
	$pageTitlescsa_locking["Afrikaans"]["edit"] = "የተቆለፉ ማስተካከያ";
	$pageTitlescsa_locking["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlescsa_locking["Afrikaans"]["search"] = "የተቆለፉ መፈለጊያ";
	$pageTitlescsa_locking["Afrikaans"]["view"] = "የተቆለፉ ማሳያ";
	if (count($fieldToolTipscsa_locking["Afrikaans"]))
		$tdatacsa_locking[".isUseToolTips"] = true;
}


	$tdatacsa_locking[".NCSearch"] = true;



$tdatacsa_locking[".shortTableName"] = "csa_locking";
$tdatacsa_locking[".nSecOptions"] = 0;

$tdatacsa_locking[".mainTableOwnerID"] = "";
$tdatacsa_locking[".entityType"] = 0;

$tdatacsa_locking[".strOriginalTableName"] = "csa_locking";

		 



$tdatacsa_locking[".showAddInPopup"] = false;

$tdatacsa_locking[".showEditInPopup"] = false;

$tdatacsa_locking[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacsa_locking[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacsa_locking[".listAjax"] = false;
//	temporary
$tdatacsa_locking[".listAjax"] = false;

	$tdatacsa_locking[".audit"] = true;

	$tdatacsa_locking[".locking"] = false;


$pages = $tdatacsa_locking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacsa_locking[".edit"] = true;
	$tdatacsa_locking[".afterEditAction"] = 1;
	$tdatacsa_locking[".closePopupAfterEdit"] = 1;
	$tdatacsa_locking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacsa_locking[".add"] = true;
$tdatacsa_locking[".afterAddAction"] = 1;
$tdatacsa_locking[".closePopupAfterAdd"] = 1;
$tdatacsa_locking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacsa_locking[".list"] = true;
}



$tdatacsa_locking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacsa_locking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacsa_locking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacsa_locking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacsa_locking[".printFriendly"] = true;
}



$tdatacsa_locking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacsa_locking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacsa_locking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacsa_locking[".isUseAjaxSuggest"] = true;

$tdatacsa_locking[".rowHighlite"] = true;



			

$tdatacsa_locking[".ajaxCodeSnippetAdded"] = false;

$tdatacsa_locking[".buttonsAdded"] = false;

$tdatacsa_locking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacsa_locking[".isUseTimeForSearch"] = false;


$tdatacsa_locking[".badgeColor"] = "6B8E23";


$tdatacsa_locking[".allSearchFields"] = array();
$tdatacsa_locking[".filterFields"] = array();
$tdatacsa_locking[".requiredSearchFields"] = array();

$tdatacsa_locking[".googleLikeFields"] = array();
$tdatacsa_locking[".googleLikeFields"][] = "id";
$tdatacsa_locking[".googleLikeFields"][] = "table";
$tdatacsa_locking[".googleLikeFields"][] = "startdatetime";
$tdatacsa_locking[".googleLikeFields"][] = "confirmdatetime";
$tdatacsa_locking[".googleLikeFields"][] = "keys";
$tdatacsa_locking[".googleLikeFields"][] = "sessionid";
$tdatacsa_locking[".googleLikeFields"][] = "userid";
$tdatacsa_locking[".googleLikeFields"][] = "action";



$tdatacsa_locking[".tableType"] = "list";

$tdatacsa_locking[".printerPageOrientation"] = 0;
$tdatacsa_locking[".nPrinterPageScale"] = 100;

$tdatacsa_locking[".nPrinterSplitRecords"] = 40;

$tdatacsa_locking[".geocodingEnabled"] = false;










$tdatacsa_locking[".pageSize"] = 20;

$tdatacsa_locking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacsa_locking[".strOrderBy"] = $tstrOrderBy;

$tdatacsa_locking[".orderindexes"] = array();

$tdatacsa_locking[".sqlHead"] = "SELECT `id`,  	`table`,  	`startdatetime`,  	`confirmdatetime`,  	`keys`,  	`sessionid`,  	`userid`,  	`action`";
$tdatacsa_locking[".sqlFrom"] = "FROM `csa_locking`";
$tdatacsa_locking[".sqlWhereExpr"] = "";
$tdatacsa_locking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacsa_locking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacsa_locking[".arrGroupsPerPage"] = $arrGPP;

$tdatacsa_locking[".highlightSearchResults"] = true;

$tableKeyscsa_locking = array();
$tableKeyscsa_locking[] = "id";
$tdatacsa_locking[".Keys"] = $tableKeyscsa_locking;


$tdatacsa_locking[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","id");
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


	$tdatacsa_locking["id"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "id";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","table");
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


	$tdatacsa_locking["table"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "table";
//	startdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startdatetime";
	$fdata["GoodName"] = "startdatetime";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","startdatetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "startdatetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`startdatetime`";

	
	
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


	$tdatacsa_locking["startdatetime"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "startdatetime";
//	confirmdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "confirmdatetime";
	$fdata["GoodName"] = "confirmdatetime";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","confirmdatetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "confirmdatetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`confirmdatetime`";

	
	
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


	$tdatacsa_locking["confirmdatetime"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "confirmdatetime";
//	keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keys";
	$fdata["GoodName"] = "keys";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","keys");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "keys";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`keys`";

	
	
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


	$tdatacsa_locking["keys"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "keys";
//	sessionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sessionid";
	$fdata["GoodName"] = "sessionid";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","sessionid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "sessionid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sessionid`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacsa_locking["sessionid"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "sessionid";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","userid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`userid`";

	
	
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

	
		
	$edata["LinkField"] = "ext_security_id";
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


	$tdatacsa_locking["userid"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "userid";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "csa_locking";
	$fdata["Label"] = GetFieldLabel("csa_locking","action");
	$fdata["FieldType"] = 3;

	
	
	
										

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


	$tdatacsa_locking["action"] = $fdata;
		$tdatacsa_locking[".searchableFields"][] = "action";


$tables_data["csa_locking"]=&$tdatacsa_locking;
$field_labels["csa_locking"] = &$fieldLabelscsa_locking;
$fieldToolTips["csa_locking"] = &$fieldToolTipscsa_locking;
$placeHolders["csa_locking"] = &$placeHolderscsa_locking;
$page_titles["csa_locking"] = &$pageTitlescsa_locking;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["csa_locking"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["csa_locking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_csa_locking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`table`,  	`startdatetime`,  	`confirmdatetime`,  	`keys`,  	`sessionid`,  	`userid`,  	`action`";
$proto0["m_strFrom"] = "FROM `csa_locking`";
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
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "csa_locking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto8["m_sql"] = "`table`";
$proto8["m_srcTableName"] = "csa_locking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startdatetime",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto10["m_sql"] = "`startdatetime`";
$proto10["m_srcTableName"] = "csa_locking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmdatetime",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto12["m_sql"] = "`confirmdatetime`";
$proto12["m_srcTableName"] = "csa_locking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keys",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto14["m_sql"] = "`keys`";
$proto14["m_srcTableName"] = "csa_locking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sessionid",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto16["m_sql"] = "`sessionid`";
$proto16["m_srcTableName"] = "csa_locking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto18["m_sql"] = "`userid`";
$proto18["m_srcTableName"] = "csa_locking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "csa_locking",
	"m_srcTableName" => "csa_locking"
));

$proto20["m_sql"] = "`action`";
$proto20["m_srcTableName"] = "csa_locking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "csa_locking";
$proto23["m_srcTableName"] = "csa_locking";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "table";
$proto23["m_columns"][] = "startdatetime";
$proto23["m_columns"][] = "confirmdatetime";
$proto23["m_columns"][] = "keys";
$proto23["m_columns"][] = "sessionid";
$proto23["m_columns"][] = "userid";
$proto23["m_columns"][] = "action";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`csa_locking`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "csa_locking";
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
$proto0["m_srcTableName"]="csa_locking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_csa_locking = createSqlQuery_csa_locking();


	
					
;

								

$tdatacsa_locking[".sqlquery"] = $queryData_csa_locking;

$tableEvents["csa_locking"] = new eventsBase;
$tdatacsa_locking[".hasEvents"] = false;

?>