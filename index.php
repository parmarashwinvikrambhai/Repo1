<?php
include("views/forms.php");

if(isset($_POST['submit'])){
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $operator=$_POST['operator'];

require_once __DIR__ .'/Models/Calculater.php';

    $calc=new Calculater();
    $ans=$calc->calculateNumber($number1,$number2,$operator);

    echo"Ans:---".$ans;



}







?>