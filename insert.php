<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // 1. Connecting DB
    $conn = mysqli_connect("localhost", "root", "", "misfit");
     
    // 2. Checking Connection
    if($conn === false){
        die("Error:" . mysqli_connect_error());
    }
     
    // 3. POST user inputs
    $full_name = $_POST['YourName'];
    $Email_id = $_POST['Email'];
    $contact_no = $_POST['PhoneNumber'];
    $Subjects = $_POST['Subject'];
    $textarea = $_POST['textarea'];

    // 4. Attempt insert query in contact
    $sql = "INSERT INTO contact (full_name, Email_id, contact_no, subjects, textarea) VALUES ('$full_name', '$Email_id', '$contact_no' , '$Subjects', '$textarea')";
    
    // 5. Displaying Message
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Records added successfully, We will get in touch with you ASAP";
    } else{
        echo "ERROR: Could not able to Submit $sql. " . mysqli_error($conn);
    }
     
    // 6. Close connection
    mysqli_close($conn);
}
?>