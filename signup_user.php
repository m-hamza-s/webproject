<?php
    include('header.php');
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
    $password = $_POST['password'];

    $sql_query = "INSERT INTO user (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
    if($conn->query($sql_query) === TRUE)
    {
        echo "You Have Been Registered Successfuly. Please Login to Your Account. Thank You!";
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