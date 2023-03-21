<!DOCTYPE>
<html lang="en">
<head>
    <h3> POLE TRÓJKĄTA</h3>
</head>
<body>
<form action="cw1_6.php" method="get" >
    A: <input type="number" name="A"  >
    <br>
    B: <input type="number" name="B" >
    <br>
    C: <input type="number" name="C"  >
    <br><br>
    <input type="submit">
</form>
<br>
Pole: <?php
$a = $_GET["A"];
$b = $_GET["B"];
$c = $_GET["C"];

if (($a < $b + $c) && ($b < $a + $c) && ($c < $a +$b)) {
    echo "Nie da sie policzyc pola trojkata";
} else {
    echo $a * $b * $c;
}
?> [m2]
</body>
</html>
