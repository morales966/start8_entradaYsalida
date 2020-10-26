<?php
App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

	public function index() {
  		if (!AuthComponent::user('id')){
			$this->redirect(array('controller'=> 'Users','action' => 'login'));	
  		}
	}



































	public function registro() {
		$this->loadModel('Schedule');

		if ($this->request->is('post')) {
			$cod_usuario = 				$this->request->data['Schedule']['codigo'];









			$this->Schedule->create();
			if ($this->Schedule->save($this->request->data)) {
				$this->Flash->success(__('Registro guardado satisfactoriamente.'));
				return $this->redirect(array('action' => 'registro'));
			} else {
				$this->Flash->error(__('No se ha guardado el registro, por favor intentalo mas tarde'));
			}
		}
	}

}