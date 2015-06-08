<?php
	include_once ('config.inc.php');
	include_once ('dao/TypeFilmDAO.php');
	include_once ('dao/FilmDAO.php');
	
	
	$lTFilms = TypeFilmDAO::getListTypeFilm ();
	
		
	if (isset ( $_GET ['code_type_film'] )) {
		$lFilms = FilmDAO::getListFilm ( $_GET ['code_type_film'] );

	} else {
		$lFilms = FilmDAO::getListNew ();
		
	}
	
	
	require('view/layoutIndex.php');



