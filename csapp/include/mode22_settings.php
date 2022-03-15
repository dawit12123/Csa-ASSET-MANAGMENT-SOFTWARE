<?php



$tdatamode22 = array();
$tdatamode22[".searchableFields"] = array();
$tdatamode22[".ShortName"] = "mode22";
$tdatamode22[".OwnerID"] = "";
$tdatamode22[".OriginalTable"] = "mode22";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamode22[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamode22[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamode22[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmode22 = array();
$fieldToolTipsmode22 = array();
$pageTitlesmode22 = array();
$placeHoldersmode22 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmode22["English"] = array();
	$fieldToolTipsmode22["English"] = array();
	$placeHoldersmode22["English"] = array();
	$pageTitlesmode22["English"] = array();
	$fieldLabelsmode22["English"]["mfe_id"] = "Mfe Id";
	$fieldToolTipsmode22["English"]["mfe_id"] = "";
	$placeHoldersmode22["English"]["mfe_id"] = "";
	$fieldLabelsmode22["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsmode22["English"]["asset_id"] = "";
	$placeHoldersmode22["English"]["asset_id"] = "";
	$fieldLabelsmode22["English"]["model"] = "Model";
	$fieldToolTipsmode22["English"]["model"] = "";
	$placeHoldersmode22["English"]["model"] = "";
	$fieldLabelsmode22["English"]["serial"] = "Serial";
	$fieldToolTipsmode22["English"]["serial"] = "";
	$placeHoldersmode22["English"]["serial"] = "";
	$fieldLabelsmode22["English"]["quantity"] = "Quantity";
	$fieldToolTipsmode22["English"]["quantity"] = "";
	$placeHoldersmode22["English"]["quantity"] = "";
	$fieldLabelsmode22["English"]["unitprice"] = "Unitprice";
	$fieldToolTipsmode22["English"]["unitprice"] = "";
	$placeHoldersmode22["English"]["unitprice"] = "";
	$fieldLabelsmode22["English"]["totalprice"] = "Totalprice";
	$fieldToolTipsmode22["English"]["totalprice"] = "";
	$placeHoldersmode22["English"]["totalprice"] = "";
	$fieldLabelsmode22["English"]["issued_date"] = "Issued Date";
	$fieldToolTipsmode22["English"]["issued_date"] = "";
	$placeHoldersmode22["English"]["issued_date"] = "";
	$fieldLabelsmode22["English"]["ea_id"] = "Ea Id";
	$fieldToolTipsmode22["English"]["ea_id"] = "";
	$placeHoldersmode22["English"]["ea_id"] = "";
	$fieldLabelsmode22["English"]["receiver_id"] = "Receiver Id";
	$fieldToolTipsmode22["English"]["receiver_id"] = "";
	$placeHoldersmode22["English"]["receiver_id"] = "";
	$fieldLabelsmode22["English"]["request_id"] = "Request Id";
	$fieldToolTipsmode22["English"]["request_id"] = "";
	$placeHoldersmode22["English"]["request_id"] = "";
	$fieldLabelsmode22["English"]["receipt_no"] = "Receipt No";
	$fieldToolTipsmode22["English"]["receipt_no"] = "";
	$placeHoldersmode22["English"]["receipt_no"] = "";
	$pageTitlesmode22["English"]["print"] = "የኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ<br> ETHIOPIA DEMOCRATIC REPUBLIC<br> <span id=\"c\">OF ETHIOPIA</span><br> የገንዘብና ኢኮኖሚ ትብብር ሚኒስቴር<br><span id='c'>MINISTRY OF FINANCE AND</span><br><span id='c'>ECONOMIC COOPERATION</span>";
	if (count($fieldToolTipsmode22["English"]))
		$tdatamode22[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsmode22["Afrikaans"] = array();
	$fieldToolTipsmode22["Afrikaans"] = array();
	$placeHoldersmode22["Afrikaans"] = array();
	$pageTitlesmode22["Afrikaans"] = array();
	$fieldLabelsmode22["Afrikaans"]["mfe_id"] = "ተ.ቁ";
	$fieldToolTipsmode22["Afrikaans"]["mfe_id"] = "";
	$placeHoldersmode22["Afrikaans"]["mfe_id"] = "";
	$fieldLabelsmode22["Afrikaans"]["asset_id"] = "የእቃው አይነት";
	$fieldToolTipsmode22["Afrikaans"]["asset_id"] = "";
	$placeHoldersmode22["Afrikaans"]["asset_id"] = "";
	$fieldLabelsmode22["Afrikaans"]["model"] = "ሞዴል";
	$fieldToolTipsmode22["Afrikaans"]["model"] = "";
	$placeHoldersmode22["Afrikaans"]["model"] = "";
	$fieldLabelsmode22["Afrikaans"]["serial"] = "ሴሪያል";
	$fieldToolTipsmode22["Afrikaans"]["serial"] = "";
	$placeHoldersmode22["Afrikaans"]["serial"] = "";
	$fieldLabelsmode22["Afrikaans"]["quantity"] = "ባዛት";
	$fieldToolTipsmode22["Afrikaans"]["quantity"] = "";
	$placeHoldersmode22["Afrikaans"]["quantity"] = "";
	$fieldLabelsmode22["Afrikaans"]["unitprice"] = "የአንዱ ዋጋ";
	$fieldToolTipsmode22["Afrikaans"]["unitprice"] = "";
	$placeHoldersmode22["Afrikaans"]["unitprice"] = "";
	$fieldLabelsmode22["Afrikaans"]["totalprice"] = "አጠቃል";
	$fieldToolTipsmode22["Afrikaans"]["totalprice"] = "";
	$placeHoldersmode22["Afrikaans"]["totalprice"] = "";
	$fieldLabelsmode22["Afrikaans"]["issued_date"] = "የተሰጠበት ቀን";
	$fieldToolTipsmode22["Afrikaans"]["issued_date"] = "";
	$placeHoldersmode22["Afrikaans"]["issued_date"] = "";
	$fieldLabelsmode22["Afrikaans"]["ea_id"] = "ሰጪ";
	$fieldToolTipsmode22["Afrikaans"]["ea_id"] = "";
	$placeHoldersmode22["Afrikaans"]["ea_id"] = "";
	$fieldLabelsmode22["Afrikaans"]["receiver_id"] = "ተቀባዩ መለያ";
	$fieldToolTipsmode22["Afrikaans"]["receiver_id"] = "";
	$placeHoldersmode22["Afrikaans"]["receiver_id"] = "";
	$fieldLabelsmode22["Afrikaans"]["request_id"] = "የጥያቄ መለያ";
	$fieldToolTipsmode22["Afrikaans"]["request_id"] = "";
	$placeHoldersmode22["Afrikaans"]["request_id"] = "";
	$fieldLabelsmode22["Afrikaans"]["receipt_no"] = "የደረሰኝ ቁጥር";
	$fieldToolTipsmode22["Afrikaans"]["receipt_no"] = "";
	$placeHoldersmode22["Afrikaans"]["receipt_no"] = "";
	$pageTitlesmode22["Afrikaans"]["add"] = "ሞዴል 22(የእቃ ወጪ ማድረጊያ አዲስ ማስገቢያ";
	$pageTitlesmode22["Afrikaans"]["edit"] = "ሞዴል 22(የእቃ ወጪ ማድረጊያ ማስተካከያ";
	$pageTitlesmode22["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesmode22["Afrikaans"]["import"] = "ሞዴል 22(የእቃ ወጪ ማድረጊያ ማስገቢያ";
	$pageTitlesmode22["Afrikaans"]["search"] = "ሞዴል 22(የእቃ ወጪ ማድረጊያ መፈለጊያ";
	$pageTitlesmode22["Afrikaans"]["view"] = "ሞዴል 22(የእቃ ወጪ ማድረጊያ ማሳያ";
	$pageTitlesmode22["Afrikaans"]["print"] = "የኢትዮጵያ ፌዴራላዊ ዲሞክራሲያዊ ሪፐብሊክ<br> ETHIOPIA DEMOCRATIC REPUBLIC<br> <span id=\"c\">OF ETHIOPIA</span><br><span id=\"m\"> የገንዘብና ኢኮኖሚ ትብብር ሚኒስቴር</span><br><span id='c1'>MINISTRY OF FINANCE AND</span><br><span id='c1'>ECONOMIC COOPERATION</span>";
	if (count($fieldToolTipsmode22["Afrikaans"]))
		$tdatamode22[".isUseToolTips"] = true;
}


	$tdatamode22[".NCSearch"] = true;



$tdatamode22[".shortTableName"] = "mode22";
$tdatamode22[".nSecOptions"] = 0;

$tdatamode22[".mainTableOwnerID"] = "";
$tdatamode22[".entityType"] = 0;

$tdatamode22[".strOriginalTableName"] = "mode22";

		 



$tdatamode22[".showAddInPopup"] = false;

$tdatamode22[".showEditInPopup"] = false;

$tdatamode22[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamode22[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamode22[".listAjax"] = false;
//	temporary
$tdatamode22[".listAjax"] = false;

	$tdatamode22[".audit"] = false;

	$tdatamode22[".locking"] = false;


$pages = $tdatamode22[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamode22[".edit"] = true;
	$tdatamode22[".afterEditAction"] = 1;
	$tdatamode22[".closePopupAfterEdit"] = 1;
	$tdatamode22[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamode22[".add"] = true;
$tdatamode22[".afterAddAction"] = 1;
$tdatamode22[".closePopupAfterAdd"] = 1;
$tdatamode22[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamode22[".list"] = true;
}



$tdatamode22[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamode22[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamode22[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamode22[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamode22[".printFriendly"] = true;
}



$tdatamode22[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamode22[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamode22[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamode22[".isUseAjaxSuggest"] = true;

$tdatamode22[".rowHighlite"] = true;



			

$tdatamode22[".ajaxCodeSnippetAdded"] = false;

$tdatamode22[".buttonsAdded"] = false;

$tdatamode22[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamode22[".isUseTimeForSearch"] = false;


$tdatamode22[".badgeColor"] = "4169E1";


$tdatamode22[".allSearchFields"] = array();
$tdatamode22[".filterFields"] = array();
$tdatamode22[".requiredSearchFields"] = array();

$tdatamode22[".googleLikeFields"] = array();
$tdatamode22[".googleLikeFields"][] = "mfe_id";
$tdatamode22[".googleLikeFields"][] = "asset_id";
$tdatamode22[".googleLikeFields"][] = "model";
$tdatamode22[".googleLikeFields"][] = "serial";
$tdatamode22[".googleLikeFields"][] = "quantity";
$tdatamode22[".googleLikeFields"][] = "unitprice";
$tdatamode22[".googleLikeFields"][] = "totalprice";
$tdatamode22[".googleLikeFields"][] = "issued_date";
$tdatamode22[".googleLikeFields"][] = "ea_id";
$tdatamode22[".googleLikeFields"][] = "receiver_id";
$tdatamode22[".googleLikeFields"][] = "receipt_no";
$tdatamode22[".googleLikeFields"][] = "request_id";



$tdatamode22[".tableType"] = "list";

$tdatamode22[".printerPageOrientation"] = 0;
$tdatamode22[".nPrinterPageScale"] = 100;

$tdatamode22[".nPrinterSplitRecords"] = 40;

$tdatamode22[".geocodingEnabled"] = false;










$tdatamode22[".pageSize"] = 20;

$tdatamode22[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamode22[".strOrderBy"] = $tstrOrderBy;

$tdatamode22[".orderindexes"] = array();

$tdatamode22[".sqlHead"] = "SELECT `mfe_id`,  	`asset_id`,  	`model`,  	`serial`,  	`quantity`,  	`unitprice`,  	`totalprice`,  	`issued_date`,  	`ea_id`,  	`receiver_id`,  	`receipt_no`,  	`request_id`";
$tdatamode22[".sqlFrom"] = "FROM `mode22`";
$tdatamode22[".sqlWhereExpr"] = "";
$tdatamode22[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamode22[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamode22[".arrGroupsPerPage"] = $arrGPP;

$tdatamode22[".highlightSearchResults"] = true;

$tableKeysmode22 = array();
$tableKeysmode22[] = "mfe_id";
$tdatamode22[".Keys"] = $tableKeysmode22;


$tdatamode22[".hideMobileList"] = array();




//	mfe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mfe_id";
	$fdata["GoodName"] = "mfe_id";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","mfe_id");
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


	$tdatamode22["mfe_id"] = $fdata;
		$tdatamode22[".searchableFields"][] = "mfe_id";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","asset_id");
	$fdata["FieldType"] = 200;

	
	
	
										

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


	$tdatamode22["asset_id"] = $fdata;
		$tdatamode22[".searchableFields"][] = "asset_id";
//	model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "model";
	$fdata["GoodName"] = "model";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","model");
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


	$tdatamode22["model"] = $fdata;
		$tdatamode22[".searchableFields"][] = "model";
//	serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "serial";
	$fdata["GoodName"] = "serial";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","serial");
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


	$tdatamode22["serial"] = $fdata;
		$tdatamode22[".searchableFields"][] = "serial";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","quantity");
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


	$tdatamode22["quantity"] = $fdata;
		$tdatamode22[".searchableFields"][] = "quantity";
//	unitprice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unitprice";
	$fdata["GoodName"] = "unitprice";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","unitprice");
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

	

	
	$edata["LookupOrderBy"] = "price_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "asset_id", "lookup" => "price_id" );

	
	

	
	
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


	$tdatamode22["unitprice"] = $fdata;
		$tdatamode22[".searchableFields"][] = "unitprice";
//	totalprice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "totalprice";
	$fdata["GoodName"] = "totalprice";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","totalprice");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "totalprice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`totalprice`";

	
	
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


	$tdatamode22["totalprice"] = $fdata;
		$tdatamode22[".searchableFields"][] = "totalprice";
//	issued_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "issued_date";
	$fdata["GoodName"] = "issued_date";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","issued_date");
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


	$tdatamode22["issued_date"] = $fdata;
		$tdatamode22[".searchableFields"][] = "issued_date";
//	ea_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ea_id";
	$fdata["GoodName"] = "ea_id";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","ea_id");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "empid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

				$edata["LookupWhere"] = "groupid='4' or groupid='3'";


	
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


	$tdatamode22["ea_id"] = $fdata;
		$tdatamode22[".searchableFields"][] = "ea_id";
//	receiver_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "receiver_id";
	$fdata["GoodName"] = "receiver_id";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","receiver_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "receiver_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`receiver_id`";

	
	
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
	$edata["LookupTable"] = "request_info";
		$edata["listPageId"] = "list1";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"asset_id", 'lookupF'=>"asset_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"model", 'lookupF'=>"model");
	$edata["autoCompleteFields"][] = array('masterF'=>"request_id", 'lookupF'=>"rq_id");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "employee_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "rq_id";

				$edata["LookupWhere"] = "taked='no' and approve_status_from_asset_dept_manager in( select empid from csa_users where groupid='3') and approve_status_from_dept_manager in (select empid from csa_users where groupid='2' or groupid='3')";


	
	$edata["LookupOrderBy"] = "rq_id";

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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


	$tdatamode22["receiver_id"] = $fdata;
		$tdatamode22[".searchableFields"][] = "receiver_id";
//	receipt_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "receipt_no";
	$fdata["GoodName"] = "receipt_no";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","receipt_no");
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


	$tdatamode22["receipt_no"] = $fdata;
		$tdatamode22[".searchableFields"][] = "receipt_no";
//	request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "request_id";
	$fdata["GoodName"] = "request_id";
	$fdata["ownerTable"] = "mode22";
	$fdata["Label"] = GetFieldLabel("mode22","request_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "request_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`request_id`";

	
	
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


	$tdatamode22["request_id"] = $fdata;
		$tdatamode22[".searchableFields"][] = "request_id";


$tables_data["mode22"]=&$tdatamode22;
$field_labels["mode22"] = &$fieldLabelsmode22;
$fieldToolTips["mode22"] = &$fieldToolTipsmode22;
$placeHolders["mode22"] = &$placeHoldersmode22;
$page_titles["mode22"] = &$pageTitlesmode22;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mode22"] = array();
//	employee
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="employee";
		$detailsParam["dOriginalTable"] = "employee";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "employee";
	$detailsParam["dCaptionTable"] = GetTableCaption("employee");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["mode22"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mode22"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mode22"][$dIndex]["masterKeys"][]="receiver_id";

				$detailsTablesData["mode22"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mode22"][$dIndex]["detailKeys"][]="id";

// tables which are master tables for current table (detail)
$masterTablesData["mode22"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_mode22()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mfe_id`,  	`asset_id`,  	`model`,  	`serial`,  	`quantity`,  	`unitprice`,  	`totalprice`,  	`issued_date`,  	`ea_id`,  	`receiver_id`,  	`receipt_no`,  	`request_id`";
$proto0["m_strFrom"] = "FROM `mode22`";
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
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto6["m_sql"] = "`mfe_id`";
$proto6["m_srcTableName"] = "mode22";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto8["m_sql"] = "`asset_id`";
$proto8["m_srcTableName"] = "mode22";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "model",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto10["m_sql"] = "`model`";
$proto10["m_srcTableName"] = "mode22";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "serial",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto12["m_sql"] = "`serial`";
$proto12["m_srcTableName"] = "mode22";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto14["m_sql"] = "`quantity`";
$proto14["m_srcTableName"] = "mode22";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unitprice",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto16["m_sql"] = "`unitprice`";
$proto16["m_srcTableName"] = "mode22";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "totalprice",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto18["m_sql"] = "`totalprice`";
$proto18["m_srcTableName"] = "mode22";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "issued_date",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto20["m_sql"] = "`issued_date`";
$proto20["m_srcTableName"] = "mode22";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ea_id",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto22["m_sql"] = "`ea_id`";
$proto22["m_srcTableName"] = "mode22";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "receiver_id",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto24["m_sql"] = "`receiver_id`";
$proto24["m_srcTableName"] = "mode22";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "receipt_no",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto26["m_sql"] = "`receipt_no`";
$proto26["m_srcTableName"] = "mode22";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "request_id",
	"m_strTable" => "mode22",
	"m_srcTableName" => "mode22"
));

$proto28["m_sql"] = "`request_id`";
$proto28["m_srcTableName"] = "mode22";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mode22";
$proto31["m_srcTableName"] = "mode22";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "mfe_id";
$proto31["m_columns"][] = "asset_id";
$proto31["m_columns"][] = "model";
$proto31["m_columns"][] = "serial";
$proto31["m_columns"][] = "quantity";
$proto31["m_columns"][] = "unitprice";
$proto31["m_columns"][] = "totalprice";
$proto31["m_columns"][] = "issued_date";
$proto31["m_columns"][] = "ea_id";
$proto31["m_columns"][] = "receiver_id";
$proto31["m_columns"][] = "receipt_no";
$proto31["m_columns"][] = "request_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`mode22`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mode22";
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
$proto0["m_srcTableName"]="mode22";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mode22 = createSqlQuery_mode22();


	
					
;

												

$tdatamode22[".sqlquery"] = $queryData_mode22;

include_once(getabspath("include/mode22_events.php"));
$tableEvents["mode22"] = new eventclass_mode22;
$tdatamode22[".hasEvents"] = true;

?>