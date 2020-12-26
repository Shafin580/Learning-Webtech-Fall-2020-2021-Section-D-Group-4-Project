<?php


require_once('../models/databaseConnect.php');

if(isset($_REQUEST['submit'])){
    
    
    
    if(!empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
     
        if(userValidate($_REQUEST['username'], $_REQUEST['password'])){
            
            if($_SESSION['userType']=="Client"){
                
                //header('location: ../view/client_home.php');
                echo "Valid";
            }
            
        }else{echo "Invalid credentials";}
  
    }
    
    else{
        
        echo "Missing Information";
        
    }
    
}

else{
    
    header('location: ../index.php');
    
}



?>