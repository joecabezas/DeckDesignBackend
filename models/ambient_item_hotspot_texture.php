<?php
class AmbientItemHotspotTexture extends AppModel {
	var $name = 'AmbientItemHotspotTexture';
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
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'AmbientItemHotspot' => array(
			'className' => 'AmbientItemHotspot',
			'foreignKey' => 'ambient_item_hotspot_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
