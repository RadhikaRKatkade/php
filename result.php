<?php

$rolln = $_POST['rn'];
$n = $_POST['nm'];
$m = $_POST['mar'];
$s = $_POST['sci'];
$e = $_POST['eng'];
$h = $_POST['his'];
$hi = $_POST['hin'];


echo $rolln." <br>";
echo $n." <br>";
echo $m." <br>";
echo $s." <br>";
echo $e." <br>";
echo $h." <br>";
echo $hi." <br>";

$tt1 = $m+$s+$e+$h+$hi;
echo "total marks is: ".$tt1 ."<br>";
$per = $tt1/6;
echo "percentage(%) ".$per."%"."<br>";


if($per>=75){
    echo "O Grade";
}
else if($per<70 && $per>=60){
    echo "A Grade";
}
else if($per<60 && $per>=50){
    echo "B Grade";
}
else if($per<50 && $per>=40){
    echo "c Grade";
}
else if($per<40 && $per>=35){
    echo "D Grade";
}
else{
    echo "Try next";
}


?>