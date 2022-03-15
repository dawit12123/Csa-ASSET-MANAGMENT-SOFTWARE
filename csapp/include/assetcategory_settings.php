<?php



$tdataassetcategory = array();
$tdataassetcategory[".searchableFields"] = array();
$tdataassetcategory[".ShortName"] = "assetcategory";
$tdataassetcategory[".OwnerID"] = "";
$tdataassetcategory[".OriginalTable"] = "assetcategory";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );

$tdataassetcategory[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataassetcategory[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataassetcategory[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsassetcategory = array();
$fieldToolTipsassetcategory = array();
$pageTitlesassetcategory = array();
$placeHoldersassetcategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsassetcategory["English"] = array();
	$fieldToolTipsassetcategory["English"] = array();
	$placeHoldersassetcategory["English"] = array();
	$pageTitlesassetcategory["English"] = array();
	$fieldLabelsassetcategory["English"]["asset_category_id"] = "Asset Category Id";
	$fieldToolTipsassetcategory["English"]["asset_category_id"] = "";
	$placeHoldersassetcategory["English"]["asset_category_id"] = "";
	$fieldLabelsassetcategory["English"]["asset_category_name"] = "Asset Category Name";
	$fieldToolTipsassetcategory["English"]["asset_category_name"] = "";
	$placeHoldersassetcategory["English"]["asset_category_name"] = "";
	if (count($fieldToolTipsassetcategory["English"]))
		$tdataassetcategory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsassetcategory["Afrikaans"] = array();
	$fieldToolTipsassetcategory["Afrikaans"] = array();
	$placeHoldersassetcategory["Afrikaans"] = array();
	$pageTitlesassetcategory["Afrikaans"] = array();
	$fieldLabelsassetcategory["Afrikaans"]["asset_category_id"] = "የአቃ ምድብ መለያ ቁጥር";
	$fieldToolTipsassetcategory["Afrikaans"]["asset_category_id"] = "";
	$placeHoldersassetcategory["Afrikaans"]["asset_category_id"] = "የአቃ ምድብ መለያ ቁጥር";
	$fieldLabelsassetcategory["Afrikaans"]["asset_category_name"] = "የአቃዎት ሁኔታ ስም";
	$fieldToolTipsassetcategory["Afrikaans"]["asset_category_name"] = "";
	$placeHoldersassetcategory["Afrikaans"]["asset_category_name"] = "የአቃ ምድብ ስም";
	$pageTitlesassetcategory["Afrikaans"]["add"] = "የእቃዎች ምድብ አዲስ ማስገቢያ";
	$pageTitlesassetcategory["Afrikaans"]["edit"] = "የእቃዎች ምድብ ማስተካከያ";
	$pageTitlesassetcategory["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesassetcategory["Afrikaans"]["search"] = "የእቃዎች ምድብ - መፈለጊያ";
	if (count($fieldToolTipsassetcategory["Afrikaans"]))
		$tdataassetcategory[".isUseToolTips"] = true;
}


	$tdataassetcategory[".NCSearch"] = true;



$tdataassetcategory[".shortTableName"] = "assetcategory";
$tdataassetcategory[".nSecOptions"] = 0;

$tdataassetcategory[".mainTableOwnerID"] = "";
$tdataassetcategory[".entityType"] = 0;

$tdataassetcategory[".strOriginalTableName"] = "assetcategory";

		 



$tdataassetcategory[".showAddInPopup"] = false;

$tdataassetcategory[".showEditInPopup"] = false;

$tdataassetcategory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataassetcategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataassetcategory[".listAjax"] = false;
//	temporary
$tdataassetcategory[".listAjax"] = false;

	$tdataassetcategory[".audit"] = true;

	$tdataassetcategory[".locking"] = false;


$pages = $tdataassetcategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataassetcategory[".edit"] = true;
	$tdataassetcategory[".afterEditAction"] = 1;
	$tdataassetcategory[".closePopupAfterEdit"] = 1;
	$tdataassetcategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataassetcategory[".add"] = true;
$tdataassetcategory[".afterAddAction"] = 1;
$tdataassetcategory[".closePopupAfterAdd"] = 1;
$tdataassetcategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataassetcategory[".list"] = true;
}



$tdataassetcategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataassetcategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataassetcategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataassetcategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataassetcategory[".printFriendly"] = true;
}



$tdataassetcategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataassetcategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataassetcategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataassetcategory[".isUseAjaxSuggest"] = true;

$tdataassetcategory[".rowHighlite"] = true;



			

$tdataassetcategory[".ajaxCodeSnippetAdded"] = false;

$tdataassetcategory[".buttonsAdded"] = false;

$tdataassetcategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdataassetcategory[".isUseTimeForSearch"] = false;


$tdataassetcategory[".badgeColor"] = "CD853F";


$tdataassetcategory[".allSearchFields"] = array();
$tdataassetcategory[".filterFields"] = array();
$tdataassetcategory[".requiredSearchFields"] = array();

$tdataassetcategory[".googleLikeFields"] = array();
$tdataassetcategory[".googleLikeFields"][] = "asset_category_id";
$tdataassetcategory[".googleLikeFields"][] = "asset_category_name";



$tdataassetcategory[".tableType"] = "list";

$tdataassetcategory[".printerPageOrientation"] = 0;
$tdataassetcategory[".nPrinterPageScale"] = 100;

$tdataassetcategory[".nPrinterSplitRecords"] = 40;

$tdataassetcategory[".geocodingEnabled"] = false;










$tdataassetcategory[".pageSize"] = 20;

$tdataassetcategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataassetcategory[".strOrderBy"] = $tstrOrderBy;

$tdataassetcategory[".orderindexes"] = array();

$tdataassetcategory[".sqlHead"] = "SELECT `asset_category_id`,  	`asset_category_name`";
$tdataassetcategory[".sqlFrom"] = "FROM `assetcategory`";
$tdataassetcategory[".sqlWhereExpr"] = "";
$tdataassetcategory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataassetcategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataassetcategory[".arrGroupsPerPage"] = $arrGPP;

$tdataassetcategory[".highlightSearchResults"] = true;

$tableKeysassetcategory = array();
$tableKeysassetcategory[] = "asset_category_id";
$tdataassetcategory[".Keys"] = $tableKeysassetcategory;


$tdataassetcategory[".hideMobileList"] = array();




//	asset_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "asset_category_id";
	$fdata["GoodName"] = "asset_category_id";
	$fdata["ownerTable"] = "assetcategory";
	$fdata["Label"] = GetFieldLabel("assetcategory","asset_category_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "asset_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_category_id`";

	
	
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


	$tdataassetcategory["asset_category_id"] = $fdata;
		$tdataassetcategory[".searchableFields"][] = "asset_category_id";
//	asset_category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "asset_category_name";
	$fdata["GoodName"] = "asset_category_name";
	$fdata["ownerTable"] = "assetcategory";
	$fdata["Label"] = GetFieldLabel("assetcategory","asset_category_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "asset_category_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`asset_category_name`";

	
	
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
			$edata["EditParams"].= " maxlength=88";

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


	$tdataassetcategory["asset_category_name"] = $fdata;
		$tdataassetcategory[".searchableFields"][] = "asset_category_name";


$tables_data["assetcategory"]=&$tdataassetcategory;
$field_labels["assetcategory"] = &$fieldLabelsassetcategory;
$fieldToolTips["assetcategory"] = &$fieldToolTipsassetcategory;
$placeHolders["assetcategory"] = &$placeHoldersassetcategory;
$page_titles["assetcategory"] = &$pageTitlesassetcategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["assetcategory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["assetcategory"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_assetcategory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`asset_category_id`,  	`asset_category_name`";
$proto0["m_strFrom"] = "FROM `assetcategory`";
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
	"m_strName" => "asset_category_id",
	"m_strTable" => "assetcategory",
	"m_srcTableName" => "assetcategory"
));

$proto6["m_sql"] = "`asset_category_id`";
$proto6["m_srcTableName"] = "assetcategory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "asset_category_name",
	"m_strTable" => "assetcategory",
	"m_srcTableName" => "assetcategory"
));

$proto8["m_sql"] = "`asset_category_name`";
$proto8["m_srcTableName"] = "assetcategory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "assetcategory";
$proto11["m_srcTableName"] = "assetcategory";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "asset_category_id";
$proto11["m_columns"][] = "asset_category_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`assetcategory`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "assetcategory";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="assetcategory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_assetcategory = createSqlQuery_assetcategory();


	
					
;

		

$tdataassetcategory[".sqlquery"] = $queryData_assetcategory;

$tableEvents["assetcategory"] = new eventsBase;
$tdataassetcategory[".hasEvents"] = false;

?>