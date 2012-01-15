{
	"data":
	{
		"logo":"img/logo.swf",
		"footer":"img/franja-footer.gif",
		"facebook_url":"http://www.facebook.com",
		"twitter_url":"http://www.twitter.com",
		"secciones":
		{
			"home":
			{
				"seccion":
				[
					{
						"img":"data/imagina.png",
						"texto":"Imagina tus Espacios"
					},
					{
						"img":"data/nuestra_diferencia.png",
						"texto":"Nuestra Diferencia"
					},
					{
						"img":"data/nuestros_proyectos.png",
						"texto":"Nuestros Proyectos"
					}
				],
				"contenido":
				[
					{
						"img":"http://cdn.home-designing.com/wp-content/uploads/2009/04/kids-study-room-skylight.jpg"
					},
					{
						"img":"http://www.sttudwalsinn.co.uk/resources/room+3+right.JPG"
					},
					{
						"img":"http://www.desktopwallpaperhd.com/wallpapers/10/3092.jpg"
					},
					{
						"img":"http://kidsroomdecoratingideas.co/wp-content/uploads/2011/07/Decorating-Kids-Rooms.jpg"
					},
					{
						"img":"http://www.housemaintain.com/wp-content/uploads/2010/04/Elegant-modern-formal-and-stylish-living-rooms-1.jpg"
					}
				]
			},
			"quienes_somos":
			{
				"items":
				[
					<?php $first = true; ?>
					<?php foreach($d['AboutUsItems'] as $item): ?>

					<?php
						if(!$first)
							echo ',';

						$first = false;
					?>
					{
						"menu_title":"<?php echo $item['AboutUsItem']['menu_title']; ?>",
						"content_title":"<?php echo $item['AboutUsItem']['content_title']; ?>",
						"content_text":"<?php echo $item['AboutUsItem']['content_text']; ?>"
					}

					<?php endforeach; ?>

				]
			},
			"nuestros_proyectos":
			{
				"items":
				[
					<?php $first = true; ?>
					<?php foreach($d['OurProjectsItems'] as $item): ?>

					<?php
						if(!$first)
							echo ',';

						$first = false;
					?>
					{
						<?php
							$key = array_keys($item);
							$key = $key[0];
							$files_dir = Inflector::underscore(Inflector::singularize($key));
							$field = 'image';
							$img = $item['OurProjectsItem']['image'];
							$img_dir = $item['OurProjectsItem']['image_dir'];
							$img_url_chica = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;
							$img_url_grande = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'grande_'.$img;
						?>

						"imagen_chica":"<?php echo $html->url($img_url_chica, true); ?>",
						"imagen_grande":"<?php echo $html->url($img_url_grande, true); ?>",
						"content_title":"<?php echo $item['OurProjectsItem']['content_title']; ?>",
						"content_text":"<?php echo $item['OurProjectsItem']['content_text']; ?>"
					}

					<?php endforeach; ?>

				]
			},
			"galeria":
			{
				"categories":
				[
					<?php $this->Category->generate($d['GalleryCategories']); ?>
				]
			},
			"imagina_tus_espacios":{
				"debug":1,
				"ambientes":
				[

					<?php $first_ambient = true; ?>

					<?php foreach($d['Ambients'] as $ambient): ?>

					<?php
						if(!$first_ambient)
							echo ',';

						$first_ambient = false;
					?>

					{

						"name":"<?php echo $ambient['Ambient']['name']; ?>",
						"items":
						[

							<?php $first_ambient_item = true; ?>

							<?php foreach($ambient['AmbientItem'] as $item): ?>

							<?php
								if(!$first_ambient_item)
									echo ',';

								$first_ambient_item = false;
							?>

							{
								"name":"<?php echo $item['name']; ?>",

								<?php
									$key = 'AmbientItem';
									$files_dir = Inflector::underscore(Inflector::singularize($key));
									$field = 'image';
									$img = $item['image'];
									$img_dir = $item['image_dir'];
									$img_url_chica = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;
									$img_url_grande = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'grande_'.$img;
								?>

								"image":"<?php echo $html->url($img_url_grande, true); ?>",

								<?php
									$key = 'AmbientItem';
									$files_dir = Inflector::underscore(Inflector::singularize($key));
									$field = 'mask';
									$img = $item['image'];
									$img_dir = $item['image_dir'];
									$img_url_chica = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;
									$img_url_grande = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'grande_'.$img;
								?>

								"mask":"<?php echo $html->url($img_url_grande, true); ?>",

								"hotspots":
								[

									<?php $first_ambient_item_hotspot = true; ?>

									<?php foreach($item['AmbientItemHotspot'] as $hotspot): ?>

									<?php
										if(!$first_ambient_item_hotspot)
											echo ',';

										$first_ambient_item_hotspot = false;
									?>

									{
										"tl":{"x":"<?php echo $hotspot['tl_x'];?>","y":"<?php echo $hotspot['tl_y'];?>"},
										"tr":{"x":"<?php echo $hotspot['tr_x'];?>","y":"<?php echo $hotspot['tr_y'];?>"},
										"bl":{"x":"<?php echo $hotspot['bl_x'];?>","y":"<?php echo $hotspot['bl_y'];?>"},
										"br":{"x":"<?php echo $hotspot['br_x'];?>","y":"<?php echo $hotspot['br_y'];?>"},

										"textures":
										[

											<?php $first_ambient_item_hotspot_texture = true; ?>

											<?php foreach($hotspot['AmbientItemHotspotTexture'] as $texture): ?>

											<?php
												if(!$first_ambient_item_hotspot_texture)
													echo ',';

												$first_ambient_item_hotspot_texture = false;
											?>

											{
												"name":"<?php echo $texture['name']; ?>",

												<?php
													$key = 'AmbientItemHotspotTexture';

													$files_dir = Inflector::underscore(Inflector::singularize($key));
													$field = 'image';
													$img = $texture['image'];
													$img_dir = $texture['image_dir'];
													$img_url_chica = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'chica_'.$img;
													$img_url_grande = DS.'files'.DS.$files_dir.DS.$field.DS.$img_dir.DS.'grande_'.$img;
												?>

												"imagen_grande":"<?php echo $html->url($img_url_grande, true); ?>",
												"imagen_chica":"<?php echo $html->url($img_url_chica, true); ?>"


											}

											<?php endforeach; ?>

										]
									}

									<?php endforeach; ?>

								]

							}

							<?php endforeach; ?>

						]

					}

					<?php endforeach; ?>
				]
			},
			"contacto":{
				<?php
					$info = '';
					if(!empty($d['ContactInfos'])){
						$info = $d['ContactInfos'][0]['ContactInfo']['info'];
					}
				?>
				"info":"<?php echo $info; ?>"
			}
		}
	}
}
