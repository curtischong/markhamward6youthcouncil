<?php
$email = $_POST['email'];
$email = str_replace(";","",$email);
$email = htmlspecialchars($email, ENT_QUOTES);
$email = str_replace("<","",$email);
$email = str_replace(">","",$email);





if(!$email == null){
    if (strpos($email,'@') !== false) {
    $lines = file("newsletter-emails.txt");//file into an array
    $email="\n".$email;
    array_push($lines,$email);
    file_put_contents( "newsletter-emails.txt" , $lines);
    echo "Welcome to our newsletter!";
    }else{
        echo "Sorry it has to be legit :)";
    }
}else{
    echo "Sorry try again later";
}
?>