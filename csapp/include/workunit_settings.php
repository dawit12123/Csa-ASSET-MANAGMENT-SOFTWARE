<?php



$tdataworkunit = array();
$tdataworkunit[".searchableFields"] = array();
$tdataworkunit[".ShortName"] = "workunit";
$tdataworkunit[".OwnerID"] = "";
$tdataworkunit[".OriginalTable"] = "workunit";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataworkunit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataworkunit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataworkunit[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsworkunit = array();
$fieldToolTipsworkunit = array();
$pageTitlesworkunit = array();
$placeHoldersworkunit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsworkunit["English"] = array();
	$fieldToolTipsworkunit["English"] = array();
	$placeHoldersworkunit["English"] = array();
	$pageTitlesworkunit["English"] = array();
	$fieldLabelsworkunit["English"]["workunit_id"] = "Workunit Id";
	$fieldToolTipsworkunit["English"]["workunit_id"] = "";
	$placeHoldersworkunit["English"]["workunit_id"] = "";
	$fieldLabelsworkunit["English"]["workunit_name"] = "Workunit Name";
	$fieldToolTipsworkunit["English"]["workunit_name"] = "";
	$placeHoldersworkunit["English"]["workunit_name"] = "";
	$fieldLabelsworkunit["English"]["department_id"] = "Department Id";
	$fieldToolTipsworkunit["English"]["department_id"] = "";
	$placeHoldersworkunit["English"]["department_id"] = "";
	if (count($fieldToolTipsworkunit["English"]))
		$tdataworkunit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsworkunit["Afrikaans"] = array();
	$fieldToolTipsworkunit["Afrikaans"] = array();
	$placeHoldersworkunit["Afrikaans"] = array();
	$pageTitlesworkunit["Afrikaans"] = array();
	$fieldLabelsworkunit["Afrikaans"]["workunit_id"] = "ተ.ቁ";
	$fieldToolTipsworkunit["Afrikaans"]["workunit_id"] = "";
	$placeHoldersworkunit["Afrikaans"]["workunit_id"] = "";
	$fieldLabelsworkunit["Afrikaans"]["workunit_name"] = "የምድብ ስም";
	$fieldToolTipsworkunit["Afrikaans"]["workunit_name"] = "";
	$placeHoldersworkunit["Afrikaans"]["workunit_name"] = "";
	$fieldLabelsworkunit["Afrikaans"]["department_id"] = "የዲፓርትመንት መለያ";
	$fieldToolTipsworkunit["Afrikaans"]["department_id"] = "";
	$placeHoldersworkunit["Afrikaans"]["department_id"] = "";
	$pageTitlesworkunit["Afrikaans"]["add"] = "የስራ ምድብ አዲስ ማስገቢያ";
	$pageTitlesworkunit["Afrikaans"]["edit"] = "የስራ ምድብ ማስተካከያ";
	$pageTitlesworkunit["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesworkunit["Afrikaans"]["search"] = "የስራ ምድብ መፈለጊያ";
	$pageTitlesworkunit["Afrikaans"]["view"] = "የስራ ምድብ ማሳያ";
	if (count($fieldToolTipsworkunit["Afrikaans"]))
		$tdataworkunit[".isUseToolTips"] = true;
}


	$tdataworkunit[".NCSearch"] = true;



$tdataworkunit[".shortTableName"] = "workunit";
$tdataworkunit[".nSecOptions"] = 0;

$tdataworkunit[".mainTableOwnerID"] = "";
$tdataworkunit[".entityType"] = 0;

$tdataworkunit[".strOriginalTableName"] = "workunit";

		 



$tdataworkunit[".showAddInPopup"] = false;

$tdataworkunit[".showEditInPopup"] = false;

$tdataworkunit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataworkunit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataworkunit[".listAjax"] = false;
//	temporary
$tdataworkunit[".listAjax"] = false;

	$tdataworkunit[".audit"] = true;

	$tdataworkunit[".locking"] = false;


$pages = $tdataworkunit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataworkunit[".edit"] = true;
	$tdataworkunit[".afterEditAction"] = 1;
	$tdataworkunit[".closePopupAfterEdit"] = 1;
	$tdataworkunit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataworkunit[".add"] = true;
$tdataworkunit[".afterAddAction"] = 1;
$tdataworkunit[".closePopupAfterAdd"] = 1;
$tdataworkunit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataworkunit[".list"] = true;
}



$tdataworkunit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataworkunit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataworkunit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataworkunit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataworkunit[".printFriendly"] = true;
}



$tdataworkunit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataworkunit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataworkunit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataworkunit[".isUseAjaxSuggest"] = true;

$tdataworkunit[".rowHighlite"] = true;



			

$tdataworkunit[".ajaxCodeSnippetAdded"] = false;

$tdataworkunit[".buttonsAdded"] = false;

$tdataworkunit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataworkunit[".isUseTimeForSearch"] = false;


$tdataworkunit[".badgeColor"] = "CD853F";


$tdataworkunit[".allSearchFields"] = array();
$tdataworkunit[".filterFields"] = array();
$tdataworkunit[".requiredSearchFields"] = array();

$tdataworkunit[".googleLikeFields"] = array();
$tdataworkunit[".googleLikeFields"][] = "workunit_id";
$tdataworkunit[".googleLikeFields"][] = "workunit_name";
$tdataworkunit[".googleLikeFields"][] = "department_id";



$tdataworkunit[".tableType"] = "list";

$tdataworkunit[".printerPageOrientation"] = 0;
$tdataworkunit[".nPrinterPageScale"] = 100;

$tdataworkunit[".nPrinterSplitRecords"] = 40;

$tdataworkunit[".geocodingEnabled"] = false;










$tdataworkunit[".pageSize"] = 20;

$tdataworkunit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataworkunit[".strOrderBy"] = $tstrOrderBy;

$tdataworkunit[".orderindexes"] = array();

$tdataworkunit[".sqlHead"] = "SELECT `workunit_id`,  	`workunit_name`,  	`department_id`";
$tdataworkunit[".sqlFrom"] = "FROM `workunit`";
$tdataworkunit[".sqlWhereExpr"] = "";
$tdataworkunit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataworkunit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataworkunit[".arrGroupsPerPage"] = $arrGPP;

$tdataworkunit[".highlightSearchResults"] = true;

$tableKeysworkunit = array();
$tableKeysworkunit[] = "workunit_id";
$tdataworkunit[".Keys"] = $tableKeysworkunit;


$tdataworkunit[".hideMobileList"] = array();




//	workunit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "workunit_id";
	$fdata["GoodName"] = "workunit_id";
	$fdata["ownerTable"] = "workunit";
	$fdata["Label"] = GetFieldLabel("workunit","workunit_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "workunit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`workunit_id`";

	
	
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


	$tdataworkunit["workunit_id"] = $fdata;
		$tdataworkunit[".searchableFields"][] = "workunit_id";
//	workunit_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "workunit_name";
	$fdata["GoodName"] = "workunit_name";
	$fdata["ownerTable"] = "workunit";
	$fdata["Label"] = GetFieldLabel("workunit","workunit_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "workunit_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`workunit_name`";

	
	
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


	$tdataworkunit["workunit_name"] = $fdata;
		$tdataworkunit[".searchableFields"][] = "workunit_name";
//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "workunit";
	$fdata["Label"] = GetFieldLabel("workunit","department_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "department_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`department_id`";

	
	
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
	$edata["LookupTable"] = "departments";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "department_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "department_name";

	

	
	$edata["LookupOrderBy"] = "department_id";

	
	
	
	

	
	
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


	$tdataworkunit["department_id"] = $fdata;
		$tdataworkunit[".searchableFields"][] = "department_id";


$tables_data["workunit"]=&$tdataworkunit;
$field_labels["workunit"] = &$fieldLabelsworkunit;
$fieldToolTips["workunit"] = &$fieldToolTipsworkunit;
$placeHolders["workunit"] = &$placeHoldersworkunit;
$page_titles["workunit"] = &$pageTitlesworkunit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["workunit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["workunit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_workunit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`workunit_id`,  	`workunit_name`,  	`department_id`";
$proto0["m_strFrom"] = "FROM `workunit`";
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
	"m_strName" => "workunit_id",
	"m_strTable" => "workunit",
	"m_srcTableName" => "workunit"
));

$proto6["m_sql"] = "`workunit_id`";
$proto6["m_srcTableName"] = "workunit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "workunit_name",
	"m_strTable" => "workunit",
	"m_srcTableName" => "workunit"
));

$proto8["m_sql"] = "`workunit_name`";
$proto8["m_srcTableName"] = "workunit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "department_id",
	"m_strTable" => "workunit",
	"m_srcTableName" => "workunit"
));

$proto10["m_sql"] = "`department_id`";
$proto10["m_srcTableName"] = "workunit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "workunit";
$proto13["m_srcTableName"] = "workunit";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "workunit_id";
$proto13["m_columns"][] = "workunit_name";
$proto13["m_columns"][] = "department_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`workunit`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "workunit";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="workunit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_workunit = createSqlQuery_workunit();


	
					
;

			

$tdataworkunit[".sqlquery"] = $queryData_workunit;

$tableEvents["workunit"] = new eventsBase;
$tdataworkunit[".hasEvents"] = false;

?>