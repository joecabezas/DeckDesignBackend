<?php
class GalleryCategory extends AppModel {
	var $name = 'GalleryCategory';
	var $displayField = 'name';

	var $virtualFields = array(
		'parent_id' => 'GalleryCategory.gallery_category_id'
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'GalleryCategoryParent' => array(
			'className' => 'GalleryCategory',
			'foreignKey' => 'gallery_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		/*
		'GalleryCategoryChild' => array(
			'className' => 'GalleryCategory',
			'foreignKey' => 'gallery_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		*/
		'GalleryCategoryItem' => array(
			'className' => 'GalleryCategoryItem',
			'foreignKey' => 'gallery_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
