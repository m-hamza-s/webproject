<?php
    include('header.php');
?>

<!DOCTYPE html>
<head>
    <title>OM Tourism</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">SIGN IN</div>
                <div class="input-fields">
                    <form action="logcheckuser.php" method="post">
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
                            <a href="signup.php"><button type="button">SIGN UP</button></a>
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