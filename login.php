</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
    <title> Log in</title>
</head>
<body>

<?php
     // Get form data
     $name = $_POST["name"];
     $pass = $_POST["pswd"];
 
      //validation and display output as html page
    if (!preg_match("/^[A-Za-z]/",$pass )) {
       echo "invalid Password <br />";
 
     } 
     else {
     //display user input
         echo "<h3>log in successfully </h3> <br />";
         print ("Welcome $name <br /> Your Password is: $pass <br />");
        }

?>

</body>
</html>
