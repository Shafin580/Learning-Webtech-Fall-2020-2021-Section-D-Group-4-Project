<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['username']) and !empty($_REQUEST['email']) and !empty($_REQUEST['password']) and !empty($_REQUEST['confirmPassword']) and !empty($_REQUEST['dateofBirth']) and !empty($_REQUEST['genderRadio']) and !empty($_REQUEST['userRadio']) and !empty($_REQUEST['id'])){
        
        if($_REQUEST['password']==$_REQUEST['confirmPassword']){
            
            $test = explode(" ", $_REQUEST['name']);
            if(count($test) >= 2){
                
                $pattern = array('<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                            '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
                            '4', '5', '6', '7', '8', '9',);
            
            for($i = 0; $i < count($pattern); $i++){
                
                if(strpos($_REQUEST['name'], $pattern[$i])==true){
                    header('location: ../view/registration.php?msg=invalid_name');
                    break;
                }
                
            }
              
                if(strpos($_REQUEST['username'], " ")){
                    header('location: ../view/registration.php?msg=invalid_username');
                }
                
                else{
                    
                    $myfile = fopen('../assets/userInfo.txt', 'a');
	$data = $_REQUEST['id']."|".$_REQUEST['password']."|".$_REQUEST['name']."|".$_REQUEST['username']."|".$_REQUEST['userRadio']."|".
        $_REQUEST['genderRadio']."|".$_REQUEST['email']."|".$_REQUEST['dateofBirth']."\n";
	fwrite($myfile, $data);
	fclose($myfile);
            header('location: ../view/registration.php?msg=registration_completed');
                    
                }
                
            }
            else{header('location: ../view/registration.php?msg=invalid_name');}
            
            
        }
        
        else{
            
            header('location: ../view/registration.php?msg=password_not_match');
            
            
        }
        
    }
    
    else{
        
        header('location: ../view/registration.php?msg=information_missing');
        
        
    }
    
}

else{
    
    header('location: ../view/registration.php');
    
}

?>
