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


<?php
$error='';
$message='';



if(isset($_POST["submit"]))
{
$data = file_get_contents("userdata.json");
// echo $data;
$data = json_decode($data, true);
foreach($data as $row)
{

$row["Name"];
$row["Email"];
$row["phone number"];
$row["Password"];
$row["Gender"];
$row["Dob"];



}




if($_POST["email"] == $row["Email"] && $_POST["password"] == $row["Password"])



{



$message="<label class='text-danger'>Successful</label>";



}
else{



$error = "<label class='text-danger'>Incorrect user name or password</label>";



}
}
else{



echo ' ';
}



?>


</body>




</html>


