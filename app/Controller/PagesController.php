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
		$this->loadModel('User');
		if ($this->request->is('post')) {
			$cod_usuario 				= $this->request->data['Schedule']['codigo'];
			unset($this->request->data['Schedule']['codigo']);
			$user_data 					= $this->User->find_code_user($cod_usuario);
			if ($user_data != 0) {
				$this->request->data['Schedule']['tipo'] 			= 1;
				$this->request->data['Schedule']['user_id'] 		= $user_data['User']['id'];
				$this->Schedule->create();
				if ($this->Schedule->save($this->request->data)) {
                	$this->Session->setFlash('Registro guardado satisfactoriamente', 'Flash/success');
					$this->redirect(array('action' => 'registro'));
				} else {
                	$this->Session->setFlash('No se ha guardado el registro, por favor intentalo mas tarde','Flash/error');
				}
			} else {
                $this->Session->setFlash('El código ingresado no esta asociado a ningún usuario, por favor intentalo mas tarde','Flash/error');
				$this->redirect(array('controller' => 'Pages','action' => 'registro'));
            }
		}
	}

	public function registro_salida() {
		$this->loadModel('Schedule');
		$this->loadModel('User');
		if ($this->request->is('post')) {
			$cod_usuario 				= $this->request->data['Schedule']['codigo'];
			unset($this->request->data['Schedule']['codigo']);
			$user_data 					= $this->User->find_code_user($cod_usuario);
			if ($user_data != 0) {
				$this->request->data['Schedule']['tipo'] 			= 0;
				$this->request->data['Schedule']['user_id'] 		= $user_data['User']['id'];
				$this->Schedule->create();
				if ($this->Schedule->save($this->request->data)) {
                	$this->Session->setFlash('Registro guardado satisfactoriamente', 'Flash/success');
					$this->redirect(array('action' => 'registro'));
				} else {
                	$this->Session->setFlash('No se ha guardado el registro, por favor intentalo mas tarde','Flash/error');
				}
			} else {
                $this->Session->setFlash('El código ingresado no esta asociado a ningún usuario, por favor intentalo mas tarde','Flash/error');
				$this->redirect(array('controller' => 'Pages','action' => 'registro_salida'));
            }
		}
	}

}