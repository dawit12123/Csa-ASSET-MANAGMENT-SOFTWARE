<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeLogin"]=true;

		$this->events["BeforeProcessMenu"]=true;


//	onscreen events
		$this->events["employee_snippet"] = true;
		$this->events["_global__snippet"] = true;



		}

//	handlers

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, &$pageObject, &$userdata)
{

		
$sql="select * from csa_users where username='".$username."'";
$rs=CustomQuery($sql);
$data=db_fetch_array($rs);

if($data['active']=='disabled'){
$message='this employee is terminated';
return false;
}

/*
elseif(strftime("%H:%M:%S")>="15:00:00"){
// Place event code here.
// Use "Add Action" button to add code snippets.
$message="this is NOT the time to enter into the app please wait for tomorrow";
session_destroy();
return false;}

*/
elseif($_SERVER["REMOTE_ADDR"]!="::1"){
$message="you'r not in the legible user ip address please don't try again";
return false;
}
else
return true;
//else{
//return true;}
;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu(&$pageObject)
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
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_employee_snippet(&$params)
	{
	// Put your code here.

	;
}
	function event__global__snippet(&$params)
	{
	// Put your code here.
echo strftime("%H:%M:%S");
	;
}




}
?>
