<?php
$x[0] = 5.14;
$x[1] = 31;
$x[2] = true;
$x[3] = "Apple";

$k = array_keys($x);
$v = array_values($x);

for ($i=0; $i<count($x); $i++)
{
echo "$k[$i] : $v[$i]<br>";
}

echo "<hr size='2'>";

$subject = Array("Earth Science", "Physics");

$subject[2] = "Management";
$subject[3] = "Marketing";

$subject["Bio"] = "Biology";
$subject["chem"] = "Chemistry";
$subject["Acct"] = "accounting";

echo '$subject[0] is ' . $subject[0] . "!!<br>";
echo '$subject[1] is ' . $subject[1] . "!!<br>";
echo '$subject[2] is ' . $subject[2] . "!!<br>";
echo '$subject[3] is ' . $subject[3] . "!!<br>";

echo '$subject["Bio"] is ' . $subject["Bio"] . "!!<br>";
echo '$subject["chem"] is ' . $subject["chem"] . "!!<br>";
echo '$subject["Acct"] is ' . $subject["Acct"] . "!!<br>";

echo"<hr size='2'>";

$state= array('AL' => "Alabama", 'AK'=>"Alaska", 'AZ'=>"Arizona", 'AR' =>"Arkansas");

$state ['CA']="California";
$state ['CO']="Colorado";
$state ['Ct']="Connecticut";

$k = array_keys($state);
$v= array_values($state);

for ($i=0; $i<count($state); $i++)
{
 echo "$k[$i] : $v[$i]<br>";
}

?>

