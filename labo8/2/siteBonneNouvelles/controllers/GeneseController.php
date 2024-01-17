<?php 
class GeneseController{

	public function __construct() {

	}
			
	public function run(){	

		# Tableau de l'évolution du cours de PHP à l'IPL
		$cphp[2009] = 'PHP structuré en modules avec accès à SQLite comme base de données';
		$cphp[2010] = 'PHP structuré en modules avec accès à MySQL comme base de données';
		$cphp[2011] = 'PHP structuré en modules avec PDO OO accédant à MySQL comme base de données';
		$cphp[2012] = 'PHP structuré en MVC avec PDO OO accédant à MySql comme base de données';
		$cphp[2013] = 'PHP structuré en MVC avec PDO OO accédant à MySql comme base de données';
		$cphp[2014] = 'PHP structuré en MVC avec PDO OO accédant à MySql comme base de données';
		$cphp[2015] = 'PHP OO structuré en MVC avec PDO OO accédant à MySql comme base de données';

		# Un contrôleur se termine en écrivant une vue
		require_once(CHEMIN_VUES . 'genese.php');
	}
	
	

} 