<?php
    include('header.php');
?>

<!DOCTYPE html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">CONTACT US FORM</div>
                <div class="input-fields">
                    <form action="contactmsg.php" method="post">
					    <div class="items">
					    	<label for="name" class="label">name</label>
                            <input id="name" name="name" type="text" class="input">
					    </div>
					    <div class="items">
						    <label for="email" class="label">email</label>
						    <input id="email" name="email" type="text" class="input">
					    </div>
					    <div class="items">
					    	<label for="subject" class="label">subject</label>
					    	<input id="subject" name="subject" type="text" class="input">
					    </div>
					    <div class="items">
				    		<label for="msg" class="label">message</label>
				    		<textarea id="msg" name="message" class="text-area"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">SEND</button>
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