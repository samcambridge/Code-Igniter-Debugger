<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Easy Array Debugger
 *
 * @package		CodeIgniter
 * @author		Sam Cambridge >> sam.cambridge@gmail.com
 * @version		Version 0.1
 *
 */

class Debugger {
	
	public function dump($data = null){
		if(is_null($data)){
			$data = 'no data passed';
		}		
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	
}

// EOF
