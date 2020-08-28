<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
<?php
    echo "hello world.This is written using PHP !";
    //this is me practicing how to commnet in php  
    /* this is 
    me praciting 
    multinline comments
    */
    //Lorem, ipsum dolor.
    echo "how are you doing ?";
    $variable = 5;
    $variable1 = 2;
    echo "<br>";
    echo $variable;
    echo "<br>";
    echo $variable + $variable1;

    //Operators in PHP

    /*
        Arithmetic Operators
        Assignment Operators
        Comparison Operators
        Icreament/decreament Operators
        Logical Operators

    */
    //Arithmetich operator
    echo "<h2> Arithmetich operator </h2>";
    echo "<br>";
    echo "the sum of variables are:";
    echo $variable + $variable1;
    echo "<br>";
    echo $variable - $variable1;
    echo "<br>";
    echo $variable * $variable1;
    echo "<br>";
    echo $variable / $variable1;
    echo "<br>";

    //Assignment operator
    echo "<h2> Assignment operator </h2>";
    $newvariable = $variable1;
    echo "the values of the new variable is :";
    $newvariable += 1;
    $newvariable1 = $variable;
    $newvariable1 *= 2;
    echo "<br>";
    echo $newvariable1;
    echo "<br>";
    echo $newvariable;
    echo "<br>";

    echo "<h2> comarison operators </h2>";

    echo "The value of 1==4 is:";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is:";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is:";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is:";
    echo var_dump(1<=4);
    echo "<br>";

    echo "<h2> Inreamental/decreamental operator</h2>";
    echo $variable++;
    echo "<br>";
    echo $variable;
   /* $variable--;
    ++$variable;
    --$variable;
    */
    echo "<h2> Logical operators</h2>"
    # And (&&)
    # or (||)
    #Xor
    # !   

?>
</body>
</html>