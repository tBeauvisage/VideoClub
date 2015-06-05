<?php

//namespace Video\dao;



class FilmDAO {


public static function getListNew(){
	//use Video\model\TypeFilm;
	include_once ('Connect.php');
	include_once ('model/Film.php');
	// connection BDD
	$pdo = Connect::getConnection();
	
	$sql = "SELECT * FROM film inner join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM where DATE_ADD(DATE_FILM,INTERVAL 6 MONTH)> CURDATE();";
			
	$result = $pdo->query($sql);

	$result->setFetchMode(PDO::FETCH_OBJ);
	
	
	$films = array();
		
	// transformer recordset en tableau
	while( $ligne = $result->fetch() ) // on récupère la liste 
	{
			$TypeFilm = new TypeFilm($ligne->CODE_TYPE_FILM, $ligne->LIB_TYPE_FILM);
			$Film = new Film($ligne->ID_FILM,$TypeFilm, $ligne->TITRE_FILM,$ligne->DATE_FILM,$ligne->REF_IMAGE,$ligne->RESUME,$ligne->CASTING);
			array_push($films, $Film);
	}
	
	$result->closeCursor(); // on ferme le curseur des résultats
		   
	

	return $films;
	
	
}
	
public static function getListFilm($codeFilm){
	//use Video\model\TypeFilm;
	include_once ('Connect.php');
	include_once ('model/Film.php');
	// connection BDD
	$pdo = Connect::getConnection();

	$sql = "SELECT * FROM film inner join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM where film.CODE_TYPE_FILM =  '$codeFilm';";
		
	$result = $pdo->query($sql);

	$result->setFetchMode(PDO::FETCH_OBJ);


	$films = array();

	// transformer recordset en tableau
	while( $ligne = $result->fetch() ) // on récupère la liste
	{
		$TypeFilm = new TypeFilm($ligne->CODE_TYPE_FILM, $ligne->LIB_TYPE_FILM);
		$Film = new Film($ligne->ID_FILM,$TypeFilm, $ligne->TITRE_FILM,$ligne->DATE_FILM,$ligne->REF_IMAGE,$ligne->RESUME,$ligne->CASTING);
		array_push($films, $Film);
	}

	$result->closeCursor(); // on ferme le curseur des résultats
	 


	return $films;


}	
public static function getFilm($idFilm){
	//use Video\model\TypeFilm;
	include_once ('Connect.php');
	include_once ('model/Film.php');
	include_once ('model/TypeFilm.php');
	// connection BDD
	$pdo = Connect::getConnection();

	$sql = "SELECT * FROM film inner join typefilm on film.CODE_TYPE_FILM = typefilm.CODE_TYPE_FILM where film.ID_FILM =  '$idFilm';";

	$result = $pdo->query($sql);

	$result->setFetchMode(PDO::FETCH_OBJ);
	while( $ligne = $result->fetch() ) // on récupère la liste
	{
		$TypeFilm = new TypeFilm($ligne->CODE_TYPE_FILM, $ligne->LIB_TYPE_FILM);
		$Film = new Film($ligne->ID_FILM,$TypeFilm, $ligne->TITRE_FILM,$ligne->DATE_FILM,$ligne->REF_IMAGE,$ligne->RESUME,$ligne->CASTING);
}


$result->closeCursor(); // on ferme le curseur des résultats



return $Film;


}
}