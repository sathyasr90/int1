<!Doctype html>
 <html> 
 <?php
 include("conn.php");
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
       <form class="fom" method="post" action="login_form.php">
       
       <table id="tab">
           
           <tr>
           <td>USER NAME</td>
           <td><input type="text" name="name" required></td>
           </tr>
           
            <tr>
           <td>PASSWORD</td>
           <td><input type="password" name="password" required></td>
           </tr>
           
           
            <tr>
           <td><input type="SUBMIT"  value="Sign in" name="sub"></td>
               
           </tr>
           
         </table>
            <a href="user_form.php">New user Registration  </a>  <a href="#">Forgot Password </a>  
       
       
       
       </form>
     
  </fieldset>
     <php
   
 </body> 
 </html>