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

    $sql_query = "DELETE FROM user WHERE name = '$name'";
    $result = $conn->query($sql_query);

    if($conn->affected_rows > 0)
    {
        echo $name . " deleted successfully.<br>";
    }
    else
    {
        echo $name . " not found.<br>";
    } 

    $conn->close();

}

?>


<?php
    include('footer.php')
?>