<!DOCTYPE>
<html lang="en">
<head>
    <h3> MIESIAC</h3>
</head>
<body>
<form action="cw1_7.php" method="post" >
    Podaj miesiac: <input type="text" name="miesiac"  >
    <br>
    <input type="submit">
</form>
<br>
 <?php
 $miesiac = $_POST["miesiac"];
        switch($miesiac) {
            case "1":
                echo "Styczeń ma 31 dni";
                break;
            case "2":
                echo "Luty ma 29 dni";
                break;
            case "3":
                echo "Marzec ma 31 dni";
                break;
            case "4":
                echo "Kwiecień ma 30 dni";
                break;
            case "5":
                echo "Maj ma 31 dni";
                break;
            case "6":
                echo "Czerwiec ma 30 dni";
                break;
            case "7":
                echo "Lipiec ma 31 dni";
                break;
            case "8":
                echo "Sierpień ma 31 dni";
                break;
            case "9":
                echo "Wrzesień ma 30 dni";
                break;
            case "10":
                echo "Październik ma 31 dni";
                break;
            case "11":
                echo "Listopad ma 30 dni";
                break;
            case "12":
                echo "Grudzień ma 31 dni";
                break;
            default:
                echo "złe dane";
        }

 ?><br>

</body>
</html>

