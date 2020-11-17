<?php

if(isset($_COOKIE['client'])){
		setcookie("client", "flag", time()-100, '/');
        header('location: ../index.php');
	}

?>