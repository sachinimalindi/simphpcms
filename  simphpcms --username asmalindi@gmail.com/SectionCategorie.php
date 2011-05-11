<?php

/**
 * @author asmalindi
 * @copyright 2011
 */

class SectionCategorie{
    
    private $sec_id;
    private $cat_id;
    
 public function setSec_id( $val ) {
		$this->sec_id = $val;
		return;
	}
 public function getSec_id() {
		return $this->sec_id;
	}
  
 public function setCat_id( $val ) {
		$this->cat_id = $val;
		return;
	}
 public function getCat_id() {
		return $this->cat_id;
	}
  
}

?>