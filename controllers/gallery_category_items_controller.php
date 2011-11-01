<?php
class GalleryCategoryItemsController extends AppController {

	var $name = 'GalleryCategoryItems';

	function admin_index() {
		$this->GalleryCategoryItem->recursive = 0;
		$this->set('galleryCategoryItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid gallery category item', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('galleryCategoryItem', $this->GalleryCategoryItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->GalleryCategoryItem->create();
			if ($this->GalleryCategoryItem->save($this->data)) {
				$this->Session->setFlash(__('The gallery category item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gallery category item could not be saved. Please, try again.', true));
			}
		}
		$galleryCategories = $this->GalleryCategoryItem->GalleryCategory->find('list');
		$this->set(compact('galleryCategories'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid gallery category item', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->GalleryCategoryItem->save($this->data)) {
				$this->Session->setFlash(__('The gallery category item has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gallery category item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->GalleryCategoryItem->read(null, $id);
		}
		$galleryCategories = $this->GalleryCategoryItem->GalleryCategory->find('list');
		$this->set(compact('galleryCategories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for gallery category item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->GalleryCategoryItem->delete($id)) {
			$this->Session->setFlash(__('Gallery category item deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Gallery category item was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
