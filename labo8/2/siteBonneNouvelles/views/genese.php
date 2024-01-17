<div id="contenu">
	<h2>La Genèse</h2>
	<p>Bienvenue sur la page de la genèse.</p>
	<p>Cette page est demandée grâce à la valeur 'genese' du paramètre 'action' passé par la méthode GET, visible dans l'URL /index.php?action=genese.</p>
	<table id="tableBalises">
		<thead>
			<tr>
				<th>Année</th>
				<th>Cours</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($cphp as $annee => $cours) { ?>
			<tr>
			<td><span class="html"><?php echo $annee ?></span></td>
			<td><?php echo $cours ?></td>		
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<img src="<?php echo CHEMIN_VUES ?>images/big-w3cvalidtemplate.png" alt="W3C Valid" >
</div><!-- #contenu -->