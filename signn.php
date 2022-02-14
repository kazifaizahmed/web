<html>
<head>

</head>
<body>

<h2 style="text-align:center;"> Create Your Account</h2></br>




<?php
$fnameErr =  $lnameErr = $emailErr = $pErr= $genderErr = $dobErr="";
$fname = $lname = $email = $pnumber= $dob =$gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fname"])) {
    $fnameErr = "First name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }
    
  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  

  if (empty($_POST["pnumber"])) {
    $pErr = "phone number is required";
  } else {
    $pnumber = test_input($_POST["pnumber"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "Date Of Birt is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

  <form style="text-align:center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


  First Name: <input type="text" name="fname">
  <span class="error"> <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lname">
  <span class="error"> <?php echo $lnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Phone Number: <input type="text" name="pnumber">
  <span class="error"> <?php echo $pErr;?></span>
  <br><br>
  Date Of Birth:<input type="date"name="dob">
  <span class="error"> <?php echo $dobErr;?></span>
<br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error"> <?php echo $genderErr;?></span>
  <br><br>
<input type="submit" name="submit" value="Submit"><input type="Reset" name="Reset" value="Reset">
</form>
<?php
echo $fname;
echo " ";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $pnumber;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
?>


</body>
</html>