<?php



$tdatasourceinfo = array();
$tdatasourceinfo[".searchableFields"] = array();
$tdatasourceinfo[".ShortName"] = "sourceinfo";
$tdatasourceinfo[".OwnerID"] = "";
$tdatasourceinfo[".OriginalTable"] = "sourceinfo";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasourceinfo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasourceinfo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasourceinfo[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssourceinfo = array();
$fieldToolTipssourceinfo = array();
$pageTitlessourceinfo = array();
$placeHolderssourceinfo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssourceinfo["English"] = array();
	$fieldToolTipssourceinfo["English"] = array();
	$placeHolderssourceinfo["English"] = array();
	$pageTitlessourceinfo["English"] = array();
	$fieldLabelssourceinfo["English"]["id"] = "Id";
	$fieldToolTipssourceinfo["English"]["id"] = "";
	$placeHolderssourceinfo["English"]["id"] = "";
	$fieldLabelssourceinfo["English"]["name"] = "Name";
	$fieldToolTipssourceinfo["English"]["name"] = "";
	$placeHolderssourceinfo["English"]["name"] = "";
	if (count($fieldToolTipssourceinfo["English"]))
		$tdatasourceinfo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelssourceinfo["Afrikaans"] = array();
	$fieldToolTipssourceinfo["Afrikaans"] = array();
	$placeHolderssourceinfo["Afrikaans"] = array();
	$pageTitlessourceinfo["Afrikaans"] = array();
	$fieldLabelssourceinfo["Afrikaans"]["id"] = "ተ.ቁ";
	$fieldToolTipssourceinfo["Afrikaans"]["id"] = "";
	$placeHolderssourceinfo["Afrikaans"]["id"] = "";
	$fieldLabelssourceinfo["Afrikaans"]["name"] = "ስም";
	$fieldToolTipssourceinfo["Afrikaans"]["name"] = "";
	$placeHolderssourceinfo["Afrikaans"]["name"] = "";
	$pageTitlessourceinfo["Afrikaans"]["add"] = "የምንጭ መረጃ አዲስ ማስገቢያ";
	$pageTitlessourceinfo["Afrikaans"]["edit"] = "የምንጭ መረጃ ማስተካከያ";
	$pageTitlessourceinfo["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlessourceinfo["Afrikaans"]["import"] = "የምንጭ መረጃ ማስገቢያ";
	$pageTitlessourceinfo["Afrikaans"]["search"] = "የምንጭ መረጃ መፈለጊያ";
	$pageTitlessourceinfo["Afrikaans"]["view"] = "የምንጭ መረጃ ማሳያ";
	if (count($fieldToolTipssourceinfo["Afrikaans"]))
		$tdatasourceinfo[".isUseToolTips"] = true;
}


	$tdatasourceinfo[".NCSearch"] = true;



$tdatasourceinfo[".shortTableName"] = "sourceinfo";
$tdatasourceinfo[".nSecOptions"] = 0;

$tdatasourceinfo[".mainTableOwnerID"] = "";
$tdatasourceinfo[".entityType"] = 0;

$tdatasourceinfo[".strOriginalTableName"] = "sourceinfo";

		 



$tdatasourceinfo[".showAddInPopup"] = false;

$tdatasourceinfo[".showEditInPopup"] = false;

$tdatasourceinfo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasourceinfo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasourceinfo[".listAjax"] = false;
//	temporary
$tdatasourceinfo[".listAjax"] = false;

	$tdatasourceinfo[".audit"] = false;

	$tdatasourceinfo[".locking"] = false;


$pages = $tdatasourceinfo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasourceinfo[".edit"] = true;
	$tdatasourceinfo[".afterEditAction"] = 1;
	$tdatasourceinfo[".closePopupAfterEdit"] = 1;
	$tdatasourceinfo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasourceinfo[".add"] = true;
$tdatasourceinfo[".afterAddAction"] = 1;
$tdatasourceinfo[".closePopupAfterAdd"] = 1;
$tdatasourceinfo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasourceinfo[".list"] = true;
}



$tdatasourceinfo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasourceinfo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasourceinfo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasourceinfo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasourceinfo[".printFriendly"] = true;
}



$tdatasourceinfo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasourceinfo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasourceinfo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasourceinfo[".isUseAjaxSuggest"] = true;

$tdatasourceinfo[".rowHighlite"] = true;



			

$tdatasourceinfo[".ajaxCodeSnippetAdded"] = false;

$tdatasourceinfo[".buttonsAdded"] = false;

$tdatasourceinfo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasourceinfo[".isUseTimeForSearch"] = false;


$tdatasourceinfo[".badgeColor"] = "D2AF80";


$tdatasourceinfo[".allSearchFields"] = array();
$tdatasourceinfo[".filterFields"] = array();
$tdatasourceinfo[".requiredSearchFields"] = array();

$tdatasourceinfo[".googleLikeFields"] = array();
$tdatasourceinfo[".googleLikeFields"][] = "id";
$tdatasourceinfo[".googleLikeFields"][] = "name";



$tdatasourceinfo[".tableType"] = "list";

$tdatasourceinfo[".printerPageOrientation"] = 0;
$tdatasourceinfo[".nPrinterPageScale"] = 100;

$tdatasourceinfo[".nPrinterSplitRecords"] = 40;

$tdatasourceinfo[".geocodingEnabled"] = false;










$tdatasourceinfo[".pageSize"] = 20;

$tdatasourceinfo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasourceinfo[".strOrderBy"] = $tstrOrderBy;

$tdatasourceinfo[".orderindexes"] = array();

$tdatasourceinfo[".sqlHead"] = "SELECT `id`,  	`name`";
$tdatasourceinfo[".sqlFrom"] = "FROM `sourceinfo`";
$tdatasourceinfo[".sqlWhereExpr"] = "";
$tdatasourceinfo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasourceinfo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasourceinfo[".arrGroupsPerPage"] = $arrGPP;

$tdatasourceinfo[".highlightSearchResults"] = true;

$tableKeyssourceinfo = array();
$tableKeyssourceinfo[] = "id";
$tdatasourceinfo[".Keys"] = $tableKeyssourceinfo;


$tdatasourceinfo[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sourceinfo";
	$fdata["Label"] = GetFieldLabel("sourceinfo","id");
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


	$tdatasourceinfo["id"] = $fdata;
		$tdatasourceinfo[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "sourceinfo";
	$fdata["Label"] = GetFieldLabel("sourceinfo","name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
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


	$tdatasourceinfo["name"] = $fdata;
		$tdatasourceinfo[".searchableFields"][] = "name";


$tables_data["sourceinfo"]=&$tdatasourceinfo;
$field_labels["sourceinfo"] = &$fieldLabelssourceinfo;
$fieldToolTips["sourceinfo"] = &$fieldToolTipssourceinfo;
$placeHolders["sourceinfo"] = &$placeHolderssourceinfo;
$page_titles["sourceinfo"] = &$pageTitlessourceinfo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sourceinfo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sourceinfo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_sourceinfo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`";
$proto0["m_strFrom"] = "FROM `sourceinfo`";
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
	"m_strTable" => "sourceinfo",
	"m_srcTableName" => "sourceinfo"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "sourceinfo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "sourceinfo",
	"m_srcTableName" => "sourceinfo"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "sourceinfo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sourceinfo";
$proto11["m_srcTableName"] = "sourceinfo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`sourceinfo`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sourceinfo";
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
$proto0["m_srcTableName"]="sourceinfo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sourceinfo = createSqlQuery_sourceinfo();


	
					
;

		

$tdatasourceinfo[".sqlquery"] = $queryData_sourceinfo;

$tableEvents["sourceinfo"] = new eventsBase;
$tdatasourceinfo[".hasEvents"] = false;

?>