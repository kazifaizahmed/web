<?php
                           
/*
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if (!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) 
      {  
           $error = "<label class='text-danger'>Enter an valid E-mail</label>";  
      } 
      
        else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter a Password</label>";  
      }  

      else  
      {

echo "";


      }
    }
    */

?>



<html>
<head>
  <style>
  body {

background: #91a716;

display: flex;

justify-content: left;

align-items: left;

height: 100vh;

flex-direction: column;

}

*{

font-family: cursive;

box-sizing: padding-box;

}

form {


width: 930px;

border: 3px solid rgb(170, 140, 140);

padding: 20px;

background: rgb(85, 54, 54);

border-radius: 20px;

}

h2 {

text-align: center;

margin-bottom: 55px;

}

input {

display: block;

border: 2px solid #ccc;

width: 95%;

padding: 10px;

margin: 20px auto;

border-radius: 5px;

}

label {

color: #888;

font-size: 18px;

padding: 10px;

}

button {

float: right;

background: rgb(35, 174, 202);

padding: 10px 15px;

color: #fff;

border-radius: 5px;

margin-right: 10px;

border: none;

}

button:hover{

opacity: .10;

}

.error {

background: #F2DEDE;

color: #0c0101;

padding: 10px;

width: 95%;

border-radius: 5px;

margin: 20px auto;

}

h1 {

text-align: center;

color: rgb(134, 3, 3);

}

a {

float: right;

background: rgb(183, 225, 233);

padding: 10px 15px;

color: #fff;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}

a:hover{

opacity: .7;

}
</style>
<script>
function validateForm() {
  let x = document.forms["login"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}

function validateForm1() {
  let y = document.forms["login"]["password"].value;
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}


</script>

  

</head>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>User LoGin</h1> 
<ul class="navbar-nav ml-auto ">
     <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="MainHome.php">Home</a></h3>
     <h3> .... </h3>
    <h3 class="nav-item"><a class="nav-link" href="signup.php">Signup</a></h3>
</ul>
</nav>




<body class="bg-warning col-lg-12 m-4">


<form name="login" action="controller/login.php"  method="POST" enctype="multipart/form-data" onsubmit="return validateForm(),validateForm1()">
 
 

 <div class="container" style="width:400px;"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    Email: <input type="text" name="email" class="form-control" placeholder="Enter your Email">
  <br><br>
  
  Password: <input type="password" name="password" class="form-control"placeholder="Enter your Password"> 
<br>
 <div style="text-align:center;">

 <input  type="submit" name="submit" value="Submit" class="btn btn-info" >  
</div>
 <div style="text-align:center;">
 <a href="signup.php">create an account</a>
</div>

<?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  

                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>
  

</form>



</div>
</body>
</html>

