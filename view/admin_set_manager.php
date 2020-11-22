<?php
    if(!isset($_COOKIE['admin']))
    {
		header('location: ../index.php');
	}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Admin - Home</title>
</head>
<body>
    
    <table width="100%">

            <tr>

                <td><a href="admin_home.php"><img src="../assets/gallery/logo.jpg" alt="Logo" width="320px"></a></td>
                <td align="right"><a href="../php/logout.php">
                        Logout
                    </a>&nbsp;&nbsp;
                    <a href="about.html" target="_blank">
                        About
                    </a></td>

            </tr>

    </table><br><br><br>
    
    <center>
        
        <u><h1>E-Pocket Banking System</h1></u>
        
        <table cellspacing="0" border="1" width="1200px" height="350px">
        
        <tr>
            
                <td valign="top" width="200px">
                    
                    <h3>Welcome, Mashrur</h3>
                    
                        <ul>
                            
                            <li><a href="admin_home.php">Home</a></li>
                            <li><a href="admin_set_manager.php">Set Manager</a></li>
                            <li><a href="admin_set_client.php">Set Client</a></li>
                            <li><a href="admin_edit_clientInfo.php">Edit Client info</a></li>
                            <li><a href="admin_upgrade_package.php">Upgrade Package</a></li>
                            <li><a href="admin_check_clientInfo.php">Check Client info</a></li>
                            <li><a href="admin_limit_voucher.php">Limit Voucher</a></li>
                            <li><a href="admin_create_notice.php">Create Notice</a></li>
                            
                        </ul>
                    
                </td>
            
                <td valign="top">
                    
                    <p><b>Current manager:</b>
                    <ul>Rabby Hossain</ul></p>
                    <input align="left" type="button" name="block" value="Block">
                    <p><b>Waiting for approval:</b>
                    <li>Ali hossain</li>
                    <input align="left" type="button" name="Approve" value="Approve">
                    <input align="left" type="button" name="Decline" value="Decline">
                    <li>Rafi Haque</li>
                    <input align="left" type="button" name="Approve" value="Approve">
                    <input align="left" type="button" name="Decline" value="Decline">
                    <li>Masud Hasan</li>
                    <input align="left" type="button" name="Approve" value="Approve">
                    <input align="left" type="button" name="Decline" value="Decline">
                    
                    
                    
                </td>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>