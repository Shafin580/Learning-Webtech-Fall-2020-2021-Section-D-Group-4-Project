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
                    <li><a href="admin_check_clientInfo.php">Check Client info</a></li>
                    <li><a href="admin_limit_voucher.php">Limit Voucher</a></li>
                    <li><a href="admin_create_notice.php">Create Notice</a></li>

                    
                </ul>
                
            </td>
            
            <td align="center">
                
                <form action="">
                    
                    <table border="1" width="100%">
                        
                        <tr><th colspan="6">Edit Client info</th></tr>
                        <tr><th>Client ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th></tr>
                        
                        
                        <tr>
                            <td>111</td>
                            <td><input type="data" name="Shafin Ahmed" value="Shafin Ahmed"></td>
                            <td><input type="data" name="Shafin" value="Shafin"></td>
                            <td><input type="data" name="shafinahmed580@gmail.com" value="shafinahmed580@gmail.com"></td>
                            <td><input type="data" name="2020-11-10" value="2020-11-10"></td>
                            <td><input type="data" name="Male" value="Male"></td>
                        </tr>
                        
                        <tr>
                        <td>156</td>
                            <td><input type="data" name="Alamin Talukdar" value="Alamin Talukdar"></td>
                            <td><input type="data" name="Talukdar" value="Talukdar"></td>
                            <td><input type="data" name="talukder@gmail.com" value="talukder@gmail.com"></td>
                            <td><input type="data" name="2020-11-10" value="2020-11-10"></td>
                            <td><input type="data" name="Male" value="Male"></td>
                        </tr>
                        
                    </table> <br> <br> <br>
                    <input type="button" name="update" value="Update">
        <input type="button" name="delete" value="Delete">
                    
                </form>

                
                
                
            </td>
            
            
        </tr>
        
        
        
    </table>
        
    </center>
    
</body>
</html>