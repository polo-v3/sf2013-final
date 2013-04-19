<?php

/**
 * home actions.
 *
 * @package    sf2013
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->librosXNiveles = Doctrine::getTable('Libro')->getAllByLevel();
    $this->vocabularioXNiveles = Doctrine::getTable('Vocabulario')->getAllByLevel();
    $this->gramaticaXNiveles = Doctrine::getTable('Gramatica')->getAllByLevel();

  }	
  
  public function executeLibros(sfWebRequest $request) {
    $libros = Doctrine::getTable('Libro')->getByNameInLevel($request->getParameter('nivel'), $request->getParameter('nombre'));
    $this->libros = $libros;
  }
  
  public function executeVerLibros(sfWebRequest $request)
  {
    $libros = Doctrine::getTable('Libro')->getAll();
    $this->libros = $libros;
  }	

  public function executeIntroducirPalabra(sfWebRequest $request) {
    $this->form = new VocabularioForm();
  }
  
  public function executeSubmit(sfWebRequest $request) {
    $this->form = new VocabularioForm();
    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->redirect('home/gracias');
      } else {
        $this->setTemplate('introducirPalabra');
      }
    }
  }
  
  public function executeVerVocabulario(sfWebRequest $request) {
    $vocabulario = Doctrine::getTable('Vocabulario')->getAll();
    $this->vocabulario = $vocabulario;
  }
  
  public function executeVocabulario(sfWebRequest $request) {
    $vocabularios = Doctrine::getTable('Vocabulario')->getByNameInLevel($request->getParameter('nivel'), $request->getParameter('nombre'));
    $this->vocabularios = $vocabularios;
  }
  
  public function executeIntroducirLibro(sfWebRequest $request) {
    $this->form = new LibroForm();
  }
  
  public function executeSubmitLibro(sfWebRequest $request) {
    $this->form = new LibroForm();
    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->redirect('home/gracias');
      } else {
        $this->setTemplate('introducirLibro');
      }
    }
  }
  
  public function executeGracias() {
  }
}


