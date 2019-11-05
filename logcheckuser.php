<?php
    include('header.php');
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
    $password = $_POST['password'];

    $sql_query = "select * from user where name='".$name."' AND password='".$password."'";
    $result=mysqli_query($conn,$sql_query);

    if(mysqli_num_rows($result) === 1)
    {
        echo "Logged In Successfully";
        header("Location:userhome.php");

        exit();
    } 
    else 
    {
        echo "Incorrect Username or Password";

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