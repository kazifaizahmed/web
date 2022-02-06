<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php
	
	$nameErr = $emailErr = $dobErr= $genderErr = $degreeErr= $bloodErr= $dateErr= $bdErr="";
	$name = $email = $dob = $gender= $degree = $blood = $date= $bd="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is not given";
	  } else {
	    $name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		  $nameErr = "Only letters and white space allowed";
		  $name = "";
		}
	  }
	}
	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 $emailErr  = "Invalid email format";
		  $email="";
		}
	  }

if (empty($_POST["date"])) {
	    $dateErr = "DOB is required";
	  } else {
	    $date = test_input($_POST["date"]);
	  }

	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }

 if (empty($_POST["degree"])) {
	    $degreeErr = "Degree is required";
	  } else {
	    $degree = test_input($_POST["degree"]);
	  }

	  if (empty($_POST["bd"])) {
	    $bdErr = "Blood Group is required";
	  } else {
	    $bd = test_input($_POST["bd"]);
	  }
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		
		<h2>Name</h2><input type="text" name="name" value="<?php echo $name;?>">
		<span class="error">* <?php echo $nameErr;?></span>
		<hr style="width:20%;text-align:left;margin-left:0">
		<br><br>
		
		<h2>E-mail</h2>
		<input type="text" name="email" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailErr;?></span>
		<hr style="width:20%;text-align:left;margin-left:0">
		<br><br>
		</br>


		<h4>Death Of Birth</h4>
       <input type="date" id="date" name="date">

<hr style="width:20%;text-align:left;margin-left:0">
		

</br>
		<h2>Gender</h2>
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male

		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<hr style="width:20%;text-align:left;margin-left:0">
		<br><br>

		

<h3>Degree</h3>
		<input type="checkbox" name="degree"
		<?php if (isset($dender) && $dender=="SSC") echo "checked";?>
		value="SSC">SSC
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="HSC") echo "checked";?>
		value="HSC">HSC
		<input type="checkbox" name="degree3"
		<?php if (isset($degree) && $degree=="BSc") echo "checked";?>
		value="BSc">BSc
		<input type="checkbox" name="degree"
		<?php if (isset($degree) && $degree=="MSc") echo "checked";?>
		value="MSc">MSc
<hr style="width:20%;text-align:left;margin-left:0">

		</br>


<h2>Blood Group</h2>
            <select id="Blood Group" name="bd">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="+B">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            </select></br>
<hr style="width:20%;text-align:left;margin-left:0">


		<input type="submit" name="submit" value="Submit">


	</form>
	
	<?php 
			echo $name."<br>";
			echo $email."<br>";
			echo $date."<br>";
			echo $gender."<br>";
			echo $degree. $degree. $degree. $degree."<br>";
			echo $bd."<br>";
			
	 ?>
</body>
</html>