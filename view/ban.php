<?php
   session_start();
    if(!isset($_SESSION['userType'])){
        header('location: ../index.php');
    }
    
if(!isset($_COOKIE['userName'])){
       
        session_destroy();
        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Manager - Home</title>
     <link rel="stylesheet" type="text/css" href="../assets/css/manager/banStyle.css">
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
    
 
        
        <div class="container">
        <u><h1>E-Pocket Banking System</h1></u>
        
      <div class="catagory">
                
                <h3>Welcome, Rabbi</h3>
                <ul>
                    
                    <li><a href="view_client_list.php">View  client list</a></li>
                    <li><a href="view_co-client_list.php">View  co-client list</a></li>
                    <li><a href="manager_edit_profile.php">edit profile</a></li>
                    <li><a href="warning.php">Warning </a></li>
                    <li><a href="ban.php">mark for ban</a></li>
                    <!-- <li><a href="transaction.php">solve transaction</a></li> -->
                    <li><a href="voucher.php">Voucher</a></li>
                    <li><a href="manager_bonous.php">bonous</a></li>
                    <li><a href="manager_stopPromotion.php">Stop Promotion</a></li>
                    <li><a href="manager_changePassword.php">change password</a></li>
                    
                    
                </ul>
              </div>  
            
                <form action="../php/ban_client.php" method="post" class="my-form">

                    <div class="form-group">
                                  <u><h4>Ban client  Accounts</h4></u>
                                   <label for=""> Account Id :  </label>
                                   <input type="text" name="c_accountNo">
                               </div>
                                  <input type="submit" name="ban" value="ban" class="button"> 
                            
                    <div class="form-group">
                                  <u><h4>Ban co-client  Accounts</h4></u>
                                   <label for=""> Account Id :  </label>
                                   <input type="text" name="co_accountNo">
                               </div>
                                  <input type="submit" name="co_ban" value="co_ban" class="button"> 
                          

                       

               </form>
                
           </div>     
        
        
</body>
</html>