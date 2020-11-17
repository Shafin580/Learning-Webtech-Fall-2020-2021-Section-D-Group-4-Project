<?php
	if(!isset($_COOKIE['client'])){
		header('location: ../index.php');
	}

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Client - Client Withdraw/Deposit</title>
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

        <u>
            <h1>E-Pocket Banking System</h1>
        </u>

        <table border="1" width="45%">

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

                            <tr>

                                <table border="1" width="100%">

                                    <tr>
                                        <th colspan="2">Withdraw</th>
                                    </tr>

                                    <tr>

                                        <td>

                                            Withdraw To: <select name="accountName">
                                                <option value="Bkash" selected>Bkash</option>
                                                <option value="DBBL">DBBL</option>
                                                <option value="Nagad">Nagad</option>
                                            </select><br><br>
                                            Amount: <input type="number" name="withdraw_amount" min="500" max="50000"> <br> <br>
                                            

                                        </td>
                                        
                                        <td>
                                            
                                            <input type="submit" name="withdraw" value="Proceed">
                                            
                                        </td>

                                    </tr>
                                    
                                    <tr>
                                        <th colspan="2">Deposit</th>
                                    </tr>

                                    <tr>

                                        <td>

                                            Deposit From: <select name="accountName">
                                                <option value="Bkash" selected>Bkash</option>
                                                <option value="DBBl">DBBL</option>
                                                <option value="Nagad">Nagad</option>
                                            </select><br><br>
                                            Amount: <input type="number" name="deposit_amount" min="500" max="50000"> <br> <br>
                                            

                                        </td>
                                        
                                        <td>
                                            
                                            <input type="submit" name="deposit" value="Proceed">
                                            
                                        </td>

                                    </tr>

                                </table>


                            </tr>
                            
                            

                        </table>

                    </form>



                </td>

            </tr>

        </table>

    </center>

</body>

</html>
