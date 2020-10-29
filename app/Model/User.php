<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);



























































































	/**
        * @author Diego Morales <dlmorales096@gmail.com>
        * @date(26-10-2020)
        * @description Metodo que encripta si llega un valor llamado password
        * @return Dato encriptado
    */
	public function beforeSave($options = array()){
		if (isset($this->data[$this->alias]['password']) && !empty($this->data[$this->alias]['password'])){
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
	}
	/**
        * @author Diego Morales <dlmorales096@gmail.com>
        * @date(26-10-2020)
        * @description Metodo que genera el codigo para cambiar la contraseña
        * @return Codigo para cambiar la contraseña
    */
	public function generate_hash_change_password(){
	    $salt 		= Configure::read('Security.salt');
	    $salt_v2 	= Configure::read('Security.cipherSeed');
	    $rand 		= mt_rand(1,999999999);
	    $rand_v2 	= mt_rand(1,999999999);
	    return hash('sha256',$salt.$rand.$salt_v2.$rand_v2);
	}
	/**
        * @author Diego Morales <dlmorales096@gmail.com>
        * @date(26-10-2020)
        * @description Metodo para buscar los datos por el email ingresado
        * @variables $email = email del usuario
        * @return Datos por el email ingresado
    */
	public function get_user_email($email){
		return $this->findByEmail($email);
	}
	/**
        * @author Diego Morales <dlmorales096@gmail.com>
        * @date(27-10-2020)
        * @description Metodo para buscar los datos por el codigo ingresado
        * @variables $code = codigo del usuario
        * @return Datos por el código ingresado
    */
	public function find_code_user($code){
		$conditions 			= array(
        							'User.code' 	=> $code
        						);
		if ($this->find('count',compact('conditions')) > 0) {
			return $this->find('first',compact('conditions'));
		} else {
			return 0;
		}
	}
	/**
        * @author Diego Morales <dlmorales096@gmail.com>
        * @date(29-10-2020)
        * @description Metodo que devuelve todos los usuarios
        * @return Todos los usuarios
    */
	public function all_users() {
		$this->recursive 	= -1;
		return $this->find('all');
	}



}
