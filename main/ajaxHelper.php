<?php
if (isset($_POST['id'])) {
    $selectedValue = $_POST['id'];

    echo json_encode("Received value: " . $selectedValue);
    // echo "Received value: " . $selectedValue;
}
