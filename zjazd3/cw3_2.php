<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cw3_2</title>
</head>
<body>
<form method="post">
    <label for="imie">Imie:</label>
    <input type="text" name="firstName" id="firstName" required>
    <br>
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="lastName" id="lastName" required>
    <br>
    <input type="submit" value="Submit">
</form>
<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
if(!$fd = fopen('./formularz.txt', 'a')){
    echo("Nie mogę otworzyć pliku formularz.txt");
}
fwrite($fd, $firstName . ";" . $lastName . "\n");
fclose($fd);
?>
</body>
</html>
