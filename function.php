<?php

function display(){
    echo "Hiii";
}



display();
display();

function test(){
    echo "Function for testing";
}

test();

function displayuserDetails(){
    echo "Amulya";
    echo "Raj";
    echo " is from ";
    echo "India";
}

function caalDisplay(){
    displayuserDetails();
    displayuserDetails();
    displayuserDetails();
}

function sum($a,$b){
    echo $a+$b;
}


sum(10,20);
sum(4,5);

function mul($a,$b){
    return $a*$b;
}

echo "hi my multiplication is ".mul(10,20);

// fun with default parameter
function fruit($name,$color="red"){
    echo "The fruit is $name and the color is $color";
}

fruit("Apple","green");
fruit("apple");

//nested function

function outer(){
    echo "outer fun called";
    function inner(){
        echo "inner fun called";
    }
    inner();
}

outer();
?>