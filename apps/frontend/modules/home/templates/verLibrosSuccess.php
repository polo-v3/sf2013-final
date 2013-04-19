<h1>Lista de Libros</h1>
<table class="table">
	<tr>
		<th>id</th>
		<th>nombre</th>
		<th>titulo</th>
		<th>autor</th>
		<th>contenido</th>
		<th>idioma</th>
		<th>nivel</th>
		<th></th>
	</tr>
  
	<?php foreach($libros as $libro): ?>
	<tr>
	  <td><?php echo $libro->getId() ?></td>
	  <td><?php echo $libro->getNombre() ?></td>
	  <td><?php echo $libro->getTitulo() ?></td>
	  <td><?php echo $libro->getAutor() ?></td>
	  <td><?php echo substr($libro->getContenido(), 0, 300).'...' ?></td>
	  <td><?php echo $libro->getIdioma() ?></td>
	  <td><?php echo $libro->getNivel() ?></td>
	  <td><a href="#">Modificar libro</a></td>
	</tr>
	<?php endforeach ?>
</table>	

<a href="<?php echo url_for('@default?module=home&action=introducirLibro') ?>">Introducir nuevos libros</a>
