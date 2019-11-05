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
    <title>Update Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">UPDATE INFO</div>
                <div class="input-fields">
                    <form action="update_user.php" method="post">
					    <div class="items">
						    <label for="email" class="label">email</label>
						    <input id="email" name="email" type="text" class="input">
					    </div>
					    <div class="items">
					    	<label for="phone" class="label">phone</label>
					    	<input id="phone" name="phone" type="text" class="input">
                        </div>
                        <div class="items">
				    		<label for="password" class="label">password</label>
				    		<input id="password" name="password" type="password" class="input">
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