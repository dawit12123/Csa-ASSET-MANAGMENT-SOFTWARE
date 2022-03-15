<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["assetcategory"] ) ) {
			$lookupTableLinks["assetcategory"] = array();
		}
		if( !isset( $lookupTableLinks["assetcategory"]["asset.category_id"] )) {
			$lookupTableLinks["assetcategory"]["asset.category_id"] = array();
		}
		$lookupTableLinks["assetcategory"]["asset.category_id"]["edit"] = array("table" => "asset", "field" => "category_id", "page" => "edit");
		if( !isset( $lookupTableLinks["assetsuppliers"] ) ) {
			$lookupTableLinks["assetsuppliers"] = array();
		}
		if( !isset( $lookupTableLinks["assetsuppliers"]["asset.suplier_id"] )) {
			$lookupTableLinks["assetsuppliers"]["asset.suplier_id"] = array();
		}
		$lookupTableLinks["assetsuppliers"]["asset.suplier_id"]["edit"] = array("table" => "asset", "field" => "suplier_id", "page" => "edit");
		if( !isset( $lookupTableLinks["assetstatus"] ) ) {
			$lookupTableLinks["assetstatus"] = array();
		}
		if( !isset( $lookupTableLinks["assetstatus"]["asset.status_id"] )) {
			$lookupTableLinks["assetstatus"]["asset.status_id"] = array();
		}
		$lookupTableLinks["assetstatus"]["asset.status_id"]["edit"] = array("table" => "asset", "field" => "status_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["csa_audit.user"] )) {
			$lookupTableLinks["csa_users"]["csa_audit.user"] = array();
		}
		$lookupTableLinks["csa_users"]["csa_audit.user"]["edit"] = array("table" => "csa_audit", "field" => "user", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["csa_locking.userid"] )) {
			$lookupTableLinks["csa_users"]["csa_locking.userid"] = array();
		}
		$lookupTableLinks["csa_users"]["csa_locking.userid"]["edit"] = array("table" => "csa_locking", "field" => "userid", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["csa_settings.USERNAME"] )) {
			$lookupTableLinks["csa_users"]["csa_settings.USERNAME"] = array();
		}
		$lookupTableLinks["csa_users"]["csa_settings.USERNAME"]["edit"] = array("table" => "csa_settings", "field" => "USERNAME", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_uggroups"] ) ) {
			$lookupTableLinks["csa_uggroups"] = array();
		}
		if( !isset( $lookupTableLinks["csa_uggroups"]["csa_users.groupid"] )) {
			$lookupTableLinks["csa_uggroups"]["csa_users.groupid"] = array();
		}
		$lookupTableLinks["csa_uggroups"]["csa_users.groupid"]["edit"] = array("table" => "csa_users", "field" => "groupid", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["csa_users.empid"] )) {
			$lookupTableLinks["employee"]["csa_users.empid"] = array();
		}
		$lookupTableLinks["employee"]["csa_users.empid"]["edit"] = array("table" => "csa_users", "field" => "empid", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["departments.manager_id"] )) {
			$lookupTableLinks["employee"]["departments.manager_id"] = array();
		}
		$lookupTableLinks["employee"]["departments.manager_id"]["edit"] = array("table" => "departments", "field" => "manager_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["eaempassets.employee_id"] )) {
			$lookupTableLinks["csa_users"]["eaempassets.employee_id"] = array();
		}
		$lookupTableLinks["csa_users"]["eaempassets.employee_id"]["edit"] = array("table" => "eaempassets", "field" => "employee_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["eaempassets.ea_id"] )) {
			$lookupTableLinks["csa_users"]["eaempassets.ea_id"] = array();
		}
		$lookupTableLinks["csa_users"]["eaempassets.ea_id"]["edit"] = array("table" => "eaempassets", "field" => "ea_id", "page" => "edit");
		if( !isset( $lookupTableLinks["jobs"] ) ) {
			$lookupTableLinks["jobs"] = array();
		}
		if( !isset( $lookupTableLinks["jobs"]["jobhistory.job_id"] )) {
			$lookupTableLinks["jobs"]["jobhistory.job_id"] = array();
		}
		$lookupTableLinks["jobs"]["jobhistory.job_id"]["edit"] = array("table" => "jobhistory", "field" => "job_id", "page" => "edit");
		if( !isset( $lookupTableLinks["workunit"] ) ) {
			$lookupTableLinks["workunit"] = array();
		}
		if( !isset( $lookupTableLinks["workunit"]["jobhistory.workunit_id"] )) {
			$lookupTableLinks["workunit"]["jobhistory.workunit_id"] = array();
		}
		$lookupTableLinks["workunit"]["jobhistory.workunit_id"]["edit"] = array("table" => "jobhistory", "field" => "workunit_id", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["jobhistory.empid"] )) {
			$lookupTableLinks["employee"]["jobhistory.empid"] = array();
		}
		$lookupTableLinks["employee"]["jobhistory.empid"]["edit"] = array("table" => "jobhistory", "field" => "empid", "page" => "edit");
		if( !isset( $lookupTableLinks["eaempassets"] ) ) {
			$lookupTableLinks["eaempassets"] = array();
		}
		if( !isset( $lookupTableLinks["eaempassets"]["model19fromemployee.asset_id"] )) {
			$lookupTableLinks["eaempassets"]["model19fromemployee.asset_id"] = array();
		}
		$lookupTableLinks["eaempassets"]["model19fromemployee.asset_id"]["edit"] = array("table" => "model19fromemployee", "field" => "asset_id", "page" => "edit");
		if( !isset( $lookupTableLinks["asset"] ) ) {
			$lookupTableLinks["asset"] = array();
		}
		if( !isset( $lookupTableLinks["asset"]["model19fromemployee.model"] )) {
			$lookupTableLinks["asset"]["model19fromemployee.model"] = array();
		}
		$lookupTableLinks["asset"]["model19fromemployee.model"]["edit"] = array("table" => "model19fromemployee", "field" => "model", "page" => "edit");
		if( !isset( $lookupTableLinks["asset"] ) ) {
			$lookupTableLinks["asset"] = array();
		}
		if( !isset( $lookupTableLinks["asset"]["model19fromemployee.serial"] )) {
			$lookupTableLinks["asset"]["model19fromemployee.serial"] = array();
		}
		$lookupTableLinks["asset"]["model19fromemployee.serial"]["edit"] = array("table" => "model19fromemployee", "field" => "serial", "page" => "edit");
		if( !isset( $lookupTableLinks["price"] ) ) {
			$lookupTableLinks["price"] = array();
		}
		if( !isset( $lookupTableLinks["price"]["model19fromemployee.unitprice"] )) {
			$lookupTableLinks["price"]["model19fromemployee.unitprice"] = array();
		}
		$lookupTableLinks["price"]["model19fromemployee.unitprice"]["edit"] = array("table" => "model19fromemployee", "field" => "unitprice", "page" => "edit");
		if( !isset( $lookupTableLinks["eaempassets"] ) ) {
			$lookupTableLinks["eaempassets"] = array();
		}
		if( !isset( $lookupTableLinks["eaempassets"]["model19fromemployee.donor_id"] )) {
			$lookupTableLinks["eaempassets"]["model19fromemployee.donor_id"] = array();
		}
		$lookupTableLinks["eaempassets"]["model19fromemployee.donor_id"]["edit"] = array("table" => "model19fromemployee", "field" => "donor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["model19fromemployee.receiver_id"] )) {
			$lookupTableLinks["csa_users"]["model19fromemployee.receiver_id"] = array();
		}
		$lookupTableLinks["csa_users"]["model19fromemployee.receiver_id"]["edit"] = array("table" => "model19fromemployee", "field" => "receiver_id", "page" => "edit");
		if( !isset( $lookupTableLinks["checkapproval"] ) ) {
			$lookupTableLinks["checkapproval"] = array();
		}
		if( !isset( $lookupTableLinks["checkapproval"]["model19fromemployee.status"] )) {
			$lookupTableLinks["checkapproval"]["model19fromemployee.status"] = array();
		}
		$lookupTableLinks["checkapproval"]["model19fromemployee.status"]["edit"] = array("table" => "model19fromemployee", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["assetsuppliers"] ) ) {
			$lookupTableLinks["assetsuppliers"] = array();
		}
		if( !isset( $lookupTableLinks["assetsuppliers"]["model19frompurchase.supplier_id"] )) {
			$lookupTableLinks["assetsuppliers"]["model19frompurchase.supplier_id"] = array();
		}
		$lookupTableLinks["assetsuppliers"]["model19frompurchase.supplier_id"]["edit"] = array("table" => "model19frompurchase", "field" => "supplier_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["model19frompurchase.donor_id"] )) {
			$lookupTableLinks["csa_users"]["model19frompurchase.donor_id"] = array();
		}
		$lookupTableLinks["csa_users"]["model19frompurchase.donor_id"]["edit"] = array("table" => "model19frompurchase", "field" => "donor_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["model19frompurchase.receiver_id"] )) {
			$lookupTableLinks["csa_users"]["model19frompurchase.receiver_id"] = array();
		}
		$lookupTableLinks["csa_users"]["model19frompurchase.receiver_id"]["edit"] = array("table" => "model19frompurchase", "field" => "receiver_id", "page" => "edit");
		if( !isset( $lookupTableLinks["assetcategory"] ) ) {
			$lookupTableLinks["assetcategory"] = array();
		}
		if( !isset( $lookupTableLinks["assetcategory"]["model19frompurchase.category_id"] )) {
			$lookupTableLinks["assetcategory"]["model19frompurchase.category_id"] = array();
		}
		$lookupTableLinks["assetcategory"]["model19frompurchase.category_id"]["edit"] = array("table" => "model19frompurchase", "field" => "category_id", "page" => "edit");
		if( !isset( $lookupTableLinks["assettype"] ) ) {
			$lookupTableLinks["assettype"] = array();
		}
		if( !isset( $lookupTableLinks["assettype"]["model19frompurchase.type_id"] )) {
			$lookupTableLinks["assettype"]["model19frompurchase.type_id"] = array();
		}
		$lookupTableLinks["assettype"]["model19frompurchase.type_id"]["edit"] = array("table" => "model19frompurchase", "field" => "type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["asset"] ) ) {
			$lookupTableLinks["asset"] = array();
		}
		if( !isset( $lookupTableLinks["asset"]["model20.asset_id"] )) {
			$lookupTableLinks["asset"]["model20.asset_id"] = array();
		}
		$lookupTableLinks["asset"]["model20.asset_id"]["edit"] = array("table" => "model20", "field" => "asset_id", "page" => "edit");
		if( !isset( $lookupTableLinks["employee"] ) ) {
			$lookupTableLinks["employee"] = array();
		}
		if( !isset( $lookupTableLinks["employee"]["model20.manager_id"] )) {
			$lookupTableLinks["employee"]["model20.manager_id"] = array();
		}
		$lookupTableLinks["employee"]["model20.manager_id"]["edit"] = array("table" => "model20", "field" => "manager_id", "page" => "edit");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["model20.department"] )) {
			$lookupTableLinks["departments"]["model20.department"] = array();
		}
		$lookupTableLinks["departments"]["model20.department"]["edit"] = array("table" => "model20", "field" => "department", "page" => "edit");
		if( !isset( $lookupTableLinks["sourceinfo"] ) ) {
			$lookupTableLinks["sourceinfo"] = array();
		}
		if( !isset( $lookupTableLinks["sourceinfo"]["price.sourceinfo_id"] )) {
			$lookupTableLinks["sourceinfo"]["price.sourceinfo_id"] = array();
		}
		$lookupTableLinks["sourceinfo"]["price.sourceinfo_id"]["edit"] = array("table" => "price", "field" => "sourceinfo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["request_info.approve_status_from_dept_manager"] )) {
			$lookupTableLinks["csa_users"]["request_info.approve_status_from_dept_manager"] = array();
		}
		$lookupTableLinks["csa_users"]["request_info.approve_status_from_dept_manager"]["edit"] = array("table" => "request_info", "field" => "approve_status_from_dept_manager", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["request_info.approve_status_from_asset_dept_manager"] )) {
			$lookupTableLinks["csa_users"]["request_info.approve_status_from_asset_dept_manager"] = array();
		}
		$lookupTableLinks["csa_users"]["request_info.approve_status_from_asset_dept_manager"]["edit"] = array("table" => "request_info", "field" => "approve_status_from_asset_dept_manager", "page" => "edit");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["workunit.department_id"] )) {
			$lookupTableLinks["departments"]["workunit.department_id"] = array();
		}
		$lookupTableLinks["departments"]["workunit.department_id"]["edit"] = array("table" => "workunit", "field" => "department_id", "page" => "edit");
		if( !isset( $lookupTableLinks["jobs"] ) ) {
			$lookupTableLinks["jobs"] = array();
		}
		if( !isset( $lookupTableLinks["jobs"]["employee.salary"] )) {
			$lookupTableLinks["jobs"]["employee.salary"] = array();
		}
		$lookupTableLinks["jobs"]["employee.salary"]["edit"] = array("table" => "employee", "field" => "salary", "page" => "edit");
		if( !isset( $lookupTableLinks["jobs"] ) ) {
			$lookupTableLinks["jobs"] = array();
		}
		if( !isset( $lookupTableLinks["jobs"]["employee.job_id"] )) {
			$lookupTableLinks["jobs"]["employee.job_id"] = array();
		}
		$lookupTableLinks["jobs"]["employee.job_id"]["edit"] = array("table" => "employee", "field" => "job_id", "page" => "edit");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["employee.manager_id"] )) {
			$lookupTableLinks["departments"]["employee.manager_id"] = array();
		}
		$lookupTableLinks["departments"]["employee.manager_id"]["edit"] = array("table" => "employee", "field" => "manager_id", "page" => "edit");
		if( !isset( $lookupTableLinks["workunit"] ) ) {
			$lookupTableLinks["workunit"] = array();
		}
		if( !isset( $lookupTableLinks["workunit"]["employee.workunit_id"] )) {
			$lookupTableLinks["workunit"]["employee.workunit_id"] = array();
		}
		$lookupTableLinks["workunit"]["employee.workunit_id"]["edit"] = array("table" => "employee", "field" => "workunit_id", "page" => "edit");
		if( !isset( $lookupTableLinks["departments"] ) ) {
			$lookupTableLinks["departments"] = array();
		}
		if( !isset( $lookupTableLinks["departments"]["employee.department"] )) {
			$lookupTableLinks["departments"]["employee.department"] = array();
		}
		$lookupTableLinks["departments"]["employee.department"]["edit"] = array("table" => "employee", "field" => "department", "page" => "edit");
		if( !isset( $lookupTableLinks["asset"] ) ) {
			$lookupTableLinks["asset"] = array();
		}
		if( !isset( $lookupTableLinks["asset"]["mode22.serial"] )) {
			$lookupTableLinks["asset"]["mode22.serial"] = array();
		}
		$lookupTableLinks["asset"]["mode22.serial"]["edit"] = array("table" => "mode22", "field" => "serial", "page" => "edit");
		if( !isset( $lookupTableLinks["price"] ) ) {
			$lookupTableLinks["price"] = array();
		}
		if( !isset( $lookupTableLinks["price"]["mode22.unitprice"] )) {
			$lookupTableLinks["price"]["mode22.unitprice"] = array();
		}
		$lookupTableLinks["price"]["mode22.unitprice"]["edit"] = array("table" => "mode22", "field" => "unitprice", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["mode22.ea_id"] )) {
			$lookupTableLinks["csa_users"]["mode22.ea_id"] = array();
		}
		$lookupTableLinks["csa_users"]["mode22.ea_id"]["edit"] = array("table" => "mode22", "field" => "ea_id", "page" => "edit");
		if( !isset( $lookupTableLinks["request_info"] ) ) {
			$lookupTableLinks["request_info"] = array();
		}
		if( !isset( $lookupTableLinks["request_info"]["mode22.receiver_id"] )) {
			$lookupTableLinks["request_info"]["mode22.receiver_id"] = array();
		}
		$lookupTableLinks["request_info"]["mode22.receiver_id"]["edit"] = array("table" => "mode22", "field" => "receiver_id", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["checkapproval.ictdeptemp"] )) {
			$lookupTableLinks["csa_users"]["checkapproval.ictdeptemp"] = array();
		}
		$lookupTableLinks["csa_users"]["checkapproval.ictdeptemp"]["edit"] = array("table" => "checkapproval", "field" => "ictdeptemp", "page" => "edit");
		if( !isset( $lookupTableLinks["csa_users"] ) ) {
			$lookupTableLinks["csa_users"] = array();
		}
		if( !isset( $lookupTableLinks["csa_users"]["checkapproval.ictdeptmanager"] )) {
			$lookupTableLinks["csa_users"]["checkapproval.ictdeptmanager"] = array();
		}
		$lookupTableLinks["csa_users"]["checkapproval.ictdeptmanager"]["edit"] = array("table" => "checkapproval", "field" => "ictdeptmanager", "page" => "edit");
		if( !isset( $lookupTableLinks["eaempassets"] ) ) {
			$lookupTableLinks["eaempassets"] = array();
		}
		if( !isset( $lookupTableLinks["eaempassets"]["checkapproval.transactionid"] )) {
			$lookupTableLinks["eaempassets"]["checkapproval.transactionid"] = array();
		}
		$lookupTableLinks["eaempassets"]["checkapproval.transactionid"]["edit"] = array("table" => "checkapproval", "field" => "transactionid", "page" => "edit");
		if( !isset( $lookupTableLinks["assetstatus"] ) ) {
			$lookupTableLinks["assetstatus"] = array();
		}
		if( !isset( $lookupTableLinks["assetstatus"]["checkapproval.status"] )) {
			$lookupTableLinks["assetstatus"]["checkapproval.status"] = array();
		}
		$lookupTableLinks["assetstatus"]["checkapproval.status"]["edit"] = array("table" => "checkapproval", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["assetcategory"] ) ) {
			$lookupTableLinks["assetcategory"] = array();
		}
		if( !isset( $lookupTableLinks["assetcategory"]["asset_in_store.category_id"] )) {
			$lookupTableLinks["assetcategory"]["asset_in_store.category_id"] = array();
		}
		$lookupTableLinks["assetcategory"]["asset_in_store.category_id"]["edit"] = array("table" => "asset in store", "field" => "category_id", "page" => "edit");
		if( !isset( $lookupTableLinks["assetsuppliers"] ) ) {
			$lookupTableLinks["assetsuppliers"] = array();
		}
		if( !isset( $lookupTableLinks["assetsuppliers"]["asset_in_store.suplier_id"] )) {
			$lookupTableLinks["assetsuppliers"]["asset_in_store.suplier_id"] = array();
		}
		$lookupTableLinks["assetsuppliers"]["asset_in_store.suplier_id"]["edit"] = array("table" => "asset in store", "field" => "suplier_id", "page" => "edit");
		if( !isset( $lookupTableLinks["assetstatus"] ) ) {
			$lookupTableLinks["assetstatus"] = array();
		}
		if( !isset( $lookupTableLinks["assetstatus"]["asset_in_store.status_id"] )) {
			$lookupTableLinks["assetstatus"]["asset_in_store.status_id"] = array();
		}
		$lookupTableLinks["assetstatus"]["asset_in_store.status_id"]["edit"] = array("table" => "asset in store", "field" => "status_id", "page" => "edit");
}

?>