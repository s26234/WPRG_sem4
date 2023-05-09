<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Zad1</title>
</head>
<body>
<?php
    session_start();
    $validUsername = "admin";
    $validPassword = "password";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION['username'] = $username;
            setcookie("username", $username, time() + (86400 * 30));
        } else {
            echo "Nie udało się zalogować.";
        }
    }

    if (isset($_SESSION['username'])) {

        $username = $_COOKIE['username'];

        echo "Hello, ".$username."!";
        
        echo "<form method='post' action=''>
                  <input type='submit' name='logout' value='Wyloguj'>
              </form>";

        if (isset($_POST['logout'])) {
            unset($_COOKIE['username']);
            session_destroy();
        }

        echo '<form method="post">
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
        <label for="lastName">Nazwisko:</label>
        <input type="text" name="lastName" id="lastName">
        <br>
        <label for="street">Adres:</label>
        <input type="text" name="street" id="street">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="cardNumber">Numer karty kredytowej:</label>
        <input type="number" name="cardNumber" id="cardNumber">
        <br>
        <label for="cardDate">Data ważności karty:</label>
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
        <label for="addBed">Czy jest potrzeba dostawienia łózka dla dziecka?</label>
        <input type="CHECKBOX" name="addBed" id="addBed">
        <br><br>
        Dodatkowe udogodnienia:
        <br>
        <label for="airConditioning">Klimatyzacja</label>
        <input type="CHECKBOX" name="airConditioning" id="airConditioning">
        <br>
        <label for="cigaretteCase">Papielniczka</label>
        <input type="CHECKBOX" name="cigaretteCase" id="cigaretteCase">
        <br>
        <br>
        <input type="submit" name="Submit" value="Submit">
        <input type="submit" name="Reset" value="Reset">
    </form>';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST['Submit'])) {
                $people = $_POST['people'];
                setcookie("people", $people, time() + 10);

                $firstName = $_POST['firstName'];
                setcookie("firstName", $firstName, time() + 10);

                $lastName = $_POST['lastName'];
                setcookie("lastName", $lastName, time() + 10);

                $street = $_POST['street'];
                setcookie("street", $street, time() + 10);

                $email = $_POST['email'];
                setcookie("email", $email, time() + 10);

                $cardNumber = $_POST['cardNumber'];
                setcookie("cardNumber", $cardNumber, time() + 10);

                $cardDate = $_POST['cardDate'];
                setcookie("cardDate", $cardDate, time() + 10);

                $cardCVV = $_POST['cardCVV'];
                setcookie("cardCVV", $cardCVV, time() + 10);

                $arrivalDate = $_POST['arrivalDate'];
                setcookie("arrivalDate", $arrivalDate, time() + 10);

                $departureDate = $_POST['departureDate'];
                setcookie("departureDate", $departureDate, time() + 10);

                $addBed = $_POST['addBed'];
                setcookie("addBed", $addBed, time() + 10);

                $airConditioning = $_POST['airConditioning'];
                setcookie("airConditioning", $airConditioning, time() + 10);

                $cigaretteCase = $_POST['cigaretteCase'];
                setcookie("cigaretteCase", $cigaretteCase, time() + 10);

            }elseif (isset($_POST['Reset'])) {
                unset($_COOKIE["people"]);
                unset($_COOKIE["firstName"]);
                unset($_COOKIE["lastName"]);
                unset($_COOKIE["street"]);
                unset($_COOKIE["email"]);
                unset($_COOKIE["cardNumber"]);
                unset($_COOKIE["cardDate"]);
                unset($_COOKIE["cardCVV"]);
                unset($_COOKIE["arrivalDate"]);
                unset($_COOKIE["departureDate"]);
                unset($_COOKIE["addBed"]);
                unset($_COOKIE["airConditioning"]);
                unset($_COOKIE["cigaretteCase"]);
            }
        }

        echo("<h2>" . "Informacje o rezerwacji" . "</h2>");

        echo("<b>" . "Imię: " . "</b>" . $_COOKIE["firstName"] . "<br>");
        echo ("<b>" . "Nazwisko: " . "</b>" . $_COOKIE["lastName"]) . "<br>";
        echo("<b>" . "Adres: " . "</b>" . $_COOKIE["street"] . "<br>");
        echo("<b>" . "Email: " . "</b>" . $_COOKIE["email"] . "<br>");


        echo("<h2>" . "Dane karty kredytowej" . "</h2>");

        echo("<b>" . "Numer karty kredytowej: " . "</b>" . $_COOKIE["cardNumber"] . "<br>");
        echo("<b>" . "Data ważności karty: " . "</b>" . $_COOKIE["cardDate"] . "<br>");
        echo("<b>" . "CCV (3 cyfry z tyłu karty): " . "</b>" . $_COOKIE["cardCVV"] . "<br>");


        echo("<h2>" . "Pobyt" . "</h2>");

        echo("<b>" . "Ilość ludzi: " . "</b>" . $_COOKIE["people"] . "<br>");
        echo("<b>" . "Data przyjazdu: " . "</b>" . $_COOKIE["arrivalDate"] . "<br>");
        echo("<b>" . "Data odjazdu: " . "</b>" . $_COOKIE["departureDate"] . "<br>");

        echo("<h2>" . "Dodatkowe Udogodnienia" . "</h2>");

        switch ($_COOKIE["addBed"]) {
            case "on":
                echo("<b>" . "Czy jest potrzeba dostawienia łóżka: " . "</b>" . "Tak" . "<br>");
                break;
            default:
                echo("<b>" . "Czy jest potrzeba dostawienia łóżka: " . "</b>" . "Nie" . "<br>");
        }

        switch ($_COOKIE["airConditioning"]) {
            case "on":
                echo("<b>" . "Klimatyzacja: " . "</b>" . "Tak" . "<br>");
                break;
            default:
                echo("<b>" . "Klimatyzacja: " . "</b>" . "Nie" . "<br>");
        }

        switch ($_COOKIE["cigaretteCase"]) {
            case "on":
                echo("<b>" . "Papielniczka:" . "</b>" . "Tak" . "<br>");
                break;
            default:
                echo("<b>" . "Papielniczka:" . "</b>" . "Nie" . "<br>");
        }
    } else {
        echo "<form method='post' action=''>
                  <p>Zaloguj sie do systemu by uzyskac dostep do formularza</p>
                  <input type='text' name='username' placeholder='Nazwa użytkownika' required><br>
                  <input type='password' name='password' placeholder='Hasło' required><br>
                  <input type='submit' name='login' value='Zaloguj'>
              </form>";
    }
?>
</body>
</html>
