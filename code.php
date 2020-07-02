<?php

$firstName = " ";
$lastName =" ";

if(isset($_REQUEST['firstName']) && !empty($_REQUEST['firstName'])){
    //htmlspecialchars is a html function to avoid malware request//
    $firstName = htmlspecialchars($_REQUEST['firstName']);

}

if(isset($_REQUEST['lastName']) && !empty($_REQUEST['lastName'])){
    $lastName = htmlspecialchars($_REQUEST['lastName']);
}
 echo $firstName."<br>";
 echo $lastName;

?>