<?php
	include_once 'common/common.php';
	session_start();
	$conn = mysql_connect($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd);
	if (!$conn)
	{
		die("Connecttion to data failed:".mysql_error());
	}
	mysql_select_db('esp');
	
	function getUrl($pid){
	$geturl = "select url from pic where picid = '$pid';";
	$result = mysql_query($geturl);
	if ($row = mysql_fetch_object($result)){
		return $row->url;
	}
	}
	
	$query = "update player set status='1',partid=DEFAULT,pairid=DEFAULT where userid='$_SESSION[USERNAME]';";
	mysql_query($query);
	
	$lookupquery = "select * from labelforgame where pairid='$_SESSION[pairid]'";
	$result = mysql_query($lookupquery);
	$array = array();
	$cnt = 0;
	echo "<table>";
	while($row = mysql_fetch_object($result)){
		echo "<tr>";
		echo "<td><img style='width : 100px ; height: 80px;' src='".getUrl($row->picid)."'/></td>";
		echo "<td>".$row->player."</td>";
		echo "<td>".$row->labelid."</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	
	//unset($_SESSION[gameid]);
	//unset($_SESSION[partnerid]);
	//unset($_SESSION[picid]);
?>