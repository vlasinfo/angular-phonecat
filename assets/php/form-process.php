<?php
error_reporting(0);
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Iм'я ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Пошта ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Повiдомлення ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "vlasenkoj@gmail.com";
$Subject = "Геоземексперт";

// prepare email body text
$Body = "";
$Body .= "Iм'я: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Пошта: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Повiдомлення: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Повiдомлення надiслано";
}else{
    if($errorMSG == ""){
        echo "Помилка";
    } else {
        echo $errorMSG;
    }
}

?>