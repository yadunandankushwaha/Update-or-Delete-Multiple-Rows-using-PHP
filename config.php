<?php
/********************************************************************************
* Update or Delete Multiple Rows using PHP 
* Written by yadu
* Website: ynandan55@gmail.com
* Email: ynandan55@gmail.com
***********************************************************************************/


//Database Connection Settings
define ('hostnameorservername','localhost'); //Your server or host name goes in here
define ('serverusername','root'); //Your database Username goes in here
define ('serverpassword',''); //Your database Password goes in here
define ('databasenamed','update_delete'); //Your database name goes in here

$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server.');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database.');	
?>
