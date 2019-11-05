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
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql_query = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if($conn->query($sql_query) === TRUE)
    {
        echo "Message Delivered. Thank you for Contacting Us. We'll Get to you Soon Via Email";
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