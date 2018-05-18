<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$errorUsername = $errorEmail = $errorPhone = "";
$username = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $errorUsername = "This field is required!";
  } else {
    $username = test_input($_POST["username"]);
   
    if (!preg_match("/^[a-z]*$/",$username)) {
      $errorUsername = "Username must lowcase character!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $errorEmail = "This field is required!";
  } else {
    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "Your email must look like this \"youremail@example.com\""; 
      }
    if (!preg_match("/^[a-z@0-9.]*$/",$email)) {
      $errorEmail = "Email must be lowercase!" ; 
    }
  }

  if(empty($_POST["phone"])) {
      $errorPhone = "This field is required!";
  } else{
      $phone = test_input($_POST["phone"]);
      if(!preg_match("/^[+1]|[1-9]*$/",$phone)){
        $errorPhone = "this field must be filled with space, letter and plus sign (+) only!";
      }
  }
  
}
        
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Form Validation</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $errorUsername;?></span>
  <br><br>
  Email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $errorEmail;?></span>
  <br><br> 
  Phone: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $errorPhone;?></span>
    <br>
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>