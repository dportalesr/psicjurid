<?php
App::import('Controller','_base/Items');
class AlbumsController extends ItemsController{
	var $name = 'Albums';
	var $pageTitle = 'Galería de Fotos';
	var $uses = array('Album','Albumimg','Comment');

	function index(){
		$this->paginate['Album']['contain'] = array('Albumportada','Albumimg');
		$this->paginate['Album']['recursive'] = -1;
		$this->Album->recursive = -1;
		parent::index();
	}
}
?>