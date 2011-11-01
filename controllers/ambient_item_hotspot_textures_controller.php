<?php
class AmbientItemHotspotTexturesController extends AppController {

	var $name = 'AmbientItemHotspotTextures';

	function admin_index() {
		$this->AmbientItemHotspotTexture->recursive = 0;
		$this->set('ambientItemHotspotTextures', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ambient item hotspot texture', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ambientItemHotspotTexture', $this->AmbientItemHotspotTexture->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AmbientItemHotspotTexture->create();
			if ($this->AmbientItemHotspotTexture->save($this->data)) {
				$this->Session->setFlash(__('The ambient item hotspot texture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient item hotspot texture could not be saved. Please, try again.', true));
			}
		}
		$ambientItemHotspots = $this->AmbientItemHotspotTexture->AmbientItemHotspot->find('list');
		$this->set(compact('ambientItemHotspots'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ambient item hotspot texture', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AmbientItemHotspotTexture->save($this->data)) {
				$this->Session->setFlash(__('The ambient item hotspot texture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ambient item hotspot texture could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AmbientItemHotspotTexture->read(null, $id);
		}
		$ambientItemHotspots = $this->AmbientItemHotspotTexture->AmbientItemHotspot->find('list');
		$this->set(compact('ambientItemHotspots'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ambient item hotspot texture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AmbientItemHotspotTexture->delete($id)) {
			$this->Session->setFlash(__('Ambient item hotspot texture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ambient item hotspot texture was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
