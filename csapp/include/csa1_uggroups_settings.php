<?php



$tdatacsa1_uggroups = array();
$tdatacsa1_uggroups[".searchableFields"] = array();
$tdatacsa1_uggroups[".ShortName"] = "csa1_uggroups";
$tdatacsa1_uggroups[".OwnerID"] = "";
$tdatacsa1_uggroups[".OriginalTable"] = "csa1_uggroups";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );

$tdatacsa1_uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacsa1_uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacsa1_uggroups[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscsa1_uggroups = array();
$fieldToolTipscsa1_uggroups = array();
$pageTitlescsa1_uggroups = array();
$placeHolderscsa1_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscsa1_uggroups["English"] = array();
	$fieldToolTipscsa1_uggroups["English"] = array();
	$placeHolderscsa1_uggroups["English"] = array();
	$pageTitlescsa1_uggroups["English"] = array();
	$fieldLabelscsa1_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipscsa1_uggroups["English"]["GroupID"] = "";
	$placeHolderscsa1_uggroups["English"]["GroupID"] = "";
	$fieldLabelscsa1_uggroups["English"]["Label"] = "Label";
	$fieldToolTipscsa1_uggroups["English"]["Label"] = "";
	$placeHolderscsa1_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipscsa1_uggroups["English"]))
		$tdatacsa1_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscsa1_uggroups["Afrikaans"] = array();
	$fieldToolTipscsa1_uggroups["Afrikaans"] = array();
	$placeHolderscsa1_uggroups["Afrikaans"] = array();
	$pageTitlescsa1_uggroups["Afrikaans"] = array();
	$fieldLabelscsa1_uggroups["Afrikaans"]["GroupID"] = "የግሩፑ መለያ ቁጥር";
	$fieldToolTipscsa1_uggroups["Afrikaans"]["GroupID"] = "";
	$placeHolderscsa1_uggroups["Afrikaans"]["GroupID"] = "";
	$fieldLabelscsa1_uggroups["Afrikaans"]["Label"] = "ስም";
	$fieldToolTipscsa1_uggroups["Afrikaans"]["Label"] = "";
	$placeHolderscsa1_uggroups["Afrikaans"]["Label"] = "";
	if (count($fieldToolTipscsa1_uggroups["Afrikaans"]))
		$tdatacsa1_uggroups[".isUseToolTips"] = true;
}


	$tdatacsa1_uggroups[".NCSearch"] = true;



$tdatacsa1_uggroups[".shortTableName"] = "csa1_uggroups";
$tdatacsa1_uggroups[".nSecOptions"] = 0;

$tdatacsa1_uggroups[".mainTableOwnerID"] = "";
$tdatacsa1_uggroups[".entityType"] = 0;

$tdatacsa1_uggroups[".strOriginalTableName"] = "csa1_uggroups";

		 



$tdatacsa1_uggroups[".showAddInPopup"] = false;

$tdatacsa1_uggroups[".showEditInPopup"] = false;

$tdatacsa1_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacsa1_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacsa1_uggroups[".listAjax"] = false;
//	temporary
$tdatacsa1_uggroups[".listAjax"] = false;

	$tdatacsa1_uggroups[".audit"] = true;

	$tdatacsa1_uggroups[".locking"] = false;


$pages = $tdatacsa1_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacsa1_uggroups[".edit"] = true;
	$tdatacsa1_uggroups[".afterEditAction"] = 1;
	$tdatacsa1_uggroups[".closePopupAfterEdit"] = 1;
	$tdatacsa1_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacsa1_uggroups[".add"] = true;
$tdatacsa1_uggroups[".afterAddAction"] = 1;
$tdatacsa1_uggroups[".closePopupAfterAdd"] = 1;
$tdatacsa1_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacsa1_uggroups[".list"] = true;
}



$tdatacsa1_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacsa1_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacsa1_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacsa1_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacsa1_uggroups[".printFriendly"] = true;
}



$tdatacsa1_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacsa1_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacsa1_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacsa1_uggroups[".isUseAjaxSuggest"] = true;

$tdatacsa1_uggroups[".rowHighlite"] = true;



			

$tdatacsa1_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatacsa1_uggroups[".buttonsAdded"] = false;

$tdatacsa1_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacsa1_uggroups[".isUseTimeForSearch"] = false;


$tdatacsa1_uggroups[".badgeColor"] = "D2691E";


$tdatacsa1_uggroups[".allSearchFields"] = array();
$tdatacsa1_uggroups[".filterFields"] = array();
$tdatacsa1_uggroups[".requiredSearchFields"] = array();

$tdatacsa1_uggroups[".googleLikeFields"] = array();
$tdatacsa1_uggroups[".googleLikeFields"][] = "GroupID";
$tdatacsa1_uggroups[".googleLikeFields"][] = "Label";



$tdatacsa1_uggroups[".tableType"] = "list";

$tdatacsa1_uggroups[".printerPageOrientation"] = 0;
$tdatacsa1_uggroups[".nPrinterPageScale"] = 100;

$tdatacsa1_uggroups[".nPrinterSplitRecords"] = 40;

$tdatacsa1_uggroups[".geocodingEnabled"] = false;










$tdatacsa1_uggroups[".pageSize"] = 20;

$tdatacsa1_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacsa1_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatacsa1_uggroups[".orderindexes"] = array();

$tdatacsa1_uggroups[".sqlHead"] = "SELECT `GroupID`,  	`Label`";
$tdatacsa1_uggroups[".sqlFrom"] = "FROM `csa1_uggroups`";
$tdatacsa1_uggroups[".sqlWhereExpr"] = "";
$tdatacsa1_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacsa1_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacsa1_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatacsa1_uggroups[".highlightSearchResults"] = true;

$tableKeyscsa1_uggroups = array();
$tableKeyscsa1_uggroups[] = "GroupID";
$tdatacsa1_uggroups[".Keys"] = $tableKeyscsa1_uggroups;


$tdatacsa1_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "csa1_uggroups";
	$fdata["Label"] = GetFieldLabel("csa1_uggroups","GroupID");
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


	$tdatacsa1_uggroups["GroupID"] = $fdata;
		$tdatacsa1_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "csa1_uggroups";
	$fdata["Label"] = GetFieldLabel("csa1_uggroups","Label");
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


	$tdatacsa1_uggroups["Label"] = $fdata;
		$tdatacsa1_uggroups[".searchableFields"][] = "Label";


$tables_data["csa1_uggroups"]=&$tdatacsa1_uggroups;
$field_labels["csa1_uggroups"] = &$fieldLabelscsa1_uggroups;
$fieldToolTips["csa1_uggroups"] = &$fieldToolTipscsa1_uggroups;
$placeHolders["csa1_uggroups"] = &$placeHolderscsa1_uggroups;
$page_titles["csa1_uggroups"] = &$pageTitlescsa1_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["csa1_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["csa1_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_csa1_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`GroupID`,  	`Label`";
$proto0["m_strFrom"] = "FROM `csa1_uggroups`";
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
	"m_strTable" => "csa1_uggroups",
	"m_srcTableName" => "csa1_uggroups"
));

$proto6["m_sql"] = "`GroupID`";
$proto6["m_srcTableName"] = "csa1_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "csa1_uggroups",
	"m_srcTableName" => "csa1_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "csa1_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "csa1_uggroups";
$proto11["m_srcTableName"] = "csa1_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`csa1_uggroups`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "csa1_uggroups";
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
$proto0["m_srcTableName"]="csa1_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_csa1_uggroups = createSqlQuery_csa1_uggroups();


	
					
;

		

$tdatacsa1_uggroups[".sqlquery"] = $queryData_csa1_uggroups;

$tableEvents["csa1_uggroups"] = new eventsBase;
$tdatacsa1_uggroups[".hasEvents"] = false;

?>