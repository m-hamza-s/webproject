<?php
    include('adminheader.php');
    require_once 'db_connection.php';

    if($_POST) 
    {
        $name = $_POST['name'];
    }
?>

<!DOCTYPE html>
<head>
    <title>Update Package</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">UPDATE PACKAGE</div>
                <div class="input-fields">
                    <form action="updatepackage.php" method="post">
					    <div class="items">
						    <label for="name" class="label">package</label>
						    <input id="name" name="name" type="text" class="input">
					    </div>
					    <div class="items">
					    	<label for="price" class="label">price</label>
					    	<input id="price" name="price" type="text" class="input">
                        </div>
                        <div class="button">
                            <button type="submit">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include('footer.php');
?>