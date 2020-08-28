<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("A",45);
define("PI",3.14);
#Datatypes in PHP
#1. String
#2. Integer
#3. Float
#4. Boolean
#5. Array
#6. Object

$variable = "this is a string";
echo "<br>";
echo var_dump($variable);

$variable = 3;
echo "<br>";
echo var_dump($variable);

$variable = 3.5;
echo "<br>";
echo var_dump($variable);

$variable = true;
echo "<br>";
echo var_dump($variable);
echo "<br>";
echo PI;
echo "<br>";
echo "the value of the addition of constants is:";
echo PI + A;

?>
    
</body>
</html>