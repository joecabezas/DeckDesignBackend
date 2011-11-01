<?php
class AmbientItem extends AppModel {
	var $name = 'AmbientItem';
	var $displayField = 'name';

	var $actsAs = array(
		'Upload.Upload' => array(
			'image' => array(
				'fields' => array(
					'dir' => 'image_dir',
				),
				'thumbsizes' => array(
					'grande' => '640w',
					'chica' => '80x80',
				),
				'thumbnailMethod' => 'php',
			),
			'mask' => array(
				'fields' => array(
					'dir' => 'mask_dir',
				),
				'thumbsizes' => array(
					'grande' => '640w',
					'chica' => '80x80',
				),
				'thumbnailMethod' => 'php',
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Ambient' => array(
			'className' => 'Ambient',
			'foreignKey' => 'ambient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'AmbientItemHotspot' => array(
			'className' => 'AmbientItemHotspot',
			'foreignKey' => 'ambient_item_id',
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
