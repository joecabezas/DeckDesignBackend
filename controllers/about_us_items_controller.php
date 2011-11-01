<?php
class AboutUsItemsController extends AppController {

	var $name = 'AboutUsItems';

	function admin_index() {
		$this->AboutUsItem->recursive = 0;
		$this->set('aboutUsItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid about us item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('aboutUsItem', $this->AboutUsItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AboutUsItem->create();
			if ($this->AboutUsItem->save($this->data)) {
				$this->Session->setFlash(__('The about us item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about us item could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid about us item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AboutUsItem->save($this->data)) {
				$this->Session->setFlash(__('The about us item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about us item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AboutUsItem->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for about us item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AboutUsItem->delete($id)) {
			$this->Session->setFlash(__('About us item deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('About us item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
