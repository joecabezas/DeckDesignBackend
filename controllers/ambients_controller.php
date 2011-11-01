<?php
class AmbientsController extends AppController {

	var $name = 'Ambients';

	function admin_index() {
		$this->Ambient->recursive = 0;
		$this->set('ambients', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ambient', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ambient', $this->Ambient->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Ambient->create();
			if ($this->Ambient->save($this->data)) {
				$this->Session->setFlash(__('The ambient has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ambient', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ambient->save($this->data)) {
				$this->Session->setFlash(__('The ambient has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ambient->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ambient', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ambient->delete($id)) {
			$this->Session->setFlash(__('Ambient deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ambient was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
