<?
require_once './connection.php';

// read the values from the text fields
$bookName = $_REQUEST['bookName'];
$bookPrice = $_REQUEST['bookPrice'];



// query to insert into table bookData
$query = "INSERT INTO bookData(`bookName`, `bookPrice`) VALUES ('$bookName', $bookPrice)";

// execute the query
$result = mysqli_query($conn, $query);

// check if 1 record was added
if ($result == 1)
{
    // redirect back to addProduct.php page, along with the query string 'result'
    header("location:addProduct.php?result=success");
} else
{
    header("location:addProduct.php?result=fail");
}
?>