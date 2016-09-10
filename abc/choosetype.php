<!DOCTYPE html>
<html>
<head>
    <?php include 'header.php';?>
    
    <style>
        #search {
    width: 19em;  height: 8em;
COLOR : yellow;
background-color: #264d00;
}
    </style>
    
</head>



<h1><b>Choose the type of advertisement:</b></h1>
<p>
<center>
<form action="advertiser.php" method="post">
  <input type="submit"  id="search" value="TEXT Ad" name="b" >
  </form>
  <form action="iframe.php" method="post">
  <input type="submit" id="search" value="IMAGE Ad" name="b">
</form>
</center></p>

</body>
</html>
