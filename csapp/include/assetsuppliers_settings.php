<?php



$tdataassetsuppliers = array();
$tdataassetsuppliers[".searchableFields"] = array();
$tdataassetsuppliers[".ShortName"] = "assetsuppliers";
$tdataassetsuppliers[".OwnerID"] = "";
$tdataassetsuppliers[".OriginalTable"] = "assetsuppliers";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataassetsuppliers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataassetsuppliers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataassetsuppliers[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsassetsuppliers = array();
$fieldToolTipsassetsuppliers = array();
$pageTitlesassetsuppliers = array();
$placeHoldersassetsuppliers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsassetsuppliers["English"] = array();
	$fieldToolTipsassetsuppliers["English"] = array();
	$placeHoldersassetsuppliers["English"] = array();
	$pageTitlesassetsuppliers["English"] = array();
	$fieldLabelsassetsuppliers["English"]["supplier_id"] = "Supplier Id";
	$fieldToolTipsassetsuppliers["English"]["supplier_id"] = "";
	$placeHoldersassetsuppliers["English"]["supplier_id"] = "";
	$fieldLabelsassetsuppliers["English"]["supplier_name"] = "Supplier Name";
	$fieldToolTipsassetsuppliers["English"]["supplier_name"] = "";
	$placeHoldersassetsuppliers["English"]["supplier_name"] = "";
	$fieldLabelsassetsuppliers["English"]["supplier_email"] = "Supplier Email";
	$fieldToolTipsassetsuppliers["English"]["supplier_email"] = "";
	$placeHoldersassetsuppliers["English"]["supplier_email"] = "";
	$fieldLabelsassetsuppliers["English"]["supplier_phone"] = "Supplier Phone";
	$fieldToolTipsassetsuppliers["English"]["supplier_phone"] = "";
	$placeHoldersassetsuppliers["English"]["supplier_phone"] = "";
	$fieldLabelsassetsuppliers["English"]["webste"] = "Webste";
	$fieldToolTipsassetsuppliers["English"]["webste"] = "";
	$placeHoldersassetsuppliers["English"]["webste"] = "";
	$fieldLabelsassetsuppliers["English"]["country"] = "Country";
	$fieldToolTipsassetsuppliers["English"]["country"] = "";
	$placeHoldersassetsuppliers["English"]["country"] = "";
	if (count($fieldToolTipsassetsuppliers["English"]))
		$tdataassetsuppliers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsassetsuppliers["Afrikaans"] = array();
	$fieldToolTipsassetsuppliers["Afrikaans"] = array();
	$placeHoldersassetsuppliers["Afrikaans"] = array();
	$pageTitlesassetsuppliers["Afrikaans"] = array();
	$fieldLabelsassetsuppliers["Afrikaans"]["supplier_id"] = "የአቅራቢው መለያ";
	$fieldToolTipsassetsuppliers["Afrikaans"]["supplier_id"] = "";
	$placeHoldersassetsuppliers["Afrikaans"]["supplier_id"] = "የአቅራቢው መለያ";
	$fieldLabelsassetsuppliers["Afrikaans"]["supplier_name"] = "የአቅራቢው ስም";
	$fieldToolTipsassetsuppliers["Afrikaans"]["supplier_name"] = "";
	$placeHoldersassetsuppliers["Afrikaans"]["supplier_name"] = "የአቅራቢው ስም";
	$fieldLabelsassetsuppliers["Afrikaans"]["supplier_email"] = "ኢሜይል";
	$fieldToolTipsassetsuppliers["Afrikaans"]["supplier_email"] = "";
	$placeHoldersassetsuppliers["Afrikaans"]["supplier_email"] = "ኢሜይል";
	$fieldLabelsassetsuppliers["Afrikaans"]["supplier_phone"] = "ዌብሳይት";
	$fieldToolTipsassetsuppliers["Afrikaans"]["supplier_phone"] = "";
	$placeHoldersassetsuppliers["Afrikaans"]["supplier_phone"] = "ስልክ";
	$fieldLabelsassetsuppliers["Afrikaans"]["webste"] = "ዌብሳይት";
	$fieldToolTipsassetsuppliers["Afrikaans"]["webste"] = "";
	$placeHoldersassetsuppliers["Afrikaans"]["webste"] = "ዌብሳይት";
	$fieldLabelsassetsuppliers["Afrikaans"]["country"] = "ሀገር";
	$fieldToolTipsassetsuppliers["Afrikaans"]["country"] = "";
	$placeHoldersassetsuppliers["Afrikaans"]["country"] = "ሀገር";
	$pageTitlesassetsuppliers["Afrikaans"]["add"] = "የእቃ አቅራቢዎች አዲስ ማስገቢያ";
	$pageTitlesassetsuppliers["Afrikaans"]["edit"] = "የእቃ አቅራቢዎች ማስገካከያ";
	$pageTitlesassetsuppliers["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesassetsuppliers["Afrikaans"]["search"] = "የእቃ አቅራቢዎች መፈለጊያ";
	if (count($fieldToolTipsassetsuppliers["Afrikaans"]))
		$tdataassetsuppliers[".isUseToolTips"] = true;
}


	$tdataassetsuppliers[".NCSearch"] = true;



$tdataassetsuppliers[".shortTableName"] = "assetsuppliers";
$tdataassetsuppliers[".nSecOptions"] = 0;

$tdataassetsuppliers[".mainTableOwnerID"] = "";
$tdataassetsuppliers[".entityType"] = 0;

$tdataassetsuppliers[".strOriginalTableName"] = "assetsuppliers";

		 



$tdataassetsuppliers[".showAddInPopup"] = false;

$tdataassetsuppliers[".showEditInPopup"] = false;

$tdataassetsuppliers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataassetsuppliers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataassetsuppliers[".listAjax"] = false;
//	temporary
$tdataassetsuppliers[".listAjax"] = false;

	$tdataassetsuppliers[".audit"] = false;

	$tdataassetsuppliers[".locking"] = false;


$pages = $tdataassetsuppliers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataassetsuppliers[".edit"] = true;
	$tdataassetsuppliers[".afterEditAction"] = 1;
	$tdataassetsuppliers[".closePopupAfterEdit"] = 1;
	$tdataassetsuppliers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataassetsuppliers[".add"] = true;
$tdataassetsuppliers[".afterAddAction"] = 1;
$tdataassetsuppliers[".closePopupAfterAdd"] = 1;
$tdataassetsuppliers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataassetsuppliers[".list"] = true;
}



$tdataassetsuppliers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataassetsuppliers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataassetsuppliers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataassetsuppliers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataassetsuppliers[".printFriendly"] = true;
}



$tdataassetsuppliers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataassetsuppliers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataassetsuppliers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataassetsuppliers[".isUseAjaxSuggest"] = true;

$tdataassetsuppliers[".rowHighlite"] = true;



			

$tdataassetsuppliers[".ajaxCodeSnippetAdded"] = false;

$tdataassetsuppliers[".buttonsAdded"] = false;

$tdataassetsuppliers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataassetsuppliers[".isUseTimeForSearch"] = false;


$tdataassetsuppliers[".badgeColor"] = "7B68EE";


$tdataassetsuppliers[".allSearchFields"] = array();
$tdataassetsuppliers[".filterFields"] = array();
$tdataassetsuppliers[".requiredSearchFields"] = array();

$tdataassetsuppliers[".googleLikeFields"] = array();
$tdataassetsuppliers[".googleLikeFields"][] = "supplier_id";
$tdataassetsuppliers[".googleLikeFields"][] = "supplier_name";
$tdataassetsuppliers[".googleLikeFields"][] = "supplier_email";
$tdataassetsuppliers[".googleLikeFields"][] = "supplier_phone";
$tdataassetsuppliers[".googleLikeFields"][] = "webste";
$tdataassetsuppliers[".googleLikeFields"][] = "country";



$tdataassetsuppliers[".tableType"] = "list";

$tdataassetsuppliers[".printerPageOrientation"] = 0;
$tdataassetsuppliers[".nPrinterPageScale"] = 100;

$tdataassetsuppliers[".nPrinterSplitRecords"] = 40;

$tdataassetsuppliers[".geocodingEnabled"] = false;










$tdataassetsuppliers[".pageSize"] = 20;

$tdataassetsuppliers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataassetsuppliers[".strOrderBy"] = $tstrOrderBy;

$tdataassetsuppliers[".orderindexes"] = array();

$tdataassetsuppliers[".sqlHead"] = "SELECT `supplier_id`,  	`supplier_name`,  	`supplier_email`,  	`supplier_phone`,  	`webste`,  	`country`";
$tdataassetsuppliers[".sqlFrom"] = "FROM `assetsuppliers`";
$tdataassetsuppliers[".sqlWhereExpr"] = "";
$tdataassetsuppliers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataassetsuppliers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataassetsuppliers[".arrGroupsPerPage"] = $arrGPP;

$tdataassetsuppliers[".highlightSearchResults"] = true;

$tableKeysassetsuppliers = array();
$tableKeysassetsuppliers[] = "supplier_id";
$tdataassetsuppliers[".Keys"] = $tableKeysassetsuppliers;


$tdataassetsuppliers[".hideMobileList"] = array();




//	supplier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "supplier_id";
	$fdata["GoodName"] = "supplier_id";
	$fdata["ownerTable"] = "assetsuppliers";
	$fdata["Label"] = GetFieldLabel("assetsuppliers","supplier_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "supplier_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`supplier_id`";

	
	
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


	$tdataassetsuppliers["supplier_id"] = $fdata;
		$tdataassetsuppliers[".searchableFields"][] = "supplier_id";
//	supplier_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "supplier_name";
	$fdata["GoodName"] = "supplier_name";
	$fdata["ownerTable"] = "assetsuppliers";
	$fdata["Label"] = GetFieldLabel("assetsuppliers","supplier_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "supplier_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`supplier_name`";

	
	
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


	$tdataassetsuppliers["supplier_name"] = $fdata;
		$tdataassetsuppliers[".searchableFields"][] = "supplier_name";
//	supplier_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "supplier_email";
	$fdata["GoodName"] = "supplier_email";
	$fdata["ownerTable"] = "assetsuppliers";
	$fdata["Label"] = GetFieldLabel("assetsuppliers","supplier_email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "supplier_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`supplier_email`";

	
	
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


	$tdataassetsuppliers["supplier_email"] = $fdata;
		$tdataassetsuppliers[".searchableFields"][] = "supplier_email";
//	supplier_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "supplier_phone";
	$fdata["GoodName"] = "supplier_phone";
	$fdata["ownerTable"] = "assetsuppliers";
	$fdata["Label"] = GetFieldLabel("assetsuppliers","supplier_phone");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "supplier_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`supplier_phone`";

	
	
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


	$tdataassetsuppliers["supplier_phone"] = $fdata;
		$tdataassetsuppliers[".searchableFields"][] = "supplier_phone";
//	webste
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "webste";
	$fdata["GoodName"] = "webste";
	$fdata["ownerTable"] = "assetsuppliers";
	$fdata["Label"] = GetFieldLabel("assetsuppliers","webste");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "webste";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`webste`";

	
	
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


	$tdataassetsuppliers["webste"] = $fdata;
		$tdataassetsuppliers[".searchableFields"][] = "webste";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "assetsuppliers";
	$fdata["Label"] = GetFieldLabel("assetsuppliers","country");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`country`";

	
	
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


	$tdataassetsuppliers["country"] = $fdata;
		$tdataassetsuppliers[".searchableFields"][] = "country";


$tables_data["assetsuppliers"]=&$tdataassetsuppliers;
$field_labels["assetsuppliers"] = &$fieldLabelsassetsuppliers;
$fieldToolTips["assetsuppliers"] = &$fieldToolTipsassetsuppliers;
$placeHolders["assetsuppliers"] = &$placeHoldersassetsuppliers;
$page_titles["assetsuppliers"] = &$pageTitlesassetsuppliers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["assetsuppliers"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["assetsuppliers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_assetsuppliers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`supplier_id`,  	`supplier_name`,  	`supplier_email`,  	`supplier_phone`,  	`webste`,  	`country`";
$proto0["m_strFrom"] = "FROM `assetsuppliers`";
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
	"m_strName" => "supplier_id",
	"m_strTable" => "assetsuppliers",
	"m_srcTableName" => "assetsuppliers"
));

$proto6["m_sql"] = "`supplier_id`";
$proto6["m_srcTableName"] = "assetsuppliers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_name",
	"m_strTable" => "assetsuppliers",
	"m_srcTableName" => "assetsuppliers"
));

$proto8["m_sql"] = "`supplier_name`";
$proto8["m_srcTableName"] = "assetsuppliers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_email",
	"m_strTable" => "assetsuppliers",
	"m_srcTableName" => "assetsuppliers"
));

$proto10["m_sql"] = "`supplier_email`";
$proto10["m_srcTableName"] = "assetsuppliers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_phone",
	"m_strTable" => "assetsuppliers",
	"m_srcTableName" => "assetsuppliers"
));

$proto12["m_sql"] = "`supplier_phone`";
$proto12["m_srcTableName"] = "assetsuppliers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "webste",
	"m_strTable" => "assetsuppliers",
	"m_srcTableName" => "assetsuppliers"
));

$proto14["m_sql"] = "`webste`";
$proto14["m_srcTableName"] = "assetsuppliers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "assetsuppliers",
	"m_srcTableName" => "assetsuppliers"
));

$proto16["m_sql"] = "`country`";
$proto16["m_srcTableName"] = "assetsuppliers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "assetsuppliers";
$proto19["m_srcTableName"] = "assetsuppliers";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "supplier_id";
$proto19["m_columns"][] = "supplier_name";
$proto19["m_columns"][] = "supplier_email";
$proto19["m_columns"][] = "supplier_phone";
$proto19["m_columns"][] = "webste";
$proto19["m_columns"][] = "country";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`assetsuppliers`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "assetsuppliers";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="assetsuppliers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_assetsuppliers = createSqlQuery_assetsuppliers();


	
					
;

						

$tdataassetsuppliers[".sqlquery"] = $queryData_assetsuppliers;

$tableEvents["assetsuppliers"] = new eventsBase;
$tdataassetsuppliers[".hasEvents"] = false;

?>