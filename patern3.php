<?php
function num_pattern($val)
{
	$num=1;
   for ($m = 0; $m < $val; $m++)
   {
      for ($n = 0; $n <= $m; $n++ )
      {
         echo $num." ";
      }
      $num = $num + 1;
      echo "<br>";
   }
}
$val = 6;
num_pattern($val);
?>