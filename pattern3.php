<?php
function print_pattern($num)
{

for ($i = 1; $i <= $num; $i++)
{

for($k = $num; $k > $i; $k-- )
{

echo " ";
}

for($j = 1; $j <= $i; $j++ )
{

echo $i." ";
}

echo "<br>";
}
}

$num = 5;
print_pattern($num);
?>