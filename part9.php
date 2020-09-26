<?php
echo $fullName;
ini_set('display_errors',1); //Show errors for debugging

$firstName = "Jane";                    //string type 
$lastName = "Doe";                      //string type
$age = 35;                              //integer type 
$married = true;                        //boolean type
$childrenNames = array("alice", "Bob"); //array type
$fullName = $firstName . " " . $lastName;   //concatenation operator 
$dogYears = $age/7;                         //Arithmetic
$isAdult = $dogYears > 4;                   //comparison
$isSettled = $isAdult and $married;         //integer type

function getFullName($firstName, $lastName) {   //function name
    return $firstname . " " . $lastName;        //Return value
}

$fullName = getFullName($firstName, $lastName); //using variables
$fullName = getFullName("Alice", "Doe");        //Using Values

Function getIsSettled($age, $married) {    //Function name
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;
    return $isSettled;                      //Returned value
}

$isSettled = getIsSettled($age, $married);  //Using Variables
$isSettled = getIsSettled(5, false);
?>