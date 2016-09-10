<html>
    <head>
        
        <?php include 'header.php';?>
    </head>
</html>
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<!--<input name="submit" type="submit" value=" Login ">-->

<input class="clk" name="submit" type="submit" value="Login" style="FONT-SIZE: medium; FONT-WEIGHT: bold; height : 30px; width : 90px;">
<input class="clk" name="reset" type="RESET" value= "CLEAR" style="FONT-SIZE: medium; FONT-WEIGHT: bold; height : 30px; width : 90px;">
<span><br><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>