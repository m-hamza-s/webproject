<?php
    include('adminheader.php');
?>

<!DOCTYPE html>
<head>
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

    $sql_query = "DELETE FROM packages WHERE package = '$name'";
    $result = $conn->query($sql_query);

    if($conn->affected_rows > 0)
    {
        echo "Package deleted successfully";
    }
    else
    {
        echo "Package not found";
    } 

    $conn->close();

}

?>


<?php
    include('footer.php')
?>