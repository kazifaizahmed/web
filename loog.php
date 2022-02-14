<<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
	
	$UsernameErr = $PasswordErr="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Username = test_input($_POST["Username"]);
  $Passwoed = test_input($_POST["Password"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="name">
  <br><br>
  Password: <input type="text" name="email">
  <br><br>
<input type="submit" name="submit" value="Submit">
<a href="forhet.php">forget password</a><br>
<a href="signn.php">create</a>
</body>

</html>


