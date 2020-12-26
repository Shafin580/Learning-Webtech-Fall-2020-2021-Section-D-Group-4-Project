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

                    <form>

                        <input type="text" name="username" id="userName" placeholder="Enter Username"><br><br>
                        <input type="password" name="password" id="Password" placeholder="Enter Password"><br><br>
                        <input type="button" name="submit" id="Submit" value="Login" onclick="userValidate()">&nbsp;&nbsp;&nbsp;
                        <a href="view/registration.php"><input type="button" name="signup" value="signup"></a>


                    </form>

                </td>

            </tr>

        </table>

  <h4 style="color: red;" id="response"></h4>
   
    </center>

<script type="text/javascript" src="assets/scripts/script.js"></script>

</body>

</html>

