</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
    <title> Contact Us</title>
</head>
<body>

<?php
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //display user input
        echo "<h3>Contact us successfully</h3> <br />";
        print ("Hi $name <br /> Your Email is: $email <br /> The Subject is: $subject <br /> Your Message for us is: $message <br />");

?>

</body>
</html>
