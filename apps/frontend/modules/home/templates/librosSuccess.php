<h1 class="text-center"><?php echo $libros->getTitulo() ?></h1>
<div class="row">
  <div id='libro' class="text-center">
    <p><?php echo nl2br($libros->getContenido()) ?></p>
  </div>
</div>
