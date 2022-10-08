<?
require_once 'checkSession.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
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
        h2,h3{
            text-align: center;
        }
        th{
            background-color: olivedrab;
            border: 1px solid black;
            padding: 2px;
        }
        table{
            margin-left: 5%;
            margin-right: 5%;
            width: 90%;
            text-align: center;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div id=wrapper>
    <h1>Assignment 4 - Inventory Management System</h1>
        <div id="navbar"><a href="index.php">Home</a> | <a href="register.php">Register</a> | <a href="logout.php">Logout</a> | <a href="addProduct.php">Add Product</a> | <a href="viewProducts.php">View Products</a></div>
        <br>
        <br>
        <h2>View Books</h2>
        <br>
       <?
       require_once './connection.php';
        // query to select data from table
        $query = "select * from bookData";

        // execute the query
        $result = mysqli_query($conn, $query);

        // check if some rows were fetched
        if (mysqli_num_rows($result) > 0) 
        {    
            // print table and header row
            echo "<table id='products'>";
            echo "<tr><th>Row #</th>";
            echo "<th>Book Name</th>";
            echo "<th>Book Price</th></tr>";
            
            $i = 1;     // to print the # of each row
            
            // loop through all the rows of the fetched data
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>$i</td>";
                echo "<td>" . $row['bookName'] . "</td>";
                echo "<td>" . $row['bookPrice'] . "</td></tr>";

                $i++;
            }
            
            echo "</table>";
        }
        else
        {
            echo "<h3>The table is empty.</h3>";
        }

       ?>
    </div>
</body>
</html>