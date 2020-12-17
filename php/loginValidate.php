<?php

session_start();
require_once('../models/databaseConnect.php');

if(isset($_REQUEST['submit'])){
    
    
    
    if(!empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
     
        if(userValidate($_REQUEST['username'], $_REQUEST['password'])){
            
            if($_SESSION['userType']=="Client"){
                
                header('location: ../view/client_home.php');
                
            }
            
        }else{header('location: ../index.php?msg=invalid_credentials');}
  
    }
    
    else{
        
        header('location: ../index.php?msg=missing_information');
        
    }
    
}

else{
    
    header('location: ../index.php');
    
}



?>