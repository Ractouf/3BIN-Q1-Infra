<?php
class Livre{
	private $_no;
	private $_titre;
	private $_auteur;
	
	public function __construct($no,$titre, $auteur){
		$this->_no = $no;
		$this->_titre = $titre;
		$this->_auteur = $auteur;
	}
	
	public function no(){
		return $this->_no;		
	}	
		
	public function titre(){
		return $this->_titre;
	}
	
	public function auteur(){
		return $this->_auteur;
	}
}
?>