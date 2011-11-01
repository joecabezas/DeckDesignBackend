<?php
class Ambient extends AppModel {
	var $name = 'Ambient';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'AmbientItem' => array(
			'className' => 'AmbientItem',
			'foreignKey' => 'ambient_id',
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
