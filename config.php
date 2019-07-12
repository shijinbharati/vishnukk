<?php
        // mysql_connect("localhost","root","");
		// mysql_select_db("gallery");

$db = new mysqli("localhost","root","","gallery");
if(!$db){
	echo "not";
}
?>
