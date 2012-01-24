<?php
	class CategoryHelper extends AppHelper {

		var $helpers = array('Html');

		function generate($data) {
			//debug($data);

			//por cada category
			$first = true;
			foreach($data as $c)
			{
				if(!$first)
					echo ',';
				$first = false;

				echo '{';

				//imprimir name
				echo '"name":"'.$c['GalleryCategory']['name'].'",';
				
				//poner comas en los items
				$first_item = true;

				//imprimir items
				echo '"items":[';
				foreach($c['GalleryCategoryItem'] as $item)
				{
					if(!$first_item)
						echo ',';
					$first_item = false;
					
					echo '{';
					echo '	"content_title":"'.$item['content_title'].'",';
					echo '	"content_text":"'.$item['content_text'].'",';

					$key = 'GalleryCategoryItem';
					$files_dir = Inflector::underscore(Inflector::singularize($key));
					$field = 'image';
					$img = $item['image'];
					$img_dir = $item['image_dir'];
					$img_url_chica = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;
					$img_url_grande = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'grande_'.$img;

					echo '"imagen_chica":"'.$this->Html->url($img_url_chica, true).'",';
					echo '"imagen_grande":"'.$this->Html->url($img_url_grande, true).'"';

					echo '}';
				}
				echo '],';

				//imprimir categorias (recursivamente)
				echo '"categories":[';
				$this->generate($c['children']);
				echo ']';
				echo '}';
			}
		}
	}
?>
