<?php
date_default_timezone_set("America/Los_Angeles");
$w = date("w");

$wd[0] = "Sunday";
$wd[1] = "Monday";
$wd[2] = "Tuesday";
$wd[3] = "Wednesday";
$wd[4] = "Thursday";
$wd[5] = "Friday";
$wd[6] = "Saturday";

echo "Today is <b> $wd[$w]</b>. <br>";

$m =date("n");

$month = array(1=>"January", "February", "March", "April", "May",
                  "June", "July", "August", "September", "October", 
                   "November", "December");

echo "Current month is <b>$month[$m]</b>.<br>";

$y = date("Y");
$y = $y % 12;
$zodiac[0] = "Monkey";
$zodiac[1] = "Rooster";
$zodiac[2] = "Dog";
$zodiac[3] = "Pig";
$zodiac[4] = "Rat";
$zodiac[5] = "Cow";
$zodiac[6] = "Tiger";
$zodiac[7] = "Rabbit";
$zodiac[8] = "Dragon";
$zodiac[9] = "Snake";
$zodiac[10] = "Horse";
$zodiac[11] = "Goat";

echo "This year is a <b>$zodiac[$y]</b> year.<br>";

$season= array("spring", "summer", "fall", "winter");

switch($m)
{
case 1: $s = $season[3]; break;
case 2: $s = $season[3]; break;
case 3: $s = $season[0]; break;

case 4: $s = $season[0]; break;
case 5: $s = $season[0]; break;
case 6: $s = $season[1]; break;

case 7: $s = $season[1]; break;
case 8: $s = $season[1]; break;
case 9: $s = $season[2]; break;

case 10: $s = $season[2]; break;
case 11: $s = $season[2]; break;
case 12: $s = $season[3]; break;
}

echo "current season is <b>$s.</b><br>";
?>