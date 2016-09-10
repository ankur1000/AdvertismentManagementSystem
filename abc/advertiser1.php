<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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
        
        $Name=$_POST['username'];
        $Email=$_POST['email'];
        $Date=$_POST['bday'];
        $Newspaper=$_POST['cars'];
        $Text=$_POST['my_text'];
        
        
        
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
        
        $sql="INSERT INTO register (Name,Email,Date,Newspaper,text) values ('$Name','$Email','$Date','$Newspaper','$Text')";
        
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
        
            header("refresh:5;url=advertiser.php")
            
            
            
            
            
            
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>

