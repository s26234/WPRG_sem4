<!DOCTYPE>
<html lang="en">
<head>
    <h3> DZIAŁANIA MATEMATYCZNE</h3>
</head>
<body>
<form action="cw1_4.php" method="get" >
    A: <input type="number" name="A"  >
    <br>
    B: <input type="number" name="B" >
    <br><br>
    <input type="submit">
</form>
<br>
Dodawanie: <?php echo $_GET["A"] + $_GET["B"] ?><br>
Odejmowanie: <?php echo $_GET["A"] - $_GET["B"] ?><br>
Mnożenie: <?php echo $_GET["A"] * $_GET["B"] ?><br>
Dzielenie: <?php echo $_GET["A"] / $_GET["B"] ?><br>
Modulo: <?php echo $_GET["A"] % $_GET["B"] ?><br>
</body>
</html>

