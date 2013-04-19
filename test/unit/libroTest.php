<?php

	require_once dirname(__FILE__).'/../bootstrap/Doctrine.php';

	$test = new lime_test(3);
	
	$test->comment('Comprobacion de setNombre y getNombre');
	$libro = new Libro();
	$libro->setNombre('Juan');
	$test->is('Juan', $libro->getNombre());
	
	$test->comment('Test de toString');
	$libro = new Libro();
	$libro->setNombre('Juan');
	$test->is('Juan',$libro->__toString());
	
	$test->comment('Test de guardado y recuperado');
	$libro = new Libro();
	$libro->setNombre('Juan');
	$libro->save();
	$libro_recuperado = Doctrine::getTable('Libro')->getById($libro->getId());
	$test->is($libro, $libro_recuperado);
?>
