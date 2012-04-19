<p>Estimado administrador <?php echo $data['to']['name'] ?>,</p>

<p>Ha llegado un nuevo mensaje a traves de www.deckdesign.cl</p>
<p>Los datos del mensaje son los siguientes:<p>

<ul>
	<li>Nombre: <?php echo $data['from']['name']; ?></li>
	<li>Email: <?php echo $data['from']['mail']; ?></li>
	<li>Producto: <?php echo $data['from']['product']; ?></li>
	<li>Mensaje: <?php echo $data['from']['message']; ?></li>
</ul>
