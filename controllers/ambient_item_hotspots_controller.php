<?php
class AmbientItemHotspotsController extends AppController {

	var $name = 'AmbientItemHotspots';

	function admin_index() {
		$this->AmbientItemHotspot->recursive = 0;
		$this->set('ambientItemHotspots', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ambient item hotspot', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ambientItemHotspot', $this->AmbientItemHotspot->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AmbientItemHotspot->create();
			if ($this->AmbientItemHotspot->save($this->data)) {
				$this->Session->setFlash(__('The ambient item hotspot has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient item hotspot could not be saved. Please, try again.', true));
			}
		}
		$ambientItems = $this->AmbientItemHotspot->AmbientItem->find('list');
		$this->set(compact('ambientItems'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ambient item hotspot', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmbientItemHotspot->save($this->data)) {
				$this->Session->setFlash(__('The ambient item hotspot has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient item hotspot could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmbientItemHotspot->read(null, $id);
		}
		$ambientItems = $this->AmbientItemHotspot->AmbientItem->find('list');
		$this->set(compact('ambientItems'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ambient item hotspot', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmbientItemHotspot->delete($id)) {
			$this->Session->setFlash(__('Ambient item hotspot deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ambient item hotspot was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
