<html>
<head>
     <?php include 'header.php';?>
        <style>
        body {
            
    background-image: url("payment.png");
    background-repeat: no-repeat;
    background-position: center right;
    background-color: white;
}
       </style>
    </head>
    


 <center><h1>ENTER THE TEXT FOR YOUR AD<h1></center>
                    <center>
                        <form action="advertiser2.php" name="my_form" method="post">
            
            Name:<input type="text" placeholder="NAME" name="username" style="font-family:verdana;font-size:100%;color:blue;">
            <br>
            <br>
            
            
            Email:<input type="text" placeholder="mail" name="email">
            <br>
            <br>
            
            
            Date:<input type="Date" name="bday" min="2016-05-27">
            <br><br>
            
             Select Website:<select name="website" id="website">
  <option value="Matrimonial">Matrimonial</option> 
  <option value="Newslive">Newslive</option>
  <option value="Careerplus">Careerplus</option>
  <option value="Homegoods">Homegoods</option>
</select> 
             <br>
            <br>
            
            <font color="#001133">  Your Ad Website:<input type="text" placeholder="Enter url" name="url"></font>
            <br>
           
            <br>
            
            <br><br>
            <font color="#ff0080"> Enter Debit card number:</font><br> </font>
            <br>
            <input type="text" name="cardnumber" >
            <br>
           
            <br>
            <input type="submit" value="Book Ad">
<?php
?>

</html>
