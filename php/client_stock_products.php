<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

require_once('../models/clientService.php');

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['productQty'])){
        
        $productQty = intval($_REQUEST['productQty']);
        
        if($productQty >= 0){
            
            $productId = $_REQUEST['sp_id'];
            $productPrice = intval($_REQUEST['sp_price']);
            $totalPrice = ($productPrice*$productQty);
            
            if(checkClientStockProduct($_SESSION['username'], $productId)){
                
                if(updateClientStockProduct($_SESSION['username'], $productId, $productQty, "buy", $totalPrice)){
                    
                    echo "Transaction successful";
                    
                }else{"Transaction failed";}
                
            }else{
                
                if(buyClientStockProduct($_SESSION['username'], $productId, $productQty, $totalPrice)){
                    
                    
                    echo "Transaction successful";
                    
                }else{"Transaction failed";}
                
            }
            
        }else{echo "Invalid product quantity";}
        
    }else{
        
        echo "Product quantity is empty";
        
    }
    
}



?>