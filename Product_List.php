<?xml version = ″1.0″ encoding = ″utf-8″ ?>
<!DOCTYPE html PUBLIC ″-//W3C//DTD XHTML 1.0 Strict//EN″ http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
<html xmlns=″http://www.w3.org/1999/xhtml″>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">

<script type="text/javascript">
 
//Array of objects
var products = [
    {section: "cinema", name:"WZATCO C3 LED Projector", price:"110"},
    {section: "cinema", name:"Simple Soft Movie Screen", price:"8"},
    {section: "furnishing", name:"Tea Table", price:"7"},
    {section: "furnishing", name:"Chair", price:"11"}];
  
//function to search information from array and display alert message to tell whether the 
// sought information is found or not.
//searchlick() function takes the information from user through text box and apply found() function. 
//it displays alert message to tell whether the information is found or not. 

function searchClick(){
    var namee = document.getElementById("searchName").value;
    
    if(found(namee, products)){ alert("yes, it is found");} //if found() return true
    else { alert("it is not found");} //if found() return false
  }

// found() function search the information from the array.
//the parameters are nameKey: the information to search about, myArray: the array to search from.
function found(nameKey, myArray){
    for (var i=0; i < myArray.length; i++) {
      
        if (myArray[i].name == nameKey) {
           return true;}}

        return false;} 

</script> 
<style>
 table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 80%;
    } 
  td, th {
      border: 10px;
      text-align: center;
      padding: 10px;
      background-color: rgb(234, 242, 249);
    }
</style>
</head>
<title>Picnicker | Payment</title>

<body>
        <div class="fixed-header">
          <div class="fixed-header">
            <nav>
              <div class="logo"
                style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                Picnicker</div>
      
      
              <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Products.html">Products</a></li>
            <li><a href="Payment.html">Payment</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="Contact_Us.html">Contact Us</a></li>
            <li><a href="Login.html">Login</a></li>
            <li><a href="SignUp.html">Sign Up </a></li>
            <li><a href="funPage.html">Fun</a></li>
            <li><a href="Questionnaire.html">Questionnaire</a></li>
            <li><a class="active" href="Product_List.html">Product List </a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div  >
          <h1 style="text-align: center; padding: 15px;">Product List</h1>
          <table  style="text-align: center; width: 100%;" id="ta">
            <thead>
              <tr>
              <th>section</th>
              <th>name</th>
              <th>price</th>
              </tr>
            </thead>
            <tbody id="myTable"></tbody>
            <?php


              // a class creates objects hold the section,name and price of the product
              class Product {
                // Properties
                public $section;
                public $name;
                public $price;


                // Method to construct an object
                public function __construct($section,$name,$price){
                  $this->section = $section;
                  $this->name = $name;
                  $this->price = $price;
              }
              // Method to add a row to the table
                public function addRow(){
                  echo '<tr><td>' . $this->section.'</td><td>'.$this->name.'</td><td>'.$this->price.'</td></tr>';
              }
                }
                // array holds objects of type Product
                $products = array();
                
                $product1 = new Product('Cinema','WZATCO C3 LED Projector','110');
                $products[] = $product1;
                
                $product2 = new Product('Cinema','Simple Soft Movie Screen','8');
                $products[] = $product2;
                
                $product3 = new Product('Furnishing','Tea Table','7');
                $products[] = $product3;
                
                $product4 = new Product('Furnishing','Chair','11');
                $products[] = $product4;

                //display table rows
                foreach($products as $Product){
                  $Product->addRow();
                }
                //check if submit button is clicked
              if(array_key_exists('add', $_POST)) {
                // call the function add 
                add();
              }

              function add() {
                // this function gets the data from a form
                $section = $_POST['sectionn'];
                $name = $_POST['namme'];
                $price = $_POST['pricee'];
                // creates a new object
                $newProduct = new Product($section,$name,$price);
                // add th eobject to the array 
                $products[] = $newProduct;
                // display a new row to the table 
                $newProduct->addRow();
              }
          ?>
          </table>
        </div>

        <div >
          <form style="width: 100%; align-items: center;" method="POST">
            
          <label for="searchName">Search about name of a product:</label>
            <input type="text" id="searchName" >
            <input style="background-color: rgb(43, 96, 114);color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px; border: none;" type="button" value="Search" onclick="searchClick()"><br>
            <h3 style="padding-top: 35px; padding-bottom: 10px; font-family:'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; text-align: left; 
            ">Enter the data of what you wish for products</h3><br>
            <label for="sectionn">Section:</label>
            <input type="text" id="sectionn" name="sectionn" ><br><br>
            <label for="namme">Name:</label>
            <input type="text" id="namme" name="namme" ><br><br>
            <label for="pricee">Price:</label>
            <input type="text" id="pricee" name="pricee" ><br><br>
            <input type="submit"  value="Add to table" name="add" style="background-color: rgb(43, 96, 114);color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px; border: none;">      
        </div>

    
        <div class="fixed-footer">
            <div class="container2">Copyright &copy; 2022 Picnicker</div>
          </div>
</body>
</html>