<html>
<head>

</head>
<body>

<h2 style="text-align:center;">Login</h2></br>


<div style="text-align:right;">

<a href="hm.php"><button>Home</button></a>

</div>





<?php                   
                              
$emailErr =  $passErr = "";
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
   

  if(empty($_POST["password"])){
 
    $passErr = "password is required";
  }

  else {
    $password = test_input($_POST["password"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;



  }

  ?>
  <?php
  session_start();
  $error='';
$message='';

if(isset($_POST["submit"]))  
 {  
                         $data = file_get_contents("data.json");
                      $arr= json_decode($data,true);





                       // $data = file_get_contents("data.json");
                            
                         // $data = json_decode($data,true);  
                              
                      
                            
                                 
                     foreach($arr as list("Name"=>$name,"Email"=>$mail,"Address"=>$add,"phone number"=>$pn,"Password"=>$pass,"Dob"=>$dob,"Gender"=>$gn) )  
                          {  
                            

                                 
                          
                              
                      
                            

                    
                          if($_POST["email"] == $mail && $_POST["password"] == 
                                 $pass)

                         {

                         header( 'Location: h.php');

                         $_SESSION['email']=  $mail;                            

                         }
                       else{

                       $error = "<label class='text-danger'>Incorrect user email or password</label>"; 

                        }
                      }
                      }
                      else{

                        echo ' ';
                      }
                      

               ?> 







  <form style="text-align:center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

 <div class="container" style="width:400px;"> 

    Email: <input type="text" name="email" class="form-control" placeholder="Enter  Email"required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Password: <input type="password" name="password" class="form-control" placeholder="Enter  Password"required>
  <span class="error">* <?php echo $passErr;?></span>
 
  <br><br>


 
    <input  type="submit" name="submit" value="Submit" class="btn btn-info" >    <a href="forhet.php">forget password</a>


                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>

                     <?php   
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
</form>



</div>



</body>
</html>
