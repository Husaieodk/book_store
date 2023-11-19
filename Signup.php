<?php

$errgmail = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  // echo"connected";
}
session_start();



if (isset($_POST['submit'])) {
  

  $name = $_POST['user_name'];
  $gmail =  $_POST['user_gmail'];
  $password =  $_POST['user_password'];
$e_password = password_hash($password, PASSWORD_DEFAULT);

  
   

  if (!empty($gmail)) {
    $sql_gmail = "SELECT * FROM user WHERE user_gmail='$gmail'";
    $res_gmail = mysqli_query($conn, $sql_gmail);

    if (mysqli_num_rows($res_gmail) > 0) {
      // echo "Gmail already taken";  
      $errgmail = "Gmail already taken";
    } else {

      $sql = "INSERT INTO user (user_name, user_gmail, user_password)
          VALUES ('$name', '$gmail', '$e_password')";
      if ($conn->query($sql) === TRUE) {
        $_SESSION['user_name'] = $name; // Store user name in session
        $_SESSION['user_email'] = $gmail; // Store user email in session
        header("Location: Login.php");
        exit();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }










  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <form id="form" class="row g-3 needs-validation" action="Signup.php" method="post">

                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                      <p class="text-center small">Enter your personal details to create account</p>
                    </div>




                    <div class="col-12 mt-2">
                    <label for="yourName" class="form-label">Please, enter your name!</label>
                    <input type="text" name="user_name" class="form-control" id="yourName" required />
                    </div>
                    <!-- <div class="invalid-feedback">Please, enter your name!</div> -->
                  

                  <div class="col-12 mt-2">
                    <label for="user_gmail" class="form-label">Please enter a valid Email adddress!</label>
                    <input type="email" name="user_gmail" class="form-control" id="user_gmail" required />
                    <!-- <div class="invalid-feedback">Please, enter your name!</div> -->
                    <span> <?php echo $errgmail ?></span>
                  </div>

                  <!-- <div class="col-12">
                          <label for="yourUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div> -->

                  <div class="col-12 mt-2">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="user_password" class="form-control" id="yourPassword" required />
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <!-- <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                          </div>
                        </div> -->
                  <div class="col-12 mt-2">
                    <button class="btn btn-primary w-100" type="submit" name="submit">Sign</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="Login.php">Log in</a></p>
                  </div>
                  </div>

                </div>
              </form>
            </div>


          </div>
        </div>
    </div>

    </section>

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
    // just for the demos, avoids form submit
    // jQuery.validator.setDefaults({
    //   debug: true,
    //   success: "valid"
    // });
    $("#form").validate({
      rules: {
        user_name: {
          required: true,
          minlength: 3
        },
        user_gmail: {
          required: true,
          email: true

        },
        user_password: {
          required: true,
          minlength: 5
        }
      }
    });
  </script>
</body>

</html>