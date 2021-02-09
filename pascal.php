<html>
<head>
  <title>Pascal Triangle in PHP</title>
</head>
<body>
<?php $level = $_POST['line']; ?>
<div>
  <form action="" method="post">
  	Input Line Number 
  	<input type="text" name="line" value="<?php echo $level; ?>"> 
  	<input type="submit" value="Submit">
  </form>
</div>
<div>
<table>
<?php
/* step 4 - finish */	
for ($y = 1; $y <= $level; $y ++){
  echo "<tr>";
  for ($x = 1; $x <= $y; $x ++){
    if($x == 1){
      $number[$y][$x] = 1; // start with 1
      
      //show tab from left
      if($level != $y){
        echo "<td colspan='".($level-$y)."'></td>";
      }
      
      echo "<td>".$number[$y][$x]."</td>";
      echo "<td></td>"; //show tab
    }elseif($x == $y){
      $number[$y][$x] = 1; // end with 1
      echo "<td>".$number[$y][$x]."</td>";
    }else{
      $number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x];
      echo "<td>".$number[$y][$x]."</td>";
      echo "<td></td>"; //show tab
    }
  }
  echo "</tr>";
}
?>
</table>
</div>
</body>
</html>