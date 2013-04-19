<h1>Realizar ejercicios</h1>
<table class="table">
  <thead>
    <tr>
      <th>Enunciado</th>
      <th>Solucion</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; ?>
    <?php foreach ($gramaticas as $gramatica): ?>
    <tr>
      <td><?php echo $gramatica->getEnunciado() ?></td>
      <td><div id="solucion<?php echo $i; ?>"><input type="text" name="respuesta<?php echo $i; ?>" id="respuesta<?php echo $i; ?>"></div></td>
      <td><a href="#" class="btn" id="resolver<?php echo $i; ?>">Resolver</a></div>
      <script type="text/javascript">
        $(window).load(function() {
          $('#resolver<?php echo $i; ?>').click(function(){
            var respuesta = $('#respuesta<?php echo $i; ?>').val();
            if (respuesta == '<?php  echo preg_replace("(\r\n)", "", $gramatica->getSolucion()); ?>') {
              $('#solucion<?php echo $i; ?>').html('<div class="control-group success"><div class="controls">  <input type="text" id="inputSuccess" value="'+respuesta+'"><span class="help-inline">¡Acertaste!</span></div></div>');
            } else {
              $('#solucion<?php echo $i; ?>').html('<div class="control-group error"><div class="controls"><input type="text" id="inputError" value="'+respuesta+'"><span class="help-inline">La respuesta es '+'<?php  echo preg_replace("(\r\n)", "", $gramatica->getSolucion()); ?>'+'</span></div></div>');
            }
          });
         });
        
      </script>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>

