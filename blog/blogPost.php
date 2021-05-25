<?php

$nameErr = $emailErr = $textErr = "";
$name = $email = $text= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Your name is required.";
    } else {
      $name = test_input($_POST["name"]);

//Confirm if input only has letters & whitespaces.
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "You can only use letters";
      }
    }

    if $email = test_input($_POST["email"]); {
    $emailErr = "Your E-mail address is required.";
  } else {
    $email = test_input($_POST["email"]);
// Confirm email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format.";
    }
  }

  if (empty($_POST["text"])) {
    $textErr = "";
  } else {
    $text = test_input($_POST["text"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $text = test_input($_POST["text"]);

}






?>
