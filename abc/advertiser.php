<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and on the template in the editor.
-->


<html>
    <head>
        <?php
 include 'header.php';?>

        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    <center><h1>ENTER THE TEXT FOR YOUR AD<h1></center>
                    <center>
        <form action="advertiser1.php" name="my_form" method="post">
            
            Name:<input type="text" placeholder="NAME" name="username" style="font-family:verdana;font-size:100%;color:blue;">
            <br>
            <br>
            
            
            Email:<input type="text" placeholder="mail" name="email">
            <br>
            <br>
            
            
            Date:<input type="Date" name="bday" min="2016-05-27">
            
            
            
            <br>
            <br>
            
           Newspaper:<select name="cars" id="myselect" onchange="check_length(this.form);">
  <option value="TELEGRAPH">BBC</option> 
  <option value="TIMES OF INDIA">ECONOMICS</option>
  <option value="STATESMAN">STATESMAN</option>
  <option value="HINDU">HINDU</option>
</select>
           
           <p id="demo"></p>
            
           <br>
           
           
           
           
       
          
           
           
           
        
            
        









<title>online advertisement</title>

<script>
  

function check_length(my_form)
{
 var x = document.getElementById("myselect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
// Reached the Maximum length so trim the textarea
	//my_form.my_text.value = my_form.my_text.value.substring(0, 0);
 
 // Maximum length not reached so update the value of my_text counter
	if(x=="TELEGRAPH")
        {
            document.getElementById("demo").innerHTML = "COST IS RS 5/LETTER";  
            my_form.text_num.value = my_form.my_text.value.length+1;
        my_form.text_nume.value=my_form.text_num.value*5;
    }
    else if(x=="TIMES OF INDIA")
    {
        document.getElementById("demo").innerHTML = "COST IS RS 7/LETTER";
        my_form.text_num.value = my_form.my_text.value.length+1;
        my_form.text_nume.value=my_form.text_num.value*7;
    }
    else if(x=="HINDU")
    {
        document.getElementById("demo").innerHTML = "COST IS RS 8/LETTER";
        my_form.text_num.value = my_form.my_text.value.length+1;
        my_form.text_nume.value=my_form.text_num.value*8;
    }
    else
    {
        document.getElementById("demo").innerHTML = "COST IS RS 9/LETTER";
        my_form.text_num.value = my_form.my_text.value.length+1;
        my_form.text_nume.value=my_form.text_num.value*9;
    }
    


} 

</script>









   ENTER AD <input type="text"  onKeyPress="check_length(this.form);" onKeyDown="check_length(this.form);"
 name=my_text rows=4 cols=30 >
    
    <br>  
    <br>
    <br>
    
Characters Entered<input size=0 value=0 name=text_num> 
<br>
<br>
cost<input size=0 value=0 name=text_nume> 
<br>
<br>
<br>



    <input type="submit" value="Submit">


</form>
                    </center>
                    </p>
</body>
</html>