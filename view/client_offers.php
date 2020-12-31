<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Client - Client Offers</title>
    
</head>
<body>
    
    <table width="100%">

        <tr>

            <td><a href="client_home.php"><img src="../assets/gallery/logo.jpg" alt="Logo" width="320px"></a></td>
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
        
        <table border="1" width="50%">
        
        <tr>
            
            <td>
                
                <h3>Welcome, <?=$_COOKIE['username']?></h3>
                <ul>
                    
                    <li><a href="view_client_profile.php">View Profile</a></li>
                    <li><a href="edit_client_profile.php">Edit Profile</a></li>
                    <li><a href="client_billing_account.php">Add Billing Accounts</a></li>
                    <li><a href="client_packages.php">Upgrade Package</a></li>
                    <li><a href="client_products.php">Invest Product</a></li>
                    <li><a href="client_withdraw_deposit.php">Withdraw/Deposit</a></li>
                    <li><a href="client_transaction.php">Transaction History</a></li>
                    <li><a href="client_flexiload.php">Flexiload</a></li>
                    <li><a href="client_offers.php">Offers</a></li>
                    <li><a href="client_manage_stock_products.php">Manage Stocks</a></li>
                    <li><a href="client_change_password.php">Change Password</a></li>
                    
                </ul>
                
            </td>
            
            <td align="center">
                
                <form>
                    
                  <table border="1" width="100%">
                      
                      <tr>
                          
                          <td>
                              
                              Product Name: <select name="offeredProductName" id="productName" onchange="productInfo()">
                                    <option selected>Select</option>
                                    <?=getAllOfferedProducts()?>
                                    
                                </select><br><br>
                                
                                Product Id: <input type="text" name="p_id" id="productId" readonly="readonly"><br><br>
                                Product Price: <input type="text" name="p_price" id="productPrice" readonly="readonly"><br><br>
  
                                Use Voucher? <input type="checkbox" name="checkbox" id="Checkbox" value="check">
                                
                                <input type="button" name="submit" id="Submit" value="Buy" onclick="buyOfferedProduct()">
                                
                                
                              
                          </td>
                          
                      </tr>
                      
                  </table>
                    
                </form>
                
                <h4 id="response"></h4>
                
            </td>
            
        </tr>
        
    </table>
        
    </center>
    
    <script type="text/javascript" src="../assets/scripts/clientScript.js"></script>
    
</body>
</html>