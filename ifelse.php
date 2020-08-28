<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
    
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
<p> your party status is here: </p>
    <?php
    $age= 22;
    if($age>18)
    {
        echo "you can attend the party";
    }
    else if($age>80){
        echo "you are too old to attend the party";
    }
    else{
        echo " you cannot attending the party !";
    }

    #Array
    $languages = array("python","c++","php","Node",);
    echo "<br>";
    echo $languages[0];
    echo "<br>";
    echo count($languages);

    ?>
</div>
    
</body>
</html>