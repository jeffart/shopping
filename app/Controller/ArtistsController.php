<?php
App::uses('AppController', 'Controller');
/**
 * Artists Controller
 *
 * @property Artist $Artist
 */
class ArtistsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Artist->recursive = 0;
		$this->set('artists', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Artist->exists($id)) {
			throw new NotFoundException(__('Invalid artist'));
		}
		$options = array('conditions' => array('Artist.' . $this->Artist->primaryKey => $id));
		$this->set('artist', $this->Artist->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Artist->create();
			if ($this->Artist->save($this->request->data)) {
				$this->Session->setFlash(__('The artist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artist could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Artist->exists($id)) {
			throw new NotFoundException(__('Invalid artist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Artist->save($this->request->data)) {
				$this->Session->setFlash(__('The artist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Artist.' . $this->Artist->primaryKey => $id));
			$this->request->data = $this->Artist->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Artist->id = $id;
		if (!$this->Artist->exists()) {
			throw new NotFoundException(__('Invalid artist'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Artist->delete()) {
			$this->Session->setFlash(__('Artist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Artist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
