<?php
$x;

$x[0] = 5;
$x[1] = 9;
$x[2] = 4;
$x[3] = 7;

echo "data type: ", gettype($x) , "<br>";
echo '$x[0] is ' . $x[0] , "<br>";
echo '$x[1] is ' . $x[1] , "<br>";
echo '$x[2] is ' . $x[2] , "<br>";
echo '$x[3] is ' . $x[3] , "<br>";

echo "<hr size='1'>";

$n = Array (1,3,5,7);

echo "data type: ", gettype($n) , "<br>";
echo $n[0] . ' is $n[0]!<br>';
echo $n[1] . ' is $n[1]!<br>';
echo $n[2] . ' is $n[2]!<br>';
echo $n[3] . ' is $n[3]!<br>';

echo "<hr size='2'>";

$jw;

$jw[0]= "Konnichiwa.";
$jw[1]= "Grettings.";
$jw[2]= "Hello.";
$jw[3]= "Hi.";

$i= rand(0,3);

echo "Greet in languages: <b>", $jw[$i], "</b><br>";

$tip = Array ("Right click on th mouse!",
              "Double click the mouse!",
              "Double right click the mouse!",
              "Press F8 and F12!");

echo "Tip of the day is: <br>" . $tip[rand(0,3)] . "</b>";

echo "<hr size='2'>";

$m[0] = 5.12;

$m[1] = 9;

$m[2] = 'nine';

$m[3] = true;

echo'$m is ', gettype($m) , "<br>";
echo '$m[0] is ', gettype($m[0]) , ". Value is " , $m[0] . "<br>";
echo '$m[1] is ', gettype($m[1]) , ". Value is " , $m[1] . "<br>";
echo '$m[2] is ', gettype($m[2]) , ". Value is " , $m[2] . "<br>";
echo '$m[3] is ', gettype($m[3]) , ". Value is " , $m[3] . "<br>";

echo "<hr size= '2'>";

$major['c'] = "Computer Information Systems";
$major['m'] = "Mamangement Information Systems";
$major['a'] = "Accounting Information Systems";
$major['h'] = "Health Information Systems";

echo $major['a'] , "<br>";
echo $major['c'] , "<br>";
echo $major['h'] , "<br>";
echo $major['m'] , "<br>";

$school = Array ("UCI"=>"University of California, Irvine",
                 "UCSD"=>"University of California, San Diego",
                 "UCLA"=>"University of California, Los Angeles",
                 "UCD"=>"University of California, Davis");

echo"<hr size='2'>";

echo $school["UCI"] . "<br>";
echo $school["UCLA"] . "<br>";
echo $school["UCD"] . "<br>";
echo $school["UCSD"] . "<br>";
?>