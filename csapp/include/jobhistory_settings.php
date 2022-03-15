<?php



$tdatajobhistory = array();
$tdatajobhistory[".searchableFields"] = array();
$tdatajobhistory[".ShortName"] = "jobhistory";
$tdatajobhistory[".OwnerID"] = "";
$tdatajobhistory[".OriginalTable"] = "jobhistory";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );

$tdatajobhistory[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatajobhistory[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatajobhistory[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsjobhistory = array();
$fieldToolTipsjobhistory = array();
$pageTitlesjobhistory = array();
$placeHoldersjobhistory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobhistory["English"] = array();
	$fieldToolTipsjobhistory["English"] = array();
	$placeHoldersjobhistory["English"] = array();
	$pageTitlesjobhistory["English"] = array();
	$fieldLabelsjobhistory["English"]["start_date"] = "Start Date";
	$fieldToolTipsjobhistory["English"]["start_date"] = "";
	$placeHoldersjobhistory["English"]["start_date"] = "";
	$fieldLabelsjobhistory["English"]["end_date"] = "End Date";
	$fieldToolTipsjobhistory["English"]["end_date"] = "";
	$placeHoldersjobhistory["English"]["end_date"] = "";
	$fieldLabelsjobhistory["English"]["job_id"] = "Job Id";
	$fieldToolTipsjobhistory["English"]["job_id"] = "";
	$placeHoldersjobhistory["English"]["job_id"] = "";
	$fieldLabelsjobhistory["English"]["workunit_id"] = "Workunit Id";
	$fieldToolTipsjobhistory["English"]["workunit_id"] = "";
	$placeHoldersjobhistory["English"]["workunit_id"] = "";
	$fieldLabelsjobhistory["English"]["jobh_id"] = "Jobh Id";
	$fieldToolTipsjobhistory["English"]["jobh_id"] = "";
	$placeHoldersjobhistory["English"]["jobh_id"] = "";
	$fieldLabelsjobhistory["English"]["empid"] = "Empid";
	$fieldToolTipsjobhistory["English"]["empid"] = "";
	$placeHoldersjobhistory["English"]["empid"] = "";
	if (count($fieldToolTipsjobhistory["English"]))
		$tdatajobhistory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsjobhistory["Afrikaans"] = array();
	$fieldToolTipsjobhistory["Afrikaans"] = array();
	$placeHoldersjobhistory["Afrikaans"] = array();
	$pageTitlesjobhistory["Afrikaans"] = array();
	$fieldLabelsjobhistory["Afrikaans"]["start_date"] = "የጀመረበት ቀን";
	$fieldToolTipsjobhistory["Afrikaans"]["start_date"] = "";
	$placeHoldersjobhistory["Afrikaans"]["start_date"] = "";
	$fieldLabelsjobhistory["Afrikaans"]["end_date"] = "ያቆመበት ቀን";
	$fieldToolTipsjobhistory["Afrikaans"]["end_date"] = "";
	$placeHoldersjobhistory["Afrikaans"]["end_date"] = "";
	$fieldLabelsjobhistory["Afrikaans"]["job_id"] = "የስራ አይነት";
	$fieldToolTipsjobhistory["Afrikaans"]["job_id"] = "";
	$placeHoldersjobhistory["Afrikaans"]["job_id"] = "";
	$fieldLabelsjobhistory["Afrikaans"]["workunit_id"] = "የስራ ምድብ";
	$fieldToolTipsjobhistory["Afrikaans"]["workunit_id"] = "";
	$placeHoldersjobhistory["Afrikaans"]["workunit_id"] = "";
	$fieldLabelsjobhistory["Afrikaans"]["jobh_id"] = "መለያ ቁጥር";
	$fieldToolTipsjobhistory["Afrikaans"]["jobh_id"] = "";
	$placeHoldersjobhistory["Afrikaans"]["jobh_id"] = "";
	$fieldLabelsjobhistory["Afrikaans"]["empid"] = "የሰራተኛው መለያ";
	$fieldToolTipsjobhistory["Afrikaans"]["empid"] = "";
	$placeHoldersjobhistory["Afrikaans"]["empid"] = "";
	$pageTitlesjobhistory["Afrikaans"]["add"] = "የስራ ሂደት አዲስ ማስገቢያ";
	$pageTitlesjobhistory["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesjobhistory["Afrikaans"]["search"] = "የስራ ሂደት - መፈለጊያ";
	if (count($fieldToolTipsjobhistory["Afrikaans"]))
		$tdatajobhistory[".isUseToolTips"] = true;
}


	$tdatajobhistory[".NCSearch"] = true;



$tdatajobhistory[".shortTableName"] = "jobhistory";
$tdatajobhistory[".nSecOptions"] = 0;

$tdatajobhistory[".mainTableOwnerID"] = "";
$tdatajobhistory[".entityType"] = 0;

$tdatajobhistory[".strOriginalTableName"] = "jobhistory";

		 



$tdatajobhistory[".showAddInPopup"] = false;

$tdatajobhistory[".showEditInPopup"] = false;

$tdatajobhistory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajobhistory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobhistory[".listAjax"] = false;
//	temporary
$tdatajobhistory[".listAjax"] = false;

	$tdatajobhistory[".audit"] = false;

	$tdatajobhistory[".locking"] = false;


$pages = $tdatajobhistory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajobhistory[".edit"] = true;
	$tdatajobhistory[".afterEditAction"] = 1;
	$tdatajobhistory[".closePopupAfterEdit"] = 1;
	$tdatajobhistory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajobhistory[".add"] = true;
$tdatajobhistory[".afterAddAction"] = 1;
$tdatajobhistory[".closePopupAfterAdd"] = 1;
$tdatajobhistory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajobhistory[".list"] = true;
}



$tdatajobhistory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajobhistory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajobhistory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajobhistory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajobhistory[".printFriendly"] = true;
}



$tdatajobhistory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajobhistory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajobhistory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajobhistory[".isUseAjaxSuggest"] = true;

$tdatajobhistory[".rowHighlite"] = true;



						

$tdatajobhistory[".ajaxCodeSnippetAdded"] = false;

$tdatajobhistory[".buttonsAdded"] = false;

$tdatajobhistory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobhistory[".isUseTimeForSearch"] = false;


$tdatajobhistory[".badgeColor"] = "3cb371";


$tdatajobhistory[".allSearchFields"] = array();
$tdatajobhistory[".filterFields"] = array();
$tdatajobhistory[".requiredSearchFields"] = array();

$tdatajobhistory[".googleLikeFields"] = array();
$tdatajobhistory[".googleLikeFields"][] = "start_date";
$tdatajobhistory[".googleLikeFields"][] = "end_date";
$tdatajobhistory[".googleLikeFields"][] = "job_id";
$tdatajobhistory[".googleLikeFields"][] = "workunit_id";
$tdatajobhistory[".googleLikeFields"][] = "jobh_id";
$tdatajobhistory[".googleLikeFields"][] = "empid";



$tdatajobhistory[".tableType"] = "list";

$tdatajobhistory[".printerPageOrientation"] = 0;
$tdatajobhistory[".nPrinterPageScale"] = 100;

$tdatajobhistory[".nPrinterSplitRecords"] = 40;

$tdatajobhistory[".geocodingEnabled"] = false;










$tdatajobhistory[".pageSize"] = 20;

$tdatajobhistory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobhistory[".strOrderBy"] = $tstrOrderBy;

$tdatajobhistory[".orderindexes"] = array();

$tdatajobhistory[".sqlHead"] = "SELECT `start_date`,  	`end_date`,  	`job_id`,  	`workunit_id`,  	`jobh_id`,  	`empid`";
$tdatajobhistory[".sqlFrom"] = "FROM `jobhistory`";
$tdatajobhistory[".sqlWhereExpr"] = "";
$tdatajobhistory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobhistory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobhistory[".arrGroupsPerPage"] = $arrGPP;

$tdatajobhistory[".highlightSearchResults"] = true;

$tableKeysjobhistory = array();
$tableKeysjobhistory[] = "jobh_id";
$tdatajobhistory[".Keys"] = $tableKeysjobhistory;


$tdatajobhistory[".hideMobileList"] = array();




//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "jobhistory";
	$fdata["Label"] = GetFieldLabel("jobhistory","start_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start_date`";

	
	
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


	$tdatajobhistory["start_date"] = $fdata;
		$tdatajobhistory[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "jobhistory";
	$fdata["Label"] = GetFieldLabel("jobhistory","end_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end_date`";

	
	
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


	$tdatajobhistory["end_date"] = $fdata;
		$tdatajobhistory[".searchableFields"][] = "end_date";
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "jobhistory";
	$fdata["Label"] = GetFieldLabel("jobhistory","job_id");
	$fdata["FieldType"] = 3;

	
	
	
										

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "jobs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "job_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "job_title";

	

	
	$edata["LookupOrderBy"] = "job_id";

	
	
	
	

	
	
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


	$tdatajobhistory["job_id"] = $fdata;
		$tdatajobhistory[".searchableFields"][] = "job_id";
//	workunit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "workunit_id";
	$fdata["GoodName"] = "workunit_id";
	$fdata["ownerTable"] = "jobhistory";
	$fdata["Label"] = GetFieldLabel("jobhistory","workunit_id");
	$fdata["FieldType"] = 3;

	
	
	
										

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "workunit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "workunit_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "workunit_name";

	

	
	$edata["LookupOrderBy"] = "workunit_id";

	
	
	
	

	
	
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


	$tdatajobhistory["workunit_id"] = $fdata;
		$tdatajobhistory[".searchableFields"][] = "workunit_id";
//	jobh_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "jobh_id";
	$fdata["GoodName"] = "jobh_id";
	$fdata["ownerTable"] = "jobhistory";
	$fdata["Label"] = GetFieldLabel("jobhistory","jobh_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "jobh_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jobh_id`";

	
	
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


	$tdatajobhistory["jobh_id"] = $fdata;
		$tdatajobhistory[".searchableFields"][] = "jobh_id";
//	empid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "empid";
	$fdata["GoodName"] = "empid";
	$fdata["ownerTable"] = "jobhistory";
	$fdata["Label"] = GetFieldLabel("jobhistory","empid");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "empid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`empid`";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(FirstName,' ',LastName)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatajobhistory["empid"] = $fdata;
		$tdatajobhistory[".searchableFields"][] = "empid";


$tables_data["jobhistory"]=&$tdatajobhistory;
$field_labels["jobhistory"] = &$fieldLabelsjobhistory;
$fieldToolTips["jobhistory"] = &$fieldToolTipsjobhistory;
$placeHolders["jobhistory"] = &$placeHoldersjobhistory;
$page_titles["jobhistory"] = &$pageTitlesjobhistory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobhistory"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["jobhistory"] = array();



	
				$strOriginalDetailsTable="employee";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="employee";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "employee";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["jobhistory"][0] = $masterParams;
				$masterTablesData["jobhistory"][0]["masterKeys"] = array();
	$masterTablesData["jobhistory"][0]["masterKeys"][]="id";
				$masterTablesData["jobhistory"][0]["detailKeys"] = array();
	$masterTablesData["jobhistory"][0]["detailKeys"][]="empid";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobhistory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`start_date`,  	`end_date`,  	`job_id`,  	`workunit_id`,  	`jobh_id`,  	`empid`";
$proto0["m_strFrom"] = "FROM `jobhistory`";
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
	"m_strName" => "start_date",
	"m_strTable" => "jobhistory",
	"m_srcTableName" => "jobhistory"
));

$proto6["m_sql"] = "`start_date`";
$proto6["m_srcTableName"] = "jobhistory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "jobhistory",
	"m_srcTableName" => "jobhistory"
));

$proto8["m_sql"] = "`end_date`";
$proto8["m_srcTableName"] = "jobhistory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "jobhistory",
	"m_srcTableName" => "jobhistory"
));

$proto10["m_sql"] = "`job_id`";
$proto10["m_srcTableName"] = "jobhistory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "workunit_id",
	"m_strTable" => "jobhistory",
	"m_srcTableName" => "jobhistory"
));

$proto12["m_sql"] = "`workunit_id`";
$proto12["m_srcTableName"] = "jobhistory";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "jobh_id",
	"m_strTable" => "jobhistory",
	"m_srcTableName" => "jobhistory"
));

$proto14["m_sql"] = "`jobh_id`";
$proto14["m_srcTableName"] = "jobhistory";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "empid",
	"m_strTable" => "jobhistory",
	"m_srcTableName" => "jobhistory"
));

$proto16["m_sql"] = "`empid`";
$proto16["m_srcTableName"] = "jobhistory";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "jobhistory";
$proto19["m_srcTableName"] = "jobhistory";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "start_date";
$proto19["m_columns"][] = "end_date";
$proto19["m_columns"][] = "job_id";
$proto19["m_columns"][] = "workunit_id";
$proto19["m_columns"][] = "jobh_id";
$proto19["m_columns"][] = "empid";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`jobhistory`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "jobhistory";
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
$proto0["m_srcTableName"]="jobhistory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobhistory = createSqlQuery_jobhistory();


	
					
;

						

$tdatajobhistory[".sqlquery"] = $queryData_jobhistory;

$tableEvents["jobhistory"] = new eventsBase;
$tdatajobhistory[".hasEvents"] = false;

?>