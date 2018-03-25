<!Doctype html>
 <html> 
    
     
 <?php
 session_start();
     
 include("connection.php");
 ?>
 
 
 
 <head>

  <link rel="stylesheet" href="css/style.css" style="text/css" />

 </head>

 <body background="red">
 <?php
   if (isset($_GET["mes"]))
   {
	   echo $_GET["mes"];
   }
   ?>
   <fieldset id="field">
      <h2> USER LOGIN FORM</h2>
	  
     <legend>Login form</legend>
       <form class="fom" method="post" action="loginform.php">
       
       <table id="tab">
           
           <tr>
           <td>USER NAME</td>
           <td><input type="text" name="name" required></td>
           </tr>
           
            <tr>
           <td>PASSWORD</td>
           <td><input type="password" name="pass" required></td>
           </tr>
           
           
            <tr>
           <td><input type="SUBMIT"  value="Sign in" name="sub"></td>
               
           </tr>
           
         </table>
            <a href="registrationform.php">New user Registration  </a>  <a href="#">Forgot Password </a>  
       
       
       
       </form>
     
  </fieldset>
     
      <?php
    
	    if (isset($_POST["sub"]))
		{
              $name=$_POST["name"];
          $pass=$_POST["pass"];
		  
		  
		     if($name!="" && $pass!="")
             {
                 $sql= "SELECT ID,NAME,PASSWORD FROM users WHERE NAME='$name' AND PASSWORD='$pass'";
                 $result=$con->query($sql);
                 if($result->num_rows>=1)
                 {
                     $_SESSION[name]=$name;
                         
                     header("location:home.php");
                 }
                 else
                 {
                     echo "<p>invalid uername and password</p>";
                 }
             }
            else
            {
                 echo "<p>pls enter all the details</p>";
            }
        }
      
     else
     {
         echo "<p>pls login for complete access</p>";
     }
       
     
            
            
            ?>
   
 </body> 
 </html>