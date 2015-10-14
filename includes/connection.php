<?php
 //create a database connection
 $connection=mysql_connect("localhost","root","");
 if(!$connection){
 die("Database connection failed: ".mysql_error());
 }
 
 // select a database to use
 $db_select=Mysql_select_db("charity_db",$connection);
 if(!$db_select){
 die("Database selection failed:". Mysql_error());
 }
 ?>