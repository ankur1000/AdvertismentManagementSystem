<?php
$t= basename($_SERVER['PHP_SELF']); 

//echo $t;
$q= chop($t,".php");

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "tutorial";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else echo "success";

$sql = "SELECT site FROM idb
where host='".$q."' ";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		
		
		$mystring1="". $row["site"]."";
$mystring2=".php"; 
$mystring3=$mystring1.$mystring2;
	echo  "<iframe src=\"{$mystring3}\" style=\"background: #fff;\" frameborder=\"0\" height=\"20%\" scrolling=\"auto\" width=\"20%\"></iframe>"; 
	
	
	
	}
 } else {
    echo "0 results";
}



mysqli_close($conn);

?>