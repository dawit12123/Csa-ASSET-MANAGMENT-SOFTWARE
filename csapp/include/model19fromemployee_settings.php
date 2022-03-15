<?php



$tdatamodel19fromemployee = array();
$tdatamodel19fromemployee[".searchableFields"] = array();
$tdatamodel19fromemployee[".ShortName"] = "model19fromemployee";
$tdatamodel19fromemployee[".OwnerID"] = "";
$tdatamodel19fromemployee[".OriginalTable"] = "model19fromemployee";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamodel19fromemployee[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamodel19fromemployee[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamodel19fromemployee[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmodel19fromemployee = array();
$fieldToolTipsmodel19fromemployee = array();
$pageTitlesmodel19fromemployee = array();
$placeHoldersmodel19fromemployee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmodel19fromemployee["English"] = array();
	$fieldToolTipsmodel19fromemployee["English"] = array();
	$placeHoldersmodel19fromemployee["English"] = array();
	$pageTitlesmodel19fromemployee["English"] = array();
	$fieldLabelsmodel19fromemployee["English"]["mfe_id"] = "Mfe Id";
	$fieldToolTipsmodel19fromemployee["English"]["mfe_id"] = "";
	$placeHoldersmodel19fromemployee["English"]["mfe_id"] = "";
	$fieldLabelsmodel19fromemployee["English"]["model"] = "Model";
	$fieldToolTipsmodel19fromemployee["English"]["model"] = "";
	$placeHoldersmodel19fromemployee["English"]["model"] = "";
	$fieldLabelsmodel19fromemployee["English"]["serial"] = "Serial";
	$fieldToolTipsmodel19fromemployee["English"]["serial"] = "";
	$placeHoldersmodel19fromemployee["English"]["serial"] = "";
	$fieldLabelsmodel19fromemployee["English"]["quantity"] = "Quantity";
	$fieldToolTipsmodel19fromemployee["English"]["quantity"] = "";
	$placeHoldersmodel19fromemployee["English"]["quantity"] = "";
	$fieldLabelsmodel19fromemployee["English"]["unitprice"] = "Unitprice";
	$fieldToolTipsmodel19fromemployee["English"]["unitprice"] = "";
	$placeHoldersmodel19fromemployee["English"]["unitprice"] = "";
	$fieldLabelsmodel19fromemployee["English"]["totalprice"] = "Totalprice";
	$fieldToolTipsmodel19fromemployee["English"]["totalprice"] = "";
	$placeHoldersmodel19fromemployee["English"]["totalprice"] = "";
	$fieldLabelsmodel19fromemployee["English"]["received_date"] = "Received Date";
	$fieldToolTipsmodel19fromemployee["English"]["received_date"] = "";
	$placeHoldersmodel19fromemployee["English"]["received_date"] = "";
	$fieldLabelsmodel19fromemployee["English"]["donor_id"] = "Donor Id";
	$fieldToolTipsmodel19fromemployee["English"]["donor_id"] = "";
	$placeHoldersmodel19fromemployee["English"]["donor_id"] = "";
	$fieldLabelsmodel19fromemployee["English"]["receiver_id"] = "Receiver Id";
	$fieldToolTipsmodel19fromemployee["English"]["receiver_id"] = "";
	$placeHoldersmodel19fromemployee["English"]["receiver_id"] = "";
	$fieldLabelsmodel19fromemployee["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsmodel19fromemployee["English"]["asset_id"] = "";
	$placeHoldersmodel19fromemployee["English"]["asset_id"] = "";
	$fieldLabelsmodel19fromemployee["English"]["receipt_no"] = "Receipt No";
	$fieldToolTipsmodel19fromemployee["English"]["receipt_no"] = "";
	$placeHoldersmodel19fromemployee["English"]["receipt_no"] = "";
	$fieldLabelsmodel19fromemployee["English"]["status"] = "Status";
	$fieldToolTipsmodel19fromemployee["English"]["status"] = "";
	$placeHoldersmodel19fromemployee["English"]["status"] = "";
	$pageTitlesmodel19fromemployee["English"]["print"] = "የኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ<br> ETHIOPIA DEMOCRATIC REPUBLIC<br> <span id=\"c\">OF ETHIOPIA</span><br><span id=\"m\"> የገንዘብና ኢኮኖሚ ትብብር ሚኒስቴር</span><br><span id='c1'>MINISTRY OF FINANCE AND</span><br><span id='c1'>ECONOMIC COOPERATION</span>";
	if (count($fieldToolTipsmodel19fromemployee["English"]))
		$tdatamodel19fromemployee[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmodel19fromemployee["Afrikaans"] = array();
	$fieldToolTipsmodel19fromemployee["Afrikaans"] = array();
	$placeHoldersmodel19fromemployee["Afrikaans"] = array();
	$pageTitlesmodel19fromemployee["Afrikaans"] = array();
	$fieldLabelsmodel19fromemployee["Afrikaans"]["mfe_id"] = "ተ.ቁ";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["mfe_id"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["mfe_id"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["model"] = "ሞዴል";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["model"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["model"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["serial"] = "ሴረያል";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["serial"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["serial"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["quantity"] = "ብዛት";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["quantity"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["quantity"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["unitprice"] = "የአንዱ ዋጋ";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["unitprice"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["unitprice"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["totalprice"] = "አጥቃላይ ዋጋ";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["totalprice"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["totalprice"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["received_date"] = "የተቀበለበት ቀን";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["received_date"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["received_date"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["donor_id"] = "ሰጪው መለያ";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["donor_id"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["donor_id"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["receiver_id"] = "የተቀባዩ መለያ";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["receiver_id"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["receiver_id"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["asset_id"] = "የእቃው አይነት";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["asset_id"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["asset_id"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["receipt_no"] = "የደረሰኝ ቁጥር";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["receipt_no"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["receipt_no"] = "";
	$fieldLabelsmodel19fromemployee["Afrikaans"]["status"] = "Status";
	$fieldToolTipsmodel19fromemployee["Afrikaans"]["status"] = "";
	$placeHoldersmodel19fromemployee["Afrikaans"]["status"] = "";
	$pageTitlesmodel19fromemployee["Afrikaans"]["edit"] = "ሞዴል 19(የእቃ ገቢ ማድረጊያ ማስተካከያ";
	$pageTitlesmodel19fromemployee["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesmodel19fromemployee["Afrikaans"]["import"] = "ሞዴል 19(የእቃ ገቢ ማድረጊያ ማስገቢያ";
	$pageTitlesmodel19fromemployee["Afrikaans"]["search"] = "ሞዴል 19(የእቃ ገቢ ማድረጊያ መፈለጊያ";
	$pageTitlesmodel19fromemployee["Afrikaans"]["view"] = "ሞዴል 19(የእቃ ገቢ ማድረጊያ ማሳያ";
	$pageTitlesmodel19fromemployee["Afrikaans"]["print"] = "የኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ<br> ETHIOPIA DEMOCRATIC REPUBLIC<br> <span id=\"c\">OF ETHIOPIA</span><br><span id=\"m\"> የገንዘብና ኢኮኖሚ ትብብር ሚኒስቴር</span><br><span id='c1'>MINISTRY OF FINANCE AND</span><br><span id='c1'>ECONOMIC COOPERATION</span>";
	if (count($fieldToolTipsmodel19fromemployee["Afrikaans"]))
		$tdatamodel19fromemployee[".isUseToolTips"] = true;
}


	$tdatamodel19fromemployee[".NCSearch"] = true;



$tdatamodel19fromemployee[".shortTableName"] = "model19fromemployee";
$tdatamodel19fromemployee[".nSecOptions"] = 0;

$tdatamodel19fromemployee[".mainTableOwnerID"] = "";
$tdatamodel19fromemployee[".entityType"] = 0;

$tdatamodel19fromemployee[".strOriginalTableName"] = "model19fromemployee";

		 



$tdatamodel19fromemployee[".showAddInPopup"] = false;

$tdatamodel19fromemployee[".showEditInPopup"] = false;

$tdatamodel19fromemployee[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamodel19fromemployee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamodel19fromemployee[".listAjax"] = false;
//	temporary
$tdatamodel19fromemployee[".listAjax"] = false;

	$tdatamodel19fromemployee[".audit"] = true;

	$tdatamodel19fromemployee[".locking"] = true;


$pages = $tdatamodel19fromemployee[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamodel19fromemployee[".edit"] = true;
	$tdatamodel19fromemployee[".afterEditAction"] = 1;
	$tdatamodel19fromemployee[".closePopupAfterEdit"] = 1;
	$tdatamodel19fromemployee[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamodel19fromemployee[".add"] = true;
$tdatamodel19fromemployee[".afterAddAction"] = 1;
$tdatamodel19fromemployee[".closePopupAfterAdd"] = 1;
$tdatamodel19fromemployee[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamodel19fromemployee[".list"] = true;
}



$tdatamodel19fromemployee[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamodel19fromemployee[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamodel19fromemployee[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamodel19fromemployee[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamodel19fromemployee[".printFriendly"] = true;
}



$tdatamodel19fromemployee[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamodel19fromemployee[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamodel19fromemployee[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamodel19fromemployee[".isUseAjaxSuggest"] = true;

$tdatamodel19fromemployee[".rowHighlite"] = true;



						

$tdatamodel19fromemployee[".ajaxCodeSnippetAdded"] = false;

$tdatamodel19fromemployee[".buttonsAdded"] = false;

$tdatamodel19fromemployee[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamodel19fromemployee[".isUseTimeForSearch"] = false;


$tdatamodel19fromemployee[".badgeColor"] = "4169e1";


$tdatamodel19fromemployee[".allSearchFields"] = array();
$tdatamodel19fromemployee[".filterFields"] = array();
$tdatamodel19fromemployee[".requiredSearchFields"] = array();

$tdatamodel19fromemployee[".googleLikeFields"] = array();
$tdatamodel19fromemployee[".googleLikeFields"][] = "mfe_id";
$tdatamodel19fromemployee[".googleLikeFields"][] = "asset_id";
$tdatamodel19fromemployee[".googleLikeFields"][] = "model";
$tdatamodel19fromemployee[".googleLikeFields"][] = "serial";
$tdatamodel19fromemployee[".googleLikeFields"][] = "quantity";
$tdatamodel19fromemployee[".googleLikeFields"][] = "unitprice";
$tdatamodel19fromemployee[".googleLikeFields"][] = "totalprice";
$tdatamodel19fromemployee[".googleLikeFields"][] = "received_date";
$tdatamodel19fromemployee[".googleLikeFields"][] = "donor_id";
$tdatamodel19fromemployee[".googleLikeFields"][] = "receiver_id";
$tdatamodel19fromemployee[".googleLikeFields"][] = "receipt_no";
$tdatamodel19fromemployee[".googleLikeFields"][] = "status";



$tdatamodel19fromemployee[".tableType"] = "list";

$tdatamodel19fromemployee[".printerPageOrientation"] = 0;
$tdatamodel19fromemployee[".nPrinterPageScale"] = 100;

$tdatamodel19fromemployee[".nPrinterSplitRecords"] = 40;

$tdatamodel19fromemployee[".geocodingEnabled"] = false;










$tdatamodel19fromemployee[".pageSize"] = 20;

$tdatamodel19fromemployee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamodel19fromemployee[".strOrderBy"] = $tstrOrderBy;

$tdatamodel19fromemployee[".orderindexes"] = array();

$tdatamodel19fromemployee[".sqlHead"] = "SELECT `mfe_id`,  	`asset_id`,  	`model`,  	`serial`,  	`quantity`,  	`unitprice`,  	`totalprice`,  	`received_date`,  	`donor_id`,  	`receiver_id`,  	`receipt_no`,  	`status`";
$tdatamodel19fromemployee[".sqlFrom"] = "FROM `model19fromemployee`";
$tdatamodel19fromemployee[".sqlWhereExpr"] = "";
$tdatamodel19fromemployee[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodel19fromemployee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodel19fromemployee[".arrGroupsPerPage"] = $arrGPP;

$tdatamodel19fromemployee[".highlightSearchResults"] = true;

$tableKeysmodel19fromemployee = array();
$tableKeysmodel19fromemployee[] = "mfe_id";
$tdatamodel19fromemployee[".Keys"] = $tableKeysmodel19fromemployee;


$tdatamodel19fromemployee[".hideMobileList"] = array();




//	mfe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mfe_id";
	$fdata["GoodName"] = "mfe_id";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","mfe_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "mfe_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mfe_id`";

	
	
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


	$tdatamodel19fromemployee["mfe_id"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "mfe_id";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","asset_id");
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
	$edata["LookupTable"] = "eaempassets";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "asset_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "asset_id";

	

	
	$edata["LookupOrderBy"] = "eaempassets";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "donor_id", "lookup" => "employee_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "model";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "serial";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "unitprice";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "status";

	
	
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


	$tdatamodel19fromemployee["asset_id"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "asset_id";
//	model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "model";
	$fdata["GoodName"] = "model";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","model");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "asset";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "asset_model";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "asset_model";

	

	
	$edata["LookupOrderBy"] = "asset_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "asset_id", "lookup" => "asset_id" );

	
	

	
	
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


	$tdatamodel19fromemployee["model"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "model";
//	serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "serial";
	$fdata["GoodName"] = "serial";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","serial");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "serial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`serial`";

	
	
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
	$edata["LookupTable"] = "asset";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "asset_serial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "asset_serial";

	

	
	$edata["LookupOrderBy"] = "asset_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "asset_id", "lookup" => "asset_id" );

	
	

	
	
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


	$tdatamodel19fromemployee["serial"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "serial";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","quantity");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatamodel19fromemployee["quantity"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "quantity";
//	unitprice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unitprice";
	$fdata["GoodName"] = "unitprice";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","unitprice");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unitprice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`unitprice`";

	
	
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
	$edata["LookupTable"] = "price";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "price";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "price";

	

	
	$edata["LookupOrderBy"] = "item_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "asset_id", "lookup" => "item_id" );

	
	

	
	
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


	$tdatamodel19fromemployee["unitprice"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "unitprice";
//	totalprice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "totalprice";
	$fdata["GoodName"] = "totalprice";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","totalprice");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "totalprice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`totalprice`";

	
	
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


	$tdatamodel19fromemployee["totalprice"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "totalprice";
//	received_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "received_date";
	$fdata["GoodName"] = "received_date";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","received_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "received_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`received_date`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatamodel19fromemployee["received_date"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "received_date";
//	donor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "donor_id";
	$fdata["GoodName"] = "donor_id";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","donor_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "donor_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`donor_id`";

	
	
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
	$edata["LookupTable"] = "eaempassets";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"asset_id", 'lookupF'=>"asset_id");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "employee_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "employee_id";

				$edata["LookupWhere"] = "transaction='incomplet'";


	
	$edata["LookupOrderBy"] = "eaempassets";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "asset_id";

	
	
	
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


	$tdatamodel19fromemployee["donor_id"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "donor_id";
//	receiver_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "receiver_id";
	$fdata["GoodName"] = "receiver_id";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","receiver_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "receiver_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`receiver_id`";

	
	
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

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

				$edata["LookupWhere"] = "groupid='4' or groupid='3'";


	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamodel19fromemployee["receiver_id"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "receiver_id";
//	receipt_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "receipt_no";
	$fdata["GoodName"] = "receipt_no";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","receipt_no");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "receipt_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`receipt_no`";

	
	
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


	$tdatamodel19fromemployee["receipt_no"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "receipt_no";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "model19fromemployee";
	$fdata["Label"] = GetFieldLabel("model19fromemployee","status");
	$fdata["FieldType"] = 200;

	
	
	
										

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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "checkapproval";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

	

	
	$edata["LookupOrderBy"] = "cid";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "asset_id", "lookup" => "assetid" );

	
	

	
	
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
		$fdata["filterTotalFields"] = "mfe_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamodel19fromemployee["status"] = $fdata;
		$tdatamodel19fromemployee[".searchableFields"][] = "status";


$tables_data["model19fromemployee"]=&$tdatamodel19fromemployee;
$field_labels["model19fromemployee"] = &$fieldLabelsmodel19fromemployee;
$fieldToolTips["model19fromemployee"] = &$fieldToolTipsmodel19fromemployee;
$placeHolders["model19fromemployee"] = &$placeHoldersmodel19fromemployee;
$page_titles["model19fromemployee"] = &$pageTitlesmodel19fromemployee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["model19fromemployee"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["model19fromemployee"] = array();



	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["model19fromemployee"][0] = $masterParams;
				$masterTablesData["model19fromemployee"][0]["masterKeys"] = array();
	$masterTablesData["model19fromemployee"][0]["masterKeys"][]="id";
				$masterTablesData["model19fromemployee"][0]["detailKeys"] = array();
	$masterTablesData["model19fromemployee"][0]["detailKeys"][]="donor_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_model19fromemployee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mfe_id`,  	`asset_id`,  	`model`,  	`serial`,  	`quantity`,  	`unitprice`,  	`totalprice`,  	`received_date`,  	`donor_id`,  	`receiver_id`,  	`receipt_no`,  	`status`";
$proto0["m_strFrom"] = "FROM `model19fromemployee`";
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
	"m_strName" => "mfe_id",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto6["m_sql"] = "`mfe_id`";
$proto6["m_srcTableName"] = "model19fromemployee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto8["m_sql"] = "`asset_id`";
$proto8["m_srcTableName"] = "model19fromemployee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "model",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto10["m_sql"] = "`model`";
$proto10["m_srcTableName"] = "model19fromemployee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "serial",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto12["m_sql"] = "`serial`";
$proto12["m_srcTableName"] = "model19fromemployee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto14["m_sql"] = "`quantity`";
$proto14["m_srcTableName"] = "model19fromemployee";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unitprice",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto16["m_sql"] = "`unitprice`";
$proto16["m_srcTableName"] = "model19fromemployee";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "totalprice",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto18["m_sql"] = "`totalprice`";
$proto18["m_srcTableName"] = "model19fromemployee";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "received_date",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto20["m_sql"] = "`received_date`";
$proto20["m_srcTableName"] = "model19fromemployee";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "donor_id",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto22["m_sql"] = "`donor_id`";
$proto22["m_srcTableName"] = "model19fromemployee";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "receiver_id",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto24["m_sql"] = "`receiver_id`";
$proto24["m_srcTableName"] = "model19fromemployee";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "receipt_no",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto26["m_sql"] = "`receipt_no`";
$proto26["m_srcTableName"] = "model19fromemployee";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "model19fromemployee",
	"m_srcTableName" => "model19fromemployee"
));

$proto28["m_sql"] = "`status`";
$proto28["m_srcTableName"] = "model19fromemployee";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "model19fromemployee";
$proto31["m_srcTableName"] = "model19fromemployee";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "mfe_id";
$proto31["m_columns"][] = "asset_id";
$proto31["m_columns"][] = "model";
$proto31["m_columns"][] = "serial";
$proto31["m_columns"][] = "quantity";
$proto31["m_columns"][] = "unitprice";
$proto31["m_columns"][] = "totalprice";
$proto31["m_columns"][] = "received_date";
$proto31["m_columns"][] = "donor_id";
$proto31["m_columns"][] = "receiver_id";
$proto31["m_columns"][] = "receipt_no";
$proto31["m_columns"][] = "status";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`model19fromemployee`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "model19fromemployee";
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
$proto0["m_srcTableName"]="model19fromemployee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_model19fromemployee = createSqlQuery_model19fromemployee();


	
					
;

												

$tdatamodel19fromemployee[".sqlquery"] = $queryData_model19fromemployee;

include_once(getabspath("include/model19fromemployee_events.php"));
$tableEvents["model19fromemployee"] = new eventclass_model19fromemployee;
$tdatamodel19fromemployee[".hasEvents"] = true;

?>