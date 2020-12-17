<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Login</title>
</head>

<body>


    <table width="100%">

        <tr>

            <td><a href="index.php"><img src="assets/gallery/logo.jpg" alt="Logo" width="320px"></a></td>
            <td align="right"><a href="view/registration.php">
                    Registration
                </a>&nbsp;&nbsp;
                <a href="view/about.html"  target="_blank">
                    About
                </a></td>

        </tr>

    </table><br><br><br><br><br><br>




    <center>

        <table border="0">


            <tr>
                <th>
                    <h1>Login</h1>
                </th>
            </tr>


            <tr>

                <td>

                    <form action="php/loginValidate.php" method="post">

                        <input type="text" name="username" placeholder="Enter Username"><br><br>
                        <input type="password" name="password" placeholder="Enter Password"><br><br>
                        <input type="submit" name="submit" value="Login">&nbsp;&nbsp;&nbsp;
                        <a href="view/registration.php"><input type="button" name="signup" value="signup"></a>


                    </form>

                </td>

            </tr>

        </table>

    </center>

</body>

</html>

<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'missing_information'){
			echo "Please fill up all information";
		}

		if($_REQUEST['msg'] == 'invalid_credentials'){
			echo "Invalid Credentials";
		}
        
        

		
	}
?>
