<?php
$name = $_POST['name'];
$lname = $_POST['last_name'];
$mail = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];

if(mail('dapseen@gmail.com','learning PHP at Waaw foundation',$message)){
  echo "Message sent successfully";
}else{
    echo "error encountered when sending your form";
}
