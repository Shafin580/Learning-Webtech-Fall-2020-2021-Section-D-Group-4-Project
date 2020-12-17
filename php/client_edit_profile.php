<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');
    $userInformation = getUserInformation($_SESSION['username']);

    if(isset($_REQUEST['submit'])){
        
        echo "<center><fieldset><legend>Messeges</legend>";
        
        if(!empty($_REQUEST['name']) and !empty($_REQUEST['email']) and !empty($_REQUEST['dob'])){
            
            if(updateClientInformation($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['dob'], $userInformation[0]['c_id'])){
                
                echo "User information updated!";
                
            }else{echo "Failed to update user information";}
            
        }else{echo "Missing Information";}
        
        echo "</fieldset></center>";
        
    }

?>