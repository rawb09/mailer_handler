<?php
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $radio =$_POST['radio']
    $website = $_POST['website'];


    $to="aguilar.r@live.com";
    $subject = "New Message";
    if(mail($to, $subject, $message, "From: " . $first_name . $last_name)){
      echo "<h1>Your message has been sent</h1>";
  }
  else{
  echo "Something went wrong!";
}

}
?>
