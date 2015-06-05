<?php

//namespace Video\dao;

//use Video\model\TypeFilm;
include_once ('Connect.php');
include('model/TypeFilm.php');

class TypeFilmDAO {


public static function getListTypeFilm(){
	
	// connection BDD
	$pdo = Connect::getConnection();
	
	$sql = "SELECT * FROM typefilm;";
			
	$result = $pdo->query($sql);

	$result->setFetchMode(PDO::FETCH_OBJ);
	
	
	$tfilms = array();
		
	// transformer recordset en tableau
	while( $ligne = $result->fetch() ) // on récupère la liste 
	{
			$tFilm = new TypeFilm($ligne->CODE_TYPE_FILM, $ligne->LIB_TYPE_FILM);
			array_push($tfilms, $tFilm);
	}
	
	$result->closeCursor(); // on ferme le curseur des résultats
		   
	

	return $tfilms;
	
	
}
	
	
}