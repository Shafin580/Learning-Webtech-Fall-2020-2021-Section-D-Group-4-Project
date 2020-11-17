<?php

if(isset($_REQUEST['submit'])){
    
    $count = 0;
    
    if(!empty($_REQUEST['id']) and !empty($_REQUEST['password'])){
        
        $myfile = fopen('../assets/userInfo.txt', 'r');
	while ($data = fgets($myfile)) {
		
        $userInfo = explode("|", $data);
        
        if($userInfo[0]==$_REQUEST['id'] and $userInfo[1]==$_REQUEST['password'] and $userInfo[4]=="Client"){
            
            setcookie("client", "flag", time()+100, '/');
            header('location: ../view/client_home.php');
            $count = $count + 1;
            break;
            
        }
        
        elseif($userInfo[0]==$_REQUEST['id'] and $userInfo[1]==$_REQUEST['password'] and $userInfo[4]=="Co-Client"){
            
            setcookie("co-client", "flag", time()+100, '/');
            header('location: ../view/co-client_home.php');
            $count = $count + 1;
            break;
            
        }
        
        elseif($userInfo[0]==$_REQUEST['id'] and $userInfo[1]==$_REQUEST['password'] and $userInfo[4]=="Manager"){
            setcookie("manager", "flag", time()+100, '/');
            header('location: ../view/manager_home.php');
            $count = $count + 1;
            break;
            
        }
        
        elseif($userInfo[0]==$_REQUEST['id'] and $userInfo[1]==$_REQUEST['password'] and $userInfo[4]=="Admin"){
            
            setcookie("admin", "flag", time()+100, '/');
            header('location: ../view/admin_home.php');
            $count = $count + 1;
            break;
            
        }
	}
    
    
	fclose($myfile);
        
    if($count==0){header('location: ../index.php?msg=invalid_credentials');}
        
    }
    
    else{
        
        header('location: ../index.php?msg=missing_information');
        
    }
    
}

else{
    
    header('location: ../index.php');
    
}



?>