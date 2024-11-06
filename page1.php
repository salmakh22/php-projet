
<?php
$emailError2="";
$passError2="";




if(isset($_POST['submit2'])) {
    $emailValue2=$_POST['email2'];
    $passValue2=$_POST['password2'];

    if(empty($emailValue2)) {
        $emailError2= "Email must be filled";
       }
    if(empty($passValue2)) {
        $passError2= "Password must be filled";
       }
    if(preg_match("/\w@gmail\.com{1}$/",$emailValue2) == 0 && empty($emailValue2)==FALSE) {
        $emailError2 = "Email not valid";
    }
    if(preg_match("/^.{8,12}$/",$passValue2)==0 && empty($passValue2)==FALSE){
        $passErro2r="Password not valid";
       }

}

















?>