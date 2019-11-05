<?php
    include('userheader.php');
?>

<!DOCTYPE html>
<head>
    <title>OM Tourism</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php

require_once 'db_connection.php';

if($_POST) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['package'];

    $sql_query = "INSERT INTO bookings (name, email, phone, package) VALUES ('$name', '$email', '$phone', '$package')";
    if($conn->query($sql_query) === TRUE)
    {
        echo "You Have Booked Your Tour. Our Team Will Contact You For Confirmation. And We'll Send Email for Further Updates. Thank You!";
    } 
    else
    {
        echo "Error " . $sql_query . ' ' . $conn->error;
    }

    $conn->close();


}

?>


<?php
    include('footer.php')
?>