<?php
    include('header.php');
?>

<!DOCTYPE html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">ADMIN LOGIN</div>
                <div class="input-fields">
                    <form action="logcheckadmin.php" method="post">
					    <div class="items">
					    	<label for="name" class="label">username</label>
                            <input id="name" name="name" type="text" class="input">
					    </div>
					    <div class="items">
						    <label for="password" class="label">password</label>
						    <input id="password" name="password" type="password" class="input">
					    </div>
                        <div class="button">
                            <button type="submit">LOGIN</button>
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