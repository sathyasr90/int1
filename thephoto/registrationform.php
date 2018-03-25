 <?php
 include("connection.php");
 ?>


<!Doctype html>
<html>
  
 <head>

  <link rel="stylesheet" href="css/style.css" style="text/css" />
     <script src="jquery.min.js"></script>
     <script>
     $(document).ready(function(){
                      
         // $("#p2").bind("blur",check())
         $("#p2").blur(function()
                      
                      {
                       check();
                      
         } );
         
        
                       
                       
     } );
     
           function check()
         {
             var p1=$("p1").val();
             var p1=$("p1").val();
              $("#err").hide();
             if(p1!=p2)
                 {
                     
                    $("#err").html("password not match"); 
                      $("#err").show();
                     
                 }
             
             else
             {
                 $("#err").hide();
             }
         }
                      
                     
     
     
     
     
     </script>

 </head>

 <body>
 
   <fieldset id="field">
      <h2> NEW USER REGISTRATION FORM</h2>
     <legend>Registration form</legend>
       <form class="fom" method="post" action="registrationform.php">
       
       <table id="tab">
           
           <tr>
           <td>USER NAME</td>
           <td><input type="text" name="name" required></td>
           </tr>
           
            <tr> 
           <td>PASSWORD</td>
           <td><input type="password" name="pass1" id="p1" required></td><td><p style="color:red" id="err"></p></td>
           </tr>
           
            <tr>
           <td>CONFIRM PASSWORD</td>
           <td><input type="password" name="pass2" id="p2" required></td>
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
            <a href="loginform.php">Already user?</a>
       
       
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
					   header("location:loginform.php?msg=<p>welcome</p>");
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