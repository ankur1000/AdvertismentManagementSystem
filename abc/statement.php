
<style type="text/css">
textarea {
	color :black;
	  position: left;
	  	
	  text-align: center;
letter-spacing: 3px;
 line-height: 1.8;
    text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
	  position:absolute;bottom:20px; right:15px;
 width: 300px;
 height: 600px;
 background-color: ORANGE;
 font-size: 1em;
 font-weight: bold;
 font-family: Verdana, Arial, Helvetica, sans-serif;
 border: 1px solid black;
}

p.oblique {
    font-style: oblique;
	font-size: 120px;
}


</style>




<?php
$t= basename($_SERVER['PHP_SELF']); 

//echo $t;
$q= chop($t,".php");
//echo $q;

$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "tutorial";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else echo "success";

$sql = "SELECT text FROM register
where Newspaper='".$q."' ";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		?>
		

  <textarea  readonly="readonly  style="background-color:orange;"> <?php echo "" . $row["text"]. ""  ;?></textarea> 
 
 <?php
 }
 } else {
    echo "0 results";
}



mysqli_close($conn);

?>

<body  bgcolor="#E6E6FA" placeholder="STATESMAN">
<p class="oblique">WELCOME TO STATESMAN PAPER.</p>


    </div
</body>
