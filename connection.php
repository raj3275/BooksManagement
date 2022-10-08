<?

$host = 'localhost'; // name of the server, usually localhost
$username = 'pate3275_a5'; // your database username
$password = 'pate3275_a5@'; // your database password
$db_name = 'pate3275_a5'; // the database name
// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (empty($conn))
{
die("Connection failed: " . mysqli_connect_error());
}

?>