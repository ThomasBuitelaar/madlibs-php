<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id="title">Er heerst paniek...</h1>
<nav>
<li><a href="index.php">Er heerst paniek...</a></li>
<li><a href="onkunde.php">Onkunde</a></li>
</nav>
<div id="content">
<h2>Er heerst paniek...</h2>
<br>
<p>Er heerst paniek in het koninkrijk <?= $_GET["vr3"]?>. Koning <?= $_GET["vr6"]?> is ten einde raad en als koning<br>
Egmond ten einde raad is, dan roept gij zijn ten-einde-raadsheer <?= $_GET["vr2"]; ?>.</p>
<br>
<p>"<?= $_GET["vr2"]; ?>! Het is een ramp! Het is een schande!"</p>
<p>"Sire, Majesteit, Uw Luidruchtigheid, wat is er aan de hand?"</p>
<br>
<p>"Mijn <?= $_GET["vr1"] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= $_GET["vr5"]?> voor hem gekocht!"</p>
<p>"Majesteit, uw <?= $_GET["vr1"] ?> komt vast vanzelf weer terug"</p>
<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_GET["vr8"]?> leren?"</p>
<p>"Maar Sire, daar kunt u toch uw <?= $_GET["vr7"]?> voor gebruiken?"</p>
<p>"<?= $_GET["vr2"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
<p>"Mij <?= $_GET["vr4"]?>, Sire"</p>

</div>
