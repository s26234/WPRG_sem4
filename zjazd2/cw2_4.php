<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
<input type="number" name="start">
<br>
<input type="number" name="end">
<br>
<input type="submit" name="przycisk" value="pierwsze">
<br>
   <?php
   if (isset($_POST['przycisk'])){
	 $poczatek=$_POST['start'];
	 $koniec=$_POST['end'];
	 $przycisk=$_POST['przycisk'];
   if ($przycisk=='pierwsze'){ 
		for($liczba=$start; $liczba <= $end; $liczba++){
	  if(pierwszaliczba($liczba)){
    echo'<br></br>' .$liczba ; 
	       }
		  }
	 }
 }
  function pierwszaliczba($liczba) {
	if($liczba == 2) {
	return true;
	}
	 for($dzielnik = 3; $dzielnik < $liczba; $dzielnik++) {	
		if($liczba % $dzielnik == 0) {
		return false;
		}
	}
	return true; // Ta liczba jest liczbą pierwszą
}
?>
</form>
</body>
</html>
