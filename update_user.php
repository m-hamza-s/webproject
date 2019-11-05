<?php
    include('adminheader.php');
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
    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql_query = "UPDATE user SET email=$email, phone=$phone, password=$password WHERE name=$name";
    if($conn->query($sql_query) == TRUE)
    {
        echo "User Updated Successfully!";
    } 
    else
    {
        echo "There was an error while Updating the user";
    }

    $conn->close();


}

?>


<?php
    include('footer.php')
?>