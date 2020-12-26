<?php

session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');

if(isset($_REQUEST['flexiload'])){
    
    if(!empty($_REQUEST['phoneNumber']) and !empty($_REQUEST['flexiAmount'])){
        
        if(strlen(strval($_REQUEST['phoneNumber'])) < 11){
            
            echo "Invalid phone number";
            
        }else{
            
            if(intval($_REQUEST['flexiAmount']) < 50){
                
                echo "Amount must be atleast 50 bdt";
                
            }else{
                
                if(flexiload($_SESSION['username'], "F", strval($_REQUEST['phoneNumber']), intval($_REQUEST['flexiAmount']))){
                    
                    echo "Flexiload Successful";
                    
                }else{
                    
                    echo "Failed to flexiload";
                    
                }
                
            }
            
        }
        
    }
    
}


?>