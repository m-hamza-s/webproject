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

    $sql_query = "UPDATE packages SET package=$name, price=$price WHERE package=$name";
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