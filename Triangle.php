<!DOCTYPE html>
<html>
<head>
	<header> <b> NAME:PRACHI PANCHOLI <br> EN.NO.:1800201032 </b></header>
<style>
div{
display: inline-block;
width: 13px;
}
</style>
</head>
<body>
<h3> PHP program to print alphabet triangles.</h3>
<?php
$a = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
for($j=4; $j>=$i; $j--)
echo "<div>&nbsp;</div>";
for($k=0; $k<=$i; $k++)
echo "<div>" . $a[$k] . "</div>";
$n = $k - 1;
for($m = 0; $m < $i; $m++)
echo "<div>" . $a[--$n] . "</div>";
echo "<br>";
}
?>
</body>
</html>