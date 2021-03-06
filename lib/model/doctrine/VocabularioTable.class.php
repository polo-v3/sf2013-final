<?php

/**
 * VocabularioTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class VocabularioTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object VocabularioTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Vocabulario');
    }
    
    public function getById($id) {
			return $this->createQuery('a')->where('a.id = ?', $id)->fetchOne();
		}
		
		public function getAll() {
      return $this->createQuery('a')->execute();
		}
		
		public function getByNameInLevel($level, $name) {
			return $this->createQuery('a')->where('a.nombre = ?', $name)->andwhere('a.nivel = ?', $level)->execute();
		}
		
		public function getAllByLevel() {
      $result = array();
      $result[] = array();
      $todos = $this->createQuery('a')->execute();
      foreach($todos as $uno) {
        $guardar = true;
        $nombre = $uno->getNombre();
        $nivel = $uno->getNivel();
        foreach ($result as $guardados) {
          foreach($guardados as $guardado) {
            if ($guardado == $nombre) {
              $guardar = false;
            }
          }
        }
        if ($guardar) {
            $posicion[$nivel] = $nombre;
            $result[$nivel] = $posicion;
          }
      }
      return $result;
		}
}
