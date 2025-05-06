<?php
$file = 'count.txt';

if (file_exists($file)) {
  $count = (int)file_get_contents($file);
} else {
  $count = 0;
}

$count++;
file_put_contents($file, $count);
echo $count;
?>
