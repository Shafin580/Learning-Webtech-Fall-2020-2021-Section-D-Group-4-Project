<?php
    if(!isset($_COOKIE['manager'])){
        header('location: ../index.php');
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Client - Home</title>
</head>
<body>
    
    <table width="100%">

        <tr>

            <td><a href="manager_home.php"><img src="../assets/gallery/logo.jpg" alt="Logo" width="320px"></a></td>
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
        
        <table border="1" width="40%">
        
        <tr>
            
            <td>
                
                <h3>Welcome, Rabbi</h3>
                <ul>
                    
                    <li><a href="view_client_list.php">View  client list</a></li>
                    <li><a href="view_co-client_list.php">View  co-client list</a></li>
                    <li><a href="warning.php">Warning </a></li>
                    <li><a href="ban.php">mark for ban</a></li>
                    <li><a href="transaction.php">solve transaction</a></li>
                    <li><a href="voucher.php">Voucher</a></li>
                    
                    
                </ul>
                
            </td>
            
            <td align="center">
                
                
               <h4>Co-client list </h4>
                <p>Shuvo Alam</p>
               
                
                
            </td>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>