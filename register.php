<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "book_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    // echo"connected";
}



if(isset($_POST['user_name']))
{
      
   $name = $_POST['user_name'];
   $gmail =  $_POST['user_gmail'];
   $password =  $_POST['user_password'];
   $e_password = md5($password);
   echo $name;
   echo $gmail;
   echo $password;
   echo $e_password;

  
 
   


   $sql = "INSERT INTO user (user_name, user_gmail, user_password)
VALUES ('$name', '$gmail', '$e_password')";

// $sql = "INSERT INTO user (user_name, user_gmail, user_password)
// VALUES ($name, $gmail, $e_password)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

 $conn->close();
}
?>