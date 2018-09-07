<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rt_Form_Invalid_Arguments_Exception
 *
 * @author udit
 */

if ( ! class_exists( 'Rt_Form_Invalid_Arguments_Exception' ) ) {

	class Rt_Form_Invalid_Arguments_Exception extends Exception {

		public function __construct( $msg ) {
			//Error Message
			$errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile() .
				' : <b>The method expects an array in arguments for ' . $msg . ' provided.</b>';
			echo esc_html( $errorMsg );
		}
	}
}
