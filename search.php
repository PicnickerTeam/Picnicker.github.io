<!DOCTYPE html PUBLIC ″-//W3C//DTD XHTML 1.0 Strict//EN″ http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
<html xmlns=″http://www.w3.org/1999/xhtml″>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
</script>
<html>

<head>
  <link rel="stylesheet" href="formStyle.css">
  <link rel="stylesheet" href="styles.css">
  <style>
      body {
        font-size: 28px;
        text-align: center;
      }
      table{
        text-align: center;
        margin-left:auto;
        margin-right:auto;
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 15px;
      }


</style>

</head>
<title>SEARCH</title>

<body>
  <div class="fixed-header">
    <div class="fixed-header">
      <nav>
        <div class="logo"
          style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
          Picnicker</div>


        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="Payment.html">Payment</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
          <li><a href="Contact_Us.html">Contact Us</a></li>
          <li><a href="Login.html">Login</a></li>
          <li><a href="SignUp.html">Sign Up </a></li>
          <li><a href="funPage.html">Fun</a></li>
          <li><a href="Questionnaire.html">Questionnaire</a></li>
          <li><a class="active" href="Suggestion.html">Suggestion</a></li>
          <li><a href="Product_List.html">Product List </a></li>

        </ul>
      </nav>
    </div>
  </div>


<h2> SEARCH IN PRODUCT</h2>
    <!------------------------------------------------------------------------------------->
<?php
  

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "picnicker";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password); // Check connection

  if (!$conn) {
    die("<br> <br> Connection failed: " .mysqli_connect_error()); }

  //echo "<br> <br> Connected successfully"; 

  // Select database
  $select_DB = mysqli_select_db($conn, $dbname );

  if (!$select_DB) {
    die("<br> <br> Connection to $dbname failed"); }

  //echo "<br> <br> Connected successfully to $dbname"; 

  // Get informaion from html file (form)
  $section = $_POST['section2'];

  // Insert information into database
  $sql = mysqli_query($conn, " SELECT  productName, description FROM suggested_product WHERE section = '$section'");

  echo " Here are the suggested products that related to " .$section ." ..<br> <br>";
  
  echo"<table border=2>";
  echo"<tr>";
  echo"<td> product Name</td>";
  echo"<td> description </td>";
  echo"</tr>";

  while($row = mysqli_fetch_array($sql))
  {
    echo"<tr>";
    echo"<td>" .$row['productName']. "</td>";
    echo"<td>" .$row['description']. "</td>";
    echo"</tr>";
  }
  echo"</table>";
  echo"<br/><br/>";

  // Close the connection
  mysqli_close($conn);

  ?> 

  <div class="fixed-footer">
    <div class="container2">Copyright &copy; 2022 Picnicker</div>
  </div>
</body>

</html>