<?php
class AmbientItemHotspot extends AppModel {
	var $name = 'AmbientItemHotspot';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'AmbientItem' => array(
			'className' => 'AmbientItem',
			'foreignKey' => 'ambient_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'AmbientItemHotspotTexture' => array(
			'className' => 'AmbientItemHotspotTexture',
			'foreignKey' => 'ambient_item_hotspot_id',
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
