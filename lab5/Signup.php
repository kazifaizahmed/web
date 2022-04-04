
 <!DOCTYPE html>  
 <html>  
      <head>  



           <title>Registration</title> 
           
     </head>  
      <body>  
        

   
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Registration</h3>                
                
                    <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
                   
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="fname" class="form-control" placeholder="Enter your Name,only letter" required /><br />  

                    

                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" placeholder="Enter your Email" required /><br />

                     <label>Address</label>
                     <input type="text" name = "add" class="form-control" placeholder="Enter your Address" required  /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male" >
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

</fieldset>

                     <input type="submit" name="createStudent" value="create" class="btn btn-info" /><br />                      
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
           <br />  
      </body>  
 </html>  
