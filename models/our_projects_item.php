<?php
class OurProjectsItem extends AppModel {
	var $name = 'OurProjectsItem';

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
}
