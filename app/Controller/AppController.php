<?php

	App::uses('Controller', 'Controller');

	class AppController extends Controller {

        public $helpers                            = array('Utilities');
        public $components                         = array(
                                                        'Session',
                                                        'Auth' => array(
                                                           'authenticate' => array(
                                                                'Form' => array(
                                                                    'fields' => array('username' => 'email')
                                                                )
                                                            )
                                                        )
                                                    );


                                                    
		public function beforeRender() {

        }

		public function beforeFilter() {

		}

		public function sendMail($options = array()) {
            try {
                $email                      = new CakeEmail();
                $email->template($options['template'], 'default')
                    ->config('default')
                    ->emailFormat('html')
                    ->subject($options['subject'])
                    ->to($options['to'])
                    ->from(Configure::read('Email.contact_mail'))
                    ->viewVars($options['vars'])
                    ->send();
                
            } catch(Exception $e){
                $this->log($e->getMessage(),"debug");
            }
            return true;
        }

        public function validateSessionTrue() {
            if (AuthComponent::user('id')) {
                $this->redirect(array('controller' => 'pages', 'action' => 'index'));
            }
        }
		
    }