<!DOCTYPE>
<html lang="en">
<head>
    <h3> Pole prostokąta</h3>
</head>
<body>
    <form action="cw1_2.php" method="get" >
        A: <input type="number" name="A"  >
        <br>
        B: <input type="number" name="B" >
        <br><br>
        <input type="submit">
    </form>
    <br>
    Pole: <?php echo $_GET["A"] * $_GET["B"] ?> [m2]
</body>
</html>

