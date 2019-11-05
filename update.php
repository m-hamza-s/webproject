<?php
    include('adminheader.php');
?>

<!DOCTYPE html>
<head>
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">UPDATE USER</div>
                <div class="input-fields">
                    <form action="updateinfocheck.php" method="post">
					    <div class="items">
					    	<label for="name" class="label">username</label>
                            <input id="name" name="name" type="text" class="input">
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