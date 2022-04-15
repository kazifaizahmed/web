
 <!DOCTYPE html>  
 <html>  
      <head>  
  <title>Udate Profile</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
  <script>       
function validate1() {
  let x = document.forms["update"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}

function validate2() {
  let y = document.forms["update"]["pn"].value;
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}

function validate3() {
  let x = document.forms["update"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}

function validate4() {
  let y = document.forms["update"]["add"].value;
  if (y == "") {
    alert("Address must be filled out");
    return false;
  }
}
function validate5() {
  let y = document.forms["update"]["pass"].value;
  if (y == "") {
    alert("Phone Number must be filled out");
    return false;
  }
}
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

     </head>  
      <body class="bg-warning col-lg-11.5 m-4">  
        

 <nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>Update Information</h1> 
<div  style="text-align:right;">
<ul class="navbar-nav ml-auto ">
   <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="MainHome.php">Home Page</a></h3>
     <h3> .... </h3>
  <h3 class="nav-item"><a class="nav-link"  href="UserLogin.php" onclick="log()">Log out</a> </h3>


</ul>
</div>
</nav>

<div class="col-lg-10">
                 
                   <form name="update" action="controller/UpdateUser.php" method="POST" enctype="multipart/form-data"onsubmit="return validate1(),validate2(),validate3(),validate4(),validate5()">

 <?php     
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 

                     <br /> 
                      <div class="container" style="width:400px;"> 


<label for="email">Email:</label><br>
  <input  type="email"  class="form-control" name="email" placeholder="Enter your Current Email"><br>

  <label for="name">Name:</label><br>
  <input  type="text"  class="form-control" name="name" placeholder="Enter your New Name"><br>

  <label for="add">Address:</label><br>
  <input type="text"  class="form-control" name="add" placeholder="Enter your New Address"><br>


  <label for="pn">Phone Number:</label><br>
  <input type="text"  class="form-control" name="pn" placeholder="Enter your New Phone Number"><br>
  
  <label for="pass">Password:</label><br>
  <input type="text"  class="form-control" name="password" placeholder="Enter your New Password"><br>

  <input type="submit" name = "UpdateUser" class="btn-outline-primary" value="Update">

  <input class="btn-outline-primary" type="reset"> 
       
 </div> 

                    

                </form> 
               
             
           </div>  
           <br />  
      </body>  
 </html>  
