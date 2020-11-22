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
            
            <td align="center">
                
                <form action="">
                    
                    <table border="1" width="100%" >
                        
                        <tr><th colspan="6">Client Set</th></tr>
                        <tr><th>Client id</th>
                        <th>Client name</th>
                        
                        <tr>
                            <td>01</td>
                            <td>Hasan</td>
                            <td><input align="left" type="button" name="block" value="Block"></td>
                            <td><select name="Manager" >
				            <option value=""  selected >Rabby Hossain</option>
				            <option value="">Ali Hossain</option>
				            <option value="">Masud Haque</option>
			                </select>
                            <td><input align="left" type="button" name="assign" value="Assign"></td>
                        </tr>
                        
                        <tr>
                            <td>02</td>
                            <td>John</td>
                            <td><input align="left" type="button" name="block" value="Block"></td>
                            <td><select name="Manager" >
				            <option value=""  selected >Rabby Hossain</option>
				            <option value="">Ali Hossain</option>
				            <option value="">Masud Haque</option>
			                </select>
                            <td><input align="left" type="button" name="assign" value="Assign"></td>
                            
                        </tr>
                        
                    </table> 
                    
                </form>
                
                
                
            </td>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>