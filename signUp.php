</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
    <title> sign Up</title>
</head>
<body>

<?php
     // Get form data
     $Fname = $_POST["FirstName"];
     $Lname = $_POST["LastName"];
     $email = $_POST["email"];
     $psw = $_POST["psw"];
     $pswRepeat = $_POST["psw-repeat"];

     settype($psw,"String");
     settype($pswRepeat,"String");

 
      //validation if the password and the repeated password are equal 
      //and display output as html page
    if (!strcmp($psw, $pswRepeat)==0) {
       echo "invalid Password";
      
 
     } 
     else {
     //display user input
         echo "<h3>Sign Up successfully </h3> <br />";
         print ("Welcome $Fname $Lname <br /> Your Email is: $email <br />  Your Password is: $psw <br /> Repeated Password is: $pswRepeat <br />");
        }

?>

</body>
</html>
