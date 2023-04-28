<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cw3_3</title>
</head>
<body>
<form method="post">
    Ilość ludzi:
    <select name="people" id="people">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>
    <br><br>
    <label for="firstName">Imie:</label>
    <input type="text" name="firstName" id="firstName">
    <br>
    <label for="$lastName">Nazwisko:</label>
    <input type="text" name="$lastName" id="$lastName">
    <br>
    <label for="street">Adres:</label>
    <input type="text" name="street" id="street">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br><br>
    <label for="cardNumber">Numer karty:</label>
    <input type="number" name="cardNumber" id="cardNumber">
    <br>
    <label for="cardDate">Ważność karty:</label>
    <input type="date" name="cardDate" id="cardDate">
    <br>
    <label for="cardCVV">CVV (3 cyfry z tyłu karty):</label>
    <input type="number" name="cardCVV" id="cardCVV" min="0" max="999">
    <br><br>
    <label for="arrivalDate">Data przyjazdu:</label>
    <input type="date" name="arrivalDate" id="arrivalDate">
    <br>
    <label for="departureDate">Data odjazdu:</label>
    <input type="date" name="departureDate" id="departureDate">
    <br><br>
    <label for="addBed">Czy łóżko dla dziecka?</label>
    <input type="CHECKBOX" name="addBed" id="addBed">
    <br><br>
    Dodatki:
    <br>
    <label for="airConditioning">Klimatyzacja</label>
    <input type="CHECKBOX" name="airConditioning" id="airConditioning">
    <br>
    <label for="cigaretteCase">Papielniczka</label>
    <input type="CHECKBOX" name="cigaretteCase" id="cigaretteCase">
    <br>
    <br>
    <input type="submit" name="Submit" value="Submit">
    <input type="submit" name="Wczytaj" value="Wczytaj">
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['Submit'])) {
            $people = $_POST['people'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['$lastName'];
            $street = $_POST['street'];
            $email = $_POST['email'];
            $cardNumber = $_POST['cardNumber'];
            $cardDate = $_POST['cardDate'];
            $cardCVV = $_POST['cardCVV'];
            $arrivalDate = $_POST['arrivalDate'];
            $departureDate = $_POST['departureDate'];
            $addBed = $_POST['addBed'];
            $airConditioning = $_POST['airConditioning'];
            $cigaretteCase = $_POST['cigaretteCase'];

            if(!$fd = fopen('./reservation.csv', 'a')){
                echo("Nie mogę otworzyć pliku reservation.txt");
            }
            switch ($addBed){
                case "on": $addBed = "yes"; break;
                default: $addBed = "no";
            }
            switch ($airConditioning){
                case "on": $airConditioning = "yes"; break;
                default: $airConditioning = "no";
            }
            switch ($cigaretteCase){
                case "on": $cigaretteCase = "yes"; break;
                default: $cigaretteCase = "no";
            }
            fwrite($fd, "\n" . $firstName . ";" . $lastName . ";" . $street . ";" . $email . ";" . $cardNumber . ";" . $cardDate . ";" . $cardCVV . ";" . $people . ";" . $arrivalDate . ";" . $departureDate . ";" . $addBed . ";" . $airConditioning . ";" . $cigaretteCase);

            fclose($fd);
        } elseif (isset($_POST['Wczytaj'])) {
            if(!$fd = fopen('./reservation.csv', 'r')){
                echo("Nie mogę otworzyć pliku reservation.txt");
            }
            while(!feof(($fd))){
                $str = fgets($fd);
                $str = nl2br($str);
                echo($str);
            }
            fclose($fd);
        }
    }

?>

</body>
</html>
