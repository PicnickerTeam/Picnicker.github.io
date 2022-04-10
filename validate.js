/* This is js to validate the form
It includes a function called validateForm, where there are variables for the form with name = "Quesionnare"
That variable takes the name of the input type then it validates it, if the it's invalid, it sends an alert to the 
user and returns false

The alerts appear when the user clicks on submit
*/


//function to validate name
function validateName(){ 
    var userName = document.getElementById("userName");
    var name = userName.value; 
    
    // empty name 
    if ( name == "") {
      alert("name must be filled out");
    return false;
    }
  
    //the name can only contain letters
    var search = name.search(/^[a-z A-Z]+$/);
    if (search != 0) {
      alert("Your name should only contain letters and spaces");
      return false;
    }
  }
  
//function to validate email address
function validateEmail(){
    var email = document.getElementById("emailaddress");
    var emailValidate = email.value;

    // empty email
    if ( emailValidate == "") {
        alert("Email must be filled out");
        return false;
  
    }
  
    // email end with .com or .om
    if (emailValidate.lastIndexOf(".com")==-1 && emailValidate.lastIndexOf(".om")==-1){
        alert("Email must end with .com or .om");
        return false;}

    //email format
    var search = emailValidate.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    if (search != 0) {
        alert("Your email is in an invalid form");
        return false;
    }
}


// Validation for choose checkbox
function isChecked() {
    var pillows = document.getElementById('pillows').checked;
    var mirror = document.getElementById('mirror').checked;
    var candles = document.getElementById('candles').checked;
    var tables = document.getElementById('tables').checked;
    var Basket = document.getElementById('Basket').checked;

    if ((pillows == false) && (mirror == false) && (candles == false) && (tables == false) && (Basket == false)){
        alert('You should select one of the checkbox at least');
        return false;
    }
    else {
        return true;
    }
}

 
