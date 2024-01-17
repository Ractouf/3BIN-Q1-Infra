<div id="contenu">
	<h2>Les Livres</h2>
	<p>Bienvenue sur la page des livres.</p>
	<table id="tableBalises">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Auteur</th>
			</tr>
		</thead>
		<tbody>
		<?php for ($i=0;$i<count($tablivres);$i++) { ?>
			<tr>
			<td><span class="html"><?php echo $tablivres[$i]->titre() ?></span></td>
			<td><?php echo $tablivres[$i]->auteur() ?></td>		
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div><!-- #contenu -->