<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}
   require_once('../models/co_clientService.php');
   $userInformation = GetUserInformations($_SESSION['username']);
    

?>

<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>E-Pocket Banking System - Co-Client - Resize Promotion</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/co-client/resizepromotion.css" />

</head>
<body>
<div id="container">

    <table width="100%">

        <tr>

            <td><a href="co_client_home.php"><img src="../assets/gallery/logo.jpg" alt="Logo" width="420px"></a></td>
            <td align="right"><a class="selected"  href="../php/logout.php">
                    Logout
                </a>&nbsp;&nbsp;
                <a href="about.html" target="_blank">
                    About
                </a></td>

        </tr>

    </table><br><br><br>
    
    <center>
    <div id="header">


   </div>

        
        
        
        <table border="1" width="60%">
        
        <tr>
            
            <td>
                
                <h3>Welcome,<?=$_COOKIE['username']?></h3>
                <ul>
                
                <li><a href="promotion_details.php">All Promotions Details</a></li>
                    <li><a href="add_product.php">Add Product</a></li>
                    <li><a href="co_client delete.php">Delete Promotion</a></li>
                    <li><a href="set_number.php">Set The Number of product</a></li>
                    <li><a href="stop_promotion.php">Stop Promotion</a></li>
                    <li><a href="highlight_a_promotion.php">Highlight a Promotion</a></li>
                    <li><a href="direct_buy.php">Direct Buy</a></li>
                    <li><a href="hide_promotion.php">Hide a Promotion</a></li>
                    <li><a href="resize_promotion.php">Resize Promotion</a></li>
                    <li><a href="promotional_notice.php">Promotional Notice</a></li>
                    <li><a href="time_limit.php">Set a Time Limit</a></li>
                    
                </ul>
                
            </td>
            
            <td align="center">
               <div id="main">
                
                <form action="">
                <table class="content-table" border="1" width="100%">

                            
<thead>
      

           <tr>
               <th>Resize Promotion</th>
           </tr>
       </thead> 
            <tbody>
           <tr height="200px">
           <td height="150px">   
                    <p>All promotion are in default size.<p>
                        <p>To resize please select the promotion you want to resize</p>
                

                    <select class="buttonn"  name="Promotion" >
                <option value="" selected>Promotion No: 1</option>    
                <option value=""   >Promotion No: 2</option>
                <option value="">Promotion No: 3</option>
                 </select>
                <br><br>
                
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input class="button" type="submit" name="submit" value="Apply"> 
                    

                   </div>

                </form>
            
        </tr>
        
    </table>
        
    </center>
    </div>
    
</body>
</html>