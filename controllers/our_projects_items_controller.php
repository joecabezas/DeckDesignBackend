<?php
class OurProjectsItemsController extends AppController {

	var $name = 'OurProjectsItems';

	function admin_index() {
		$this->OurProjectsItem->recursive = 0;
		$this->set('ourProjectsItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid our projects item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ourProjectsItem', $this->OurProjectsItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->OurProjectsItem->create();
			if ($this->OurProjectsItem->save($this->data)) {
				$this->Session->setFlash(__('The our projects item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The our projects item could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid our projects item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OurProjectsItem->save($this->data)) {
				$this->Session->setFlash(__('The our projects item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The our projects item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OurProjectsItem->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for our projects item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OurProjectsItem->delete($id)) {
			$this->Session->setFlash(__('Our projects item deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Our projects item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
