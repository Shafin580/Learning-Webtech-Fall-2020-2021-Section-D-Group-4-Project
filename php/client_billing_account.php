<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');

    if(isset($_REQUEST['submit'])){
        
        echo "<center><fieldset><legend>Messeges</legend>";
        
        if(!empty($_REQUEST['accountNo'])){
            
            if(addBillingAccount($_SESSION['username'], $_REQUEST['accountNo'], $_REQUEST['accountName'])){
                
                echo "Billing Account Added";
                
            }else{echo "Failed to add billing account";}
            
        }else{echo "Missing Information";}
        
        echo "</fieldset></center>";
        
    }

?>