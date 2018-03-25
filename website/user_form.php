<!Doctype html>
<html>
 <?php
 include("conn.php");
 ?>
  
 <head>

  <link rel="stylesheet" href="css/style.css" style="text/css" />

 </head>

 <body>
 
   <fieldset id="field">
      <h2> NEW USER REGISTRATION FORM</h2>
     <legend>Registration form</legend>
       <form class="fom" method="post" action="user_form.php">
       
       <table id="tab">
           
           <tr>
           <td>USER NAME</td>
           <td><input type="text" name="name" required></td>
           </tr>
           
            <tr> 
           <td>PASSWORD</td>
           <td><input type="password" name="pass1" required></td>
           </tr>
           
            <tr>
           <td>CONFIRM PASSWORD</td>
           <td><input type="password" name="pass2" required></td>
           </tr>
           
            <tr>
           <td>SECURITY QUESTION </td>
           <td><select name="ques">
                
                <option value="what is your fav color">what is your fav color</option>
               
               <option  value="what is your pet animal">what is your pet animal</option>
               
               <option  value="what is your fav food">what is your fav food</option>
               
               </select></td>
           </tr>
           
            <tr>
           <td>ANSWER</td>
           <td><input type="text" name="ans" required></td>
           </tr>
           
            <tr>
           <td><input type="SUBMIT"  value="Sign up" name="submit"></td>
             <td><input type="reset"  value="clear" name="clear"></td>    
           </tr>
           
         </table>
            <a href="login_form.php">Already user?</a>
       
       
       </form>
     
  </fieldset>
  
  <?php
    
	    if (isset($_POST["submit"]))
		{ 
	     
	      $name=$_POST["name"];
          $pass1=$_POST["pass1"];
		  $pass2=$_POST["pass2"];
		  $que=$_POST["ques"];
		  $ans=$_POST["ans"];
		  
		     if($name!=""&&$pass1!=""&& $pass2!="" && $que!="" && $ans!="")
		              {
			         if($pass1==$pass2)
			     {
				     $sql= "INSERT INTO users (NAME, PASSWORD,QUESTION,ANS) VALUES('$name','$pass1','$que','$ans')";
				   
				     if($con->query($sql))
				      {
					   header("location:login_form.php?mes=<p>welcome $name</p>");
				       }
				     else
				    {
					   echo "<p>server error";
				     }
			     }
			    else
			    {
				   echo "<p>password not match";
			    }
		    }
		     else
	         {
		      echo "<p>please fill all details";
	         }
	    }
	    else
	       {
		     echo "<p>please fill all details</p>";
	       }
	 
	 ?>
 </body>
 </html>