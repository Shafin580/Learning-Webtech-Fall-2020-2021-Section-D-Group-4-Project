<?php


	function getConnection($servername, $dbuser, $dbpass, $database){

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
	}

function userValidate($username, $password){
    
    $sql = "select * from login where username = '$username' AND password = '$password'";
    
    $conn = getConnection('localhost', 'root', '', 'e_pocket_system');
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(count($row) > 0){
        
        if($row['user_type']=="Client"){
            
            session_start();
            $_SESSION['userType'] = $row['user_type'];
            $_SESSION['username'] = $row['username'];
            //setcookie("client", "flag", time()+600, '/');
            //header('location: ../view/client_home.php');
            return true;
            
        }
        
        
    }
    else{
        
        return false;
        
    }
    
}

?>