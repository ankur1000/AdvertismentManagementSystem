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
        <form action="advertiser1.php" method="post">
            
            Name:<input type="text" placeholder="NAME" name="username">
            <br>
            
            Email:<input type="text" placeholder="mail" name="email">
            <br>
            
            
            Date:<input type="date" name="bday">
            <br>
            
           Newspaper:<select name="cars" id="myselect" onchange="myFunction()">
  <option value="TELEGRAPH">TELEGRAPH</option> 
  <option value="TIMES OF INDIA">TIMES OF INDIA</option>
  <option value="STATESMAN">STATESMAN</option>
  <option value="HINDU">HINDU</option>
</select>
           
           <p id="demo"></p>
            <script>
function myFunction() {
    var x = document.getElementById("myselect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;

if(x=="TELEGRAPH")
{
 document.getElementById("demo").innerHTML = "COST IS RS 5/LETTER";  
 }
 else if(x=="TIMES OF INDIA")
 {
    document.getElementById("demo").innerHTML = "COST IS RS 7/LETTER";   
 }
 else if(x=="STATESMAN")
 {
      document.getElementById("demo").innerHTML = "COST IS RS 4/LETTER"; 
 }
 else if(x=="HINDU")
 {
      document.getElementById("demo").innerHTML = "COST IS RS 10/LETTER"; 
 }
}
</script>
           <br>
           
           
           
           
       
          
           
           
           <input type="submit" value="insert">
        </form>
            
        <div>TODO write content</div>
    </body>










<title>(Type a title for your page here)</title>

<script>

function check_length(my_form)
{

// Reached the Maximum length so trim the textarea
	//my_form.my_text.value = my_form.my_text.value.substring(0, 0);
 
 // Maximum length not reached so update the value of my_text counter
	my_form.text_num.value = my_form.my_text.value.length+1;
       my_form.text_nume.value=my_form.text_num.value*5;


}

</script>


</head>

<body>

<center><h1>ENTER THE TEXT FOR YOUR AD<h1></center>
<form  action=matri2.php name=my_form method=post>
<textarea onKeyPress=check_length(this.form); onKeyDown=check_length(this.form); 
 name=my_text rows=4 cols=30></textarea>
    <br>                               
<input size=0 value=0 name=text_num> Characters Entered
<input size=0 value=0 name=text_nume> cost



    <input type="submit" value="Submit">submit


</form>

</body>
</html>