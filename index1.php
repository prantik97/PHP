<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Form</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
	<div class="container">
	<h1>Welcome to Vidyasagar college Manali Trip Form</h1>
    <h3>Enter your Details and submit this Form</h3>
	<form name="Registration" action="index.php" method="post">
			<label>First Name:</label>
			<input type="text" name="firstName" placeholder="Enter first name" value="" required><br>
			<br>
			<label>Middle name:</label>
			<input type="text" name="middleName" placeholder="Enter middle name" value=""><br>
			<br>
			<label>Last name:</label>
			<input type="text" name="lastName" placeholder="Enter last name" value="" required><br>
			<br>
			<label>E-mail:</label>
			<input type="E-mail" name="email" value="" required="">
			<br>
			<br>
			
			<br>
			<label>Age:</label>
	    	<input type="number" name="age" value="">
			<br/>
			<br>
			<label>Birth Date:</label>
	    	<input type="Date" name="birthDate" value="01-01-1980">
			<br>
			<br>
	    	<label>Message:</label><br>
	    	<br>
	    	<textarea name="message" id="message" cols="30" rows="10" placeholder="Enter any message"></textarea>
			<br>
			<button class="btn">Submit</button>
	</div>
    <script scr="index.js"></script>

</body>
</html>
