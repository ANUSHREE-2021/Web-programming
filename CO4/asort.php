<!DOCTYPE html>
<html>
<body>

<?php
$names = array("anushree", "jyoti", "shweta");
sort($names);

$clength = count($names);
for($x = 0; $x < $clength; $x++) {
  echo $names[$x];

  echo "<br>";
}
  echo "sorted using values";
  echo "<br>";
  $age = array("anushree"=>"35", "jyoti"=>"37", "shweta"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x ;
  echo "<br>";
}
  echo "<br>";
  echo "sorted using values and in descending order";
  echo "<br>";
  $age = array("anushree"=>"35", "jyoti"=>"37", "shweta"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

</body>
</html>
