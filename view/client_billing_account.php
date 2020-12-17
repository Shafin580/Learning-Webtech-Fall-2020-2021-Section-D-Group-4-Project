<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Client - Client Billing Account</title>
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
        
        <table border="1" width="40%">
        
        <tr>
            
            <td>
                
                <h3>Welcome, <?=$_SESSION['username']?></h3>
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
                    <li><a href="client_change_password.php">Change Password</a></li>
                    
                </ul>
                
            </td>
            
            <td align="center">
                
                <form action="../php/client_billing_account.php" method="post">
                    
                    <u><h3>Add Bank/Mobile Bank Accounts</h3></u>
                    
                    Account Number: <input type="tel" pattern="[0-9]{10}" placeholder="1234567890" name="accountNo">
                    <select name="accountName" >
				<option value="Bkash"  selected >Bkash</option>
				<option value="DBBL">DBBL</option>
				<option value="Nagad">Nagad</option>
			</select><br><br>
                   <input type="submit" name="submit" value="Add"> 
                    
                </form>
                
                
                
            </td>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>