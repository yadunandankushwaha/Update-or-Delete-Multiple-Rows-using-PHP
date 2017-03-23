<?php
/********************************************************************************
* Update or Delete Multiple Rows using PHP 
* Written by Yadu
* Website: ynandan55@gmail.com
* Email: ynandan55@gmail.com
***********************************************************************************/
@ob_start();

include "config.php";
if(isset($_POST["submit"]) && trim($_POST["submit"]) != "") 
{
	$vpb_counted_users = count($_POST["userId"]);
	
	echo $vpb_counted_users;
	
	for($i=0; $i<$vpb_counted_users; $i++) 
	{
		mysql_query("update `updated_users_demo` set `firstname` = '".mysql_real_escape_string(trim(strip_tags($_POST["firstname"][$i])))."', `lastname` = '".mysql_real_escape_string(trim(strip_tags($_POST["lastname"][$i])))."', `username` = '".mysql_real_escape_string(trim(strip_tags($_POST["username"][$i])))."', `password` = '".mysql_real_escape_string(trim(strip_tags($_POST["password"][$i])))."' where `id` = '".mysql_real_escape_string(trim(strip_tags($_POST["userId"][$i])))."'");
		
	}
	header("location:index.php");
}
?>


<html>
<head>
<title>Update or Delete Multiple Rows using PHP</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>



<div style="width:500px; margin: 0 auto;" align="center">
<?php
$selected_users_id = count($_POST["users"]);

if($selected_users_id == 0)
{
	?>
    <div style="margin:0 auto; padding:10px; background:#FFFFEA; line-height:20px; border:1px solid #F1F1F1;">It seems you did not check any item to update.<br>Please click on the button below to go back and then check on an item to update.</div><br><br>
    
    <div align="center" class="vasplus_button" onClick="window.location.replace('index.php');">Back</div>
    <?php
}
else
{
	?>

    <form name="frmUser" method="post" action="<?php echo isset($_SERVER['PHP_SELF']) ? trim($_SERVER['PHP_SELF']) : ""; ?>">
    <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="vpb_table_wrapper">
    <tr class=" vpb_table_header">
    <td>Update User Information</td>
    </tr>
    <?php
    for($i=0; $i<$selected_users_id; $i++) 
    {
        $check_users_details = mysql_query("select * from `updated_users_demo` where `id` = '".mysql_real_escape_string(trim(strip_tags($_POST["users"][$i])))."'");
		
        $get_u_detail[$i] = mysql_fetch_array($check_users_details);
        ?>
        <tr>
        <td>
        
        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="vpb_inner_table">
        
        <tr>
        <td><label>First Name</label></td>
        <td><input type="text" name="firstname[]" class="field" value="<?php echo $get_u_detail[$i]['firstname']; ?>"></td>
        </tr>
        
        <tr>
        <td><label>Last Name</label></td>
        <td><input type="text" name="lastname[]" class="field" value="<?php echo $get_u_detail[$i]['lastname']; ?>"></td>
        </tr>
        
        <tr>
        <td><label>Username</label></td>
        <td>
        <input type="hidden" name="userId[]" class="field" value="<?php echo $get_u_detail[$i]['id']; ?>">
        <input type="text" name="username[]" class="field" value="<?php echo $get_u_detail[$i]['username']; ?>"></td>
        </tr>
        <tr>
        <td><label>Password</label></td>
        <td><input type="password" name="password[]" class="field" value="<?php echo $get_u_detail[$i]['password']; ?>"></td>
        </tr>
        
       
        </table>
        </td>
        </tr>
        <?php
    }
    ?>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="Save Changes" class="vasplus_button"></td>
    </tr>
    </table>
    </form>
<?php
}
?>
</div>




</body>
</html>