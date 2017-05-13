<?php

$fp = fopen("comment.csv", "r");
$i = 0;
while($array = fgetcsv($fp, 1000, ",")) {
$post[$i] = array('id' => $array[0], 'name' => $array[1], 'body' => $array[2]);
$i++;
}
fclose($fp);

print json_encode($post);

?>