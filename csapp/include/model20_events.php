<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_model20  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeProcessRowList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeProcessAdd"]=true;

		$this->events["BeforeProcessEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$sql = "select * from asset where asset_id='".$values['asset_id']."'";
$rs = CustomQuery($sql);
$data1 = db_fetch_array($rs);

//**********  Insert a record into another table  ************

$data = array();
$data["employee_id"] = $values['empid'];
$data["asset_id"] = $values['asset_id'];
$data["model"] = $data1['asset_model'];
$data["quantity"] = $values['quantity'];
$data["date"] = $values['date'];
$data["department"]=$values['department'];
$data["seen"]='no';
$data["taked"]='no';
DB::Insert("request_info", $data );




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
$sql = "select * from asset where asset_id=".$oldvalues['asset_id'];
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

$sql1 = "select * from asset where asset_id=".$values['asset_id'];
$rs1 = CustomQuery($sql1);
$data1 = db_fetch_array($rs1);

$sql = "update request_info set asset_id=".$values['asset_id']." and model".$data1['model']."and quantity=".$values['quantity']."  where asset_id=".$oldvalues['asset_id']."and model=".$data['model']."date=".$oldvalues['date'];

CustomQuery($sql);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		$uname=Security::getUserName();


$s="select * from csa_users where empid='".$data['empid']."'";
$rss=CustomQuery($s);
$dd=db_fetch_array($rss);

if($dd['username']==$uname){
return true;
}
else {
return false;
}
/*
$rss=DB::Query("select * from model20 ");
$dd=$rss->fetchAssoc();

// Place event code here.
// Use "Add Action" button to add code snippets.
if($data['department']==
return true;
*/
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
$uname=Security::getUserName();
$data1 =$values['empid'];

$sql = "select * from csa_users where username='".$uname."'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
if($data['empid']==$data1){

// Place event code here.
// Use "Add Action" button to add code snippets.
$values['date']=strftime("%Y-%m-%d %H:%M:%S");
return true;}
else{
$message="this is not your employment id please choose your own id";
return false;
}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$uname=Security::getUserName();
$data1 =$values['empid'];

$sql = "select * from csa_users where username='".$uname."'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
if($data['empid']==$data1){

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;}
else{
$message="this is not your employment id please choose your own id";
return false;
}

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		

/*


if(strftime("%H:%M:%S")>="15:00:00"||$_SERVER["REMOTE_ADDR"]!="::1"){
// Place event code here.
// Use "Add Action" button to add code snippets.
$message="this is NOT the time to enter into the app please wait for tomorrow";
session_destroy();
}

*/
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd(&$pageObject)
{

		

/*

if(strftime("%H:%M:%S")>="15:00:00"||$_SERVER["REMOTE_ADDR"]!="::1"){
// Place event code here.
// Use "Add Action" button to add code snippets.
$message="this is NOT the time to enter into the app please wait for tomorrow";
session_destroy();
}


*/
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
				// Edit page: Before process
function BeforeProcessEdit(&$pageObject)
{

		
/*

if(strftime("%H:%M:%S")>="15:00:00"||$_SERVER["REMOTE_ADDR"]!="::1"){
// Place event code here.
// Use "Add Action" button to add code snippets.
$message="this is NOT the time to enter into the app please wait for tomorrow";
session_destroy();
}

*/
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
