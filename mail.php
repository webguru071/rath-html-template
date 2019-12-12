<?php 

if($_POST['name']){ 
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $message = $_POST['message']; 
            
  mail("suraiyaaysha.cse@gmail.com", "This is an email from:" .$email, $message);

}
?>