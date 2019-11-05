<?php
    include('userheader.php');
?>

<!DOCTYPE html>
<head>
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <div class="form">
		    <div class="title">BOOKING FORM</div>
                <div class="input-fields">
                    <form action="bookings.php" method="post">
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
                            <label for="package" class="label">package</label>
					    	<input id="package" name="package" type="text" class="input">
                        </div>
                        <div class="button">
                            <button type="submit">Book</button>
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