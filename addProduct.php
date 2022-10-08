<?
require_once 'checkSession.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
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
        <div id="navbar"><a href="index.php">Home</a> | <a href="register.php">Register</a> | <a href="logout.php">Logout</a> | <a href="addProduct.php">Add Product</a> | <a href="viewProducts.php">View Products</a></div>
        <br>
        <br>
        <h3>Add a new book</h3>
        <br>
        <form action="addProduct1.php" method="POST"><fieldset>        
            Book Name: <input type="text" name="bookName" required>
            <br>
            <br>
            Book Price: <input type="text" name="bookPrice" required>
            <br>
            <br>
            <input type="submit" value="Add Book">
        </fieldset>
        </form>
        <?php
            // to print the message if insertion was successful or not
            // check if the 'result' variable exists in the URL
            if (isset($_REQUEST['result']))
            {
                // check its value
                if ($_REQUEST['result'] == "success")
                {
                    echo "<br><div id='msg'>";
                    echo "<div class='alert alert-success alert-dismissable fade in'>";
                    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    echo "<strong>Success!</strong> New book was added.";
                    echo "</div></div>";
                } else if ($_REQUEST['result'] == "fail")
                {
                    echo "<br><div id='msg'>";
                    echo "<div class='alert alert-danger alert-dismissable fade in'>";
                    echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                    echo "<strong>Fail!</strong> New book was not added.";
                    echo "</div></div>";
                }
            }
            ?>
    </div>
</body>
</html>