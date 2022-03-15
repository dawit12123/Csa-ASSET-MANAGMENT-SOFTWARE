<?php



$tdataasset_in_the_store = array();
$tdataasset_in_the_store[".searchableFields"] = array();
$tdataasset_in_the_store[".ShortName"] = "asset_in_the_store";
$tdataasset_in_the_store[".OwnerID"] = "";
$tdataasset_in_the_store[".OriginalTable"] = "asset";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataasset_in_the_store[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataasset_in_the_store[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataasset_in_the_store[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsasset_in_the_store = array();
$fieldToolTipsasset_in_the_store = array();
$pageTitlesasset_in_the_store = array();
$placeHoldersasset_in_the_store = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsasset_in_the_store["English"] = array();
	$fieldToolTipsasset_in_the_store["English"] = array();
	$placeHoldersasset_in_the_store["English"] = array();
	$pageTitlesasset_in_the_store["English"] = array();
	$fieldLabelsasset_in_the_store["English"]["asset_name"] = "Asset Name";
	$fieldToolTipsasset_in_the_store["English"]["asset_name"] = "";
	$placeHoldersasset_in_the_store["English"]["asset_name"] = "";
	$fieldLabelsasset_in_the_store["English"]["asset_model"] = "Asset Model";
	$fieldToolTipsasset_in_the_store["English"]["asset_model"] = "";
	$placeHoldersasset_in_the_store["English"]["asset_model"] = "";
	$fieldLabelsasset_in_the_store["English"]["asset_serial"] = "Asset Serial";
	$fieldToolTipsasset_in_the_store["English"]["asset_serial"] = "";
	$placeHoldersasset_in_the_store["English"]["asset_serial"] = "";
	$fieldLabelsasset_in_the_store["English"]["manufactured_date"] = "Manufactured Date";
	$fieldToolTipsasset_in_the_store["English"]["manufactured_date"] = "";
	$placeHoldersasset_in_the_store["English"]["manufactured_date"] = "";
	$fieldLabelsasset_in_the_store["English"]["manufacturer"] = "Manufacturer";
	$fieldToolTipsasset_in_the_store["English"]["manufacturer"] = "";
	$placeHoldersasset_in_the_store["English"]["manufacturer"] = "";
	$fieldLabelsasset_in_the_store["English"]["category_id"] = "Category Id";
	$fieldToolTipsasset_in_the_store["English"]["category_id"] = "";
	$placeHoldersasset_in_the_store["English"]["category_id"] = "";
	$fieldLabelsasset_in_the_store["English"]["suplier_id"] = "Suplier Id";
	$fieldToolTipsasset_in_the_store["English"]["suplier_id"] = "";
	$placeHoldersasset_in_the_store["English"]["suplier_id"] = "";
	$fieldLabelsasset_in_the_store["English"]["status_id"] = "Status Id";
	$fieldToolTipsasset_in_the_store["English"]["status_id"] = "";
	$placeHoldersasset_in_the_store["English"]["status_id"] = "";
	$fieldLabelsasset_in_the_store["English"]["registration_date"] = "Registration Date";
	$fieldToolTipsasset_in_the_store["English"]["registration_date"] = "";
	$placeHoldersasset_in_the_store["English"]["registration_date"] = "";
	$fieldLabelsasset_in_the_store["English"]["purchased_date"] = "Purchased Date";
	$fieldToolTipsasset_in_the_store["English"]["purchased_date"] = "";
	$placeHoldersasset_in_the_store["English"]["purchased_date"] = "";
	$fieldLabelsasset_in_the_store["English"]["image"] = "Image";
	$fieldToolTipsasset_in_the_store["English"]["image"] = "";
	$placeHoldersasset_in_the_store["English"]["image"] = "";
	$fieldLabelsasset_in_the_store["English"]["taken"] = "Taken";
	$fieldToolTipsasset_in_the_store["English"]["taken"] = "";
	$placeHoldersasset_in_the_store["English"]["taken"] = "";
	$fieldLabelsasset_in_the_store["English"]["asset_id"] = "Asset Id";
	$fieldToolTipsasset_in_the_store["English"]["asset_id"] = "";
	$placeHoldersasset_in_the_store["English"]["asset_id"] = "";
	if (count($fieldToolTipsasset_in_the_store["English"]))
		$tdataasset_in_the_store[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsasset_in_the_store["Afrikaans"] = array();
	$fieldToolTipsasset_in_the_store["Afrikaans"] = array();
	$placeHoldersasset_in_the_store["Afrikaans"] = array();
	$pageTitlesasset_in_the_store["Afrikaans"] = array();
	$fieldLabelsasset_in_the_store["Afrikaans"]["asset_name"] = "የእቃዎች ስም";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["asset_name"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["asset_name"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["asset_model"] = "ሞዴል";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["asset_model"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["asset_model"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["asset_serial"] = "ሴሪያል";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["asset_serial"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["asset_serial"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["manufactured_date"] = "የተመረተበት ቀን";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["manufactured_date"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["manufactured_date"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["manufacturer"] = "አምራች";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["manufacturer"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["manufacturer"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["category_id"] = "ምድብ መለያ";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["category_id"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["category_id"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["suplier_id"] = "አቅራቢ";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["suplier_id"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["suplier_id"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["status_id"] = "ያለበት ኔታ";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["status_id"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["status_id"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["registration_date"] = "የተመዘገበበት ቀን";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["registration_date"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["registration_date"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["purchased_date"] = "የተገዛበት ቀን";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["purchased_date"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["purchased_date"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["image"] = "ፎቶ";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["image"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["image"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["taken"] = "ተወስዷል";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["taken"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["taken"] = "";
	$fieldLabelsasset_in_the_store["Afrikaans"]["asset_id"] = "መለያ ቁጥር";
	$fieldToolTipsasset_in_the_store["Afrikaans"]["asset_id"] = "";
	$placeHoldersasset_in_the_store["Afrikaans"]["asset_id"] = "";
	if (count($fieldToolTipsasset_in_the_store["Afrikaans"]))
		$tdataasset_in_the_store[".isUseToolTips"] = true;
}


	$tdataasset_in_the_store[".NCSearch"] = true;



$tdataasset_in_the_store[".shortTableName"] = "asset_in_the_store";
$tdataasset_in_the_store[".nSecOptions"] = 0;

$tdataasset_in_the_store[".mainTableOwnerID"] = "";
$tdataasset_in_the_store[".entityType"] = 1;

$tdataasset_in_the_store[".strOriginalTableName"] = "asset";

		 



$tdataasset_in_the_store[".showAddInPopup"] = false;

$tdataasset_in_the_store[".showEditInPopup"] = false;

$tdataasset_in_the_store[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataasset_in_the_store[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataasset_in_the_store[".listAjax"] = false;
//	temporary
$tdataasset_in_the_store[".listAjax"] = false;

	$tdataasset_in_the_store[".audit"] = true;

	$tdataasset_in_the_store[".locking"] = false;


$pages = $tdataasset_in_the_store[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataasset_in_the_store[".edit"] = true;
	$tdataasset_in_the_store[".afterEditAction"] = 1;
	$tdataasset_in_the_store[".closePopupAfterEdit"] = 1;
	$tdataasset_in_the_store[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataasset_in_the_store[".add"] = true;
$tdataasset_in_the_store[".afterAddAction"] = 1;
$tdataasset_in_the_store[".closePopupAfterAdd"] = 1;
$tdataasset_in_the_store[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataasset_in_the_store[".list"] = true;
}



$tdataasset_in_the_store[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataasset_in_the_store[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataasset_in_the_store[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataasset_in_the_store[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataasset_in_the_store[".printFriendly"] = true;
}



$tdataasset_in_the_store[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataasset_in_the_store[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataasset_in_the_store[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataasset_in_the_store[".isUseAjaxSuggest"] = true;

$tdataasset_in_the_store[".rowHighlite"] = true;



			

$tdataasset_in_the_store[".ajaxCodeSnippetAdded"] = false;

$tdataasset_in_the_store[".buttonsAdded"] = false;

$tdataasset_in_the_store[".addPageEvents"] = false;

// use timepicker for search panel
$tdataasset_in_the_store[".isUseTimeForSearch"] = false;


$tdataasset_in_the_store[".badgeColor"] = "2F4F4F";


$tdataasset_in_the_store[".allSearchFields"] = array();
$tdataasset_in_the_store[".filterFields"] = array();
$tdataasset_in_the_store[".requiredSearchFields"] = array();

$tdataasset_in_the_store[".googleLikeFields"] = array();
$tdataasset_in_the_store[".googleLikeFields"][] = "asset_name";
$tdataasset_in_the_store[".googleLikeFields"][] = "asset_model";
$tdataasset_in_the_store[".googleLikeFields"][] = "asset_serial";
$tdataasset_in_the_store[".googleLikeFields"][] = "manufactured_date";
$tdataasset_in_the_store[".googleLikeFields"][] = "manufacturer";
$tdataasset_in_the_store[".googleLikeFields"][] = "category_id";
$tdataasset_in_the_store[".googleLikeFields"][] = "suplier_id";
$tdataasset_in_the_store[".googleLikeFields"][] = "status_id";
$tdataasset_in_the_store[".googleLikeFields"][] = "registration_date";
$tdataasset_in_the_store[".googleLikeFields"][] = "purchased_date";
$tdataasset_in_the_store[".googleLikeFields"][] = "image";
$tdataasset_in_the_store[".googleLikeFields"][] = "taken";
$tdataasset_in_the_store[".googleLikeFields"][] = "asset_id";



$tdataasset_in_the_store[".tableType"] = "list";

$tdataasset_in_the_store[".printerPageOrientation"] = 0;
$tdataasset_in_the_store[".nPrinterPageScale"] = 100;

$tdataasset_in_the_store[".nPrinterSplitRecords"] = 40;

$tdataasset_in_the_store[".geocodingEnabled"] = false;










$tdataasset_in_the_store[".pageSize"] = 20;

$tdataasset_in_the_store[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataasset_in_the_store[".strOrderBy"] = $tstrOrderBy;

$tdataasset_in_the_store[".orderindexes"] = array();

$tdataasset_in_the_store[".sqlHead"] = "SELECT `asset_name`,  `asset_model`,  `asset_serial`,  `manufactured_date`,  `manufacturer`,  `category_id`,  `suplier_id`,  `status_id`,  `registration_date`,  `purchased_date`,  `image`,  `taken`,  `asset_id`";
$tdataasset_in_the_store[".sqlFrom"] = "FROM `asset`";
$tdataasset_in_the_store[".sqlWhereExpr"] = "";
$tdataasset_in_the_store[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "taken='no'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataasset_in_the_store[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasset_in_the_store[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasset_in_the_store[".arrGroupsPerPage"] = $arrGPP;

$tdataasset_in_the_store[".highlightSearchResults"] = true;

$tableKeysasset_in_the_store = array();
$tableKeysasset_in_the_store[] = "asset_id";
$tdataasset_in_the_store[".Keys"] = $tableKeysasset_in_the_store;


$tdataasset_in_the_store[".hideMobileList"] = array();




//	asset_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "asset_name";
	$fdata["GoodName"] = "asset_name";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","asset_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "asset_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_name`";

	
	
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
			$edata["EditParams"].= " maxlength=99";

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "category_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset_in_the_store["asset_name"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "asset_name";
//	asset_model
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "asset_model";
	$fdata["GoodName"] = "asset_model";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","asset_model");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "asset_model";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_model`";

	
	
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
			$edata["EditParams"].= " maxlength=99";

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


	$tdataasset_in_the_store["asset_model"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "asset_model";
//	asset_serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "asset_serial";
	$fdata["GoodName"] = "asset_serial";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","asset_serial");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "asset_serial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_serial`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataasset_in_the_store["asset_serial"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "asset_serial";
//	manufactured_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "manufactured_date";
	$fdata["GoodName"] = "manufactured_date";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","manufactured_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "manufactured_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`manufactured_date`";

	
	
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


	$tdataasset_in_the_store["manufactured_date"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "manufactured_date";
//	manufacturer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "manufacturer";
	$fdata["GoodName"] = "manufacturer";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","manufacturer");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "manufacturer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`manufacturer`";

	
	
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
			$edata["EditParams"].= " maxlength=99";

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


	$tdataasset_in_the_store["manufacturer"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "manufacturer";
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","category_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
	$edata["LookupTable"] = "assetcategory";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "asset_category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "asset_category_name";

	

	
	$edata["LookupOrderBy"] = "asset_category_id";

	
	
	
	

	
	
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


	$tdataasset_in_the_store["category_id"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "category_id";
//	suplier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "suplier_id";
	$fdata["GoodName"] = "suplier_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","suplier_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "suplier_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`suplier_id`";

	
	
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
	$edata["LookupTable"] = "assetsuppliers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "supplier_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "supplier_name";

	

	
	$edata["LookupOrderBy"] = "supplier_id";

	
	
	
	

	
	
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


	$tdataasset_in_the_store["suplier_id"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "suplier_id";
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","status_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status_id`";

	
	
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

	

	
	$edata["LookupOrderBy"] = "asset_status_id";

	
	
	
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
		$fdata["filterTotalFields"] = "category_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset_in_the_store["status_id"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "status_id";
//	registration_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "registration_date";
	$fdata["GoodName"] = "registration_date";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","registration_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "registration_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`registration_date`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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
		$fdata["filterTotalFields"] = "asset_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataasset_in_the_store["registration_date"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "registration_date";
//	purchased_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "purchased_date";
	$fdata["GoodName"] = "purchased_date";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","purchased_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "purchased_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchased_date`";

	
	
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


	$tdataasset_in_the_store["purchased_date"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "purchased_date";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","image");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`image`";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 400;
	$vdata["ImageHeight"] = 500;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 300;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 300;

	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 300;

	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataasset_in_the_store["image"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "image";
//	taken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "taken";
	$fdata["GoodName"] = "taken";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","taken");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "taken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`taken`";

	
	
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


	$tdataasset_in_the_store["taken"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "taken";
//	asset_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "asset_id";
	$fdata["GoodName"] = "asset_id";
	$fdata["ownerTable"] = "asset";
	$fdata["Label"] = GetFieldLabel("asset_in_the_store","asset_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "asset_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_id`";

	
	
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


	$tdataasset_in_the_store["asset_id"] = $fdata;
		$tdataasset_in_the_store[".searchableFields"][] = "asset_id";


$tables_data["asset in the store"]=&$tdataasset_in_the_store;
$field_labels["asset_in_the_store"] = &$fieldLabelsasset_in_the_store;
$fieldToolTips["asset_in_the_store"] = &$fieldToolTipsasset_in_the_store;
$placeHolders["asset_in_the_store"] = &$placeHoldersasset_in_the_store;
$page_titles["asset_in_the_store"] = &$pageTitlesasset_in_the_store;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["asset in the store"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["asset in the store"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_asset_in_the_store()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`asset_name`,  `asset_model`,  `asset_serial`,  `manufactured_date`,  `manufacturer`,  `category_id`,  `suplier_id`,  `status_id`,  `registration_date`,  `purchased_date`,  `image`,  `taken`,  `asset_id`";
$proto0["m_strFrom"] = "FROM `asset`";
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
	"m_strName" => "asset_name",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto6["m_sql"] = "`asset_name`";
$proto6["m_srcTableName"] = "asset in the store";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_model",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto8["m_sql"] = "`asset_model`";
$proto8["m_srcTableName"] = "asset in the store";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_serial",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto10["m_sql"] = "`asset_serial`";
$proto10["m_srcTableName"] = "asset in the store";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "manufactured_date",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto12["m_sql"] = "`manufactured_date`";
$proto12["m_srcTableName"] = "asset in the store";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "manufacturer",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto14["m_sql"] = "`manufacturer`";
$proto14["m_srcTableName"] = "asset in the store";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto16["m_sql"] = "`category_id`";
$proto16["m_srcTableName"] = "asset in the store";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "suplier_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto18["m_sql"] = "`suplier_id`";
$proto18["m_srcTableName"] = "asset in the store";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto20["m_sql"] = "`status_id`";
$proto20["m_srcTableName"] = "asset in the store";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "registration_date",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto22["m_sql"] = "`registration_date`";
$proto22["m_srcTableName"] = "asset in the store";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "purchased_date",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto24["m_sql"] = "`purchased_date`";
$proto24["m_srcTableName"] = "asset in the store";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "image",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto26["m_sql"] = "`image`";
$proto26["m_srcTableName"] = "asset in the store";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "taken",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto28["m_sql"] = "`taken`";
$proto28["m_srcTableName"] = "asset in the store";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_id",
	"m_strTable" => "asset",
	"m_srcTableName" => "asset in the store"
));

$proto30["m_sql"] = "`asset_id`";
$proto30["m_srcTableName"] = "asset in the store";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "asset";
$proto33["m_srcTableName"] = "asset in the store";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "asset_id";
$proto33["m_columns"][] = "asset_name";
$proto33["m_columns"][] = "asset_model";
$proto33["m_columns"][] = "asset_serial";
$proto33["m_columns"][] = "manufactured_date";
$proto33["m_columns"][] = "manufacturer";
$proto33["m_columns"][] = "category_id";
$proto33["m_columns"][] = "suplier_id";
$proto33["m_columns"][] = "status_id";
$proto33["m_columns"][] = "registration_date";
$proto33["m_columns"][] = "purchased_date";
$proto33["m_columns"][] = "image";
$proto33["m_columns"][] = "taken";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`asset`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "asset in the store";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="asset in the store";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_asset_in_the_store = createSqlQuery_asset_in_the_store();


	
					
;

													

$tdataasset_in_the_store[".sqlquery"] = $queryData_asset_in_the_store;

include_once(getabspath("include/asset_in_the_store_events.php"));
$tableEvents["asset in the store"] = new eventclass_asset_in_the_store;
$tdataasset_in_the_store[".hasEvents"] = true;

?>