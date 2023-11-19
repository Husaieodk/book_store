<?php
if(isset($_GET['id'])){
    $selectedValue = $_GET['id'];

    // Do something with the selected value
    // For example, you can store it in a database or use it in some other way
    echo "Received value: " . $selectedValue;
 
}
?>