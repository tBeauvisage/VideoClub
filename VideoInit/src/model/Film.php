<?php
class Film{
	
	private $sIdFilm;
	private $TypeFilm;
	private $sTitreFilm;
	private $sDateFilm;
	private $sRefImage;
	private $sResume;
	private $sCasting;
	
	
	public function __construct($sIdFilm,$TypeFilm,$sTitreFilm,$sDateFilm,$sRefImage,$sResume,$sCasting){
		$this->sIdFilm = $sIdFilm;
		$this->TypeFilm = $TypeFilm;
		$this->sTitreFilm = $sTitreFilm;
		$this->sDateFilm = $sDateFilm;
		$this->sRefImage = $sRefImage;
		$this->sResume = $sResume;
		$this->sCasting = $sCasting;
		
	}
	
	
	
	
	
	
	public function getIdFilm() {
		return $this->sIdFilm;
	}
	public function setIdFilm($sIdFilm) {
		$this->sIdFilm = $sIdFilm;
		return $this;
	}
	public function getTitreFilm() {
		return $this->sTitreFilm;
	}
	public function setTitreFilm($sTitreFilm) {
		$this->sTitreFilm = $sTitreFilm;
		return $this;
	}
	public function getDateFilm() {
		return $this->sDateFilm;
	}
	public function setDateFilm($sDateFilm) {
		$this->sDateFilm = $sDateFilm;
		return $this;
	}
	public function getRefImage() {
		return $this->sRefImage;
	}
	public function setRefImage($sRefImage) {
		$this->sRefImage = $sRefImage;
		return $this;
	}
	public function getResume() {
		return $this->sResume;
	}
	public function setResume($sResume) {
		$this->sResume = $sResume;
		return $this;
	}
	public function getCasting() {
		return $this->sCasting;
	}
	public function setCasting($sCasting) {
		$this->sCasting = $sCasting;
		return $this;
	}
	
	
	
	
	
	
	
}