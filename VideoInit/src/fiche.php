
<?php
include_once ('config.inc.php');
include_once ('dao/FilmDAO.php');
$Film = FilmDAO::getFilm ( $_GET ['id'] );

require ('view/layoutFiche.php');
?>
