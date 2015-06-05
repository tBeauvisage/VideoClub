
<ul id="type_films">

<?php 
	
	foreach ($tFilms as $tf){
		
		echo '<li><a href="index.php?code_type_film='.$tf->getCodeFilm().'">'.$tf->getLibelle().'</a></li>';
		
	}
	
	echo "</select>";
	
?>
</ul>