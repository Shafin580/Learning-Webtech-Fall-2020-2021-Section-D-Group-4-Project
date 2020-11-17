<?php
	if(!isset($_COOKIE['client'])){
		header('location: ../index.php');
	}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Client - Client Products</title>
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
                    <li><a href="client_offers">Offers</a></li>
                    <li><a href="client_change_password.php">Change Password</a></li>
                    
                </ul>
                
            </td>
            
            <td align="center">
                
                <form action="">
                    
                    
                    
                    <table border="1" width="100%">
                        
                        <tr>
                            
                            <td>
                                
                                <h3>Product: Biscuit</h3>
                                <p>Price: 3TK/Share</p>
                                Buy : <input type="number" name="product_01_amount" min="0" max="100"> Share <br> <br>
                                <input type="submit" name="buy_1" value="Buy">
                                
                            </td>
                            
                            <td align="right">
                                
                                <p>Bought: 0</p>
                                
                                
                            </td>
                            
                        </tr>
                        
                        <tr>
                            
                            <td>
                                
                                <h3>Product: Pen</h3>
                                <p>Price: 2TK/Share</p>
                                Buy : <input type="number" name="product_02_amount" min="0" max="100"> Share <br> <br>
                                <input type="submit" name="buy_2" value="Buy">
                                
                            </td>
                            
                            <td align="right">
                                
                                <p>Bought: 0</p>
                                
                                
                            </td>
                            
                        </tr>
                        
                        <tr>
                            
                            <td>
                                
                                <h3>Product: Eraser</h3>
                                <p>Price: 1.5TK/Share</p>
                                Buy : <input type="number" name="product_03_amount" min="0" max="100"> Share <br> <br>
                                <input type="submit" name="buy_3" value="Buy">
                                
                            </td>
                            
                            <td align="right">
                                
                                <p>Bought: 0</p>
                                
                                
                            </td>
                            
                        </tr>
                        
                    </table>
                    
                </form>
                
                
                
            </td>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>