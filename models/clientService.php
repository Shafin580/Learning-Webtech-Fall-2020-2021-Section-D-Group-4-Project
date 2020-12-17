<?php


require_once('databaseConnect.php');

function userRegistration($username, $password, $userType){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "insert into login (username, password, user_type) values ('$username', '$password', '$userType')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function clientRegistration($name, $password, $username, $email, $gender, $dob){
    
    $sql = "insert into client (c_name, c_password, c_username, c_email, c_gender, c_dob) values ('$name', '$password', '$username', '$email', '$gender', '$dob')";
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function getUserInformation($username){

		$conn = getConnection('localhost', 'root', '', 'e_pocket_system');
		$sql = "select * from client where c_username = '$username'";
		$result = mysqli_query($conn, $sql);

		$userInfo =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($userInfo, $data);
		}

		return $userInfo;
	}

function updateClientInformation($name, $email, $dob, $id){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "update client set c_name = '$name', c_email = '$email', c_dob = '$dob' where c_id = $id";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
    }
    
    else{
        
        return false;
        
    }
    
}

function updateClientPassword($username, $password){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "update client set c_password = '$password' where c_username = '$username'";
    
    if(mysqli_query($conn, $sql)){
        
        $sql2 = "update login set password = '$password' where username = '$username'";
        mysqli_query($conn, $sql2);
        return true;
        
        
    }
    
    else{
        
        return false;
        
    }
}

function addBillingAccount($username, $accountNumber, $accountName){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "insert into client_billing_account (username, billing_account_name, billing_account_number) values ('$username', '$accountName', '$accountNumber')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
    }
    
    else{
        
        return false;
        
    }
    
}

function getBillingAccount($username){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client_billing_account where username = '$username'";
    
    $result = mysqli_query($conn, $sql);
    $i = 0;
    while($data = mysqli_fetch_assoc($result)){
        
        echo "<option value=".$data['billing_account_name'].">".$data['billing_account_name']."</option>";
        
        
    }
    
}

function depositMoney($username, $amount){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client where c_username = '$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    
    $totalAmount = $amount + intval($data['c_credit']);
    
    $query = "update client set c_credit = '$totalAmount' where c_username = '$username'";
    
    if(mysqli_query($conn, $query)){
        
        return true;
        
    }
    
    else{
        
        return false;
        
    }
    
}

function withdrawMoney($username, $amount){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client where c_username = '$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    
    if(intval($data['c_credit']) > $amount){
        
        $totalAmount = intval($data['c_credit']) - $amount;
        
        $query = "update client set c_credit = '$totalAmount' where c_username = '$username'";
    
        if(mysqli_query($conn, $query)){
        
            return true;
        
        }
    
        else{
        
            return false;
        
        }
        
    }else{
        
            echo "<center><fieldset><legend>Messeges</legend>";
            echo "Insufficient balance";
            echo "</fieldset></center>";
        
    }
    
    
    
    
    
}


function checkClientPackage($username, $package){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client where c_username = '$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    
    if($data['c_package']==$package){
        
        return true;
        
    }else{return false;}
    
}

function buyClientPackage($username, $package, $price){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client where c_username = '$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $balance = intval($data['c_credit']);
    
    if($balance >= $price){
        
        $balance = $balance - $price;
        
        if($package=="Basic"){
            
            $query = "update client set c_credit = '$balance', c_package = '$package', vouchers = 0 where c_username = '$username'";
        
            if(mysqli_query($conn, $query)){
        
                return true;
        
            }
    
            else{
        
                return false;
        
            }
            
        }
        
        elseif($package=="Pro"){
            
            $query = "update client set c_credit = '$balance', c_package = '$package', vouchers = 7 where c_username = '$username'";
        
            if(mysqli_query($conn, $query)){
        
                return true;
        
            }
    
            else{
        
                return false;
        
            }
            
        }
        
        elseif($package=="Ultimate"){
            
            $query = "update client set c_credit = '$balance', c_package = '$package', vouchers = 12 where c_username = '$username'";
        
            if(mysqli_query($conn, $query)){
        
                return true;
        
            }
    
            else{
        
                return false;
        
            }
            
        }
        
        
        
    }else{
        
        echo "Insufficient Balance<br>";
        return false;
    }
    
    
}

function transaction($username, $productId, $productItem, $price, $stockAction = "null"){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    
    if(stockAction == "null"){
        
        if($productId=="D"){
        
        $sql = "insert into transaction (username, product_id, product_item, price, status) values ('$username', '$productId', '$productItem', '$price', 'Clear')";
        
        if(mysqli_query($conn, $sql)){
        
            return true;
        
        }
    
        else{
        
            return false;
        
        }
        
    }else{
        
        $sql = "insert into transaction (username, product_id, product_item, price) values ('$username', '$productId', '$productItem', '$price')";
    
        if(mysqli_query($conn, $sql)){
        
            return true;
        
        }
    
        else{
        
            return false;
        
        }
        
    }
        
    }else{
        
        $sql = "insert into transaction (username, product_id, product_item, price, stock_action) values ('$username', '$productId', '$productItem', '$price', '$stockAction')";
    
        if(mysqli_query($conn, $sql)){
        
            return true;
        
        }
    
        else{
        
            return false;
        
        }
        
    }
    
    
    
}

function getTransactionHistory($username){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from transaction where username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    while($data = mysqli_fetch_assoc($result)){
        
        echo "<tr>
            <td>".$data['t_id']."</td>
            <td>".$data['product_id']."</td>
            <td>".$data['product_item']."</td>
            <td>".$data['price']."</td>
            <td>".$data['stock_action']."</td>
            <td>".$data['status']."</td>
            <td>".$data['date']."</td>
         </tr>";
        
    }
    
    
    
}

function showAllStockProducts(){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from stock_products";
    $result = mysqli_query($conn, $sql);
    
    
    while($data = mysqli_fetch_assoc($result)){
        
        echo "<option value=".$data['sp_id'].">".$data['sp_name']."</option>";
        //for javacript use an onclick event on a tag and the function must have a parameter for sp_id and product_quantity
        
        
    }
    
}

function getStockProductInformation($productId){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from stock_products where sp_id = '$productId'";
    $result = mysqli_query($conn, $sql);
    
    $stockProductInfo = [];
    
    while($data = mysqli_fetch_assoc($result)){
			array_push($stockProductInfo, $data);
		}
    
    return $stockProductInfo;
    
}


function checkClientStockProduct($username, $productId){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client_stock_products where c_username = '$username' and sp_id = '$productId'";
    
    if(mysqli_query($conn, $sql)){
        
            return true;
        
        }
    
        else{
        
            return false;
        
        }
    
}

function updateClientStockProduct($username, $productId, $productQty, $stockAction, $totalPrice){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "select * from client_stock_products where c_username = '$username' and sp_id = '$productId'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $totalQty = intval($data['sp_bought_qty']);
    
    $userQuery = "select * from client where c_username = '$username'";
    
    $userResult = mysqli_query($conn, $userQuery);
    $userData = mysqli_fetch_assoc($userResult); 
    $credit = intval($userData['c_credit']);
    
    
    
    if(stockAction=="buy"){
        
        if($credit >= $totalPrice){
            
            $credit = $credit - $totalPrice;
            $query2 = "update client set c_credit = '$credit' where c_username = '$username'";
            
            $totalQty = $totalQty + $productQty;
            $query = "update client_stock_products set sp_bought_qty = '$totalQty' where c_username = '$username' and sp_id = '$productId'";
        
            if(mysqli_query($conn, $query)){
        
                mysqli_query($conn, $query2);
                return true;
        
            }
    
            else{
        
                return false;
        
            }
            
        }else{
            
            echo "insufficient Balance";
            return false;
            
        }
        
        
        
    }
    
    elseif(stockAction=="sell"){
        $totalQty = $totalQty - $productQty;
        $query = "update client_stock_products set sp_bought_qty = '$totalQty' where c_username = '$username' and sp_id = '$productId'";
        
        if(mysqli_query($conn, $query)){
        
            return true;
        
        }
    
        else{
        
            return false;
        
        }
        
    }
    
}

function buyClientStockProduct($username, $productId, $productName, $productQty, $totalPrice){
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    $sql = "insert into client_stock_products (c_username, sp_id, sp_name, sp_bought_qty) values ('$username', '$productId', '$productName', '$productQty')";
    
    $userQuery = "select * from client where c_username = '$username'";
    
    $userResult = mysqli_query($conn, $userQuery);
    $userData = mysqli_fetch_assoc($userResult); 
    $credit = intval($userData['c_credit']);
    
    if($credit >= $totalPrice){
        
        $credit = $credit - $totalPrice;
        $query = "update client set c_credit = '$credit' where c_username = '$username'";
        
        if(mysqli_query($conn, $sql)){
        
            mysqli_query($conn, $query);
            return true;
        
        }
    
        else{
        
            return false;
        
        }
        
        
    }else{
        
        echo "Insufficient balance";
        return false;
        
    }
    
}




?>