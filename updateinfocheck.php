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

    $sql_query = "select * from user where name='".$name."'";
    $result=mysqli_query($conn,$sql_query);

    if(mysqli_num_rows($result) === 1)
    {
        header("Location:updateinfo.php");

        exit();
    } 
    else 
    {
        echo "Username Not Found";

        exit();
    }




}

else
{
    echo "query error";
}

?>


<?php
    include('footer.php')
?>