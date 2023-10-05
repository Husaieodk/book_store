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

if (isset($_POST['create'])) {

    //  $name = $_POST['book_name'];


    $name = ucwords($_POST['book_name']);

    //  $language=  $_POST['book_language'];




    //    $sql="select * from book where (b_name =' $name ')";

    //    $res=mysqli_query($conn,$sql);

    //    if (mysqli_num_rows($res) > 0) {

    //      $row = mysqli_fetch_assoc($res);
    //      if($name==isset($row['b_name']))
    //      {
    //              echo "Book name is already exists";
    //      }

    //     else{

    //   echo  $name = $_POST['book_name'];
    //     }
    // }  

    $price =  $_POST['book_price'];



    if (isset($_FILES["book_filename"])) {
        //    echo $n = $_POST['book_filename'];
        $filename = $_FILES["book_filename"]["name"];
        $tempname = $_FILES["book_filename"]["tmp_name"];
        $folder = "./image/" . $filename;



        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            $errfilename  = "Image uploaded successfully!";
        } else {
            $errfilename =  "Failed to upload image!";
        }
    }

    $est_date =   $_POST['book_est_date'];
    $author =   ucwords($_POST['book_author']);
    $isnbno =     $_POST['book_isnbno'];

    $sql_isbn = "SELECT * FROM book WHERE b_isbnno='$isnbno'";


    $publisher = ucwords($_POST['book_publisher']);
    $pages =      $_POST['book_pages'];
    $description = ucwords($_POST['book_description']);
    $language = ucwords($_POST['book_language']);
    $type = ucwords($_POST['book_topic']);

    $res_isbn = mysqli_query($conn,  $sql_isbn);
    if (mysqli_num_rows($res_isbn) > 0) {
        echo "ISBN already exists";
    } else {
        $sql = "INSERT INTO book (b_name,b_price,b_filename,b_est_date,b_author,b_isbnno,b_publisher,b_pages,b_description,b_type,b_language) 
         VALUES 
         ('$name','$price','$filename','$est_date','$author','$isnbno','$publisher','$pages','$description','$type','$language')";

        if ($conn->query($sql) === TRUE) {
            header("Location: book.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //YYYY-MM-DD hh:mm:ss
    // $u_time = date("y-m-d");

    // echo $type =  $_POST['book_type'];

    //  $sql = "INSERT INTO book (b_name,b_price,b_filename,b_est_date,b_author,b_publisher,b_pages,b_description,b_type,b_language) 
    //  VALUES 
    //  ('$name','$price','$filename','$est_date','$author','$publisher','$pages','$description','$language','$topic')";

    $conn->close();
}
// else{
//     echo "Data is not submitted";  
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>

<body>
    <!-- Spinner Start -->
    <?php require_once('spinner.php'); ?>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <?php require_once('nav.php'); ?>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <?php require_once('header.php'); ?>
        <!-- Navbar End -->


        <!-- Form Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">


                <div class="">
                    <form method="post" action="book.php" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Books Details</h6>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter your book name" required>
                                <label for="floatingInput">Enter your book name</label>
                                <!-- <span style="color: red;">  </span> -->
                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="number" class="form-control" id="book_price" name="book_price" placeholder="Enter your book price" required>
                                <label for="floatingInput">Enter your book price</label>
                                <!-- <span style="color: red;">   </span> -->
                            </div>
                            <!-- upload image -->
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="file" class="form-control" id="floatingInput" name="book_filename" accept=".png, .jpg" style="background-color: black;" required>
                                <span style=""> <?php echo $errfilename ?> </span>
                                <!-- <label for="floatingInput">Photo</label> -->

                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="date" class="form-control" id="floatingInput" name="book_est_date" placeholder="Book eshtablish date" required>
                                <label for="floatingInput">Book eshtablish date</label>
                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="floatingInput" name="book_author" placeholder="Book's author" required>
                                <label for="floatingInput">Book's author</label>
                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="number" class="form-control" id="floatingInput" name="book_isnbno" placeholder="Book ISBN No" required>
                                <label for="floatingInput">Book ISBN No</label>


                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="text" class="form-control" id="floatingInput" name="book_publisher" placeholder="Book Publisher" required>
                                <label for="floatingInput">Book Publisher</label>
                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1">
                                <input type="number" class="form-control" id="floatingInput" name="book_pages" placeholder="Book Pages" required>
                                <label for="floatingInput">Book Pages</label>
                            </div>
                            <span style="color: red;">*</span><br>
                            <div class="form-floating mb-1 ">
                                <input type="text" class="form-control" id="floatingInput" name="book_description" placeholder="Book Description">
                                <label for="floatingInput">Book Description</label>
                            </div>
                            <!-- <p>Select Language</p>
                            <div class="form-floating mb-1" >
                                <select class="form-select" id="floatingSelect" name="book_Language">
                                    <option value="Tamil" >Tamil</option>
                                    <option value="English">English</option>
                                    <option value="Sinhala">Sinhala</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="CustomOption">Add New</option>
                                </select>
                            </div> -->
                            <p><span style="color: red;">*</span>Select Language </p>

                            <div class="form-floating">
                                <select name="book_language" class="form-select" id="floatingSelect" required onchange="if($(this).val()=='customOption'){$(this).hide().prop('disabled',true);$('input[name=book_language]').show().prop('disabled', false).focus();$(this).val(null);}">
                                    <option value="Tamil">Tamil</option>
                                    <option value="English">English</option>
                                    <option value="Sinhala">Sinhala</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="customOption">[type a custom value]</option>
                                </select>
                                <input type="text" class="form-control" name="book_language" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=book_language]').show().prop('disabled', false).focus();}">
                            </div>

                            <p><span style="color: red;">*</span>Book Topic </p>
                            <div class="form-floating">
                                <select name="book_topic" class="form-select" id="floatingSelect" required onchange="if($(this).val()=='customOption'){$(this).hide().prop('disabled',true);$('input[name=book_topic]').show().prop('disabled', false).focus();$(this).val(null);}">
                                    <option value="it">IT</option>
                                    <option value="commerce">Commerce</option>
                                    <option value="science">Science</option>
                                    <option value="geography">Geography</option>
                                    <option value="customOption">[type a custom value]</option>
                                </select>
                                <input type="text" class="form-control" name="book_topic" style="display:none;" disabled="disabled" onblur="if($(this).val()==''){$(this).hide().prop('disabled',true);$('select[name=book_topic]').show().prop('disabled', false).focus();}">
                            </div>

                            <div class="d-flex mt-2" style="gap: 1rem;">
                                <div>
                                    <button class="btn btn-success" type="submit" name="create">Create</button>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary" type="reset">Clear</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div>
                    <div class="bg-secondary rounded p-4" style="overflow-x:auto;">
                        <h6 class="mb-4">Book Details</h6>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Book ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">filename</th>
                                    <th scope="col">est_date</th>
                                    <th scope="col">author</th>
                                    <th scope="col">isnbno</th>
                                    <th scope="col">publisher</th>
                                    <th scope="col">pages</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Language</th>
                                    <th scope="col">Upload Time</th>
                                    <th scope="col">Description</th>


                                    <!-- <th scope="col">Quantity</th> -->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

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

                                $sql = "SELECT * FROM book";


                                if ($result = $conn->query($sql)) {

                                    while ($row = $result->fetch_assoc()) {
                                        $b_id      = $row["b_id"];
                                        $b_name     = $row["b_name"];
                                        $b_price    = $row["b_price"];
                                        $b_filename = $row["b_filename"];
                                        $b_est_date = $row["b_est_date"];
                                        $b_author   = $row["b_author"];
                                        $b_isbnno   = $row["b_isbnno"];
                                        $b_publisher = $row["b_publisher"];
                                        $b_pages    = $row["b_pages"];
                                        $b_type = $row["b_type"];
                                        $b_language = $row["b_language"];
                                        $b_u_time = $row["b_u_time"];
                                        $b_description = $row["b_description"];

                                        // (b_name,b_price,b_filename,b_est_date,b_author,b_isbnno,b_publisher,b_pages,b_description) 


                                ?>

                                        <tr>
                                            <td> <?php echo $b_id  ?> </td>
                                            <td> <?php echo $b_name  ?> </td>
                                            <td> <?php echo $b_price  ?> </td>
                                            <td> <?php echo $b_filename  ?> </td>
                                            <td> <?php echo $b_est_date  ?> </td>
                                            <td> <?php echo $b_author  ?> </td>
                                            <td> <?php echo $b_isbnno  ?> </td>
                                            <td> <?php echo $b_publisher  ?> </td>
                                            <td> <?php echo $b_pages  ?> </td>
                                            <td> <?php echo $b_language  ?> </td>
                                            <td> <?php echo $b_type ?> </td>
                                            <td> <?php echo $b_u_time ?> </td>
                                            <td> <?php echo $b_description  ?> </td>
                                            <td>
                                                <div class="d-flex">
                                                    <!-- <div> <button type="button" class="btn btn-success m-2">Update</button></div> -->
                                                    <div> <button type="button" class="btn btn-success m-2 " name="update"><a style="text-decoration: none; color:#f9f9f9" href="book.php?update=<?php echo $b_id ?>">Update</a></button></div>
                                                    <div> <button type="button" class="btn btn-primary m-2" name="delete"><a style="text-decoration: none; color:#f9f9f9" href="book.php?delete=<?php echo $b_id ?>">Delete</a></button></div>

                                                    <!-- <div> <button type="button" class="btn btn-primary m-2">Delete</button></div>   -->
                                                </div>
                                            </td>
                                        </tr>

                                <?php
                                    }
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div> <button type="button" class="btn btn-success m-2">Update</button></div>
                                          <div> <button type="button" class="btn btn-primary m-2">Delete</button></div>
                                             -->


                    <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">File Input</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control bg-dark" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input class="form-control bg-dark" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                            </div>
                            <div>
                                <label for="formFileLg" class="form-label">Large file input example</label>
                                <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Select</h6>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select" multiple aria-label="multiple select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Check, Radio & Switch</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                                    disabled>
                                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                    value="option3" disabled>
                                <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDisabled" disabled>
                                <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                                    switch checkbox input</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Input Group</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                            <label for="basic-url" class="form-label">Your vanity URL</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">With textarea</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Sizing</h6>
                            <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg"
                                aria-label=".form-control-lg example">
                            <input class="form-control mb-3" type="text" placeholder="Default input"
                                aria-label="default input example">
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                                aria-label=".form-control-sm example">
                        </div>
                    </div> -->


                    <!-- Form End -->

                    <div>
                        <!-- Footer Start -->
                        <?php require_once('footer.php'); ?>
                        <!-- Footer End -->
                    </div>
                </div>


                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="lib/chart/chart.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/tempusdominus/js/moment.min.js"></script>
                <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>

</body>

</html>