<?php 
class LivresController{

	public function __construct() {
	
	}
			
	public function run(){	
		
		# Variable HTML dans la vue
		$tablivres='';
		
		# Sélection de tous les livres sous forme de tableau
		$tablivres=Db::getInstance()->select_livres();
		
		# Ecrire ici la vue
		# $tablivres contient un tableau d'objets de la classe Livre
		require_once(CHEMIN_VUES . 'livres.php');
	}
} 