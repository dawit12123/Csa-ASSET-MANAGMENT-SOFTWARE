<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_asset_in_store  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeProcessList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		

//**********  Check if specific record exists  ************

$rs = DB::Query("select * from assetnumber where assetname='".$values['asset_name']."' and model='".$values['asset_model']."'");
$data=$rs->fetchAssoc();
if($data)
{
	// if record exists do something
$rss=DB::Query("select count(*) as total from asset where asset_name='".$values['asset_name']."' and asset_model='".$values['asset_model']."' and taken='no'");
$dd=$rss->fetchAssoc();
$dda=$dd['total'];



$sql = "update assetnumber set total_number='".$dda."' where assetname='".$values['asset_name']."' and model='".$values['asset_model']."'";

CustomQuery($sql);



}
else 
{

	// if dont exist do something else
$id=$values['asset_name'];
$mod=$values['asset_model'];


//**********  Insert a record into another table  ************

$data = array();
$data["assetid"]=$values['asset_id'];
$data["assetname"] = $id;
$data["model"] = $mod;
$data["total_number"]="1";
DB::Insert("assetnumber", $data );




// Place event code here.
// Use "Add Action" button to add code snippets.
}



;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
