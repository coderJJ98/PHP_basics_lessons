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
 function print5(){
     echo "five";
 }
 function print_num($number){
    echo "<br>your number is:";
    echo $number;
 }


 print5();
 print5();
 print_num(56);
 print_num(25);
?>