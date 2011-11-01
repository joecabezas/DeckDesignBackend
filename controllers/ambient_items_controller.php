<?php
class AmbientItemsController extends AppController {

	var $name = 'AmbientItems';

	function admin_index() {
		$this->AmbientItem->recursive = 0;
		$this->set('ambientItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ambient item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ambientItem', $this->AmbientItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AmbientItem->create();
			if ($this->AmbientItem->save($this->data)) {
				$this->Session->setFlash(__('The ambient item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient item could not be saved. Please, try again.', true));
			}
		}
		$ambients = $this->AmbientItem->Ambient->find('list');
		$this->set(compact('ambients'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ambient item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmbientItem->save($this->data)) {
				$this->Session->setFlash(__('The ambient item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmbientItem->read(null, $id);
		}
		$ambients = $this->AmbientItem->Ambient->find('list');
		$this->set(compact('ambients'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ambient item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmbientItem->delete($id)) {
			$this->Session->setFlash(__('Ambient item deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ambient item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
