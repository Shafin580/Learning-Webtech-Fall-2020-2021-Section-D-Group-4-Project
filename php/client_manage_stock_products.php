<?php

session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/clientService.php');

if(isset($_REQUEST['submit'])){
    
    $productId = getStockProductInformation($_REQUEST['p_id']);
    
    
    if(!empty($_REQUEST['p_qty_sell'])){
        
        if(intval($_REQUEST['p_qty_sell']) <= 0 or intval($_REQUEST['p_qty_sell']) > intval($_REQUEST['p_qty_bought'])){
            
            echo "invalid selling quantity";
            
        }else{
            
            $revenue = intval($_REQUEST['p_qty_sell'])*intval($_REQUEST['p_price']);
            
            if(updateClientStockProduct($_SESSION['username'], $_REQUEST['p_id'], intval($_REQUEST['p_qty_sell']), "sell", $revenue)){
                
                echo "Transaction successful";
                
            }else{
                
                echo "Transaction Failed";
                
            }
            
        }
        
    }else{echo "input is null";}
}

/*p_id
p_price
p_qty_bought
p_qty_sell*/

?>