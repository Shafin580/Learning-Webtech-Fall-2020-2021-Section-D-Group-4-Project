<?php
	if(!isset($_COOKIE['client'])){
		header('location: ../index.php');
	}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Client - Client Transaction History</title>
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
                
                <h3>Welcome, Shafin</h3>
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
                
                <form action="">
                    
                    <table border="1" width="100%">
                        
                        <tr><th colspan="6">Transaction History</th></tr>
                        <tr><th>Transaction No</th>
                        <th>Product</th>
                        <th>Invested</th>
                        <th>Transaction</th>
                        <th>Amount</th>
                        <th>Date</th></tr>
                        
                        <tr>
                            <td>01</td>
                            <td>none</td>
                            <td>Biscuit(100)</td>
                            <td>none</td>
                            <td>300</td>
                            <td>12/09/2020</td>
                        </tr>
                        
                        <tr>
                            <td>02</td>
                            <td>none</td>
                            <td>none</td>
                            <td>Withdraw(Bkash)</td>
                            <td>300</td>
                            <td>12/09/2020</td>
                        </tr>
                        
                    </table> 
                    
                </form>
                
                
                
            </td>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>