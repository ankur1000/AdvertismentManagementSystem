
<?php 
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "tutorial";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT host, site FROM idb";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while ($row = $result->fetch_object()) {
$host = $row->host;
      
        $site=$row->site;


Header("Location: $host.php");
//Header("Location: $Newspaper.php");

		
 }

}
else {
    echo "0 results";
}



$conn->close();
?>