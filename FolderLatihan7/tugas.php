<?php
$n = 3;
$hasil = 0;
$i = 1;

while($i <= $n) {
  $hasil += $i;
  if($i != $n) {
    echo "$i + ";
  } elseif($i == $n) {
    echo "$i = ";
  }
  $i++;
}
echo "$hasil";
?>
<br>
<html>
<body>
<?php
for($i=1; $i<=5; $i++)
{
echo "Nomor " . $i . "<br>";
}
?>
</body>
</html>