<!DOCTYPE html>
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: white;
}

.container {
  max-width: 500px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 50px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: rgb(69, 114, 191);
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

.dob{
      width: 100%;
    height: 35px;
    color: #aaa;
    padding-left: 10px;
}
</style>
</head>
<body>
<div class="container"> 

<div style="padding-top: 40px; text-align: center; ">
 <img src="images/eb_new.png" style=" width: auto; height: 40px; "  >
</div>  
  <form id="contact" action="" method="post">


    <h3>Fly & Buy Seller Form</h3>

     <fieldset>
      <input placeholder="Email Address" type="email" name="email"   required>
    </fieldset>

     <fieldset>
      <input placeholder="Choose Password" type="password" name="pass"   required>
    </fieldset>
  
    <fieldset>
      <input placeholder="Shop name" type="text"   name="name1"  required   autofocus>
    </fieldset>
        <fieldset>
      <input placeholder="Owner name" type="text"   name="name2"  required   autofocus>
    </fieldset>
   
    <fieldset>
      <input placeholder="Contact " type="tel" name="mn"  required>
    </fieldset>

 <fieldset>
     <select name="category" required>
                      <option selected="selected" >Choose Categories</option>
                      <option value="shopping">Shopping</option>
                      <option value="eatout">Eat Out</option>
                      <option value="Health">Health</option>
                      <option value="Auto">Auto</option>
                      <option value="Grocery">Grocery</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Dairy">Dairy</option>
                      <option value="Stationary">Stationary</option>
                      <option value="Movies">Movies</option>
                      <option value="Sports">Sports</option>
                      <option value="Travel">Travel</option>
                      <option value="Music">Music</option>
                    </select>


    </fieldset>

  


<br>



 <fieldset>
      <button name="submite" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>


  </form>
</div>
</body>
</html>






<?php
if (isset($_POST['submite'])) {


  include('db.php');
  
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mobile_number = $_POST['mn'];
$category = $_POST['category'];



$emp_count = "SELECT * from seller where email = '$email'";
$row_count = mysqli_query($con, $emp_count);

$count_upsert_query = mysqli_num_rows($row_count);

if ($count_upsert_query == 0)
{

$insert_emp = "INSERT INTO seller (shop_name, owner_name, email, contact, category, pass) VALUES ('$name1',  '$name2' , '$email', '$mn','$category','$pass') " ;


if (mysqli_query($con, $insert_emp)) {
   echo "<script>alert('Members Added')</script>";  
   echo "<script>window.open('seller_login.php','_self')</script>";

}




}

}

?>











