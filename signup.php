<?php
    include('header.php');
?>

<!DOCTYPE html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">SIGN UP FORM</div>
                <div class="input-fields">
                    <form action="signup_user.php" method="post">
					    <div class="items">
					    	<label for="name" class="label">name</label>
                            <input id="name" name="name" type="text" class="input">
					    </div>
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
                        <div class="items">
				    		<label for="confirmpassword" class="label">confirm password</label>
				    		<input id="confirmpassword" name="confirmpassword" type="password" class="input">
                        </div>
                        <div class="button">
                            <button type="submit">SIGN UP</button>
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