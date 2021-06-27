<!DOCTYPE html>
<html>
<head>
	<title>Membuat Desain Form Login Dengan CSS - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body class="login">

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
    <?php
if(array_key_exists('error', $_GET)){
echo "<p style='color: red'>Salah username atau password</p>";
}
?>
		<form method="post" action="proseslogin.php">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
		</form>

	</div>


</body>
</html>
