<?php



$tdatajobs = array();
$tdatajobs[".searchableFields"] = array();
$tdatajobs[".ShortName"] = "jobs";
$tdatajobs[".OwnerID"] = "";
$tdatajobs[".OriginalTable"] = "jobs";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatajobs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajobs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajobs[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsjobs = array();
$fieldToolTipsjobs = array();
$pageTitlesjobs = array();
$placeHoldersjobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobs["English"] = array();
	$fieldToolTipsjobs["English"] = array();
	$placeHoldersjobs["English"] = array();
	$pageTitlesjobs["English"] = array();
	$fieldLabelsjobs["English"]["job_id"] = "Job Id";
	$fieldToolTipsjobs["English"]["job_id"] = "";
	$placeHoldersjobs["English"]["job_id"] = "";
	$fieldLabelsjobs["English"]["job_title"] = "Job Title";
	$fieldToolTipsjobs["English"]["job_title"] = "";
	$placeHoldersjobs["English"]["job_title"] = "";
	$fieldLabelsjobs["English"]["min_salary"] = "Min Salary";
	$fieldToolTipsjobs["English"]["min_salary"] = "";
	$placeHoldersjobs["English"]["min_salary"] = "";
	$fieldLabelsjobs["English"]["max_salary"] = "Max Salary";
	$fieldToolTipsjobs["English"]["max_salary"] = "";
	$placeHoldersjobs["English"]["max_salary"] = "";
	if (count($fieldToolTipsjobs["English"]))
		$tdatajobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsjobs["Afrikaans"] = array();
	$fieldToolTipsjobs["Afrikaans"] = array();
	$placeHoldersjobs["Afrikaans"] = array();
	$pageTitlesjobs["Afrikaans"] = array();
	$fieldLabelsjobs["Afrikaans"]["job_id"] = "ተ.ቁ";
	$fieldToolTipsjobs["Afrikaans"]["job_id"] = "";
	$placeHoldersjobs["Afrikaans"]["job_id"] = "";
	$fieldLabelsjobs["Afrikaans"]["job_title"] = "የስራ አይንት";
	$fieldToolTipsjobs["Afrikaans"]["job_title"] = "";
	$placeHoldersjobs["Afrikaans"]["job_title"] = "";
	$fieldLabelsjobs["Afrikaans"]["min_salary"] = "ዝቅተኛ ክፍያ";
	$fieldToolTipsjobs["Afrikaans"]["min_salary"] = "";
	$placeHoldersjobs["Afrikaans"]["min_salary"] = "";
	$fieldLabelsjobs["Afrikaans"]["max_salary"] = "ከፍተኛ ክፍያ";
	$fieldToolTipsjobs["Afrikaans"]["max_salary"] = "";
	$placeHoldersjobs["Afrikaans"]["max_salary"] = "";
	$pageTitlesjobs["Afrikaans"]["add"] = "ስራ አዲስ ማስገቢያ";
	$pageTitlesjobs["Afrikaans"]["edit"] = "ስራ መፈለጊያ";
	$pageTitlesjobs["Afrikaans"]["search"] = "ስራ መፈለጊያ";
	$pageTitlesjobs["Afrikaans"]["view"] = "ስራ ማሳያ";
	if (count($fieldToolTipsjobs["Afrikaans"]))
		$tdatajobs[".isUseToolTips"] = true;
}


	$tdatajobs[".NCSearch"] = true;



$tdatajobs[".shortTableName"] = "jobs";
$tdatajobs[".nSecOptions"] = 0;

$tdatajobs[".mainTableOwnerID"] = "";
$tdatajobs[".entityType"] = 0;

$tdatajobs[".strOriginalTableName"] = "jobs";

		 



$tdatajobs[".showAddInPopup"] = false;

$tdatajobs[".showEditInPopup"] = false;

$tdatajobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobs[".listAjax"] = false;
//	temporary
$tdatajobs[".listAjax"] = false;

	$tdatajobs[".audit"] = false;

	$tdatajobs[".locking"] = false;


$pages = $tdatajobs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajobs[".edit"] = true;
	$tdatajobs[".afterEditAction"] = 1;
	$tdatajobs[".closePopupAfterEdit"] = 1;
	$tdatajobs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajobs[".add"] = true;
$tdatajobs[".afterAddAction"] = 1;
$tdatajobs[".closePopupAfterAdd"] = 1;
$tdatajobs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajobs[".list"] = true;
}



$tdatajobs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajobs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajobs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajobs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajobs[".printFriendly"] = true;
}



$tdatajobs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajobs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajobs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajobs[".isUseAjaxSuggest"] = true;

$tdatajobs[".rowHighlite"] = true;



			

$tdatajobs[".ajaxCodeSnippetAdded"] = false;

$tdatajobs[".buttonsAdded"] = false;

$tdatajobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobs[".isUseTimeForSearch"] = false;


$tdatajobs[".badgeColor"] = "2F4F4F";


$tdatajobs[".allSearchFields"] = array();
$tdatajobs[".filterFields"] = array();
$tdatajobs[".requiredSearchFields"] = array();

$tdatajobs[".googleLikeFields"] = array();
$tdatajobs[".googleLikeFields"][] = "job_id";
$tdatajobs[".googleLikeFields"][] = "job_title";
$tdatajobs[".googleLikeFields"][] = "min_salary";
$tdatajobs[".googleLikeFields"][] = "max_salary";



$tdatajobs[".tableType"] = "list";

$tdatajobs[".printerPageOrientation"] = 0;
$tdatajobs[".nPrinterPageScale"] = 100;

$tdatajobs[".nPrinterSplitRecords"] = 40;

$tdatajobs[".geocodingEnabled"] = false;










$tdatajobs[".pageSize"] = 20;

$tdatajobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobs[".strOrderBy"] = $tstrOrderBy;

$tdatajobs[".orderindexes"] = array();

$tdatajobs[".sqlHead"] = "SELECT `job_id`,  	`job_title`,  	`min_salary`,  	`max_salary`";
$tdatajobs[".sqlFrom"] = "FROM `jobs`";
$tdatajobs[".sqlWhereExpr"] = "";
$tdatajobs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobs[".arrGroupsPerPage"] = $arrGPP;

$tdatajobs[".highlightSearchResults"] = true;

$tableKeysjobs = array();
$tableKeysjobs[] = "job_id";
$tdatajobs[".Keys"] = $tableKeysjobs;


$tdatajobs[".hideMobileList"] = array();




//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobs";
	$fdata["Label"] = GetFieldLabel("jobs","job_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "job_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`job_id`";

	
	
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


	$tdatajobs["job_id"] = $fdata;
		$tdatajobs[".searchableFields"][] = "job_id";
//	job_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_title";
	$fdata["GoodName"] = "job_title";
	$fdata["ownerTable"] = "jobs";
	$fdata["Label"] = GetFieldLabel("jobs","job_title");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "job_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`job_title`";

	
	
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


	$tdatajobs["job_title"] = $fdata;
		$tdatajobs[".searchableFields"][] = "job_title";
//	min_salary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "min_salary";
	$fdata["GoodName"] = "min_salary";
	$fdata["ownerTable"] = "jobs";
	$fdata["Label"] = GetFieldLabel("jobs","min_salary");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "min_salary";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`min_salary`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatajobs["min_salary"] = $fdata;
		$tdatajobs[".searchableFields"][] = "min_salary";
//	max_salary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "max_salary";
	$fdata["GoodName"] = "max_salary";
	$fdata["ownerTable"] = "jobs";
	$fdata["Label"] = GetFieldLabel("jobs","max_salary");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "max_salary";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`max_salary`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatajobs["max_salary"] = $fdata;
		$tdatajobs[".searchableFields"][] = "max_salary";


$tables_data["jobs"]=&$tdatajobs;
$field_labels["jobs"] = &$fieldLabelsjobs;
$fieldToolTips["jobs"] = &$fieldToolTipsjobs;
$placeHolders["jobs"] = &$placeHoldersjobs;
$page_titles["jobs"] = &$pageTitlesjobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["jobs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`job_id`,  	`job_title`,  	`min_salary`,  	`max_salary`";
$proto0["m_strFrom"] = "FROM `jobs`";
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
	"m_strName" => "job_id",
	"m_strTable" => "jobs",
	"m_srcTableName" => "jobs"
));

$proto6["m_sql"] = "`job_id`";
$proto6["m_srcTableName"] = "jobs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "job_title",
	"m_strTable" => "jobs",
	"m_srcTableName" => "jobs"
));

$proto8["m_sql"] = "`job_title`";
$proto8["m_srcTableName"] = "jobs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "min_salary",
	"m_strTable" => "jobs",
	"m_srcTableName" => "jobs"
));

$proto10["m_sql"] = "`min_salary`";
$proto10["m_srcTableName"] = "jobs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "max_salary",
	"m_strTable" => "jobs",
	"m_srcTableName" => "jobs"
));

$proto12["m_sql"] = "`max_salary`";
$proto12["m_srcTableName"] = "jobs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "jobs";
$proto15["m_srcTableName"] = "jobs";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "job_id";
$proto15["m_columns"][] = "job_title";
$proto15["m_columns"][] = "min_salary";
$proto15["m_columns"][] = "max_salary";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`jobs`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "jobs";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="jobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobs = createSqlQuery_jobs();


	
					
;

				

$tdatajobs[".sqlquery"] = $queryData_jobs;

$tableEvents["jobs"] = new eventsBase;
$tdatajobs[".hasEvents"] = false;

?>