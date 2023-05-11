<?php


  if (isset($_POST['submit'])) {

      $name  = $_POST['Name'];
      $email = $_POST['email'];
      $msg   = $_POST['message'];
      $result = "";
        $to    = 'nanisamireddy05@gmail.com';
      $subject = 'From Your Portifilo site';
      $message = "Name :- ".$name."\nMessage :- ".$msg;
      $header  = "From :- ".$email;

      if (mail($to, $subject, $message, $header)) {
        $result = " sucessfully Done";
      }
      else {
        $result = "somrthing went wrong please try again";
      }
        print $result;


  }






 ?>
