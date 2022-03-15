<?php



$tdataassettype = array();
$tdataassettype[".searchableFields"] = array();
$tdataassettype[".ShortName"] = "assettype";
$tdataassettype[".OwnerID"] = "";
$tdataassettype[".OriginalTable"] = "assettype";


$defaultPages = my_json_decode( "{}" );

$tdataassettype[".pagesByType"] = my_json_decode( "{}" );
$tdataassettype[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataassettype[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsassettype = array();
$fieldToolTipsassettype = array();
$pageTitlesassettype = array();
$placeHoldersassettype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsassettype["English"] = array();
	$fieldToolTipsassettype["English"] = array();
	$placeHoldersassettype["English"] = array();
	$pageTitlesassettype["English"] = array();
	$fieldLabelsassettype["English"]["type_id"] = "Type Id";
	$fieldToolTipsassettype["English"]["type_id"] = "";
	$placeHoldersassettype["English"]["type_id"] = "";
	$fieldLabelsassettype["English"]["type_name"] = "Type Name";
	$fieldToolTipsassettype["English"]["type_name"] = "";
	$placeHoldersassettype["English"]["type_name"] = "";
	$fieldLabelsassettype["English"]["description"] = "Description";
	$fieldToolTipsassettype["English"]["description"] = "";
	$placeHoldersassettype["English"]["description"] = "";
	if (count($fieldToolTipsassettype["English"]))
		$tdataassettype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsassettype["Afrikaans"] = array();
	$fieldToolTipsassettype["Afrikaans"] = array();
	$placeHoldersassettype["Afrikaans"] = array();
	$pageTitlesassettype["Afrikaans"] = array();
	$fieldLabelsassettype["Afrikaans"]["type_id"] = "ተ.ቁ";
	$fieldToolTipsassettype["Afrikaans"]["type_id"] = "";
	$placeHoldersassettype["Afrikaans"]["type_id"] = "";
	$fieldLabelsassettype["Afrikaans"]["type_name"] = "የአይነቱ ስም";
	$fieldToolTipsassettype["Afrikaans"]["type_name"] = "";
	$placeHoldersassettype["Afrikaans"]["type_name"] = "";
	$fieldLabelsassettype["Afrikaans"]["description"] = "መግለጫ";
	$fieldToolTipsassettype["Afrikaans"]["description"] = "";
	$placeHoldersassettype["Afrikaans"]["description"] = "";
	if (count($fieldToolTipsassettype["Afrikaans"]))
		$tdataassettype[".isUseToolTips"] = true;
}


	$tdataassettype[".NCSearch"] = true;



$tdataassettype[".shortTableName"] = "assettype";
$tdataassettype[".nSecOptions"] = 0;

$tdataassettype[".mainTableOwnerID"] = "";
$tdataassettype[".entityType"] = 0;

$tdataassettype[".strOriginalTableName"] = "assettype";

		 



$tdataassettype[".showAddInPopup"] = false;

$tdataassettype[".showEditInPopup"] = false;

$tdataassettype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataassettype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataassettype[".listAjax"] = false;
//	temporary
$tdataassettype[".listAjax"] = false;

	$tdataassettype[".audit"] = false;

	$tdataassettype[".locking"] = false;


$pages = $tdataassettype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataassettype[".edit"] = true;
	$tdataassettype[".afterEditAction"] = 1;
	$tdataassettype[".closePopupAfterEdit"] = 1;
	$tdataassettype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataassettype[".add"] = true;
$tdataassettype[".afterAddAction"] = 1;
$tdataassettype[".closePopupAfterAdd"] = 1;
$tdataassettype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataassettype[".list"] = true;
}



$tdataassettype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataassettype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataassettype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataassettype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataassettype[".printFriendly"] = true;
}



$tdataassettype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataassettype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataassettype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataassettype[".isUseAjaxSuggest"] = true;

$tdataassettype[".rowHighlite"] = true;



			

$tdataassettype[".ajaxCodeSnippetAdded"] = false;

$tdataassettype[".buttonsAdded"] = false;

$tdataassettype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataassettype[".isUseTimeForSearch"] = false;


$tdataassettype[".badgeColor"] = "778899";


$tdataassettype[".allSearchFields"] = array();
$tdataassettype[".filterFields"] = array();
$tdataassettype[".requiredSearchFields"] = array();

$tdataassettype[".googleLikeFields"] = array();
$tdataassettype[".googleLikeFields"][] = "type_id";
$tdataassettype[".googleLikeFields"][] = "type_name";
$tdataassettype[".googleLikeFields"][] = "description";



$tdataassettype[".tableType"] = "list";

$tdataassettype[".printerPageOrientation"] = 0;
$tdataassettype[".nPrinterPageScale"] = 100;

$tdataassettype[".nPrinterSplitRecords"] = 40;

$tdataassettype[".geocodingEnabled"] = false;










$tdataassettype[".pageSize"] = 20;

$tdataassettype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataassettype[".strOrderBy"] = $tstrOrderBy;

$tdataassettype[".orderindexes"] = array();

$tdataassettype[".sqlHead"] = "SELECT `type_id`,  	`type_name`,  	`description`";
$tdataassettype[".sqlFrom"] = "FROM `assettype`";
$tdataassettype[".sqlWhereExpr"] = "";
$tdataassettype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataassettype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataassettype[".arrGroupsPerPage"] = $arrGPP;

$tdataassettype[".highlightSearchResults"] = true;

$tableKeysassettype = array();
$tableKeysassettype[] = "type_id";
$tdataassettype[".Keys"] = $tableKeysassettype;


$tdataassettype[".hideMobileList"] = array();




//	type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "type_id";
	$fdata["GoodName"] = "type_id";
	$fdata["ownerTable"] = "assettype";
	$fdata["Label"] = GetFieldLabel("assettype","type_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type_id`";

	
	
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


	$tdataassettype["type_id"] = $fdata;
		$tdataassettype[".searchableFields"][] = "type_id";
//	type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type_name";
	$fdata["GoodName"] = "type_name";
	$fdata["ownerTable"] = "assettype";
	$fdata["Label"] = GetFieldLabel("assettype","type_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "type_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type_name`";

	
	
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
			$edata["EditParams"].= " maxlength=44";

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


	$tdataassettype["type_name"] = $fdata;
		$tdataassettype[".searchableFields"][] = "type_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "assettype";
	$fdata["Label"] = GetFieldLabel("assettype","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataassettype["description"] = $fdata;
		$tdataassettype[".searchableFields"][] = "description";


$tables_data["assettype"]=&$tdataassettype;
$field_labels["assettype"] = &$fieldLabelsassettype;
$fieldToolTips["assettype"] = &$fieldToolTipsassettype;
$placeHolders["assettype"] = &$placeHoldersassettype;
$page_titles["assettype"] = &$pageTitlesassettype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["assettype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["assettype"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_assettype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`type_id`,  	`type_name`,  	`description`";
$proto0["m_strFrom"] = "FROM `assettype`";
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
	"m_strName" => "type_id",
	"m_strTable" => "assettype",
	"m_srcTableName" => "assettype"
));

$proto6["m_sql"] = "`type_id`";
$proto6["m_srcTableName"] = "assettype";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "type_name",
	"m_strTable" => "assettype",
	"m_srcTableName" => "assettype"
));

$proto8["m_sql"] = "`type_name`";
$proto8["m_srcTableName"] = "assettype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "assettype",
	"m_srcTableName" => "assettype"
));

$proto10["m_sql"] = "`description`";
$proto10["m_srcTableName"] = "assettype";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "assettype";
$proto13["m_srcTableName"] = "assettype";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "type_id";
$proto13["m_columns"][] = "type_name";
$proto13["m_columns"][] = "description";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`assettype`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "assettype";
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
$proto0["m_srcTableName"]="assettype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_assettype = createSqlQuery_assettype();


	
					
;

			

$tdataassettype[".sqlquery"] = $queryData_assettype;

$tableEvents["assettype"] = new eventsBase;
$tdataassettype[".hasEvents"] = false;

?>