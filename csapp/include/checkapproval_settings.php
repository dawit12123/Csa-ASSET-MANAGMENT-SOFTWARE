<?php



$tdatacheckapproval = array();
$tdatacheckapproval[".searchableFields"] = array();
$tdatacheckapproval[".ShortName"] = "checkapproval";
$tdatacheckapproval[".OwnerID"] = "";
$tdatacheckapproval[".OriginalTable"] = "checkapproval";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacheckapproval[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacheckapproval[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacheckapproval[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscheckapproval = array();
$fieldToolTipscheckapproval = array();
$pageTitlescheckapproval = array();
$placeHolderscheckapproval = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscheckapproval["English"] = array();
	$fieldToolTipscheckapproval["English"] = array();
	$placeHolderscheckapproval["English"] = array();
	$pageTitlescheckapproval["English"] = array();
	$fieldLabelscheckapproval["English"]["cid"] = "Cid";
	$fieldToolTipscheckapproval["English"]["cid"] = "";
	$placeHolderscheckapproval["English"]["cid"] = "";
	$fieldLabelscheckapproval["English"]["assetid"] = "Assetid";
	$fieldToolTipscheckapproval["English"]["assetid"] = "";
	$placeHolderscheckapproval["English"]["assetid"] = "";
	$fieldLabelscheckapproval["English"]["ictdeptemp"] = "Ictdeptemp";
	$fieldToolTipscheckapproval["English"]["ictdeptemp"] = "";
	$placeHolderscheckapproval["English"]["ictdeptemp"] = "";
	$fieldLabelscheckapproval["English"]["ictdeptmanager"] = "Ictdeptmanager";
	$fieldToolTipscheckapproval["English"]["ictdeptmanager"] = "";
	$placeHolderscheckapproval["English"]["ictdeptmanager"] = "";
	$fieldLabelscheckapproval["English"]["empid"] = "Empid";
	$fieldToolTipscheckapproval["English"]["empid"] = "";
	$placeHolderscheckapproval["English"]["empid"] = "";
	$fieldLabelscheckapproval["English"]["transactionid"] = "Transactionid";
	$fieldToolTipscheckapproval["English"]["transactionid"] = "";
	$placeHolderscheckapproval["English"]["transactionid"] = "";
	$fieldLabelscheckapproval["English"]["status"] = "Status";
	$fieldToolTipscheckapproval["English"]["status"] = "";
	$placeHolderscheckapproval["English"]["status"] = "";
	if (count($fieldToolTipscheckapproval["English"]))
		$tdatacheckapproval[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscheckapproval["Afrikaans"] = array();
	$fieldToolTipscheckapproval["Afrikaans"] = array();
	$placeHolderscheckapproval["Afrikaans"] = array();
	$pageTitlescheckapproval["Afrikaans"] = array();
	$fieldLabelscheckapproval["Afrikaans"]["cid"] = "ተ.ቁ";
	$fieldToolTipscheckapproval["Afrikaans"]["cid"] = "";
	$placeHolderscheckapproval["Afrikaans"]["cid"] = "";
	$fieldLabelscheckapproval["Afrikaans"]["assetid"] = "የንብረቱ መለያ";
	$fieldToolTipscheckapproval["Afrikaans"]["assetid"] = "";
	$placeHolderscheckapproval["Afrikaans"]["assetid"] = "";
	$fieldLabelscheckapproval["Afrikaans"]["ictdeptemp"] = "የአይሲቲ ሰራተኛው መለያ";
	$fieldToolTipscheckapproval["Afrikaans"]["ictdeptemp"] = "";
	$placeHolderscheckapproval["Afrikaans"]["ictdeptemp"] = "";
	$fieldLabelscheckapproval["Afrikaans"]["ictdeptmanager"] = "የአይሲቲ ማናጀር መለያ";
	$fieldToolTipscheckapproval["Afrikaans"]["ictdeptmanager"] = "";
	$placeHolderscheckapproval["Afrikaans"]["ictdeptmanager"] = "";
	$fieldLabelscheckapproval["Afrikaans"]["empid"] = "የሰራተኛው መለያ";
	$fieldToolTipscheckapproval["Afrikaans"]["empid"] = "";
	$placeHolderscheckapproval["Afrikaans"]["empid"] = "";
	$fieldLabelscheckapproval["Afrikaans"]["transactionid"] = "እንቅስቃሴ";
	$fieldToolTipscheckapproval["Afrikaans"]["transactionid"] = "";
	$placeHolderscheckapproval["Afrikaans"]["transactionid"] = "";
	$fieldLabelscheckapproval["Afrikaans"]["status"] = "Status";
	$fieldToolTipscheckapproval["Afrikaans"]["status"] = "";
	$placeHolderscheckapproval["Afrikaans"]["status"] = "";
	if (count($fieldToolTipscheckapproval["Afrikaans"]))
		$tdatacheckapproval[".isUseToolTips"] = true;
}


	$tdatacheckapproval[".NCSearch"] = true;



$tdatacheckapproval[".shortTableName"] = "checkapproval";
$tdatacheckapproval[".nSecOptions"] = 0;

$tdatacheckapproval[".mainTableOwnerID"] = "";
$tdatacheckapproval[".entityType"] = 0;

$tdatacheckapproval[".strOriginalTableName"] = "checkapproval";

		 



$tdatacheckapproval[".showAddInPopup"] = false;

$tdatacheckapproval[".showEditInPopup"] = false;

$tdatacheckapproval[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacheckapproval[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacheckapproval[".listAjax"] = false;
//	temporary
$tdatacheckapproval[".listAjax"] = false;

	$tdatacheckapproval[".audit"] = false;

	$tdatacheckapproval[".locking"] = false;


$pages = $tdatacheckapproval[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacheckapproval[".edit"] = true;
	$tdatacheckapproval[".afterEditAction"] = 1;
	$tdatacheckapproval[".closePopupAfterEdit"] = 1;
	$tdatacheckapproval[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacheckapproval[".add"] = true;
$tdatacheckapproval[".afterAddAction"] = 1;
$tdatacheckapproval[".closePopupAfterAdd"] = 1;
$tdatacheckapproval[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacheckapproval[".list"] = true;
}



$tdatacheckapproval[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacheckapproval[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacheckapproval[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacheckapproval[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacheckapproval[".printFriendly"] = true;
}



$tdatacheckapproval[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacheckapproval[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacheckapproval[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacheckapproval[".isUseAjaxSuggest"] = true;

$tdatacheckapproval[".rowHighlite"] = true;



			

$tdatacheckapproval[".ajaxCodeSnippetAdded"] = false;

$tdatacheckapproval[".buttonsAdded"] = false;

$tdatacheckapproval[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacheckapproval[".isUseTimeForSearch"] = false;


$tdatacheckapproval[".badgeColor"] = "D2AF80";


$tdatacheckapproval[".allSearchFields"] = array();
$tdatacheckapproval[".filterFields"] = array();
$tdatacheckapproval[".requiredSearchFields"] = array();

$tdatacheckapproval[".googleLikeFields"] = array();
$tdatacheckapproval[".googleLikeFields"][] = "cid";
$tdatacheckapproval[".googleLikeFields"][] = "assetid";
$tdatacheckapproval[".googleLikeFields"][] = "ictdeptemp";
$tdatacheckapproval[".googleLikeFields"][] = "ictdeptmanager";
$tdatacheckapproval[".googleLikeFields"][] = "empid";
$tdatacheckapproval[".googleLikeFields"][] = "transactionid";
$tdatacheckapproval[".googleLikeFields"][] = "status";



$tdatacheckapproval[".tableType"] = "list";

$tdatacheckapproval[".printerPageOrientation"] = 0;
$tdatacheckapproval[".nPrinterPageScale"] = 100;

$tdatacheckapproval[".nPrinterSplitRecords"] = 40;

$tdatacheckapproval[".geocodingEnabled"] = false;










$tdatacheckapproval[".pageSize"] = 20;

$tdatacheckapproval[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacheckapproval[".strOrderBy"] = $tstrOrderBy;

$tdatacheckapproval[".orderindexes"] = array();

$tdatacheckapproval[".sqlHead"] = "SELECT `cid`,  	`assetid`,  	`ictdeptemp`,  	`ictdeptmanager`,  	`empid`,  	`transactionid`,  	`status`";
$tdatacheckapproval[".sqlFrom"] = "FROM `checkapproval`";
$tdatacheckapproval[".sqlWhereExpr"] = "";
$tdatacheckapproval[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacheckapproval[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacheckapproval[".arrGroupsPerPage"] = $arrGPP;

$tdatacheckapproval[".highlightSearchResults"] = true;

$tableKeyscheckapproval = array();
$tableKeyscheckapproval[] = "cid";
$tdatacheckapproval[".Keys"] = $tableKeyscheckapproval;


$tdatacheckapproval[".hideMobileList"] = array();




//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","cid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cid`";

	
	
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


	$tdatacheckapproval["cid"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "cid";
//	assetid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "assetid";
	$fdata["GoodName"] = "assetid";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","assetid");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "assetid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`assetid`";

	
	
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


	$tdatacheckapproval["assetid"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "assetid";
//	ictdeptemp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ictdeptemp";
	$fdata["GoodName"] = "ictdeptemp";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","ictdeptemp");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "ictdeptemp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ictdeptemp`";

	
	
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

				$edata["LookupWhere"] = "groupid='6'";


	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheckapproval["ictdeptemp"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "ictdeptemp";
//	ictdeptmanager
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ictdeptmanager";
	$fdata["GoodName"] = "ictdeptmanager";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","ictdeptmanager");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "ictdeptmanager";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ictdeptmanager`";

	
	
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

				$edata["LookupWhere"] = "groupid='2'";


	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheckapproval["ictdeptmanager"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "ictdeptmanager";
//	empid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "empid";
	$fdata["GoodName"] = "empid";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","empid");
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


	$tdatacheckapproval["empid"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "empid";
//	transactionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "transactionid";
	$fdata["GoodName"] = "transactionid";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","transactionid");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "transactionid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`transactionid`";

	
	
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
	$edata["LookupTable"] = "eaempassets";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"assetid", 'lookupF'=>"asset_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"empid", 'lookupF'=>"employee_id");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "eaempassets";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "eaempassets";

				$edata["LookupWhere"] = "transaction='incomplet'";


	
	$edata["LookupOrderBy"] = "eaempassets";

	
	
	
	

	
	
	
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


	$tdatacheckapproval["transactionid"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "transactionid";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "checkapproval";
	$fdata["Label"] = GetFieldLabel("checkapproval","status");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "assetstatus";
	$edata["LookupConnId"] = "csaasset_at_localhost";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "asset_status_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "asset_status_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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
		$fdata["filterTotalFields"] = "cid";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacheckapproval["status"] = $fdata;
		$tdatacheckapproval[".searchableFields"][] = "status";


$tables_data["checkapproval"]=&$tdatacheckapproval;
$field_labels["checkapproval"] = &$fieldLabelscheckapproval;
$fieldToolTips["checkapproval"] = &$fieldToolTipscheckapproval;
$placeHolders["checkapproval"] = &$placeHolderscheckapproval;
$page_titles["checkapproval"] = &$pageTitlescheckapproval;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["checkapproval"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["checkapproval"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_checkapproval()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`cid`,  	`assetid`,  	`ictdeptemp`,  	`ictdeptmanager`,  	`empid`,  	`transactionid`,  	`status`";
$proto0["m_strFrom"] = "FROM `checkapproval`";
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
	"m_strName" => "cid",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto6["m_sql"] = "`cid`";
$proto6["m_srcTableName"] = "checkapproval";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "assetid",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto8["m_sql"] = "`assetid`";
$proto8["m_srcTableName"] = "checkapproval";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ictdeptemp",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto10["m_sql"] = "`ictdeptemp`";
$proto10["m_srcTableName"] = "checkapproval";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ictdeptmanager",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto12["m_sql"] = "`ictdeptmanager`";
$proto12["m_srcTableName"] = "checkapproval";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "empid",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto14["m_sql"] = "`empid`";
$proto14["m_srcTableName"] = "checkapproval";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "transactionid",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto16["m_sql"] = "`transactionid`";
$proto16["m_srcTableName"] = "checkapproval";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "checkapproval",
	"m_srcTableName" => "checkapproval"
));

$proto18["m_sql"] = "`status`";
$proto18["m_srcTableName"] = "checkapproval";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "checkapproval";
$proto21["m_srcTableName"] = "checkapproval";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cid";
$proto21["m_columns"][] = "assetid";
$proto21["m_columns"][] = "ictdeptemp";
$proto21["m_columns"][] = "ictdeptmanager";
$proto21["m_columns"][] = "empid";
$proto21["m_columns"][] = "transactionid";
$proto21["m_columns"][] = "status";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`checkapproval`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "checkapproval";
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
$proto0["m_srcTableName"]="checkapproval";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_checkapproval = createSqlQuery_checkapproval();


	
					
;

							

$tdatacheckapproval[".sqlquery"] = $queryData_checkapproval;

include_once(getabspath("include/checkapproval_events.php"));
$tableEvents["checkapproval"] = new eventclass_checkapproval;
$tdatacheckapproval[".hasEvents"] = true;

?>