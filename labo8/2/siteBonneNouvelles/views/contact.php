<div id="contenu">
	<h2>Contactez-nous</h2>
	<p>Bienvenue sur la page de contact.</p>
	<p>Cette page est demandée grâce à la valeur 'contact' du paramètre 'action' passé par la méthode GET, visible dans l'URL /index.php?action=contact.</p>
	<div id="notification"><?php echo $notification ?></div>
	<div class="formulaire">
		<form action="index.php?action=contact" method="post">
		<p>Votre email : <input type="text" name="email" /></p>
		<p><textarea rows="3" name="message">Entrez votre message ici</textarea></p>
		<p><input type="submit" name="form_contact" value="Envoyer"></p>
		</form>
	</div>
</div><!-- #contenu -->