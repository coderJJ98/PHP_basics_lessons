<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
*{
    margin : 0px;
    padding : 0px;
    box-sizing : border-box;
}
.container{
    max-width : 80%;
    background-color :lightcoral;
    margin : auto;
}
</style>
<body>
<div class="container">
<h1> Lets learn about more about PHP </h1>
<?php
    #loops in php
    $a=0;
    while ($a<=10) {
        echo "The value of a is:";
        echo $a;
        echo "<br>";
        $a++;
    }
    $languages = array("java","pyhton","c++","nodejs");
    $a=0;
    while ($a < count($languages)) {
        echo "The value of language is:";
        echo $languages[$a];
        echo "<br>";
        $a++;
    }
    #do while loop in php
    $a=0;
    do{
        echo "The value of a is:";
        echo $a;
        echo "<br>";
        $a++;
    }while($a < 10);

    #for loop in php
    for ($a=0; $a < 10; $a++) { 
        echo " <br> The value of a(for loop) is:";
        echo $a;
    }

    #for each loop in php
    foreach($languages as $values){
        echo "<br>The value of languages(for each) is:";
        echo $values;
    }


?>
    
</body>
</html>