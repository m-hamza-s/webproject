<?php
    include('adminheader.php');
?>

<?php

require_once 'db_connection.php';

    $sql_query = "Select name,email,phone,password FROM user";
    $result=mysqli_query($conn,$sql_query);

?>
        
    <!DOCTYPE html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table align="center" border="1px" style="width:700px ; line-height:50px; color:aqua; font-family:"Montserrat"">
            <tr>
                <th colspan="4"><h1>Users</h1></th>
            </tr>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>password</th>
            </tr>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
                <td><?php echo $rows["name"]; ?></td>
                <td><?php echo $rows["email"]; ?></td>
                <td><?php echo $rows["phone"]; ?></td>
                <td><?php echo $rows["password"]; ?></td>
            </tr>

        <?php
            }
        ?>

        </table>

        <table>
            <th>
                <tr>
                    <a class="admin" href="update.php"><button>Update User</button></a>
                    <a class="admin" href="delete.php"><button>Delete User</button></a>
                </tr>
            </th>
        </table>
    </body>
     </html>

<?php

    $conn->close();

?>


<?php
    include('footer.php');
?>