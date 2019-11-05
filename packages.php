<?php
    include('userheader.php');
?>

<?php

require_once 'db_connection.php';

    $sql_query = "Select package,price FROM packages";
    $result=mysqli_query($conn,$sql_query);

?>
        
    <!DOCTYPE html>
    <head>
        <title>Packages</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table align="center" border="1px" style="width:700px ; line-height:50px; color:aqua; font-family:"Montserrat"">
            <tr>
                <th colspan="4"><h1>PACKAGES</h1></th>
            </tr>
            <tr>
                <th>package</th>
                <th>Price</th>
            </tr>
        <?php
            while($rows=mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
                <td><?php echo $rows["package"]; ?></td>
                <td><?php echo $rows["price"]; ?></td>
            </tr>

        <?php
            }
        ?>

        </table>

        <table>
            <th>
                <tr>
                    <a class="admin" href="addbookings.php"><button>Book Tour</button></a>
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