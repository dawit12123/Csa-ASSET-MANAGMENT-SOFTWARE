<?php



$tdatacsa_users = array();
$tdatacsa_users[".searchableFields"] = array();
$tdatacsa_users[".ShortName"] = "csa_users";
$tdatacsa_users[".OwnerID"] = "";
$tdatacsa_users[".OriginalTable"] = "csa_users";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacsa_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacsa_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacsa_users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscsa_users = array();
$fieldToolTipscsa_users = array();
$pageTitlescsa_users = array();
$placeHolderscsa_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscsa_users["English"] = array();
	$fieldToolTipscsa_users["English"] = array();
	$placeHolderscsa_users["English"] = array();
	$pageTitlescsa_users["English"] = array();
	$fieldLabelscsa_users["English"]["ID"] = "ID";
	$fieldToolTipscsa_users["English"]["ID"] = "";
	$placeHolderscsa_users["English"]["ID"] = "";
	$fieldLabelscsa_users["English"]["username"] = "Username";
	$fieldToolTipscsa_users["English"]["username"] = "";
	$placeHolderscsa_users["English"]["username"] = "";
	$fieldLabelscsa_users["English"]["password"] = "Password";
	$fieldToolTipscsa_users["English"]["password"] = "";
	$placeHolderscsa_users["English"]["password"] = "";
	$fieldLabelscsa_users["English"]["email"] = "Email";
	$fieldToolTipscsa_users["English"]["email"] = "";
	$placeHolderscsa_users["English"]["email"] = "";
	$fieldLabelscsa_users["English"]["fullname"] = "Fullname";
	$fieldToolTipscsa_users["English"]["fullname"] = "";
	$placeHolderscsa_users["English"]["fullname"] = "";
	$fieldLabelscsa_users["English"]["groupid"] = "Groupid";
	$fieldToolTipscsa_users["English"]["groupid"] = "";
	$placeHolderscsa_users["English"]["groupid"] = "";
	$fieldLabelscsa_users["English"]["active"] = "Active";
	$fieldToolTipscsa_users["English"]["active"] = "";
	$placeHolderscsa_users["English"]["active"] = "";
	$fieldLabelscsa_users["English"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipscsa_users["English"]["ext_security_id"] = "";
	$placeHolderscsa_users["English"]["ext_security_id"] = "";
	$fieldLabelscsa_users["English"]["reset_token"] = "Reset Token";
	$fieldToolTipscsa_users["English"]["reset_token"] = "";
	$placeHolderscsa_users["English"]["reset_token"] = "";
	$fieldLabelscsa_users["English"]["reset_date"] = "Reset Date";
	$fieldToolTipscsa_users["English"]["reset_date"] = "";
	$placeHolderscsa_users["English"]["reset_date"] = "";
	$fieldLabelscsa_users["English"]["empid"] = "Empid";
	$fieldToolTipscsa_users["English"]["empid"] = "";
	$placeHolderscsa_users["English"]["empid"] = "";
	if (count($fieldToolTipscsa_users["English"]))
		$tdatacsa_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Afrikaans")
{
	$fieldLabelscsa_users["Afrikaans"] = array();
	$fieldToolTipscsa_users["Afrikaans"] = array();
	$placeHolderscsa_users["Afrikaans"] = array();
	$pageTitlescsa_users["Afrikaans"] = array();
	$fieldLabelscsa_users["Afrikaans"]["ID"] = "ተ.ቁ";
	$fieldToolTipscsa_users["Afrikaans"]["ID"] = "";
	$placeHolderscsa_users["Afrikaans"]["ID"] = "ተ.ቁ";
	$fieldLabelscsa_users["Afrikaans"]["username"] = "የመጠቀሚያ ስም";
	$fieldToolTipscsa_users["Afrikaans"]["username"] = "";
	$placeHolderscsa_users["Afrikaans"]["username"] = "የመጠቀሚያ ስም";
	$fieldLabelscsa_users["Afrikaans"]["password"] = "የይለፍ ቃል";
	$fieldToolTipscsa_users["Afrikaans"]["password"] = "";
	$placeHolderscsa_users["Afrikaans"]["password"] = "የይለፍ ቃል";
	$fieldLabelscsa_users["Afrikaans"]["email"] = "የይለፍ ቃል";
	$fieldToolTipscsa_users["Afrikaans"]["email"] = "";
	$placeHolderscsa_users["Afrikaans"]["email"] = "የይለፍ ቃል";
	$fieldLabelscsa_users["Afrikaans"]["fullname"] = "ሙሉ ስም";
	$fieldToolTipscsa_users["Afrikaans"]["fullname"] = "";
	$placeHolderscsa_users["Afrikaans"]["fullname"] = "ሙሉ ስም";
	$fieldLabelscsa_users["Afrikaans"]["groupid"] = "የቡድን መለያ";
	$fieldToolTipscsa_users["Afrikaans"]["groupid"] = "";
	$placeHolderscsa_users["Afrikaans"]["groupid"] = "የቡድን መለያ";
	$fieldLabelscsa_users["Afrikaans"]["active"] = "ተንቃሳቃሽ";
	$fieldToolTipscsa_users["Afrikaans"]["active"] = "";
	$placeHolderscsa_users["Afrikaans"]["active"] = "ተንቃሳቃሽ";
	$fieldLabelscsa_users["Afrikaans"]["ext_security_id"] = "ተጨማሪ መለያ";
	$fieldToolTipscsa_users["Afrikaans"]["ext_security_id"] = "";
	$placeHolderscsa_users["Afrikaans"]["ext_security_id"] = "ተጨማሪ መለያ";
	$fieldLabelscsa_users["Afrikaans"]["reset_token"] = "ማደሻ ቁጥር";
	$fieldToolTipscsa_users["Afrikaans"]["reset_token"] = "";
	$placeHolderscsa_users["Afrikaans"]["reset_token"] = "";
	$fieldLabelscsa_users["Afrikaans"]["reset_date"] = "ማደሻ ቀን";
	$fieldToolTipscsa_users["Afrikaans"]["reset_date"] = "";
	$placeHolderscsa_users["Afrikaans"]["reset_date"] = "";
	$fieldLabelscsa_users["Afrikaans"]["empid"] = "Empid";
	$fieldToolTipscsa_users["Afrikaans"]["empid"] = "";
	$placeHolderscsa_users["Afrikaans"]["empid"] = "";
	$pageTitlescsa_users["Afrikaans"]["add"] = "አዲስ ተጠቃሚ ማስገቢያ";
	$pageTitlescsa_users["Afrikaans"]["edit"] = "ተጠቃሚዎች ማስተካከያ";
	$pageTitlescsa_users["Afrikaans"]["export"] = "በጽሁፍ ማውጫ";
	$pageTitlescsa_users["Afrikaans"]["search"] = "ተጠቃሚዎች መፈለጊያ";
	$pageTitlescsa_users["Afrikaans"]["view"] = "ተጠቃሚዎች ማሳያ";
	if (count($fieldToolTipscsa_users["Afrikaans"]))
		$tdatacsa_users[".isUseToolTips"] = true;
}


	$tdatacsa_users[".NCSearch"] = true;



$tdatacsa_users[".shortTableName"] = "csa_users";
$tdatacsa_users[".nSecOptions"] = 0;

$tdatacsa_users[".mainTableOwnerID"] = "";
$tdatacsa_users[".entityType"] = 0;

$tdatacsa_users[".strOriginalTableName"] = "csa_users";

		 	  $tdatacsa_users[".hasEncryptedFields"] = true;




$tdatacsa_users[".showAddInPopup"] = false;

$tdatacsa_users[".showEditInPopup"] = false;

$tdatacsa_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacsa_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacsa_users[".listAjax"] = false;
//	temporary
$tdatacsa_users[".listAjax"] = false;

	$tdatacsa_users[".audit"] = true;

	$tdatacsa_users[".locking"] = false;


$pages = $tdatacsa_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacsa_users[".edit"] = true;
	$tdatacsa_users[".afterEditAction"] = 1;
	$tdatacsa_users[".closePopupAfterEdit"] = 1;
	$tdatacsa_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacsa_users[".add"] = true;
$tdatacsa_users[".afterAddAction"] = 1;
$tdatacsa_users[".closePopupAfterAdd"] = 1;
$tdatacsa_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacsa_users[".list"] = true;
}



$tdatacsa_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacsa_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacsa_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacsa_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacsa_users[".printFriendly"] = true;
}



$tdatacsa_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacsa_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacsa_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacsa_users[".isUseAjaxSuggest"] = true;

$tdatacsa_users[".rowHighlite"] = true;



			

$tdatacsa_users[".ajaxCodeSnippetAdded"] = false;

$tdatacsa_users[".buttonsAdded"] = false;

$tdatacsa_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacsa_users[".isUseTimeForSearch"] = false;


$tdatacsa_users[".badgeColor"] = "6493EA";


$tdatacsa_users[".allSearchFields"] = array();
$tdatacsa_users[".filterFields"] = array();
$tdatacsa_users[".requiredSearchFields"] = array();

$tdatacsa_users[".googleLikeFields"] = array();
$tdatacsa_users[".googleLikeFields"][] = "ID";
$tdatacsa_users[".googleLikeFields"][] = "username";
$tdatacsa_users[".googleLikeFields"][] = "password";
$tdatacsa_users[".googleLikeFields"][] = "email";
$tdatacsa_users[".googleLikeFields"][] = "fullname";
$tdatacsa_users[".googleLikeFields"][] = "groupid";
$tdatacsa_users[".googleLikeFields"][] = "active";
$tdatacsa_users[".googleLikeFields"][] = "ext_security_id";
$tdatacsa_users[".googleLikeFields"][] = "reset_token";
$tdatacsa_users[".googleLikeFields"][] = "reset_date";
$tdatacsa_users[".googleLikeFields"][] = "empid";



$tdatacsa_users[".tableType"] = "list";

$tdatacsa_users[".printerPageOrientation"] = 0;
$tdatacsa_users[".nPrinterPageScale"] = 100;

$tdatacsa_users[".nPrinterSplitRecords"] = 40;

$tdatacsa_users[".geocodingEnabled"] = false;










$tdatacsa_users[".pageSize"] = 20;

$tdatacsa_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacsa_users[".strOrderBy"] = $tstrOrderBy;

$tdatacsa_users[".orderindexes"] = array();

$tdatacsa_users[".sqlHead"] = "SELECT `ID`,  	`username`,  	`password`,  	`email`,  	`fullname`,  	`groupid`,  	`active`,  	`ext_security_id`,  	`reset_token`,  	`reset_date`,  	`empid`";
$tdatacsa_users[".sqlFrom"] = "FROM `csa_users`";
$tdatacsa_users[".sqlWhereExpr"] = "";
$tdatacsa_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacsa_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacsa_users[".arrGroupsPerPage"] = $arrGPP;

$tdatacsa_users[".highlightSearchResults"] = true;

$tableKeyscsa_users = array();
$tableKeyscsa_users[] = "ID";
$tdatacsa_users[".Keys"] = $tableKeyscsa_users;


$tdatacsa_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ID`";

	
	
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


	$tdatacsa_users["ID"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","username");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`username`";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "VALUE__VALUE__ALREADY_EXISTS", "messageType" => "CustomID");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacsa_users["username"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","password");
	$fdata["FieldType"] = 200;

	
	
	
														$fdata["bIsEncrypted"] = true;


		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`password`";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacsa_users["password"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`email`";

	
	
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


	$tdatacsa_users["email"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fullname`";

	
	
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


	$tdatacsa_users["fullname"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`groupid`";

	
	
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
	$edata["LookupTable"] = "csa_uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Label";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatacsa_users["groupid"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","active");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`active`";

	
	
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
	$edata["LookupValues"][] = "enabled";
	$edata["LookupValues"][] = "disabled";

	
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacsa_users["active"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","ext_security_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ext_security_id`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacsa_users["ext_security_id"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "ext_security_id";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","reset_token");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`reset_token`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacsa_users["reset_token"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","reset_date");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`reset_date`";

	
	
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


	$tdatacsa_users["reset_date"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "reset_date";
//	empid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "empid";
	$fdata["GoodName"] = "empid";
	$fdata["ownerTable"] = "csa_users";
	$fdata["Label"] = GetFieldLabel("csa_users","empid");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(FirstName,' ',LastName)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "VALUE__VALUE__ALREADY_EXISTS1", "messageType" => "CustomID");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatacsa_users["empid"] = $fdata;
		$tdatacsa_users[".searchableFields"][] = "empid";


$tables_data["csa_users"]=&$tdatacsa_users;
$field_labels["csa_users"] = &$fieldLabelscsa_users;
$fieldToolTips["csa_users"] = &$fieldToolTipscsa_users;
$placeHolders["csa_users"] = &$placeHolderscsa_users;
$page_titles["csa_users"] = &$pageTitlescsa_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["csa_users"] = array();
//	employee
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="employee";
		$detailsParam["dOriginalTable"] = "employee";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "employee";
	$detailsParam["dCaptionTable"] = GetTableCaption("employee");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["csa_users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["csa_users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["csa_users"][$dIndex]["masterKeys"][]="empid";

				$detailsTablesData["csa_users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["csa_users"][$dIndex]["detailKeys"][]="id";

// tables which are master tables for current table (detail)
$masterTablesData["csa_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_csa_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ID`,  	`username`,  	`password`,  	`email`,  	`fullname`,  	`groupid`,  	`active`,  	`ext_security_id`,  	`reset_token`,  	`reset_date`,  	`empid`";
$proto0["m_strFrom"] = "FROM `csa_users`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
	$proto0["cipherer"] = new RunnerCipherer("csa_users");
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
	"m_strName" => "ID",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto6["m_sql"] = "`ID`";
$proto6["m_srcTableName"] = "csa_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto8["m_sql"] = "`username`";
$proto8["m_srcTableName"] = "csa_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto10["m_sql"] = "`password`";
$proto10["m_srcTableName"] = "csa_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto12["m_sql"] = "`email`";
$proto12["m_srcTableName"] = "csa_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto14["m_sql"] = "`fullname`";
$proto14["m_srcTableName"] = "csa_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto16["m_sql"] = "`groupid`";
$proto16["m_srcTableName"] = "csa_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto18["m_sql"] = "`active`";
$proto18["m_srcTableName"] = "csa_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto20["m_sql"] = "`ext_security_id`";
$proto20["m_srcTableName"] = "csa_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto22["m_sql"] = "`reset_token`";
$proto22["m_srcTableName"] = "csa_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto24["m_sql"] = "`reset_date`";
$proto24["m_srcTableName"] = "csa_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "empid",
	"m_strTable" => "csa_users",
	"m_srcTableName" => "csa_users"
));

$proto26["m_sql"] = "`empid`";
$proto26["m_srcTableName"] = "csa_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "csa_users";
$proto29["m_srcTableName"] = "csa_users";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "username";
$proto29["m_columns"][] = "password";
$proto29["m_columns"][] = "email";
$proto29["m_columns"][] = "fullname";
$proto29["m_columns"][] = "groupid";
$proto29["m_columns"][] = "active";
$proto29["m_columns"][] = "ext_security_id";
$proto29["m_columns"][] = "reset_token";
$proto29["m_columns"][] = "reset_date";
$proto29["m_columns"][] = "empid";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`csa_users`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "csa_users";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="csa_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_csa_users = createSqlQuery_csa_users();


	
					
;

					 $queryData_csa_users->m_fieldlist[2]->m_isEncrypted = true;
								

$tdatacsa_users[".sqlquery"] = $queryData_csa_users;

include_once(getabspath("include/csa_users_events.php"));
$tableEvents["csa_users"] = new eventclass_csa_users;
$tdatacsa_users[".hasEvents"] = true;

?>