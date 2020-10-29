<?php

App::uses('HtmlHelper', 'View/Helper');

class UtilitiesHelper extends HtmlHelper {

	public $helpers = array('Html');

	public function UtilitiesHelper() {
		App::import("model","User");

		$this->__User			= new User();
	}

	public function estado_usuario($state) {
		$texto = '';
		switch ($state) {
			case '0':
				$texto = 'Salida';
				break;
			case '1':
				$texto = 'Entrada';
				break;
		}
		return $texto;
	}

}