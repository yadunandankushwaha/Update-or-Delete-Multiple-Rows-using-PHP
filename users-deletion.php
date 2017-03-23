<?php
/********************************************************************************
* Update or Delete Multiple Rows using PHP 
* Written by Yadu
* Website: ynandan55@gmail.com
* Email: vynandan55@gmail.com
***********************************************************************************/
@ob_start();
include "config.php";

$selected_users_id = count($_POST["users"]);

for($i=0; $i<$selected_users_id; $i++) 
{
	mysql_query("delete from `updated_users_demo` where `id` = '".mysql_real_escape_string(trim(strip_tags($_POST["users"][$i])))."'");
}
header("location: index.php");
?>