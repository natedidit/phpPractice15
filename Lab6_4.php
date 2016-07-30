<?php
date_default_timezone_set("America/Los_Angeles");

$tip = array(
"the Secret of life is.. It's a secret.",
"Good advice jars the ear",
"Bloom where you are planted",
"the greaterst danger coould be your stupidity",
"Your heart desires to give mony to the poor",
"Work hard and hapiness will come your way",
"Love is coming your way",
);

$w= date("w");

echo "Tip of the day : <b>$tip[$w]</b><br>";

echo"<hr size= '2'>";

$goal["Jan"] = "<a href=Http://www.ibm.com>Ibm</a>";
$goal["Feb"] = "<a href=Http://www.hp.com>hp</a>";
$goal["Mar"] = "<a href=Http://www.google.com>google</a>";
$goal["Apr"] = "<a href=Http://www.cnn.com>cnn</a>";
$goal["May"] = "<a href=Http://www.reddit.com>reddit</a>";
$goal["Jun"] = "<a href=Http://www.kbb.com>kbb</a>";
$goal["Jul"] = "<a href=Http://www.toshiba.com>toshiba</a>";
$goal["Aug"] = "<a href=Http://www.oracle.com>oracle</a>";
$goal["Sep"] = "<a href=Http://www.3wc.com>3wc</a>";
$goal["Oct"] = "<a href=Http://www.tuner.com>tuner</a>";
$goal["Nov"] = "<a href=Http://www.gun.com>gun</a>";
$goal["Dec"] = "<a href=Http://www.beer.com>beer</a>";

$m =date("M");
echo "the goal of the month is to review the $goal[$m] site<br>";

echo "<hr size='2'>";

echo "TV list: ";

$site = array("hbo", "cnn", "cbs", "pbs", "abc", "nbc", "fox", "tnt", "tbs", "mtv");

foreach ($site as $key =>$url)
{
echo "<a href=\"http://www.$url.com\">$url</a> |";
}

echo "<hr size='2'>";

$x;
for($i=0; $i< 50;$i++)
{
$x[$i] = $i +1;
}

echo "Orginal list: <br>";

for($i=0;$i<sizeof($x); $i++)
{
echo$x[$i] . " ";
}

echo "<br>Shuffled list: <br>";

$size = sizeof($x);
$last = $size -1;

for ($j = 0; $j <$last; $j++)
{
$r = rand(0, $size-1);
$temp = $x [$r];
$x[$r] = $x[$last];
$x[$last] = $temp;

$last--;
}

for($i=0; $i < sizeof($x); $i++)
{
echo $x[$i] . " ";
}
?>