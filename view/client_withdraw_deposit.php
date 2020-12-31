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

                                <table border="1" width="100%">

                                    <tr>
                                        <th colspan="2">Withdraw</th>
                                    </tr>

                                    <tr>

                                        <td>

                                            Withdraw To: <select name="accountName">
                                                <?=getBillingAccount($_SESSION['username'])?>
                                            </select><br><br>
                                            Amount: <input type="number" name="withdraw_amount" id="WithdrawAmount"> <br> <br>
                                            

                                        </td>
                                        
                                        <td>
                                            
                                            <input type="button" name="withdraw" id="Withdraw" value="Proceed" onclick="withdrawMoney()">
                                            
                                        </td>

                                    </tr>
                                    
                                    <tr>
                                        <th colspan="2">Deposit</th>
                                    </tr>

                                    <tr>

                                        <td>

                                            Deposit From: <select name="accountName">
                                                <?=getBillingAccount($_SESSION['username'])?>
                                            </select><br><br>
                                            Amount: <input type="number" name="deposit_amount" id="DepositAmount"> <br> <br>
                                            

                                        </td>
                                        
                                        <td>
                                            
                                            <input type="button" name="deposit" id="Deposit" value="Proceed" onclick="depositMoney()">
                                            
                                        </td>

                                    </tr>

                                </table>


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
