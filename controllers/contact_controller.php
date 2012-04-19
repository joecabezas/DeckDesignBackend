<?php
class ContactController extends AppController {

	var $name = 'Contact';
	var $uses = array('User');

	var $layout = 'ajax';

	var $components = array('Notifications');

	function index()
	{
		//$this->autoRender = false;

		$d = array('success' => false);

		//debug($this->params['form']);

		if($this->params['form'])
		{
			//mandar notificacion a los admin

			//adjuntar datos del cliente que esta mandando el mensaje
			$this->Notifications->from = $this->params['form'];
			
			//adjuntar informacion de todos los admin
			//$admins = $this->User->find('all');

			//debug($admins);
			
			//por cada admin encontrado...
			//foreach($admins as $admin){
			//	$this->Notifications->to[] = $admin['User'];
			//}
			
			//debug: enviar a joe.cabezas@gmail.com
			$this->Notifications->to[] = array(
					'mail' => 'joe.cabezas@gmail.com',
					'name' => 'joe cabezas',
				);

			//configurar notificacion
			$this->Notifications->config['template'] = 'notification_new_contact';
			$this->Notifications->config['subject'] = '[Nuevo Mensaje] ['.$this->Notifications->from['name'].']';

			//enviar mail
			$this->Notifications->sendContactNotification();
			//debug($this->Session->read('Message.email'));

			$d = array('success' => true);
		}

		//mostrar return
		$this->set('d', $d);
	}

}
?>
