<!DOCTYPE html>
<!--
DO NOT USE
-->
<html>
    <head>
        <?php
 include 'header.php';?>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con= mysqli_connect('127.0.0.1','root','12345');
        if(!$con)
        {
            echo "Oops we are having some prob..try later";
        }
        if(!mysqli_select_db($con,'tutorial'))
        {
            echo "databse not selected";
        }
        
                $host=$_POST['website'];
        $site=$_POST['url'];
                
        
        if($_POST['email'] == '')
 {
    
     
     echo "please enter emailid";
     exit;
  }
  $okay=preg_match(
                '/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][a-z0-9_\-]+)+[A-z.]{2,4}$/',$_POST['email']);
if(!$okay)
{


echo "invalid emailid";
exit;
}
        
        $sql="INSERT INTO idb values ('$host','$site')";
        
        if(!mysqli_query($con,$sql))
        {
            echo "Not inserted";
        }
        else
        {
            ?>
            <p><font face="verdana" size="6" color="navy">"YOUR ADVERTISEMENT HAS BEEN RECEIVED..KEEP POSTING"</font></p>
        
            <?php
            }
        
            header("refresh:5;url=choosetype.php")
            
            
            
            
            
            
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>
