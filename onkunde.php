<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 id="title">Madlibs</h1>
<nav>
<li><a href="index.php">Er heerst paniek...</a></li>
<li><a href="onkunde.php">Onkunde</a></li>
</nav>
	
	<form action="onkunde_get.php" method="get" name="madlibs">
		<lable>Wat zou je graag willen kunnen?</lable><input type="text" name="vr1"><br>
		<label>Met welke persoon kun je goed opschieten?</label><input type="text" name="vr2"><br>
		<label>Wat is je favoriete getal?</label><input type="text" name="vr3"><br>
		<label>Wat heb je altijd bij je als je op vakantie gaat?</label><input type="text" name="vr4"><br>
		<label>Wat is je beste persoonlijke eigenschap?</label><input type="text" name="vr5"><br>
		<label>Wat is je slechtste persoonlijke eigenschap?</label><input type="text" name="vr6"><br>
		<label>Wat is het ergste dat je kan overkomen?</label><input type="text" name="vr7"><br>
			<input type="submit" name="submit">
	</form>

</body>
</html>