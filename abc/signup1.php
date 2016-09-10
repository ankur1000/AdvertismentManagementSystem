<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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
        $Password=$_POST['password'];
       
        
        $sql="INSERT INTO login (username,password) values ('$Name','$Password')";
        
        if(!mysqli_query($con,$sql))
        {
            echo "Not inserted";
        }
        else
        {
            ?>
            <p><font face="verdana" size="6" color="navy">"YOUR NEWSPAPER HAS BEEN REGISTERED"</font></p>
        
            <?php
            }
        
            header("refresh:5;url=signup.php")
            
            
            
            
            
            
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>
