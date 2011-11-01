<?php
class ContactInfosController extends AppController {

	var $name = 'ContactInfos';

	function admin_index()
	{
		//verificar que existe un contect info, sino crearlo
		$ci = $this->ContactInfo->findById('1');

		//si no encontro nada, crear un registro
		if( empty($ci) )
		{
			$this->ContactInfo->create();
			$this->ContactInfo->set('info', 'información de contacto');

			$this->ContactInfo->save();
		}

		$this->ContactInfo->recursive = 0;
		$this->set('contactInfos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contact info', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contactInfo', $this->ContactInfo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ContactInfo->create();
			if ($this->ContactInfo->save($this->data)) {
				$this->Session->setFlash(__('The contact info has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact info could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contact info', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContactInfo->save($this->data)) {
				$this->Session->setFlash(__('The contact info has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact info could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContactInfo->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contact info', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContactInfo->delete($id)) {
			$this->Session->setFlash(__('Contact info deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contact info was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
