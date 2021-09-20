<table>
<?php
for($i=1;$i<10;$i++){
  print '<tr>';
  for($a=1;$a<10;$a++){
    $result=$i*$a;
    print "<td>{$result}<td>";
  }
  print '<tr>';
}
?>
</table>
