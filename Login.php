<?php
$login_success = false;

$err_password = $err_gmail = " ";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    // echo"connected";
}



if(isset($_POST['login']))
{

      $user_gmail = $_POST["user_gmail"];
      $entered_password = $_POST["user_password"];

      
      // Assuming you have a database connection established
      $sql = "SELECT user_password FROM user WHERE user_gmail= '$user_gmail'";
      $result = mysqli_query($conn, $sql);
  
      

      if ($result) {
        $row = $result->fetch_assoc();
        if ($row) {
            $hashed_password = $row["user_password"];

            if (password_verify($entered_password, $hashed_password)) {
              $login_success = true;
              // $loggedIn = true;
               // header("Location: home.php");
                // exit();

            } else {
              $err_password = "Invalid Password";
              // $loggedIn = false;
            }
        } else {
            $err_gmail =  "Invalid Gmail";
            // $loggedIn = false;
        }
    } else {
        echo "Error fetching data from database";
    }
  
 
    // if ($conn->query($sql) === TRUE) {
    //   header("Location: home.php");
    // exit();
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    //   }

   $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <main>
    <div class="container">
    

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

             

              <div class="card mb-4">

                <div class="card-body">
                                 
                <!-- when enter user gmail and password correctly show alert message -->
                                  <?php if ($login_success) : ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Login Successful!</strong>
                         
                      </div>
                  <?php endif; ?>
                 
                 

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your Gmail & password to login</p>
                  </div>

                  <form action="" method="post"  class="row g-3 needs-validation" >

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Please enter your gmail.</label>
                        <input type="text" name="user_gmail" class="form-control" id="yourUsername" required>
                        <span style="color: red;"> <?php echo $err_gmail ?></span>
                    </div>
                    

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Please enter your password!</label>
                      <input type="password" name="user_password" class="form-control" id="yourPassword" required>
                      <span style="color: red;"> <?php echo $err_password ?></span>
                    </div>
                   

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="Signup.php">Create an account</a></p>
                      <a href="../dashboard/adminUi.php">dashboard</a>
                    </div>
                   
                    
                  </form>

                         
                  

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>




</body>

</html>