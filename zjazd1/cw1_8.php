<!DOCTYPE>
<html lang="en">
<head>
    <h3> SORTOWANIE BĄBELOKOWE</h3>
</head>
<body>
<form action="cw1_8.php" method="get" >
    A: <input type="number" name="A"  >
    <br>
    B: <input type="number" name="B" >
    <br>
    C: <input type="number" name="C"  >
    <br><br>
    <input type="submit">
</form>
<br>
<?php

$i = 0;
$a = $_GET["A"];
$b = $_GET["B"];
$c = $_GET["C"];
$numb = array($a, $b, $c);

function bubbleSort ( $numb ) {
    $lenght = count($numb);
    $comparsion = 0;

    for ($i = 0; $i < $lenght; $i++) {
       for ($j = 0; $j < $lenght - 1; $j++){
           $comparsion++;

           if ($numb[ $j] > $numb[ $j + 1]) {
               $tmp = $numb[ $j + 1];
               $numb [ $j + 1] = $numb [$j];
               $numb [$j] = $tmp;
           }
       }
    }
    echo '<h4>' . $comparsion . '  Comparsion </h4>';
    return $numb;
}
echo '<strong>Before Sorting</strong><br>' . implode( ',', $numb) . '<br>';
$sorted = bubbleSort( $numb );
echo '<strong>After Sorting</strong><br>' . implode( ',', $sorted);

?>
</body>
</html>
