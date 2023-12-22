<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '', 'ah-dishes');

if (!$con) {
    die("Failed to connect with database: " . mysqli_connect_error());
}

// get the post records
$tablename = "sign_up";

// database insert SQL code
$sql = "INSERT INTO $tablename (Name, Username, Email, password, Phone) 
        VALUES ('$_POST[name]', '$_POST[username]', '$_POST[email]', '$_POST[password]', '$_POST[phone]')";

// insert in database
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Contact Records Inserted";
    header("Location: ah_dishes\index.php");
} else {
    echo "Error: " . mysqli_error($con);
}


// close connection
mysqli_close($con);
?>