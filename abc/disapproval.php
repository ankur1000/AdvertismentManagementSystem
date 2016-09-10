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
            
            $sql = "UPDATE persons2 SET approval='NO' WHERE site='".$login_session."'";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
    
}


$con->close();
?>
            