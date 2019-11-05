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
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql_query = "INSERT INTO packages (package, price) VALUES ('$name', '$price')";
    if($conn->query($sql_query) === TRUE)
    {
        echo "Package Added Successfully!!";
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