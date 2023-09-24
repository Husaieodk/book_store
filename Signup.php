<?php
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



if(isset($_POST['submit']))
{
      
   $name = $_POST['user_name'];
   $gmail =  $_POST['user_gmail'];
   $password =  $_POST['user_password'];
   $e_password = md5($password);
    echo $name;

   $sql = "INSERT INTO user (user_name, user_gmail, user_password)
VALUES ('$name', '$gmail', '$e_password')";



if ($conn->query($sql) === TRUE) {
  header("Location: Login.php");
exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

 $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                      </div>
                      <!-- <form action="form.php" method="post">
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" />
    </div>
    <button type="submit">Submit</button>
</form> -->
    
                      <form class="row g-3 needs-validation"  action="Signup.php" method="post" novalidate>
                        <div class="col-12">
                          <label for="yourName" class="form-label">Please, enter your name!</label>
                          <input type="text" name="user_name" class="form-control" id="yourName">
                          <div class="invalid-feedback">Please, enter your name!</div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourEmail" class="form-label">Please enter a valid Email adddress!</label>
                          <input type="email" name="user_gmail" class="form-control" id="yourEmail">
                          <!-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> -->
                        </div>
    
                        <!-- <div class="col-12">
                          <label for="yourUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div> -->
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="password" name="user_password" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
    
                        <!-- <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div> -->
                        <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Sign</button>
                    </div>
                        <div class="col-12">
                          <p class="small mb-0">Already have an account? <a href="Login.php">Log in</a></p>
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