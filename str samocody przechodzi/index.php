<!DOCTYPE html>
<html lang="pl">
<head>
<title>Komis samochodowy</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
</br></br>
  <h1>Komis samochodowy</h1>
</header>

<section>

  <nav>
    
      <a href="index.php?p=dodaj_klienta" class="button">Klienci</a>
      <a href="index.php?p=dodaj_mechanika" class="button">Mechanicy</a>
	  <a href="index.php?p=dodaj_samochod" class="button">Samochody</a>
	  <a href="index.php?p=dodaj_naprawe" class="button">Naprawy</a>
	  <a href="index.php?p=dodaj_czesc" class="button">Części</a>
	  <a href="#" class="buttonv">Wyloguj</a>
     
  </nav>
 
</section>
<article>
<?php
if (isset($_GET['p']) && $_GET['p'] != ''){
$p = $_GET['p'];
include ('podstrony/' . $p . '.php');
} else {
    echo '<h2>Witamy na stronie głównej</h2>';

}
?>
  </article>

<footer>
  <p><center>Marcin Kowalski</center></p>
</footer>

</body>
</html>