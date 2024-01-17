<?php 
class ContactController{

	public function __construct() {

	}
			
	public function run(){	
		
		# Envoi d'un email sur base des informations du formulaire transmises par la méthode POST
		$notification='';
		if (!empty($_POST)) {
			
			if (empty($_POST['email']) && empty($_POST['message'])) {
				$notification='Entrez un email et un message non vides!';
			} elseif (empty($_POST['email'])) {
				$notification='Entrez un email non vide!';
			} elseif (empty($_POST['message'])) {
				$notification='Entrez un message non vide!';
			} else {			
				$to      = 'webmaster@votresite';
				$subject = 'Test du site des bonnes nouvelles';
				$message = $_POST['message'];
				$headers = 'From: ' . $_POST['email'];

				if (mail($to, $subject, $message, $headers)) {
					$notification='Vos informations ont été transmises avec succès.';
				} else {
					$notification='Vos informations n\'ont pas été transmises.';
				}
			}
		}
		
		# Ecrire ici la vue
		require_once(CHEMIN_VUES . 'contact.php');
	}
} 