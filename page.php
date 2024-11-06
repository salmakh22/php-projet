<?php 
$nameError="";
$emailError="";
$passError="";
if(isset($_POST['submit1'])) {
      
    $nameValue=$_POST['name'];
    $emailValue=$_POST['email'];
    $passValue=$_POST['password'];
    if(empty($nameValue)) {
        $nameError= "Name must be filled";
       } if(empty($emailValue)) {
        $emailError= "Email must be filled";
       }
    if(empty($passValue)) {
        $passError= "Password must be filled";
       }
    if(preg_match("/\w@gmail\.com{1}$/",$emailValue) == 0 && empty($emailValue)==FALSE) {
        $emailError = "Email not valid";
    }
    if(preg_match("/^.{8,12}$/",$passValue)==0 && empty($passValue)==FALSE){
     $passError="Password not valid";
    }

 }



 














?>