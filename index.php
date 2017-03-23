<?php
/********************************************************************************
* Update or Delete Multiple Rows using PHP 
* Written by Yadu
* Website: ynandan55@gmail.com
* Email: vynandan55@gmail.com
***********************************************************************************/

include "config.php";
$check_users_details = mysql_query("select * from `updated_users_demo` order by `id` asc");
?>

<html>
<head>
<title>Update or Delete Multiple Rows using PHP</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

<script language="javascript" type="text/javascript">
// Redirect user to update details page
function vpb_update_data_redirection() 
{
	document.vpb_form_name.action = "users-update.php";
	document.vpb_form_name.submit();
}

// Redirect to delete detail page and perform user detail deletion
function vpb_delete_data_redirection() 
{
	if(confirm("Do you really mean to delete the details?")) 
	{
		document.vpb_form_name.action = "users-deletion.php";
		document.vpb_form_name.submit();
	}
}
</script>



</head>
<body>


<div style="width:500px; margin:0 auto;">

<form name="vpb_form_name" method="post" action="">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="vpb_table_wrapper">


<tr class="vpb_table_header">
    <td>First Name</td>
    <td>Last Name</td>
    <td>Username</td>
    <td>Password</td>
    <td style="text-align:center;">Action</td>
</tr>


<?php
$vpb_t_class = "vpb_dark";

while($get_data = mysql_fetch_array($check_users_details)) 
{
	?>
	<tr class="<?php echo isset($vpb_t_class) ? $vpb_t_class : ''; ?>">
    
        <td><?php echo trim(strip_tags($get_data["firstname"])); ?></td>
        <td><?php echo trim(strip_tags($get_data["lastname"])); ?></td>
        <td><?php echo trim(strip_tags($get_data["username"])); ?></td>
        <td><?php echo trim(strip_tags($get_data["password"])); ?></td>
        
        <td style="text-align:center;"><input type="checkbox" name="users[]"  class="users" id="users" value="<?php echo trim(strip_tags($get_data["id"])); ?>" ></td>
        
	</tr>
	<?php
	$vpb_t_class = $vpb_t_class == "vpb_dark" ? "vpb_light" : "vpb_dark";
}

?>

<tr class="vpb_table_header">
<td colspan="5" align="center">
<input class="vasplus_button" type="button" name="update" value="Update" onClick="vpb_update_data_redirection();" /> 
<input class="vasplus_button" type="button" name="delete" value="Delete"  onClick="vpb_delete_data_redirection();" />
</td>
</tr>

</table>
</form>
</div>

</body>
</html>