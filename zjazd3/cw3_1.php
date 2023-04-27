<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cw3_1</title>
</head>
<body>
<form method="post">
    <label for="value1">Liczba1:</label>
    <input type="value" name="value1" id="value1" required>
    <br>
    <label for="value2">Liczba2:</label>
    <input type="value" name="value2" id="value2" required>
    <br>
    <select name="select1" id="select1">
        <option>Dodawanie</option>
        <option>Odejmowanie</option>
        <option>Mnożenie</option>
        <option>Dzielenie</option>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>
<?php
    require "functions.php";
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
    $select1 = $_POST['select1'];
    switch($select1){
        case "Dodawanie": echo("Wynik dodawania: " . dodawanie($value1, $value2)); break;
        case "Odejmowanie": echo("Wynik odejmowania: " . odejmowanie($value1, $value2)); break;
        case "Mnożenie": echo("Wynik mnożenia: " . mnozenie($value1, $value2)); break;
        case "Dzielenie": echo("Wynik dzielenia: " . dzielenie($value1, $value2)); break;
        default: echo("Błąd");
    }
?>
</body>
</html>
