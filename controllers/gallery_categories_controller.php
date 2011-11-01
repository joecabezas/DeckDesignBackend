<?php
class GalleryCategoriesController extends AppController {

	var $name = 'GalleryCategories';

	function admin_index() {
		$this->GalleryCategory->recursive = 0;
		$this->set('galleryCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid gallery category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('galleryCategory', $this->GalleryCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->GalleryCategory->create();
			if ($this->GalleryCategory->save($this->data)) {
				$this->Session->setFlash(__('The gallery category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gallery category could not be saved. Please, try again.', true));
			}
		}
		$galleryCategoryParents = $this->GalleryCategory->GalleryCategoryParent->find('list');
		$this->set(compact('galleryCategoryParents'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid gallery category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->GalleryCategory->save($this->data)) {
				$this->Session->setFlash(__('The gallery category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gallery category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->GalleryCategory->read(null, $id);
		}
		$galleryCategoryParents = $this->GalleryCategory->GalleryCategoryParent->find('list');
		$this->set(compact('galleryCategoryParents'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for gallery category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->GalleryCategory->delete($id)) {
			$this->Session->setFlash(__('Gallery category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Gallery category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
