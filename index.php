<?php
//TASK 2 -Declare Variables


$name = "Stephanie";
$age = 24;
$isSingle = true;
//output
echo $name. ", " .$age. "," .$isSingle;

echo "<br/>";

//TASK 3 -If Statements

if($age>=18){
echo"You're an adult";
}else{
    echo"You're a minor";
}

echo "<br/>";

//TASK 4 -LOOPS
//for loop
for($number=0; $number<=5 ; $number++){
    echo"$number";
}
echo "<br/>";
//while loop
$num = 5;
while($num>0){
    echo"$num";
    $num--;
}

//Task5-Arrays
//indexed Array
$colors = array("yellow,blue,red");

//Associative Array
$person = array(
    $name => "Stephanie",
    $age = 24,
    $Address = "Davao City"
);

echo "<br/>";

//TASK 6 - Functions
//Create a function

function addNum ($x , $y){
    $sum = $x + $y;
    return $sum;
}

//Calling a function
echo addNum(10,5);
echo "<br/>";
echo addNum(50,20);

$students = array("Bot" , "Corny", "Bot");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container m-5 p-5 display flex justify-content-center shadow">
<h1 class="font-weight-bold text-center" >Form</h1>
<form method="POST" action="newmember.php">
    <label for="addName">Add new member: </label>
    <input name="membername" id="addName" type="text" class="form-control "required>
    <button class="btn btn-dark btn-sm mt-2">Add</button>
</form>
</div>
   
</body>
</html>

