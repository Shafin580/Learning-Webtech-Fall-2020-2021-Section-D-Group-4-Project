<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');

    if(isset($_REQUEST['withdraw'])){
        
        if(!empty($_REQUEST['withdraw_amount'])){
            
            $withdrawAmount = intval($_REQUEST['withdraw_amount']);
            
            if($withdrawAmount < 0){
                echo "<center><fieldset><legend>Messeges</legend>";
                echo "Can not be negative amount";
                echo "</fieldset></center>";
            }
            
            else{
                
                if(withdrawMoney($_SESSION['username'], $_REQUEST['withdraw_amount'])){
                    
                    transaction($_SESSION['username'], "W", "Withdraw", $_REQUEST['withdraw_amount']);
                    echo "<center><fieldset><legend>Messeges</legend>";
                    echo "Successfully withdrawn";
                    echo "</fieldset></center>";
                    
                }
                
                else{
                    
                    echo "<center><fieldset><legend>Messeges</legend>";
                    echo "Failed to withdraw";
                    echo "</fieldset></center>";
                    
                }
                
            }
            
        }
        
        
        
    }


    if(isset($_REQUEST['deposit'])){
        
        if(!empty($_REQUEST['deposit_amount'])){
            
            $depositAmount = intval($_REQUEST['deposit_amount']);
            
            if($depositAmount < 0){
                
                echo "<center><fieldset><legend>Messeges</legend>";
                echo "Can not be negative amount";
                echo "</fieldset></center>";
            }
            
            else{
                
                if(depositMoney($_SESSION['username'], $_REQUEST['deposit_amount'])){
                    
                    transaction($_SESSION['username'], "D", "Deposite", $_REQUEST['deposit_amount']);
                    echo "<center><fieldset><legend>Messeges</legend>";
                    echo "Deposited successfully";
                    echo "</fieldset></center>";
                    
                }else{
                    
                    echo "<center><fieldset><legend>Messeges</legend>";
                    echo "Failed to deposit";
                    echo "</fieldset></center>";
                    
                }
                
            }
            
        }
        
        
        
    }

?>