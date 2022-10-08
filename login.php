<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        #wrapper{
            width: 80%;
            margin: auto;
        }
        #navbar{
            background-color: paleturquoise;
        }
        a{
            text-decoration: none;
            color: default;
        }
        a:hover{
            background-color: darkblue;
            color: white;
        }
        h1{
            background-color: lightblue;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <div id=wrapper>
    <h1>Assignment 4 - Inventory Management System</h1>
        <div id="navbar"><a href="index.php">Home</a> | <a href="register.php">Register</a> | <a href="login.php">Login</a> | <a href="addProduct.php">Add Product</a> | <a href="viewProducts.php">View Products</a></div>
        <br>
        <br>
        <h3>Login Here!</h3>
        <br>
        <form action="login1.php"><fieldset><legend>Existing User</legend>        
            Username: <input type="text" name="username" required>
            <br>
            <br>
            Password: <input type="password" name="password" required>
            <br>
            <br>
            <input type="submit" value="Login">
        </fieldset>
        </form>

        <?php
                // to display the message back to the user
                if (isset($_REQUEST['result']))
                {
                    if ($_REQUEST['result'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Login failed!</strong> Either username or password is incorrect. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
    </div>
</body>
</html>