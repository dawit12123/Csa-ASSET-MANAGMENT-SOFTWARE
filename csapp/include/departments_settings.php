<?php



$tdatadepartments = array();
$tdatadepartments[".searchableFields"] = array();
$tdatadepartments[".ShortName"] = "departments";
$tdatadepartments[".OwnerID"] = "";
$tdatadepartments[".OriginalTable"] = "departments";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatadepartments[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadepartments[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadepartments[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsdepartments = array();
$fieldToolTipsdepartments = array();
$pageTitlesdepartments = array();
$placeHoldersdepartments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartments["English"] = array();
	$fieldToolTipsdepartments["English"] = array();
	$placeHoldersdepartments["English"] = array();
	$pageTitlesdepartments["English"] = array();
	$fieldLabelsdepartments["English"]["department_id"] = "Department Id";
	$fieldToolTipsdepartments["English"]["department_id"] = "";
	$placeHoldersdepartments["English"]["department_id"] = "";
	$fieldLabelsdepartments["English"]["department_name"] = "Department Name";
	$fieldToolTipsdepartments["English"]["department_name"] = "";
	$placeHoldersdepartments["English"]["department_name"] = "";
	$fieldLabelsdepartments["English"]["branch"] = "Branch";
	$fieldToolTipsdepartments["English"]["branch"] = "";
	$placeHoldersdepartments["English"]["branch"] = "";
	$fieldLabelsdepartments["English"]["manager_id"] = "Manager Id";
	$fieldToolTipsdepartments["English"]["manager_id"] = "";
	$placeHoldersdepartments["English"]["manager_id"] = "";
	if (count($fieldToolTipsdepartments["English"]))
		$tdatadepartments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsdepartments["Afrikaans"] = array();
	$fieldToolTipsdepartments["Afrikaans"] = array();
	$placeHoldersdepartments["Afrikaans"] = array();
	$pageTitlesdepartments["Afrikaans"] = array();
	$fieldLabelsdepartments["Afrikaans"]["department_id"] = "የዲፓርትመንት መለያ";
	$fieldToolTipsdepartments["Afrikaans"]["department_id"] = "";
	$placeHoldersdepartments["Afrikaans"]["department_id"] = "የዲፓርትመንት መለያ";
	$fieldLabelsdepartments["Afrikaans"]["department_name"] = "ስም";
	$fieldToolTipsdepartments["Afrikaans"]["department_name"] = "";
	$placeHoldersdepartments["Afrikaans"]["department_name"] = "ስም";
	$fieldLabelsdepartments["Afrikaans"]["branch"] = "ብራንች";
	$fieldToolTipsdepartments["Afrikaans"]["branch"] = "";
	$placeHoldersdepartments["Afrikaans"]["branch"] = "ብራንች";
	$fieldLabelsdepartments["Afrikaans"]["manager_id"] = "የዲፓርትመንቱ ማናጀር";
	$fieldToolTipsdepartments["Afrikaans"]["manager_id"] = "";
	$placeHoldersdepartments["Afrikaans"]["manager_id"] = "የዲፓርትመንቱ ማናጀር";
	$pageTitlesdepartments["Afrikaans"]["add"] = "ዲፓርትመንት አዲስ ማስገቢያ";
	$pageTitlesdepartments["Afrikaans"]["edit"] = "ዲፓርትመንት ማስተካክያ";
	$pageTitlesdepartments["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesdepartments["Afrikaans"]["search"] = "ዲፓርትመንት መፈለጊያ";
	$pageTitlesdepartments["Afrikaans"]["view"] = "ዲፓርትመንት ማሳያ";
	if (count($fieldToolTipsdepartments["Afrikaans"]))
		$tdatadepartments[".isUseToolTips"] = true;
}


	$tdatadepartments[".NCSearch"] = true;



$tdatadepartments[".shortTableName"] = "departments";
$tdatadepartments[".nSecOptions"] = 0;

$tdatadepartments[".mainTableOwnerID"] = "";
$tdatadepartments[".entityType"] = 0;

$tdatadepartments[".strOriginalTableName"] = "departments";

		 



$tdatadepartments[".showAddInPopup"] = false;

$tdatadepartments[".showEditInPopup"] = false;

$tdatadepartments[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadepartments[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadepartments[".listAjax"] = false;
//	temporary
$tdatadepartments[".listAjax"] = false;

	$tdatadepartments[".audit"] = true;

	$tdatadepartments[".locking"] = false;


$pages = $tdatadepartments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadepartments[".edit"] = true;
	$tdatadepartments[".afterEditAction"] = 1;
	$tdatadepartments[".closePopupAfterEdit"] = 1;
	$tdatadepartments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadepartments[".add"] = true;
$tdatadepartments[".afterAddAction"] = 1;
$tdatadepartments[".closePopupAfterAdd"] = 1;
$tdatadepartments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadepartments[".list"] = true;
}



$tdatadepartments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadepartments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadepartments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadepartments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadepartments[".printFriendly"] = true;
}



$tdatadepartments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadepartments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadepartments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadepartments[".isUseAjaxSuggest"] = true;

$tdatadepartments[".rowHighlite"] = true;



			

$tdatadepartments[".ajaxCodeSnippetAdded"] = false;

$tdatadepartments[".buttonsAdded"] = false;

$tdatadepartments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartments[".isUseTimeForSearch"] = false;


$tdatadepartments[".badgeColor"] = "4682b4";


$tdatadepartments[".allSearchFields"] = array();
$tdatadepartments[".filterFields"] = array();
$tdatadepartments[".requiredSearchFields"] = array();

$tdatadepartments[".googleLikeFields"] = array();
$tdatadepartments[".googleLikeFields"][] = "department_id";
$tdatadepartments[".googleLikeFields"][] = "department_name";
$tdatadepartments[".googleLikeFields"][] = "branch";
$tdatadepartments[".googleLikeFields"][] = "manager_id";



$tdatadepartments[".tableType"] = "list";

$tdatadepartments[".printerPageOrientation"] = 0;
$tdatadepartments[".nPrinterPageScale"] = 100;

$tdatadepartments[".nPrinterSplitRecords"] = 40;

$tdatadepartments[".geocodingEnabled"] = false;










$tdatadepartments[".pageSize"] = 20;

$tdatadepartments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartments[".strOrderBy"] = $tstrOrderBy;

$tdatadepartments[".orderindexes"] = array();

$tdatadepartments[".sqlHead"] = "SELECT `department_id`,  	`department_name`,  	`branch`,  	`manager_id`";
$tdatadepartments[".sqlFrom"] = "FROM `departments`";
$tdatadepartments[".sqlWhereExpr"] = "";
$tdatadepartments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartments[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartments[".highlightSearchResults"] = true;

$tableKeysdepartments = array();
$tableKeysdepartments[] = "department_id";
$tdatadepartments[".Keys"] = $tableKeysdepartments;


$tdatadepartments[".hideMobileList"] = array();




//	department_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "department_id";
	$fdata["GoodName"] = "department_id";
	$fdata["ownerTable"] = "departments";
	$fdata["Label"] = GetFieldLabel("departments","department_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

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


	$tdatadepartments["department_id"] = $fdata;
		$tdatadepartments[".searchableFields"][] = "department_id";
//	department_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "department_name";
	$fdata["GoodName"] = "department_name";
	$fdata["ownerTable"] = "departments";
	$fdata["Label"] = GetFieldLabel("departments","department_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "department_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`department_name`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatadepartments["department_name"] = $fdata;
		$tdatadepartments[".searchableFields"][] = "department_name";
//	branch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "branch";
	$fdata["GoodName"] = "branch";
	$fdata["ownerTable"] = "departments";
	$fdata["Label"] = GetFieldLabel("departments","branch");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "branch";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`branch`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatadepartments["branch"] = $fdata;
		$tdatadepartments[".searchableFields"][] = "branch";
//	manager_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "manager_id";
	$fdata["GoodName"] = "manager_id";
	$fdata["ownerTable"] = "departments";
	$fdata["Label"] = GetFieldLabel("departments","manager_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "manager_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`manager_id`";

	
	
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
	$edata["LookupTable"] = "employee";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(FirstName,' ',LastName)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatadepartments["manager_id"] = $fdata;
		$tdatadepartments[".searchableFields"][] = "manager_id";


$tables_data["departments"]=&$tdatadepartments;
$field_labels["departments"] = &$fieldLabelsdepartments;
$fieldToolTips["departments"] = &$fieldToolTipsdepartments;
$placeHolders["departments"] = &$placeHoldersdepartments;
$page_titles["departments"] = &$pageTitlesdepartments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["departments"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["departments"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_departments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`department_id`,  	`department_name`,  	`branch`,  	`manager_id`";
$proto0["m_strFrom"] = "FROM `departments`";
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
	"m_strName" => "department_id",
	"m_strTable" => "departments",
	"m_srcTableName" => "departments"
));

$proto6["m_sql"] = "`department_id`";
$proto6["m_srcTableName"] = "departments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "department_name",
	"m_strTable" => "departments",
	"m_srcTableName" => "departments"
));

$proto8["m_sql"] = "`department_name`";
$proto8["m_srcTableName"] = "departments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "branch",
	"m_strTable" => "departments",
	"m_srcTableName" => "departments"
));

$proto10["m_sql"] = "`branch`";
$proto10["m_srcTableName"] = "departments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "manager_id",
	"m_strTable" => "departments",
	"m_srcTableName" => "departments"
));

$proto12["m_sql"] = "`manager_id`";
$proto12["m_srcTableName"] = "departments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "departments";
$proto15["m_srcTableName"] = "departments";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "department_id";
$proto15["m_columns"][] = "department_name";
$proto15["m_columns"][] = "branch";
$proto15["m_columns"][] = "manager_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`departments`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "departments";
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
$proto0["m_srcTableName"]="departments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_departments = createSqlQuery_departments();


	
					
;

				

$tdatadepartments[".sqlquery"] = $queryData_departments;

include_once(getabspath("include/departments_events.php"));
$tableEvents["departments"] = new eventclass_departments;
$tdatadepartments[".hasEvents"] = true;

?>