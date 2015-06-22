<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Insert title here</title>
</head>

<body>
	<h1><?php echo $Film->getTitreFilm()?></h1>

	<img id="jaquette" src="<?php echo $Film->getRefImage() ?>"
		alt="<?php echo $Film->getTitreFilm()  ?>" />


	<div>
		<aside  id="casting"> <?php echo '<a>'. $Film->getCasting() . '</a>'?></aside>

<?php
echo '<a id ="synopsis">' . $Film->getResume () . '</a>'?>
</div>


</body>