<?php 

// echo "<pre>";
//     print_r ($_REQUEST);
// echo "</pre>";

//validate name

$name = strlen(trim($_REQUEST["name"]));

if($name < 250){
    echo "valid - ".$_REQUEST["name"];
}else{
    echo "invalid name.";
}
echo "<br><br>";

//validate email

$email = strlen(filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL));

if($email < 250);
{
    echo "valid - ".$_REQUEST["email"];
}
// else{
//     echo "invalid email";
// }
echo "<br><br>";

//validate number

//$number = (preg_match("/^(?:\+88", $_REQUEST["phone"])); 

if(strlen($_REQUEST["phone"])>13){
    echo "phone number must be 11 digit.";
}else if (!is_numeric($_REQUEST["phone"])){
    echo "plz enter a number.";
}else if(!preg_match("/^(?:\+88|88)?(01[3-9]\d{8})$/", $_REQUEST["phone"])){
    echo "Invalid number";
}else{
    echo "valid - ".$_REQUEST["phone"];
}
echo "<br><br>";

//password validate


if(!empty($_REQUEST["pass"]) && ($_REQUEST["pass"] == $_REQUEST["cpass"])) {

    if (strlen($_REQUEST["pass"]) < 8) {
       echo "Your Password Must Contain At Least 8 Characters!";
    }elseif(!preg_match("#[0-9]+#",$_REQUEST["pass"])) {
       echo "Your Password Must Contain At Least 1 Number!";
    }elseif(!preg_match("#[A-Z]+#",$_REQUEST["pass"])) {
        echo "Your Password Must Contain At Least 1 Capital Letter!";
    }elseif(!preg_match("#[a-z]+#",$_REQUEST["pass"])) {
        echo "Your Password Must Contain At Least 1 Lowercase Letter!";
    }else {
        echo "Confirmed Your Password.";
    }
}else{
    echo "password no match.";
}
