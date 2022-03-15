<?php



$tdataprice = array();
$tdataprice[".searchableFields"] = array();
$tdataprice[".ShortName"] = "price";
$tdataprice[".OwnerID"] = "";
$tdataprice[".OriginalTable"] = "price";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataprice[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprice[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprice[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsprice = array();
$fieldToolTipsprice = array();
$pageTitlesprice = array();
$placeHoldersprice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprice["English"] = array();
	$fieldToolTipsprice["English"] = array();
	$placeHoldersprice["English"] = array();
	$pageTitlesprice["English"] = array();
	$fieldLabelsprice["English"]["price_id"] = "Price Id";
	$fieldToolTipsprice["English"]["price_id"] = "";
	$placeHoldersprice["English"]["price_id"] = "";
	$fieldLabelsprice["English"]["item_id"] = "Item Id";
	$fieldToolTipsprice["English"]["item_id"] = "";
	$placeHoldersprice["English"]["item_id"] = "";
	$fieldLabelsprice["English"]["sourceinfo_id"] = "Sourceinfo Id";
	$fieldToolTipsprice["English"]["sourceinfo_id"] = "";
	$placeHoldersprice["English"]["sourceinfo_id"] = "";
	$fieldLabelsprice["English"]["pricedate"] = "Pricedate";
	$fieldToolTipsprice["English"]["pricedate"] = "";
	$placeHoldersprice["English"]["pricedate"] = "";
	$fieldLabelsprice["English"]["price"] = "Price";
	$fieldToolTipsprice["English"]["price"] = "";
	$placeHoldersprice["English"]["price"] = "";
	if (count($fieldToolTipsprice["English"]))
		$tdataprice[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsprice["Afrikaans"] = array();
	$fieldToolTipsprice["Afrikaans"] = array();
	$placeHoldersprice["Afrikaans"] = array();
	$pageTitlesprice["Afrikaans"] = array();
	$fieldLabelsprice["Afrikaans"]["price_id"] = "ተ.ቁ";
	$fieldToolTipsprice["Afrikaans"]["price_id"] = "";
	$placeHoldersprice["Afrikaans"]["price_id"] = "";
	$fieldLabelsprice["Afrikaans"]["item_id"] = "የእቃው አይነት";
	$fieldToolTipsprice["Afrikaans"]["item_id"] = "";
	$placeHoldersprice["Afrikaans"]["item_id"] = "";
	$fieldLabelsprice["Afrikaans"]["sourceinfo_id"] = "ምንጭ";
	$fieldToolTipsprice["Afrikaans"]["sourceinfo_id"] = "";
	$placeHoldersprice["Afrikaans"]["sourceinfo_id"] = "";
	$fieldLabelsprice["Afrikaans"]["pricedate"] = "ዋጋው የተሰጠበት ቀን";
	$fieldToolTipsprice["Afrikaans"]["pricedate"] = "";
	$placeHoldersprice["Afrikaans"]["pricedate"] = "";
	$fieldLabelsprice["Afrikaans"]["price"] = "ዋጋ";
	$fieldToolTipsprice["Afrikaans"]["price"] = "";
	$placeHoldersprice["Afrikaans"]["price"] = "";
	$pageTitlesprice["Afrikaans"]["add"] = "የእቃ ዋጋ አዲስ ማስገቢያ";
	$pageTitlesprice["Afrikaans"]["edit"] = "የእቃ ዋጋ ማስተካከያ";
	$pageTitlesprice["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesprice["Afrikaans"]["search"] = "የእቃ ዋጋ መፈለጊያ";
	$pageTitlesprice["Afrikaans"]["view"] = "የእቃ ዋጋ ማሳያ";
	if (count($fieldToolTipsprice["Afrikaans"]))
		$tdataprice[".isUseToolTips"] = true;
}


	$tdataprice[".NCSearch"] = true;



$tdataprice[".shortTableName"] = "price";
$tdataprice[".nSecOptions"] = 0;

$tdataprice[".mainTableOwnerID"] = "";
$tdataprice[".entityType"] = 0;

$tdataprice[".strOriginalTableName"] = "price";

		 



$tdataprice[".showAddInPopup"] = false;

$tdataprice[".showEditInPopup"] = false;

$tdataprice[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprice[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprice[".listAjax"] = false;
//	temporary
$tdataprice[".listAjax"] = false;

	$tdataprice[".audit"] = true;

	$tdataprice[".locking"] = false;


$pages = $tdataprice[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprice[".edit"] = true;
	$tdataprice[".afterEditAction"] = 1;
	$tdataprice[".closePopupAfterEdit"] = 1;
	$tdataprice[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprice[".add"] = true;
$tdataprice[".afterAddAction"] = 1;
$tdataprice[".closePopupAfterAdd"] = 1;
$tdataprice[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprice[".list"] = true;
}



$tdataprice[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprice[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprice[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprice[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprice[".printFriendly"] = true;
}



$tdataprice[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprice[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprice[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprice[".isUseAjaxSuggest"] = true;

$tdataprice[".rowHighlite"] = true;



			

$tdataprice[".ajaxCodeSnippetAdded"] = false;

$tdataprice[".buttonsAdded"] = false;

$tdataprice[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprice[".isUseTimeForSearch"] = false;


$tdataprice[".badgeColor"] = "1E90FF";


$tdataprice[".allSearchFields"] = array();
$tdataprice[".filterFields"] = array();
$tdataprice[".requiredSearchFields"] = array();

$tdataprice[".googleLikeFields"] = array();
$tdataprice[".googleLikeFields"][] = "price_id";
$tdataprice[".googleLikeFields"][] = "item_id";
$tdataprice[".googleLikeFields"][] = "sourceinfo_id";
$tdataprice[".googleLikeFields"][] = "pricedate";
$tdataprice[".googleLikeFields"][] = "price";



$tdataprice[".tableType"] = "list";

$tdataprice[".printerPageOrientation"] = 0;
$tdataprice[".nPrinterPageScale"] = 100;

$tdataprice[".nPrinterSplitRecords"] = 40;

$tdataprice[".geocodingEnabled"] = false;










$tdataprice[".pageSize"] = 20;

$tdataprice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprice[".strOrderBy"] = $tstrOrderBy;

$tdataprice[".orderindexes"] = array();

$tdataprice[".sqlHead"] = "SELECT `price_id`,  	`item_id`,  	`sourceinfo_id`,  	`pricedate`,  	`price`";
$tdataprice[".sqlFrom"] = "FROM `price`";
$tdataprice[".sqlWhereExpr"] = "";
$tdataprice[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprice[".arrGroupsPerPage"] = $arrGPP;

$tdataprice[".highlightSearchResults"] = true;

$tableKeysprice = array();
$tableKeysprice[] = "price_id";
$tdataprice[".Keys"] = $tableKeysprice;


$tdataprice[".hideMobileList"] = array();




//	price_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "price_id";
	$fdata["GoodName"] = "price_id";
	$fdata["ownerTable"] = "price";
	$fdata["Label"] = GetFieldLabel("price","price_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "price_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_id`";

	
	
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


	$tdataprice["price_id"] = $fdata;
		$tdataprice[".searchableFields"][] = "price_id";
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "price";
	$fdata["Label"] = GetFieldLabel("price","item_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item_id`";

	
	
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


	$tdataprice["item_id"] = $fdata;
		$tdataprice[".searchableFields"][] = "item_id";
//	sourceinfo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sourceinfo_id";
	$fdata["GoodName"] = "sourceinfo_id";
	$fdata["ownerTable"] = "price";
	$fdata["Label"] = GetFieldLabel("price","sourceinfo_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "sourceinfo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sourceinfo_id`";

	
	
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
	$edata["LookupTable"] = "sourceinfo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
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


	$tdataprice["sourceinfo_id"] = $fdata;
		$tdataprice[".searchableFields"][] = "sourceinfo_id";
//	pricedate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pricedate";
	$fdata["GoodName"] = "pricedate";
	$fdata["ownerTable"] = "price";
	$fdata["Label"] = GetFieldLabel("price","pricedate");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "pricedate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`pricedate`";

	
	
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


	$tdataprice["pricedate"] = $fdata;
		$tdataprice[".searchableFields"][] = "pricedate";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "price";
	$fdata["Label"] = GetFieldLabel("price","price");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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


	$tdataprice["price"] = $fdata;
		$tdataprice[".searchableFields"][] = "price";


$tables_data["price"]=&$tdataprice;
$field_labels["price"] = &$fieldLabelsprice;
$fieldToolTips["price"] = &$fieldToolTipsprice;
$placeHolders["price"] = &$placeHoldersprice;
$page_titles["price"] = &$pageTitlesprice;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["price"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["price"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`price_id`,  	`item_id`,  	`sourceinfo_id`,  	`pricedate`,  	`price`";
$proto0["m_strFrom"] = "FROM `price`";
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
	"m_strName" => "price_id",
	"m_strTable" => "price",
	"m_srcTableName" => "price"
));

$proto6["m_sql"] = "`price_id`";
$proto6["m_srcTableName"] = "price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "price",
	"m_srcTableName" => "price"
));

$proto8["m_sql"] = "`item_id`";
$proto8["m_srcTableName"] = "price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sourceinfo_id",
	"m_strTable" => "price",
	"m_srcTableName" => "price"
));

$proto10["m_sql"] = "`sourceinfo_id`";
$proto10["m_srcTableName"] = "price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pricedate",
	"m_strTable" => "price",
	"m_srcTableName" => "price"
));

$proto12["m_sql"] = "`pricedate`";
$proto12["m_srcTableName"] = "price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "price",
	"m_srcTableName" => "price"
));

$proto14["m_sql"] = "`price`";
$proto14["m_srcTableName"] = "price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "price";
$proto17["m_srcTableName"] = "price";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "price_id";
$proto17["m_columns"][] = "item_id";
$proto17["m_columns"][] = "sourceinfo_id";
$proto17["m_columns"][] = "pricedate";
$proto17["m_columns"][] = "price";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`price`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "price";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_price = createSqlQuery_price();


	
					
;

					

$tdataprice[".sqlquery"] = $queryData_price;

include_once(getabspath("include/price_events.php"));
$tableEvents["price"] = new eventclass_price;
$tdataprice[".hasEvents"] = true;

?>