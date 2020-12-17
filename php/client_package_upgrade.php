<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');
    
    if(isset($_REQUEST['basic'])){
        
        $package = "Basic";
        $price = 0;
        
        if(checkClientPackage($_SESSION['username'], $package)==false){
            
            if(buyClientPackage($_SESSION['username'], $package, $price)){
                
                transaction($_SESSION['username'], "P-Basic", "Basic Package", $price);
                echo "Package upgraded";
                
            }else{echo "Failed to upgrade";}
            
        }else{echo "Package already active";}
        
    }

    elseif(isset($_REQUEST['pro'])){
        
        $package = "Pro";
        $price = 500;
        
        if(checkClientPackage($_SESSION['username'], $package)==false){
            
            if(buyClientPackage($_SESSION['username'], $package, $price)){
                
                transaction($_SESSION['username'], "P-Pro", "Pro Package", $price);
                echo "Package upgraded";
                
            }else{echo "Failed to upgrade";}
            
        }else{echo "Package already active";}
        
    }

    elseif(isset($_REQUEST['ultimate'])){
        
        $package = "Ultimate";
        $price = 1000;
        
        if(checkClientPackage($_SESSION['username'], $package)==false){
            
            if(buyClientPackage($_SESSION['username'], $package, $price)){
                
                transaction($_SESSION['username'], "P-Ultimate", "Ultimate Package", $price);
                echo "Package upgraded";
                
            }else{echo "Failed to upgrade";}
            
        }else{echo "Package already active";}
        
    }

    

?>