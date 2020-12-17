<?php

require_once('../models/clientService.php');


if(isset($_REQUEST['submit'])){
    
    
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['username']) and !empty($_REQUEST['email']) and !empty($_REQUEST['password']) and !empty($_REQUEST['confirmPassword']) and !empty($_REQUEST['dateofBirth']) and !empty($_REQUEST['genderRadio']) and !empty($_REQUEST['userRadio'])){
        
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
                    
                    
                    
                    if($_REQUEST['userRadio']=="Client"){
                        
                        if(userRegistration($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['userRadio'])){
                            
                            if(clientRegistration($_REQUEST['name'], $_REQUEST['password'], $_REQUEST['username'], $_REQUEST['email'], $_REQUEST['genderRadio'], $_REQUEST['dateofBirth'])){
                                
                                header('location: ../view/registration.php?msg=registration_completed');
                                
                            }else{header('location: ../view/registration.php?msg=registration_failed');}
                            
                        }else{header('location: ../view/registration.php?msg=username_taken');}
                        
                    }
                    
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
