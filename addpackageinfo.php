<?php
    include('adminheader.php');
?>

<!DOCTYPE html>
<head>
    <title>Add Package</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">ADD PACKAGE</div>
                <div class="input-fields">
                    <form action="addpackage.php" method="post">
					    <div class="items">
					    	<label for="name" class="label">name</label>
                            <input id="name" name="name" type="text" class="input">
					    </div>
					    <div class="items">
						    <label for="price" class="label">price</label>
						    <input id="price" name="price" type="text" class="input">
					    </div>
                        <div class="button">
                            <button type="submit">ADD</button>
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