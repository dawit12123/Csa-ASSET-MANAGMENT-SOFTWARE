<?php



$tdataeaempassets = array();
$tdataeaempassets[".searchableFields"] = array();
$tdataeaempassets[".ShortName"] = "eaempassets";
$tdataeaempassets[".OwnerID"] = "employee_id";
$tdataeaempassets[".OriginalTable"] = "eaempassets";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataeaempassets[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataeaempassets[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataeaempassets[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelseaempassets = array();
$fieldToolTipseaempassets = array();
$pageTitleseaempassets = array();
$placeHolderseaempassets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelseaempassets["English"] = array();
	$fieldToolTipseaempassets["English"] = array();
	$placeHolderseaempassets["English"] = array();
	$pageTitleseaempassets["English"] = array();
	$fieldLabelseaempassets["English"]["eaempassets"] = "Eaempassets";
	$fieldToolTipseaempassets["English"]["eaempassets"] = "";
	$placeHolderseaempassets["English"]["eaempassets"] = "";
	$fieldLabelseaempassets["English"]["employee_id"] = "Employee Id";
	$fieldToolTipseaempassets["English"]["employee_id"] = "";
	$placeHolderseaempassets["English"]["employee_id"] = "";
	$fieldLabelseaempassets["English"]["ea_id"] = "Ea Id";
	$fieldToolTipseaempassets["English"]["ea_id"] = "";
	$placeHolderseaempassets["English"]["ea_id"] = "";
	$fieldLabelseaempassets["English"]["issued_date"] = "Issued Date";
	$fieldToolTipseaempassets["English"]["issued_date"] = "";
	$placeHolderseaempassets["English"]["issued_date"] = "";
	$fieldLabelseaempassets["English"]["returned_date"] = "Returned Date";
	$fieldToolTipseaempassets["English"]["returned_date"] = "";
	$placeHolderseaempassets["English"]["returned_date"] = "";
	$fieldLabelseaempassets["English"]["transfer_date"] = "Transfer Date";
	$fieldToolTipseaempassets["English"]["transfer_date"] = "";
	$placeHolderseaempassets["English"]["transfer_date"] = "";
	$fieldLabelseaempassets["English"]["asset_id"] = "Asset Id";
	$fieldToolTipseaempassets["English"]["asset_id"] = "";
	$placeHolderseaempassets["English"]["asset_id"] = "";
	$fieldLabelseaempassets["English"]["transaction"] = "Transaction";
	$fieldToolTipseaempassets["English"]["transaction"] = "";
	$placeHolderseaempassets["English"]["transaction"] = "";
	if (count($fieldToolTipseaempassets["English"]))
		$tdataeaempassets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelseaempassets["Afrikaans"] = array();
	$fieldToolTipseaempassets["Afrikaans"] = array();
	$placeHolderseaempassets["Afrikaans"] = array();
	$pageTitleseaempassets["Afrikaans"] = array();
	$fieldLabelseaempassets["Afrikaans"]["eaempassets"] = "የተቀበሉት እቃ";
	$fieldToolTipseaempassets["Afrikaans"]["eaempassets"] = "";
	$placeHolderseaempassets["Afrikaans"]["eaempassets"] = "የተቀበሉት እቃ";
	$fieldLabelseaempassets["Afrikaans"]["employee_id"] = "የሰራተኛው መለያ";
	$fieldToolTipseaempassets["Afrikaans"]["employee_id"] = "";
	$placeHolderseaempassets["Afrikaans"]["employee_id"] = "";
	$fieldLabelseaempassets["Afrikaans"]["ea_id"] = "ተ.ቁ";
	$fieldToolTipseaempassets["Afrikaans"]["ea_id"] = "";
	$placeHolderseaempassets["Afrikaans"]["ea_id"] = "";
	$fieldLabelseaempassets["Afrikaans"]["issued_date"] = "የተሰጠበት ቀን";
	$fieldToolTipseaempassets["Afrikaans"]["issued_date"] = "";
	$placeHolderseaempassets["Afrikaans"]["issued_date"] = "";
	$fieldLabelseaempassets["Afrikaans"]["returned_date"] = "የተመለሰበት ቀን";
	$fieldToolTipseaempassets["Afrikaans"]["returned_date"] = "";
	$placeHolderseaempassets["Afrikaans"]["returned_date"] = "";
	$fieldLabelseaempassets["Afrikaans"]["transfer_date"] = "የተላለፈበት ቀን";
	$fieldToolTipseaempassets["Afrikaans"]["transfer_date"] = "";
	$placeHolderseaempassets["Afrikaans"]["transfer_date"] = "";
	$fieldLabelseaempassets["Afrikaans"]["asset_id"] = "የአቃዎች መለያ";
	$fieldToolTipseaempassets["Afrikaans"]["asset_id"] = "";
	$placeHolderseaempassets["Afrikaans"]["asset_id"] = "";
	$fieldLabelseaempassets["Afrikaans"]["transaction"] = "እንቅስቃሴ";
	$fieldToolTipseaempassets["Afrikaans"]["transaction"] = "";
	$placeHolderseaempassets["Afrikaans"]["transaction"] = "";
	$pageTitleseaempassets["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitleseaempassets["Afrikaans"]["search"] = "የእቃ መውሰጃ መፈለጊያ";
	$pageTitleseaempassets["Afrikaans"]["view"] = "የእቃ መውሰጃ ማሳያ";
	if (count($fieldToolTipseaempassets["Afrikaans"]))
		$tdataeaempassets[".isUseToolTips"] = true;
}


	$tdataeaempassets[".NCSearch"] = true;



$tdataeaempassets[".shortTableName"] = "eaempassets";
$tdataeaempassets[".nSecOptions"] = 2;

$tdataeaempassets[".mainTableOwnerID"] = "employee_id";
$tdataeaempassets[".entityType"] = 0;

$tdataeaempassets[".strOriginalTableName"] = "eaempassets";

		 



$tdataeaempassets[".showAddInPopup"] = false;

$tdataeaempassets[".showEditInPopup"] = false;

$tdataeaempassets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataeaempassets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataeaempassets[".listAjax"] = false;
//	temporary
$tdataeaempassets[".listAjax"] = false;

	$tdataeaempassets[".audit"] = false;

	$tdataeaempassets[".locking"] = false;


$pages = $tdataeaempassets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataeaempassets[".edit"] = true;
	$tdataeaempassets[".afterEditAction"] = 1;
	$tdataeaempassets[".closePopupAfterEdit"] = 1;
	$tdataeaempassets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataeaempassets[".add"] = true;
$tdataeaempassets[".afterAddAction"] = 1;
$tdataeaempassets[".closePopupAfterAdd"] = 1;
$tdataeaempassets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataeaempassets[".list"] = true;
}



$tdataeaempassets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataeaempassets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataeaempassets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataeaempassets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataeaempassets[".printFriendly"] = true;
}



$tdataeaempassets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataeaempassets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataeaempassets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataeaempassets[".isUseAjaxSuggest"] = true;

$tdataeaempassets[".rowHighlite"] = true;



						

$tdataeaempassets[".ajaxCodeSnippetAdded"] = false;

$tdataeaempassets[".buttonsAdded"] = false;

$tdataeaempassets[".addPageEvents"] = false;

// use timepicker for search panel
$tdataeaempassets[".isUseTimeForSearch"] = false;


$tdataeaempassets[".badgeColor"] = "e67349";


$tdataeaempassets[".allSearchFields"] = array();
$tdataeaempassets[".filterFields"] = array();
$tdataeaempassets[".requiredSearchFields"] = array();

$tdataeaempassets[".googleLikeFields"] = array();
$tdataeaempassets[".googleLikeFields"][] = "eaempassets";
$tdataeaempassets[".googleLikeFields"][] = "asset_id";
$tdataeaempassets[".googleLikeFields"][] = "employee_id";
$tdataeaempassets[".googleLikeFields"][] = "ea_id";
$tdataeaempassets[".googleLikeFields"][] = "issued_date";
$tdataeaempassets[".googleLikeFields"][] = "returned_date";
$tdataeaempassets[".googleLikeFields"][] = "transfer_date";
$tdataeaempassets[".googleLikeFields"][] = "transaction";



$tdataeaempassets[".tableType"] = "list";

$tdataeaempassets[".printerPageOrientation"] = 0;
$tdataeaempassets[".nPrinterPageScale"] = 100;

$tdataeaempassets[".nPrinterSplitRecords"] = 40;

$tdataeaempassets[".geocodingEnabled"] = false;










$tdataeaempassets[".pageSize"] = 20;

$tdataeaempassets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataeaempassets[".strOrderBy"] = $tstrOrderBy;

$tdataeaempassets[".orderindexes"] = array();

$tdataeaempassets[".sqlHead"] = "SELECT `eaempassets`,  	`asset_id`,  	`employee_id`,  	`ea_id`,  	`issued_date`,  	`returned_date`,  	`transfer_date`,  	`transaction`";
$tdataeaempassets[".sqlFrom"] = "FROM `eaempassets`";
$tdataeaempassets[".sqlWhereExpr"] = "";
$tdataeaempassets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataeaempassets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataeaempassets[".arrGroupsPerPage"] = $arrGPP;

$tdataeaempassets[".highlightSearchResults"] = true;

$tableKeyseaempassets = array();
$tableKeyseaempassets[] = "eaempassets";
$tdataeaempassets[".Keys"] = $tableKeyseaempassets;


$tdataeaempassets[".hideMobileList"] = array();




//	eaempassets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eaempassets";
	$fdata["GoodName"] = "eaempassets";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","eaempassets");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "eaempassets";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eaempassets`";

	
	
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


	$tdataeaempassets["eaempassets"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "eaempassets";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","asset_id");
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


	$tdataeaempassets["asset_id"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "asset_id";
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","employee_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "csa_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "groupid";

	
	
	
	

	
	
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


	$tdataeaempassets["employee_id"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "employee_id";
//	ea_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ea_id";
	$fdata["GoodName"] = "ea_id";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","ea_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "ea_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ea_id`";

	
	
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

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

				$edata["LookupWhere"] = "groupid=4";


	
	$edata["LookupOrderBy"] = "groupid";

	
	
	
	

	
	
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


	$tdataeaempassets["ea_id"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "ea_id";
//	issued_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "issued_date";
	$fdata["GoodName"] = "issued_date";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","issued_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "issued_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`issued_date`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataeaempassets["issued_date"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "issued_date";
//	returned_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "returned_date";
	$fdata["GoodName"] = "returned_date";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","returned_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "returned_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`returned_date`";

	
	
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


	$tdataeaempassets["returned_date"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "returned_date";
//	transfer_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "transfer_date";
	$fdata["GoodName"] = "transfer_date";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","transfer_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "transfer_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`transfer_date`";

	
	
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


	$tdataeaempassets["transfer_date"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "transfer_date";
//	transaction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "transaction";
	$fdata["GoodName"] = "transaction";
	$fdata["ownerTable"] = "eaempassets";
	$fdata["Label"] = GetFieldLabel("eaempassets","transaction");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "transaction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`transaction`";

	
	
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
	$edata["LookupValues"][] = "complet";
	$edata["LookupValues"][] = "incomplet";

	
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


	$tdataeaempassets["transaction"] = $fdata;
		$tdataeaempassets[".searchableFields"][] = "transaction";


$tables_data["eaempassets"]=&$tdataeaempassets;
$field_labels["eaempassets"] = &$fieldLabelseaempassets;
$fieldToolTips["eaempassets"] = &$fieldToolTipseaempassets;
$placeHolders["eaempassets"] = &$placeHolderseaempassets;
$page_titles["eaempassets"] = &$pageTitleseaempassets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["eaempassets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["eaempassets"] = array();



	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["eaempassets"][0] = $masterParams;
				$masterTablesData["eaempassets"][0]["masterKeys"] = array();
	$masterTablesData["eaempassets"][0]["masterKeys"][]="id";
				$masterTablesData["eaempassets"][0]["detailKeys"] = array();
	$masterTablesData["eaempassets"][0]["detailKeys"][]="employee_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_eaempassets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`eaempassets`,  	`asset_id`,  	`employee_id`,  	`ea_id`,  	`issued_date`,  	`returned_date`,  	`transfer_date`,  	`transaction`";
$proto0["m_strFrom"] = "FROM `eaempassets`";
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
	"m_strName" => "eaempassets",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto6["m_sql"] = "`eaempassets`";
$proto6["m_srcTableName"] = "eaempassets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto8["m_sql"] = "`asset_id`";
$proto8["m_srcTableName"] = "eaempassets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto10["m_sql"] = "`employee_id`";
$proto10["m_srcTableName"] = "eaempassets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ea_id",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto12["m_sql"] = "`ea_id`";
$proto12["m_srcTableName"] = "eaempassets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "issued_date",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto14["m_sql"] = "`issued_date`";
$proto14["m_srcTableName"] = "eaempassets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "returned_date",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto16["m_sql"] = "`returned_date`";
$proto16["m_srcTableName"] = "eaempassets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "transfer_date",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto18["m_sql"] = "`transfer_date`";
$proto18["m_srcTableName"] = "eaempassets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "transaction",
	"m_strTable" => "eaempassets",
	"m_srcTableName" => "eaempassets"
));

$proto20["m_sql"] = "`transaction`";
$proto20["m_srcTableName"] = "eaempassets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "eaempassets";
$proto23["m_srcTableName"] = "eaempassets";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "eaempassets";
$proto23["m_columns"][] = "asset_id";
$proto23["m_columns"][] = "employee_id";
$proto23["m_columns"][] = "ea_id";
$proto23["m_columns"][] = "issued_date";
$proto23["m_columns"][] = "returned_date";
$proto23["m_columns"][] = "transfer_date";
$proto23["m_columns"][] = "transaction";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`eaempassets`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "eaempassets";
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
$proto0["m_srcTableName"]="eaempassets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_eaempassets = createSqlQuery_eaempassets();


	
					
;

								

$tdataeaempassets[".sqlquery"] = $queryData_eaempassets;

include_once(getabspath("include/eaempassets_events.php"));
$tableEvents["eaempassets"] = new eventclass_eaempassets;
$tdataeaempassets[".hasEvents"] = true;

?>