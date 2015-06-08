
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<title>Insert title here</title>
</head> 
<body>
	<header>Placeholder</header>
	<aside id="List">
	
	<h1>Catégories</h1>
	<ul id="type_films">
	
	<?php 
	foreach ( $lTFilms as $tf ) {
		
		echo '<li><a href="index.php?code_type_film=' . $tf->getCodeFilm () . '">' . $tf->getLibelle () . '</a></li>';
	}
	?>
	
	</ul>
	

	<a href = index.php>Nouveautés</a> 
	
	</aside>
	<div id="Evolutivelist">
	

		<ul id="films">
		<?php
		
		foreach ( $lFilms as $f ) {
			
			echo '<ol><a href="fiche.php?id=' . $f->getIdFilm () . '">' . $f->getTitreFilm () . '</a></ol>';
		}
		?>
		</ul>

	
	</div>



</body>
</html>




