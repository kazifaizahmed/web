<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <body>  
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>Phone Number</th>
                                <th>Password</th>    
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          // echo $data;
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                              echo "User Information ";
                               echo '<tr>
                               <td>'.$row["Name"].'</td>
                               <td>'.$row["Email"].'</td>
                               <td>'.$row["phone number"].'</td>
                               <td>'.$row["Password"].'</td>
                               <td>'.$row["Gender"].'</td>
                               <td>'.$row["Dob"].'</td>
                               </tr>';  


                          }  


               ?> 

                     </table>  
                   </div>
                 </div>
      </body>  
 </html>  