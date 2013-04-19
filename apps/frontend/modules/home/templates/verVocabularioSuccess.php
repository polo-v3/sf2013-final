<h1>Lista de Vocabulario</h1>
<table class="table">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Idioma</th>
		<th>Nivel</th>
		<th>Palabra</th>
		<th>Traducción</th>
		<th></th>
	</tr>

	<?php foreach($vocabulario as $vocabulario): ?>
	<tr>
	  <td><?php echo $vocabulario->getId() ?></td>
	  <td><?php echo $vocabulario->getNombre() ?></td>
	  <td><?php echo $vocabulario->getIdioma() ?></td>
	  <td><?php echo $vocabulario->getNivel() ?></td>
	  <td><?php echo $vocabulario->getPalabra() ?></td>
	  <td><?php echo $vocabulario->getTraduccion() ?></td>
	  <td><a href="#">Modificar palabra</a></td>
	</tr>
	<?php endforeach ?>
</table>	

<a href="<?php echo url_for('@default?module=home&action=introducirPalabra') ?>">Introducir nuevas palabras</a>
