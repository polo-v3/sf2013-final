<h2 class="text-center">Libros y ejercicios para aprender nuevos idiomas</h2>
<hr>
<h3 class="text-center">Listado de gramatica</h3>

<ul class="inline text-center">
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h1>Nivel 1</h1></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="<?php echo url_for('@gramatica?nivel=1&nombre=Gr01') ?>">GR01</a></li>
        <li><a href="<?php echo url_for('@gramatica?nivel=1&nombre=Gr02') ?>">GR02</a></li>
      </ul>
    </div>
  </li>
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h1>Nivel 2</h1></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="<?php echo url_for('@gramatica?nivel=2&nombre=Gr01') ?>">GR01</a></li>
        <li><a href="<?php echo url_for('@gramatica?nivel=2&nombre=Gr02') ?>">GR02</a></li>
      </ul>
    </div>
  </li>
</ul>

<hr>
<h3 class="text-center">Listado de libros</h3>
<ul class="inline text-center">
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h1>Nivel 1</h1></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="<?php echo url_for('@libros?nivel=1&nombre=Lb01') ?>">LB01</a></li>
        <li><a href="<?php echo url_for('@libros?nivel=1&nombre=Lb02') ?>">LB02</a></li>
      </ul>
    </div>
  </li>
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h1>Nivel 2</h1></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="<?php echo url_for('@libros?nivel=2&nombre=Lb01') ?>">LB01</a></li>
        <li><a href="<?php echo url_for('@libros?nivel=2&nombre=Lb02') ?>">LB02</a></li>
      </ul>
    </div>
  </li>
</ul>

<hr>
<h3 class="text-center">Listado de vocabulario</h3>
<ul class="inline text-center">
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h1>Nivel 1</h1></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="<?php echo url_for('@vocabulario?nivel=1&nombre=Gr01') ?>">VC01</a></li>
        <li><a href="<?php echo url_for('@vocabulario?nivel=1&nombre=Gr02') ?>">VC02</a></li>
      </ul>
    </div>
  </li>
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><h1>Nivel 1</h1></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="<?php echo url_for('@vocabulario?nivel=2&nombre=Gr01') ?>">VC01</a></li>
        <li><a href="<?php echo url_for('@vocabulario?nivel=2&nombre=Gr02') ?>">VC02</a></li>
      </ul>
    </div>
  </li>
</ul>
