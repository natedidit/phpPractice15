<?php
echo "<table border= '2' cellspacing='0'<tr><td>";

$w;

$w[0] = array(1,2,3,4,5);
$w[1] = array(6.1, 7.2, 8.3, 9.4);
$w[2] = array("10th", "11th", "12th");
$w[3] = array (true,false);

echo '$w has ' , count($w), ' elements.<br>';

for ($i=0; $i<count($w); $i++)
{
 echo "\$w[" , $i, "] has ", count($w[$i]), " elements:<ol>";
 for ($j =0 ;$j<count($w[$i]); $j++)
 {
  echo "<li>\$w[" . $i . "][" . $j . "] is " . $w[$i][$j] . "</li>";
}
echo"</ol>";
}
print "</td><td>";

$food = array (
              "fruits"=>array("banana", "apple", "orange", "cherry", "grape", "lemon"), 
               "nuts"=>array("almond", "cashew", "peanut", "peacan"), 
               "grains"=>array("corn", "wheat", "oat"), 
               "seeds"=>array("chia", "sesame", "sunflower", "pea", "soybean")
);

$k = array_keys($food);
$size= count($k);

echo '$food has ' , $size, "elements.<br>";

for ($i=0; $i<$size; $i++)
{
 echo '$food[' , $i, '] has ', count($food[$k[$i]]), ' elements:<ol>';

for ($j = 0; $j<count($w[$i]); $j++)
{
echo ' <li>$food[\'' . $k[$i] . '\'][' . $j . '] is ' . $food[$k[$i]][$j] . "</li>";
}

echo"</ol>";
}
print "</td><td valign= 'top'>";

$x ["fruit"]["a"]= "Apple";
$x ["fruit"]["b"]= "banana";
$x ["fruit"]["c"]= "cherry";

$x["drink"]["p"] = "Pepsi";
$x["drink"]["d"] = "Dr. Pepper";

$x["Snack"]["k"] = "cookie";
$x["Snack"]["i"] = "ice cream";
$x["Snack"]["n"] = "nachos";
$x["Snack"]["w"] = "waffle";


foreach ($x as $key => $y)
{
$k =$key;
 foreach ($y as $key => $z)
{
echo '$food[\'' ,$k , '\'][\'' , $key , '\'] is ', $z, '<br>';
}
}
echo "</td></tr></table>";
?>
