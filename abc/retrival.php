<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "tutorial";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else echo "success";

$sql = "SELECT Newspaper, text FROM register where approval='yes'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while ($row = $result->fetch_object()) {
$Newspaper = $row->Newspaper;
      
        $text=$row->text;
echo $text;
echo $Newspaper;

Header("Location: $Newspaper.php");
//Header("Location: $Newspaper.php");

		
 }

}
else {
    echo "0 results";
}



$conn->close();
?>