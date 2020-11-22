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
            
            
            <td>
                
          
                    
                    <table border="1" width="100%">
                        
                        <tr><th colspan="6">Notice</th></tr>
                        <tr><th>Cureent Notice</th>
                        <th>Date </th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Update</th>
                        <th>Delete</th>

                        <tr>
                            <td>Limited offer</td>
                            <td>10/11/2020</td>
                            <td>10:30am</td>
                            <td>12:00pm</td>
                            <td><input type="button" name="update" value="Update"></td>
                            <td> <input type="button" name="delete" value="Delete"></td>
                        </tr>
                        
                        <tr>
                        <td>Bonus</td>
                            <td>11/11/2020</td>
                            <td>12:00am</td>
                            <td>11:00pm</td>
                            <td><input type="button" name="update" value="Update"></td>
                            <td> <input type="button" name="delete" value="Delete"></td>
                            
                        </tr>

                        <td>Limited offer</td>
                            <td>10/11/2020</td>
                            <td>10:30am</td>
                            <td>12:00pm</td>
                            <td><input type="button" name="update" value="Update"></td>
                            <td> <input type="button" name="delete" value="Delete"></td>
                        
                    </table> 
                    <br> <br> <br>

                    <table border="1" width="100%">
                        
                        <tr><th colspan="6">New Notice</th></tr>
                        <th>Type</th>
                        <th>Date </th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Publish</th>

                        
            
                        <tr>
                       
                            <td><input type="data" name="update" value=""></td>
                            <td><input type="date" name="date"></td>
                            <td><input type="time" name="date" value=""></td>
                            <td><input type="time" name="start" value=""></td>
                            <td><input type="Button" name="end" value="Publish"></td>
                            
                        </tr>
                        </table>
                   
                
            </td>

            
        </tr>
        
        
        
    </table>
        
    </center>
    
</body>
</html>