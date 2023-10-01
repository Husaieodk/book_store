<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    </head>
    <body>
        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(255, 255, 255);">
            <div class="container px-4 px-lg-5"style=" padding: 0.3rem;">
                <a class="navbar-brand" href="#!">Digitel Library</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact Us</a></li>
                        
                    </ul>
                    <form class="d-flex " style="gap: 0.5rem;">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            My Book 
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                        <button class="btn btn-outline-dark " type="submit">
                          
                           <a href="login.php" style="text-decoration: none; color: black;" class="btn-log"> Log in</a>
                        </button>
                        <button class="btn btn-outline-dark" type="submit">
                            <a href="Signup.php" style="text-decoration: none; color: black;"> Sign Up</a>
                        </button>
                    </form>
                </div>
            </div>
        </nav> -->
       <div>
       <?php  require_once('main/header.php'); ?>
       </div>

       <div class="container-md">
        <div class="row row-cols-2 row-cols-lg-5 g-3 g-lg-3 mt-1">
           <!-- <div class="col">
             <div class="p-3"></div>
           </div> -->
        <?php 
                                  error_reporting(0);
 
                                  $msg = "";
                                  
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $dbname = "book_store";
                                  
                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                  }

                                //   $num =1;
                                  
                                     
                                     
                                    $sql = "SELECT * FROM book  where b_id = '14'";
                                    
                                    
                                    if ($result = $conn->query($sql)) 
                                    {
                                    
                                        while ($row = $result->fetch_assoc()) 
                                        {
                                        
                                        //   echo  $num++;
                                         
                                          
                                          
                                            $b_id      = $row["b_id"];
                                            $b_name     = $row["b_name"];
                                            $b_price    = $row["b_price"];
                                            $b_filename = $row["b_filename"];
                                            $b_est_date = $row["b_est_date"];
                                            $b_author   = $row["b_author"];
                                            $b_isbnno   = $row["b_isbnno"];
                                            $b_publisher= $row["b_publisher"];
                                            $b_pages    = $row["b_pages"];
                                            $b_description = $row["b_description"];
                                            // (b_name,b_price,b_filename,b_est_date,b_author,b_isbnno,b_publisher,b_pages,b_description) 
                                            
                                   
                                  ?>
    

           
                <div class="col rounded-3 m-2" style="background-color: #f9f9f9; width:45rem" >
                       <div class="d-flex">

                       <div>
                             <img class="" style="width: 320px; height:320px" src="../dashboard/image/<?php echo $b_filename?>"      alt="pic">
                        </div>
                <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNtyEpcgbyT48tITkMuYl_sB2KUi4uzDLiXQ&usqp=CAU" width="185.99px" height="186px" alt=""> -->
                        <div class="p-3"> 
                          <?php echo $b_name ?>
                          <div class="pt-2"><?php echo "Rs." .$b_price ?></div>
                          <div class="pt-1"><?php echo "Pages:" . $b_pages?></div>
                        </div>

                       </div>
             
              
                <div class="p-1"><?php echo "Publisher:"." ".  $b_publisher?></div>
                 </div>
            
               
    
  
            

            <?php 
                                     }
                                    }
                                    $conn->close();
            ?> 
                 
           </div> 
        </div> 

       <div>
       <?php  require_once('main/footer.php'); ?>
       </div>
    </body>
</html>        