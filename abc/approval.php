<?php
include('session.php');
?>
<?php
        $con= mysqli_connect('127.0.0.1','root','12345');
        if(!$con)
        {
            echo "Oops we are having some prob..try later";
        }
        if(!mysqli_select_db($con,'tutorial'))//use adman
        {
            echo "databse not selected";
        }
  


        
           echo $login_session;
            
            $sql = "UPDATE register SET approval='YES' WHERE Newspaper='".$login_session."'";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
    
}


$con->close();
?>
            <b id="logout"><a href="logout.php">Log Out</a></b>
        
        
        
        
        
        
        
        
        
        
        
        