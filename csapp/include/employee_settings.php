<?php



$tdataemployee = array();
$tdataemployee[".searchableFields"] = array();
$tdataemployee[".ShortName"] = "employee";
$tdataemployee[".OwnerID"] = "";
$tdataemployee[".OriginalTable"] = "employee";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataemployee[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataemployee[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataemployee[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsemployee = array();
$fieldToolTipsemployee = array();
$pageTitlesemployee = array();
$placeHoldersemployee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsemployee["English"] = array();
	$fieldToolTipsemployee["English"] = array();
	$placeHoldersemployee["English"] = array();
	$pageTitlesemployee["English"] = array();
	$fieldLabelsemployee["English"]["id"] = "Id";
	$fieldToolTipsemployee["English"]["id"] = "";
	$placeHoldersemployee["English"]["id"] = "";
	$fieldLabelsemployee["English"]["firstname"] = "Firstname";
	$fieldToolTipsemployee["English"]["firstname"] = "";
	$placeHoldersemployee["English"]["firstname"] = "";
	$fieldLabelsemployee["English"]["lastname"] = "Lastname";
	$fieldToolTipsemployee["English"]["lastname"] = "";
	$placeHoldersemployee["English"]["lastname"] = "";
	$fieldLabelsemployee["English"]["email"] = "Email";
	$fieldToolTipsemployee["English"]["email"] = "";
	$placeHoldersemployee["English"]["email"] = "";
	$fieldLabelsemployee["English"]["phone"] = "Phone";
	$fieldToolTipsemployee["English"]["phone"] = "";
	$placeHoldersemployee["English"]["phone"] = "";
	$fieldLabelsemployee["English"]["hire_date"] = "Hire Date";
	$fieldToolTipsemployee["English"]["hire_date"] = "";
	$placeHoldersemployee["English"]["hire_date"] = "";
	$fieldLabelsemployee["English"]["salary"] = "Salary";
	$fieldToolTipsemployee["English"]["salary"] = "";
	$placeHoldersemployee["English"]["salary"] = "";
	$fieldLabelsemployee["English"]["house_no"] = "House No";
	$fieldToolTipsemployee["English"]["house_no"] = "";
	$placeHoldersemployee["English"]["house_no"] = "";
	$fieldLabelsemployee["English"]["status"] = "Status";
	$fieldToolTipsemployee["English"]["status"] = "";
	$placeHoldersemployee["English"]["status"] = "";
	$fieldLabelsemployee["English"]["job_id"] = "Job Id";
	$fieldToolTipsemployee["English"]["job_id"] = "";
	$placeHoldersemployee["English"]["job_id"] = "";
	$fieldLabelsemployee["English"]["manager_id"] = "Manager Id";
	$fieldToolTipsemployee["English"]["manager_id"] = "";
	$placeHoldersemployee["English"]["manager_id"] = "";
	$fieldLabelsemployee["English"]["workunit_id"] = "Workunit Id";
	$fieldToolTipsemployee["English"]["workunit_id"] = "";
	$placeHoldersemployee["English"]["workunit_id"] = "";
	$fieldLabelsemployee["English"]["photo"] = "Photo";
	$fieldToolTipsemployee["English"]["photo"] = "";
	$placeHoldersemployee["English"]["photo"] = "";
	$fieldLabelsemployee["English"]["department"] = "Department";
	$fieldToolTipsemployee["English"]["department"] = "";
	$placeHoldersemployee["English"]["department"] = "";
	if (count($fieldToolTipsemployee["English"]))
		$tdataemployee[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelsemployee["Afrikaans"] = array();
	$fieldToolTipsemployee["Afrikaans"] = array();
	$placeHoldersemployee["Afrikaans"] = array();
	$pageTitlesemployee["Afrikaans"] = array();
	$fieldLabelsemployee["Afrikaans"]["id"] = "ተ.ቁ";
	$fieldToolTipsemployee["Afrikaans"]["id"] = "";
	$placeHoldersemployee["Afrikaans"]["id"] = "";
	$fieldLabelsemployee["Afrikaans"]["firstname"] = "ስም";
	$fieldToolTipsemployee["Afrikaans"]["firstname"] = "";
	$placeHoldersemployee["Afrikaans"]["firstname"] = "";
	$fieldLabelsemployee["Afrikaans"]["lastname"] = "የአባት ስም";
	$fieldToolTipsemployee["Afrikaans"]["lastname"] = "";
	$placeHoldersemployee["Afrikaans"]["lastname"] = "";
	$fieldLabelsemployee["Afrikaans"]["email"] = "ኢሜይል";
	$fieldToolTipsemployee["Afrikaans"]["email"] = "";
	$placeHoldersemployee["Afrikaans"]["email"] = "";
	$fieldLabelsemployee["Afrikaans"]["phone"] = "ስልክ";
	$fieldToolTipsemployee["Afrikaans"]["phone"] = "";
	$placeHoldersemployee["Afrikaans"]["phone"] = "";
	$fieldLabelsemployee["Afrikaans"]["hire_date"] = "የተቀጠረበት ቀን";
	$fieldToolTipsemployee["Afrikaans"]["hire_date"] = "";
	$placeHoldersemployee["Afrikaans"]["hire_date"] = "";
	$fieldLabelsemployee["Afrikaans"]["salary"] = "ደሞዝ";
	$fieldToolTipsemployee["Afrikaans"]["salary"] = "";
	$placeHoldersemployee["Afrikaans"]["salary"] = "";
	$fieldLabelsemployee["Afrikaans"]["house_no"] = "የቤት ቁጥር";
	$fieldToolTipsemployee["Afrikaans"]["house_no"] = "";
	$placeHoldersemployee["Afrikaans"]["house_no"] = "";
	$fieldLabelsemployee["Afrikaans"]["status"] = "ያለበት ኔታ";
	$fieldToolTipsemployee["Afrikaans"]["status"] = "";
	$placeHoldersemployee["Afrikaans"]["status"] = "";
	$fieldLabelsemployee["Afrikaans"]["job_id"] = "የስራ አይነት";
	$fieldToolTipsemployee["Afrikaans"]["job_id"] = "";
	$placeHoldersemployee["Afrikaans"]["job_id"] = "";
	$fieldLabelsemployee["Afrikaans"]["manager_id"] = "ማናጀሩ";
	$fieldToolTipsemployee["Afrikaans"]["manager_id"] = "";
	$placeHoldersemployee["Afrikaans"]["manager_id"] = "";
	$fieldLabelsemployee["Afrikaans"]["workunit_id"] = "ምድብ";
	$fieldToolTipsemployee["Afrikaans"]["workunit_id"] = "";
	$placeHoldersemployee["Afrikaans"]["workunit_id"] = "";
	$fieldLabelsemployee["Afrikaans"]["photo"] = "ፎቶ";
	$fieldToolTipsemployee["Afrikaans"]["photo"] = "";
	$placeHoldersemployee["Afrikaans"]["photo"] = "";
	$fieldLabelsemployee["Afrikaans"]["department"] = "ዲፓርትመንት";
	$fieldToolTipsemployee["Afrikaans"]["department"] = "";
	$placeHoldersemployee["Afrikaans"]["department"] = "";
	$pageTitlesemployee["Afrikaans"]["add"] = "አዲስ ሰራተኛ ማስገቢያ";
	$pageTitlesemployee["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlesemployee["Afrikaans"]["search"] = "ሰራተኞች መፈለጊያ";
	$pageTitlesemployee["Afrikaans"]["view"] = "ሰራተኞች ማሳያ";
	if (count($fieldToolTipsemployee["Afrikaans"]))
		$tdataemployee[".isUseToolTips"] = true;
}


	$tdataemployee[".NCSearch"] = true;



$tdataemployee[".shortTableName"] = "employee";
$tdataemployee[".nSecOptions"] = 0;

$tdataemployee[".mainTableOwnerID"] = "";
$tdataemployee[".entityType"] = 0;

$tdataemployee[".strOriginalTableName"] = "employee";

		 



$tdataemployee[".showAddInPopup"] = false;

$tdataemployee[".showEditInPopup"] = false;

$tdataemployee[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataemployee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataemployee[".listAjax"] = false;
//	temporary
$tdataemployee[".listAjax"] = false;

	$tdataemployee[".audit"] = true;

	$tdataemployee[".locking"] = true;


$pages = $tdataemployee[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataemployee[".edit"] = true;
	$tdataemployee[".afterEditAction"] = 1;
	$tdataemployee[".closePopupAfterEdit"] = 1;
	$tdataemployee[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataemployee[".add"] = true;
$tdataemployee[".afterAddAction"] = 1;
$tdataemployee[".closePopupAfterAdd"] = 1;
$tdataemployee[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataemployee[".list"] = true;
}



$tdataemployee[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataemployee[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataemployee[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataemployee[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataemployee[".printFriendly"] = true;
}



$tdataemployee[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataemployee[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataemployee[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataemployee[".isUseAjaxSuggest"] = true;

$tdataemployee[".rowHighlite"] = true;



												

$tdataemployee[".ajaxCodeSnippetAdded"] = false;

$tdataemployee[".buttonsAdded"] = false;

$tdataemployee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployee[".isUseTimeForSearch"] = false;


$tdataemployee[".badgeColor"] = "1e90ff";


$tdataemployee[".allSearchFields"] = array();
$tdataemployee[".filterFields"] = array();
$tdataemployee[".requiredSearchFields"] = array();

$tdataemployee[".googleLikeFields"] = array();
$tdataemployee[".googleLikeFields"][] = "id";
$tdataemployee[".googleLikeFields"][] = "firstname";
$tdataemployee[".googleLikeFields"][] = "lastname";
$tdataemployee[".googleLikeFields"][] = "email";
$tdataemployee[".googleLikeFields"][] = "phone";
$tdataemployee[".googleLikeFields"][] = "hire_date";
$tdataemployee[".googleLikeFields"][] = "salary";
$tdataemployee[".googleLikeFields"][] = "house_no";
$tdataemployee[".googleLikeFields"][] = "status";
$tdataemployee[".googleLikeFields"][] = "job_id";
$tdataemployee[".googleLikeFields"][] = "manager_id";
$tdataemployee[".googleLikeFields"][] = "workunit_id";
$tdataemployee[".googleLikeFields"][] = "photo";
$tdataemployee[".googleLikeFields"][] = "department";



$tdataemployee[".tableType"] = "list";

$tdataemployee[".printerPageOrientation"] = 0;
$tdataemployee[".nPrinterPageScale"] = 100;

$tdataemployee[".nPrinterSplitRecords"] = 40;

$tdataemployee[".geocodingEnabled"] = false;










$tdataemployee[".pageSize"] = 20;

$tdataemployee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataemployee[".strOrderBy"] = $tstrOrderBy;

$tdataemployee[".orderindexes"] = array();

$tdataemployee[".sqlHead"] = "SELECT `id`,  	`firstname`,  	`lastname`,  	`email`,  	`phone`,  	`hire_date`,  	`salary`,  	`house_no`,  	`status`,  	`job_id`,  	`manager_id`,  	`workunit_id`,  	`photo`,  	`department`";
$tdataemployee[".sqlFrom"] = "FROM `employee`";
$tdataemployee[".sqlWhereExpr"] = "";
$tdataemployee[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataemployee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataemployee[".arrGroupsPerPage"] = $arrGPP;

$tdataemployee[".highlightSearchResults"] = true;

$tableKeysemployee = array();
$tableKeysemployee[] = "id";
$tdataemployee[".Keys"] = $tableKeysemployee;


$tdataemployee[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","id");
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


	$tdataemployee["id"] = $fdata;
		$tdataemployee[".searchableFields"][] = "id";
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","firstname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "firstname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`firstname`";

	
	
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


	$tdataemployee["firstname"] = $fdata;
		$tdataemployee[".searchableFields"][] = "firstname";
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","lastname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "lastname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`lastname`";

	
	
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


	$tdataemployee["lastname"] = $fdata;
		$tdataemployee[".searchableFields"][] = "lastname";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`email`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdataemployee["email"] = $fdata;
		$tdataemployee[".searchableFields"][] = "email";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","phone");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
	
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


		$edata["strEditMask"] = "999-999-9999";

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "tel";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");
							
	
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


	$tdataemployee["phone"] = $fdata;
		$tdataemployee[".searchableFields"][] = "phone";
//	hire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "hire_date";
	$fdata["GoodName"] = "hire_date";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","hire_date");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "hire_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hire_date`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataemployee["hire_date"] = $fdata;
		$tdataemployee[".searchableFields"][] = "hire_date";
//	salary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "salary";
	$fdata["GoodName"] = "salary";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","salary");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "salary";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`salary`";

	
	
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

	
		
	$edata["LinkField"] = "min_salary";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "min_salary";

	

	
	$edata["LookupOrderBy"] = "job_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "job_id", "lookup" => "job_id" );

	
	

	
	
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


	$tdataemployee["salary"] = $fdata;
		$tdataemployee[".searchableFields"][] = "salary";
//	house_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "house_no";
	$fdata["GoodName"] = "house_no";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","house_no");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "house_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`house_no`";

	
	
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


	$tdataemployee["house_no"] = $fdata;
		$tdataemployee[".searchableFields"][] = "house_no";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","status");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "working";
	$edata["LookupValues"][] = "terminated";

	
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


	$tdataemployee["status"] = $fdata;
		$tdataemployee[".searchableFields"][] = "status";
//	job_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "job_id";
	$fdata["GoodName"] = "job_id";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","job_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "job_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`job_id`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "salary";

	
	
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


	$tdataemployee["job_id"] = $fdata;
		$tdataemployee[".searchableFields"][] = "job_id";
//	manager_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "manager_id";
	$fdata["GoodName"] = "manager_id";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","manager_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "manager_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`manager_id`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
		
	$edata["LinkField"] = "manager_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "manager_id";

	

	
	$edata["LookupOrderBy"] = "department_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "department", "lookup" => "department_id" );

	
	

	
	
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


	$tdataemployee["manager_id"] = $fdata;
		$tdataemployee[".searchableFields"][] = "manager_id";
//	workunit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "workunit_id";
	$fdata["GoodName"] = "workunit_id";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","workunit_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "workunit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`workunit_id`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "department", "lookup" => "department_id" );

	
	

	
	
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


	$tdataemployee["workunit_id"] = $fdata;
		$tdataemployee[".searchableFields"][] = "workunit_id";
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","photo");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "photo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`photo`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 400;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 400;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jfif";
			$edata["acceptFileTypesHtml"] .= ",.jfif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jfif";
			$edata["acceptFileTypesHtml"] .= ",.jfif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataemployee["photo"] = $fdata;
		$tdataemployee[".searchableFields"][] = "photo";
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "employee";
	$fdata["Label"] = GetFieldLabel("employee","department");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`department`";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "manager_id";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "workunit_id";

	
	
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


	$tdataemployee["department"] = $fdata;
		$tdataemployee[".searchableFields"][] = "department";


$tables_data["employee"]=&$tdataemployee;
$field_labels["employee"] = &$fieldLabelsemployee;
$fieldToolTips["employee"] = &$fieldToolTipsemployee;
$placeHolders["employee"] = &$placeHoldersemployee;
$page_titles["employee"] = &$pageTitlesemployee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["employee"] = array();
//	model19fromemployee
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="model19fromemployee";
		$detailsParam["dOriginalTable"] = "model19fromemployee";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "model19fromemployee";
	$detailsParam["dCaptionTable"] = GetTableCaption("model19fromemployee");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="donor_id";
//	jobhistory
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="jobhistory";
		$detailsParam["dOriginalTable"] = "jobhistory";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "jobhistory";
	$detailsParam["dCaptionTable"] = GetTableCaption("jobhistory");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="empid";
//	eaempassets
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="eaempassets";
		$detailsParam["dOriginalTable"] = "eaempassets";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "eaempassets";
	$detailsParam["dCaptionTable"] = GetTableCaption("eaempassets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["employee"][$dIndex] = $detailsParam;

	
		$detailsTablesData["employee"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["employee"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["employee"][$dIndex]["detailKeys"][]="employee_id";

// tables which are master tables for current table (detail)
$masterTablesData["employee"] = array();



	
				$strOriginalDetailsTable="csa_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="csa_users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "csa_users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employee"][0] = $masterParams;
				$masterTablesData["employee"][0]["masterKeys"] = array();
	$masterTablesData["employee"][0]["masterKeys"][]="empid";
				$masterTablesData["employee"][0]["detailKeys"] = array();
	$masterTablesData["employee"][0]["detailKeys"][]="id";
		
	
				$strOriginalDetailsTable="model19frompurchase";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="model19frompurchase";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "model19frompurchase";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employee"][1] = $masterParams;
				$masterTablesData["employee"][1]["masterKeys"] = array();
	$masterTablesData["employee"][1]["masterKeys"][]="receiver_id";
				$masterTablesData["employee"][1]["detailKeys"] = array();
	$masterTablesData["employee"][1]["detailKeys"][]="id";
		
	
				$strOriginalDetailsTable="mode22";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mode22";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mode22";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["employee"][2] = $masterParams;
				$masterTablesData["employee"][2]["masterKeys"] = array();
	$masterTablesData["employee"][2]["masterKeys"][]="receiver_id";
				$masterTablesData["employee"][2]["detailKeys"] = array();
	$masterTablesData["employee"][2]["detailKeys"][]="id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_employee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`firstname`,  	`lastname`,  	`email`,  	`phone`,  	`hire_date`,  	`salary`,  	`house_no`,  	`status`,  	`job_id`,  	`manager_id`,  	`workunit_id`,  	`photo`,  	`department`";
$proto0["m_strFrom"] = "FROM `employee`";
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
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "employee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto8["m_sql"] = "`firstname`";
$proto8["m_srcTableName"] = "employee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto10["m_sql"] = "`lastname`";
$proto10["m_srcTableName"] = "employee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto12["m_sql"] = "`email`";
$proto12["m_srcTableName"] = "employee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto14["m_sql"] = "`phone`";
$proto14["m_srcTableName"] = "employee";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "hire_date",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto16["m_sql"] = "`hire_date`";
$proto16["m_srcTableName"] = "employee";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "salary",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto18["m_sql"] = "`salary`";
$proto18["m_srcTableName"] = "employee";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "house_no",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto20["m_sql"] = "`house_no`";
$proto20["m_srcTableName"] = "employee";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto22["m_sql"] = "`status`";
$proto22["m_srcTableName"] = "employee";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "job_id",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto24["m_sql"] = "`job_id`";
$proto24["m_srcTableName"] = "employee";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "manager_id",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto26["m_sql"] = "`manager_id`";
$proto26["m_srcTableName"] = "employee";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "workunit_id",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto28["m_sql"] = "`workunit_id`";
$proto28["m_srcTableName"] = "employee";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto30["m_sql"] = "`photo`";
$proto30["m_srcTableName"] = "employee";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "employee",
	"m_srcTableName" => "employee"
));

$proto32["m_sql"] = "`department`";
$proto32["m_srcTableName"] = "employee";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "employee";
$proto35["m_srcTableName"] = "employee";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "firstname";
$proto35["m_columns"][] = "lastname";
$proto35["m_columns"][] = "email";
$proto35["m_columns"][] = "phone";
$proto35["m_columns"][] = "hire_date";
$proto35["m_columns"][] = "salary";
$proto35["m_columns"][] = "house_no";
$proto35["m_columns"][] = "status";
$proto35["m_columns"][] = "job_id";
$proto35["m_columns"][] = "manager_id";
$proto35["m_columns"][] = "workunit_id";
$proto35["m_columns"][] = "photo";
$proto35["m_columns"][] = "department";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`employee`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "employee";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="employee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_employee = createSqlQuery_employee();


	
					
;

														

$tdataemployee[".sqlquery"] = $queryData_employee;

include_once(getabspath("include/employee_events.php"));
$tableEvents["employee"] = new eventclass_employee;
$tdataemployee[".hasEvents"] = true;

?>