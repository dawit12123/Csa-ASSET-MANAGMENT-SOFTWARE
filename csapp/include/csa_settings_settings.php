<?php



$tdatacsa_settings = array();
$tdatacsa_settings[".searchableFields"] = array();
$tdatacsa_settings[".ShortName"] = "csa_settings";
$tdatacsa_settings[".OwnerID"] = "";
$tdatacsa_settings[".OriginalTable"] = "csa_settings";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );

$tdatacsa_settings[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacsa_settings[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacsa_settings[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscsa_settings = array();
$fieldToolTipscsa_settings = array();
$pageTitlescsa_settings = array();
$placeHolderscsa_settings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscsa_settings["English"] = array();
	$fieldToolTipscsa_settings["English"] = array();
	$placeHolderscsa_settings["English"] = array();
	$pageTitlescsa_settings["English"] = array();
	$fieldLabelscsa_settings["English"]["ID"] = "ID";
	$fieldToolTipscsa_settings["English"]["ID"] = "";
	$placeHolderscsa_settings["English"]["ID"] = "";
	$fieldLabelscsa_settings["English"]["TYPE"] = "TYPE";
	$fieldToolTipscsa_settings["English"]["TYPE"] = "";
	$placeHolderscsa_settings["English"]["TYPE"] = "";
	$fieldLabelscsa_settings["English"]["NAME"] = "NAME";
	$fieldToolTipscsa_settings["English"]["NAME"] = "";
	$placeHolderscsa_settings["English"]["NAME"] = "";
	$fieldLabelscsa_settings["English"]["USERNAME"] = "USERNAME";
	$fieldToolTipscsa_settings["English"]["USERNAME"] = "";
	$placeHolderscsa_settings["English"]["USERNAME"] = "";
	$fieldLabelscsa_settings["English"]["COOKIE"] = "COOKIE";
	$fieldToolTipscsa_settings["English"]["COOKIE"] = "";
	$placeHolderscsa_settings["English"]["COOKIE"] = "";
	$fieldLabelscsa_settings["English"]["SEARCH"] = "SEARCH";
	$fieldToolTipscsa_settings["English"]["SEARCH"] = "";
	$placeHolderscsa_settings["English"]["SEARCH"] = "";
	$fieldLabelscsa_settings["English"]["TABLENAME"] = "TABLENAME";
	$fieldToolTipscsa_settings["English"]["TABLENAME"] = "";
	$placeHolderscsa_settings["English"]["TABLENAME"] = "";
	if (count($fieldToolTipscsa_settings["English"]))
		$tdatacsa_settings[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscsa_settings["Afrikaans"] = array();
	$fieldToolTipscsa_settings["Afrikaans"] = array();
	$placeHolderscsa_settings["Afrikaans"] = array();
	$pageTitlescsa_settings["Afrikaans"] = array();
	$fieldLabelscsa_settings["Afrikaans"]["ID"] = "ተ.ቁ";
	$fieldToolTipscsa_settings["Afrikaans"]["ID"] = "";
	$placeHolderscsa_settings["Afrikaans"]["ID"] = "ተ.ቁ";
	$fieldLabelscsa_settings["Afrikaans"]["TYPE"] = "አይነት";
	$fieldToolTipscsa_settings["Afrikaans"]["TYPE"] = "";
	$placeHolderscsa_settings["Afrikaans"]["TYPE"] = "አይነት";
	$fieldLabelscsa_settings["Afrikaans"]["NAME"] = "ስም";
	$fieldToolTipscsa_settings["Afrikaans"]["NAME"] = "";
	$placeHolderscsa_settings["Afrikaans"]["NAME"] = "ስም";
	$fieldLabelscsa_settings["Afrikaans"]["USERNAME"] = "የመጠቀሚያ ስም";
	$fieldToolTipscsa_settings["Afrikaans"]["USERNAME"] = "";
	$placeHolderscsa_settings["Afrikaans"]["USERNAME"] = "የመጠቀሚያ ስም";
	$fieldLabelscsa_settings["Afrikaans"]["COOKIE"] = "ኩኪስ";
	$fieldToolTipscsa_settings["Afrikaans"]["COOKIE"] = "";
	$placeHolderscsa_settings["Afrikaans"]["COOKIE"] = "ኩኪስ";
	$fieldLabelscsa_settings["Afrikaans"]["SEARCH"] = "ፍልጋ";
	$fieldToolTipscsa_settings["Afrikaans"]["SEARCH"] = "";
	$placeHolderscsa_settings["Afrikaans"]["SEARCH"] = "ፍልጋ";
	$fieldLabelscsa_settings["Afrikaans"]["TABLENAME"] = "የቴብሉ ስም";
	$fieldToolTipscsa_settings["Afrikaans"]["TABLENAME"] = "";
	$placeHolderscsa_settings["Afrikaans"]["TABLENAME"] = "የቴብሉ ስም";
	$pageTitlescsa_settings["Afrikaans"]["add"] = "ሴቲንግ አዲስ ማስገቢያ";
	$pageTitlescsa_settings["Afrikaans"]["edit"] = "ሴቲንግ ማስተካከያ";
	$pageTitlescsa_settings["Afrikaans"]["search"] = "ሴቲንግ መፈለጊያ";
	if (count($fieldToolTipscsa_settings["Afrikaans"]))
		$tdatacsa_settings[".isUseToolTips"] = true;
}


	$tdatacsa_settings[".NCSearch"] = true;



$tdatacsa_settings[".shortTableName"] = "csa_settings";
$tdatacsa_settings[".nSecOptions"] = 0;

$tdatacsa_settings[".mainTableOwnerID"] = "";
$tdatacsa_settings[".entityType"] = 0;

$tdatacsa_settings[".strOriginalTableName"] = "csa_settings";

		 



$tdatacsa_settings[".showAddInPopup"] = false;

$tdatacsa_settings[".showEditInPopup"] = false;

$tdatacsa_settings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacsa_settings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacsa_settings[".listAjax"] = false;
//	temporary
$tdatacsa_settings[".listAjax"] = false;

	$tdatacsa_settings[".audit"] = true;

	$tdatacsa_settings[".locking"] = false;


$pages = $tdatacsa_settings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacsa_settings[".edit"] = true;
	$tdatacsa_settings[".afterEditAction"] = 1;
	$tdatacsa_settings[".closePopupAfterEdit"] = 1;
	$tdatacsa_settings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacsa_settings[".add"] = true;
$tdatacsa_settings[".afterAddAction"] = 1;
$tdatacsa_settings[".closePopupAfterAdd"] = 1;
$tdatacsa_settings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacsa_settings[".list"] = true;
}



$tdatacsa_settings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacsa_settings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacsa_settings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacsa_settings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacsa_settings[".printFriendly"] = true;
}



$tdatacsa_settings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacsa_settings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacsa_settings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacsa_settings[".isUseAjaxSuggest"] = true;

$tdatacsa_settings[".rowHighlite"] = true;



			

$tdatacsa_settings[".ajaxCodeSnippetAdded"] = false;

$tdatacsa_settings[".buttonsAdded"] = false;

$tdatacsa_settings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacsa_settings[".isUseTimeForSearch"] = false;


$tdatacsa_settings[".badgeColor"] = "778899";


$tdatacsa_settings[".allSearchFields"] = array();
$tdatacsa_settings[".filterFields"] = array();
$tdatacsa_settings[".requiredSearchFields"] = array();

$tdatacsa_settings[".googleLikeFields"] = array();
$tdatacsa_settings[".googleLikeFields"][] = "ID";
$tdatacsa_settings[".googleLikeFields"][] = "TYPE";
$tdatacsa_settings[".googleLikeFields"][] = "NAME";
$tdatacsa_settings[".googleLikeFields"][] = "USERNAME";
$tdatacsa_settings[".googleLikeFields"][] = "COOKIE";
$tdatacsa_settings[".googleLikeFields"][] = "SEARCH";
$tdatacsa_settings[".googleLikeFields"][] = "TABLENAME";



$tdatacsa_settings[".tableType"] = "list";

$tdatacsa_settings[".printerPageOrientation"] = 0;
$tdatacsa_settings[".nPrinterPageScale"] = 100;

$tdatacsa_settings[".nPrinterSplitRecords"] = 40;

$tdatacsa_settings[".geocodingEnabled"] = false;










$tdatacsa_settings[".pageSize"] = 20;

$tdatacsa_settings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacsa_settings[".strOrderBy"] = $tstrOrderBy;

$tdatacsa_settings[".orderindexes"] = array();

$tdatacsa_settings[".sqlHead"] = "SELECT `ID`,  	`TYPE`,  	`NAME`,  	`USERNAME`,  	`COOKIE`,  	`SEARCH`,  	`TABLENAME`";
$tdatacsa_settings[".sqlFrom"] = "FROM `csa_settings`";
$tdatacsa_settings[".sqlWhereExpr"] = "";
$tdatacsa_settings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacsa_settings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacsa_settings[".arrGroupsPerPage"] = $arrGPP;

$tdatacsa_settings[".highlightSearchResults"] = true;

$tableKeyscsa_settings = array();
$tableKeyscsa_settings[] = "ID";
$tdatacsa_settings[".Keys"] = $tableKeyscsa_settings;


$tdatacsa_settings[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ID`";

	
	
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


	$tdatacsa_settings["ID"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "ID";
//	TYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TYPE";
	$fdata["GoodName"] = "TYPE";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","TYPE");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "TYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TYPE`";

	
	
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


	$tdatacsa_settings["TYPE"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "TYPE";
//	NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NAME";
	$fdata["GoodName"] = "NAME";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","NAME");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NAME`";

	
	
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


	$tdatacsa_settings["NAME"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "NAME";
//	USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USERNAME";
	$fdata["GoodName"] = "USERNAME";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","USERNAME");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "USERNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`USERNAME`";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatacsa_settings["USERNAME"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "USERNAME";
//	COOKIE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COOKIE";
	$fdata["GoodName"] = "COOKIE";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","COOKIE");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "COOKIE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`COOKIE`";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatacsa_settings["COOKIE"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "COOKIE";
//	SEARCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SEARCH";
	$fdata["GoodName"] = "SEARCH";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","SEARCH");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "SEARCH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SEARCH`";

	
	
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


	$tdatacsa_settings["SEARCH"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "SEARCH";
//	TABLENAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TABLENAME";
	$fdata["GoodName"] = "TABLENAME";
	$fdata["ownerTable"] = "csa_settings";
	$fdata["Label"] = GetFieldLabel("csa_settings","TABLENAME");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "TABLENAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TABLENAME`";

	
	
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


	$tdatacsa_settings["TABLENAME"] = $fdata;
		$tdatacsa_settings[".searchableFields"][] = "TABLENAME";


$tables_data["csa_settings"]=&$tdatacsa_settings;
$field_labels["csa_settings"] = &$fieldLabelscsa_settings;
$fieldToolTips["csa_settings"] = &$fieldToolTipscsa_settings;
$placeHolders["csa_settings"] = &$placeHolderscsa_settings;
$page_titles["csa_settings"] = &$pageTitlescsa_settings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["csa_settings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["csa_settings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_csa_settings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ID`,  	`TYPE`,  	`NAME`,  	`USERNAME`,  	`COOKIE`,  	`SEARCH`,  	`TABLENAME`";
$proto0["m_strFrom"] = "FROM `csa_settings`";
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
	"m_strName" => "ID",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto6["m_sql"] = "`ID`";
$proto6["m_srcTableName"] = "csa_settings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TYPE",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto8["m_sql"] = "`TYPE`";
$proto8["m_srcTableName"] = "csa_settings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NAME",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto10["m_sql"] = "`NAME`";
$proto10["m_srcTableName"] = "csa_settings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto12["m_sql"] = "`USERNAME`";
$proto12["m_srcTableName"] = "csa_settings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "COOKIE",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto14["m_sql"] = "`COOKIE`";
$proto14["m_srcTableName"] = "csa_settings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto16["m_sql"] = "`SEARCH`";
$proto16["m_srcTableName"] = "csa_settings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TABLENAME",
	"m_strTable" => "csa_settings",
	"m_srcTableName" => "csa_settings"
));

$proto18["m_sql"] = "`TABLENAME`";
$proto18["m_srcTableName"] = "csa_settings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "csa_settings";
$proto21["m_srcTableName"] = "csa_settings";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "TYPE";
$proto21["m_columns"][] = "NAME";
$proto21["m_columns"][] = "USERNAME";
$proto21["m_columns"][] = "COOKIE";
$proto21["m_columns"][] = "SEARCH";
$proto21["m_columns"][] = "TABLENAME";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`csa_settings`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "csa_settings";
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
$proto0["m_srcTableName"]="csa_settings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_csa_settings = createSqlQuery_csa_settings();


	
					
;

							

$tdatacsa_settings[".sqlquery"] = $queryData_csa_settings;

$tableEvents["csa_settings"] = new eventsBase;
$tdatacsa_settings[".hasEvents"] = false;

?>