<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
		<form action ="/action_page.php">
			<label for="fname">First Name:</label>
		<br>
				<input type="text" id="fname" name="fname" value=""><br>
			<label for="lname" id="lname" name="lname">Last Name:</label><br>
				<input type="text" id="lname" name="lname" value=""><br><br>
		</form>
<p>Gender</p>
	<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
	<br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
<p>Nasionality</p>
	<select>
		<option nama="negara" value="Indonesia">Indonesia</option>
		<option nama="negara" value="Malaysia">Malaysia</option>
		<option nama="negara" value="Singapore">Singapore</option>
		<option nama="negara" value="Australia">Australia</option>
	</select>
<p>Language Spoken:</p>
   <label>
	<input type="checkbox" nama="Languange1" value="Bahasa Indonesia">Bahasa Indonesia</br>
		</label>
		   <label>
	<input type="checkbox" nama="Languange2" value="English">English</br>
		</label>
		   <label>
	<input type="checkbox" nama="Languange3" value="Other">Other</br>
		</label>
<p>Bio:</p>
	<form action="/welcome1" method="get">
			<p><textarea name="Bio" rows="10" cols="30"></textarea>
			</p>
			<input type="submit" value="Sign Up">
		</form>
</body>
</html>

