<?php



$tdatacsa_uggroups = array();
$tdatacsa_uggroups[".searchableFields"] = array();
$tdatacsa_uggroups[".ShortName"] = "csa_uggroups";
$tdatacsa_uggroups[".OwnerID"] = "";
$tdatacsa_uggroups[".OriginalTable"] = "csa_uggroups";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );

$tdatacsa_uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacsa_uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacsa_uggroups[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscsa_uggroups = array();
$fieldToolTipscsa_uggroups = array();
$pageTitlescsa_uggroups = array();
$placeHolderscsa_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscsa_uggroups["English"] = array();
	$fieldToolTipscsa_uggroups["English"] = array();
	$placeHolderscsa_uggroups["English"] = array();
	$pageTitlescsa_uggroups["English"] = array();
	$fieldLabelscsa_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipscsa_uggroups["English"]["GroupID"] = "";
	$placeHolderscsa_uggroups["English"]["GroupID"] = "";
	$fieldLabelscsa_uggroups["English"]["Label"] = "Label";
	$fieldToolTipscsa_uggroups["English"]["Label"] = "";
	$placeHolderscsa_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipscsa_uggroups["English"]))
		$tdatacsa_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscsa_uggroups["Afrikaans"] = array();
	$fieldToolTipscsa_uggroups["Afrikaans"] = array();
	$placeHolderscsa_uggroups["Afrikaans"] = array();
	$pageTitlescsa_uggroups["Afrikaans"] = array();
	$fieldLabelscsa_uggroups["Afrikaans"]["GroupID"] = "ግሩፕ";
	$fieldToolTipscsa_uggroups["Afrikaans"]["GroupID"] = "";
	$placeHolderscsa_uggroups["Afrikaans"]["GroupID"] = "";
	$fieldLabelscsa_uggroups["Afrikaans"]["Label"] = "ሌብል";
	$fieldToolTipscsa_uggroups["Afrikaans"]["Label"] = "";
	$placeHolderscsa_uggroups["Afrikaans"]["Label"] = "";
	if (count($fieldToolTipscsa_uggroups["Afrikaans"]))
		$tdatacsa_uggroups[".isUseToolTips"] = true;
}


	$tdatacsa_uggroups[".NCSearch"] = true;



$tdatacsa_uggroups[".shortTableName"] = "csa_uggroups";
$tdatacsa_uggroups[".nSecOptions"] = 0;

$tdatacsa_uggroups[".mainTableOwnerID"] = "";
$tdatacsa_uggroups[".entityType"] = 0;

$tdatacsa_uggroups[".strOriginalTableName"] = "csa_uggroups";

		 



$tdatacsa_uggroups[".showAddInPopup"] = false;

$tdatacsa_uggroups[".showEditInPopup"] = false;

$tdatacsa_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacsa_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacsa_uggroups[".listAjax"] = false;
//	temporary
$tdatacsa_uggroups[".listAjax"] = false;

	$tdatacsa_uggroups[".audit"] = false;

	$tdatacsa_uggroups[".locking"] = false;


$pages = $tdatacsa_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacsa_uggroups[".edit"] = true;
	$tdatacsa_uggroups[".afterEditAction"] = 1;
	$tdatacsa_uggroups[".closePopupAfterEdit"] = 1;
	$tdatacsa_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacsa_uggroups[".add"] = true;
$tdatacsa_uggroups[".afterAddAction"] = 1;
$tdatacsa_uggroups[".closePopupAfterAdd"] = 1;
$tdatacsa_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacsa_uggroups[".list"] = true;
}



$tdatacsa_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacsa_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacsa_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacsa_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacsa_uggroups[".printFriendly"] = true;
}



$tdatacsa_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacsa_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacsa_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacsa_uggroups[".isUseAjaxSuggest"] = true;

$tdatacsa_uggroups[".rowHighlite"] = true;



			

$tdatacsa_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatacsa_uggroups[".buttonsAdded"] = false;

$tdatacsa_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacsa_uggroups[".isUseTimeForSearch"] = false;


$tdatacsa_uggroups[".badgeColor"] = "D2691E";


$tdatacsa_uggroups[".allSearchFields"] = array();
$tdatacsa_uggroups[".filterFields"] = array();
$tdatacsa_uggroups[".requiredSearchFields"] = array();

$tdatacsa_uggroups[".googleLikeFields"] = array();
$tdatacsa_uggroups[".googleLikeFields"][] = "GroupID";
$tdatacsa_uggroups[".googleLikeFields"][] = "Label";



$tdatacsa_uggroups[".tableType"] = "list";

$tdatacsa_uggroups[".printerPageOrientation"] = 0;
$tdatacsa_uggroups[".nPrinterPageScale"] = 100;

$tdatacsa_uggroups[".nPrinterSplitRecords"] = 40;

$tdatacsa_uggroups[".geocodingEnabled"] = false;










$tdatacsa_uggroups[".pageSize"] = 20;

$tdatacsa_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacsa_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatacsa_uggroups[".orderindexes"] = array();

$tdatacsa_uggroups[".sqlHead"] = "SELECT `GroupID`,  	`Label`";
$tdatacsa_uggroups[".sqlFrom"] = "FROM `csa_uggroups`";
$tdatacsa_uggroups[".sqlWhereExpr"] = "";
$tdatacsa_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacsa_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacsa_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatacsa_uggroups[".highlightSearchResults"] = true;

$tableKeyscsa_uggroups = array();
$tableKeyscsa_uggroups[] = "GroupID";
$tdatacsa_uggroups[".Keys"] = $tableKeyscsa_uggroups;


$tdatacsa_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "csa_uggroups";
	$fdata["Label"] = GetFieldLabel("csa_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`GroupID`";

	
	
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


	$tdatacsa_uggroups["GroupID"] = $fdata;
		$tdatacsa_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "csa_uggroups";
	$fdata["Label"] = GetFieldLabel("csa_uggroups","Label");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatacsa_uggroups["Label"] = $fdata;
		$tdatacsa_uggroups[".searchableFields"][] = "Label";


$tables_data["csa_uggroups"]=&$tdatacsa_uggroups;
$field_labels["csa_uggroups"] = &$fieldLabelscsa_uggroups;
$fieldToolTips["csa_uggroups"] = &$fieldToolTipscsa_uggroups;
$placeHolders["csa_uggroups"] = &$placeHolderscsa_uggroups;
$page_titles["csa_uggroups"] = &$pageTitlescsa_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["csa_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["csa_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_csa_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`GroupID`,  	`Label`";
$proto0["m_strFrom"] = "FROM `csa_uggroups`";
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
	"m_strName" => "GroupID",
	"m_strTable" => "csa_uggroups",
	"m_srcTableName" => "csa_uggroups"
));

$proto6["m_sql"] = "`GroupID`";
$proto6["m_srcTableName"] = "csa_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "csa_uggroups",
	"m_srcTableName" => "csa_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "csa_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "csa_uggroups";
$proto11["m_srcTableName"] = "csa_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`csa_uggroups`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "csa_uggroups";
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
$proto0["m_srcTableName"]="csa_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_csa_uggroups = createSqlQuery_csa_uggroups();


	
					
;

		

$tdatacsa_uggroups[".sqlquery"] = $queryData_csa_uggroups;

$tableEvents["csa_uggroups"] = new eventsBase;
$tdatacsa_uggroups[".hasEvents"] = false;

?>