<?php
class MainController extends AppController {

	var $name = 'Main';
	var $helpers = array('Category');
	var $uses = array('AboutUsItem', 'OurProjectsItem', 'GalleryCategory', 'Ambient', 'ContactInfo');


	function index()
	{
		
	}

	function getJson()
	{
		$this->layout = 'ajax';
		//Configure::write('debug', 0);

		//obtener datos

		//quienes somos
		$d['AboutUsItems'] = $this->AboutUsItem->find('all');

		//nuestros proyectos
		$d['OurProjectsItems'] = $this->OurProjectsItem->find('all');

		//galeria
		$d['GalleryCategories'] = $this->GalleryCategory->find('threaded');

		//imagina tus espacios
		$this->Ambient->recursive = 3;
		$d['Ambients'] = $this->Ambient->find('all');

		//informacion de contacto
		$d['ContactInfos'] = $this->ContactInfo->find('all');

		$this->set('d', $d);
	}
}
