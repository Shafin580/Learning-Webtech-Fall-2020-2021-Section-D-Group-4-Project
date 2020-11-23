<?php
    if(!isset($_COOKIE['co-client'])){
        header('location: ../index.php');
    }

    

?>


<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>E-Pocket Banking System - Co-Client - Set Number</title>
</head>
<body>
    
    <table width="100%">

        <tr>

            <td><a href="co-client_home.php"><img src="../assets/gallery/logo.jpg" alt="Logo" width="320px"></a></td>
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
                
                <h3>Welcome, Talukder</h3>
                <ul>
                    
                     <li><a href="promotion_details.php">All Promotions Details</a></li>
                    <li><a href="set_or_delete_product.php">Set or Delete Product</a></li>
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
                
                <form action="">
                    
                    <u><h3>Set Highest Number of Products Could be Add for Promotion</h3></u>

                     Number: <input type="Number" name="Number">
                     <br><br>

                      Select Category:

                <select name="product" >
                <option value="" selected>Mobile</option>    
                <option value=""   >Clothes</option>
                <option value="">Electronic</option>
                <option value="">Shoe</option>
                <option value="">Vehicle</option>
                <option value="">Other</option>
            </select>
            <br><br>
                
               
                    
                  
                  
                   <input type="submit" name="submit" value="Add"> 
                    
                </form>
            
        </tr>
        
    </table>
        
    </center>
    
</body>
</html>