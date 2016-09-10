<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<?php
$connection = mysqli_connect("127.0.0.1", "root", "12345");
$db = mysqli_select_db($connection,"tutorial");
$query = mysqli_query($connection,"select * from register where Newspaper='".$login_session."'");
while ($row = mysqli_fetch_array($query)) {
    echo "<br />";
echo $row['Name'];
echo "<br />";
echo $row['Email'];
echo "<br />";
echo $row['Date'];
echo "<br />";
echo $row['text'];
echo"<br/>";
echo $row['Newspaper'];?>
<form action="approval.php" method="post">
    <input class="clk" id="save" name="mybutton" type="submit" value="APPROVE" style="FONT-SIZE: medium; FONT-WEIGHT: bold; height : 30px; width : 90px;">
</form>
<form action="disapproval.php" method="post">
    <input class="clk" id="publish" name="mybutton" type="submit" value="DISAPPROVE" style="FONT-SIZE: medium; FONT-WEIGHT: bold; height : 30px; width : 150px;">
</form>


<?php
echo "<br />";
echo "<br />";
}
?>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>