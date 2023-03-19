<!DOCTYPE>
<html lang="en">
<head>
    <h3> Pole prostokąta</h3>
</head>
<body>
<form action="cw1_3.php" method="get" >
    Pierwiastek z: <input type="number" name="num1"  >
    <br><br>
    <input type="submit">
</form>
<br>
Liczba pod pierwiastkiem: <?php echo sqrt($_GET["num1"])?>
</body>
</html>
