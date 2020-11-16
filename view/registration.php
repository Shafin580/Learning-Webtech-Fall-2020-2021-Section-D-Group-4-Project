<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Pocket Banking System - Registration</title>
</head>

<body>


    <table width="100%">

        <tr>

            <td><a href="../index.php"><img src="../assets/gallery/logo.jpg" alt="Logo" width="320px"></a></td>
            <td align="right"><a href="../index.php">
                    Login
                </a>&nbsp;&nbsp;
                <a href="about.html">
                    About
                </a></td>

        </tr>

    </table><br><br><br>


    <center>


        <form action="../php/registrationCheck.php" method="post">

            <table border="0" cellspacing="0" cellpadding="0">


                <tr>


                    <td>

                        <fieldset>

                            <legend>Registration</legend>

                            ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="tel" name="id" pattern="[0-9]{3}" placeholder="Enter only 3 digit number. Example: 123"><br><br>
                            Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name"><br><br>
                            Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="username"><br><br>
                            Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" placeholder="example@gmail.com"><br><br>
                            Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="password"><br><br>
                            Confirm Password : <input type="password" name="confirmPassword"><br><br>
                            Date of birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" name="dateofBirth"><br><br>
                            Gender : <input type="radio" name="genderRadio" value="Male"> Male <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="genderRadio" value="Female"> Female <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="genderRadio" value="Others"> Others <br> <br>
                            User type : <input type="radio" name="userRadio" value="Client"> Client <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="userRadio" value="Co-Client"> Co-Client <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="userRadio" value="Manager"> Manager <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="userRadio" value="Admin"> Admin <br> <br>
                            <input type="submit" name="submit" value="Submit">

                        </fieldset>

                    </td>

                </tr>

            </table>


        </form>


    </center>


</body>

</html>




<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'password_not_match'){
			echo "Password and Confirm Password doesn't match";
		}

		if($_REQUEST['msg'] == 'information_missing'){
			echo "Please fill up all information!";
		}
        
        if($_REQUEST['msg'] == 'registration_completed'){
			echo "Registration Completed!";
		}

		
	}
?>

