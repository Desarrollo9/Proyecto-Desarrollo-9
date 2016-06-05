<?php
	$link =mysql_connect("localhost","root","12345");
	if($link){
		mysql_select_db("proyecto",$link);
	}
?>
