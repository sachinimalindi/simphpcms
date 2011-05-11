<?php

/**
 * @author asmalindi
 * @copyright 2011
 */

class section {
    private $sec_id;
    private $sec_title;
    private $sec_order;
    private $sec_despription;
    private $sec_url;
    
  public function setSec_id( $val ) {
		$this->sec_id = $val;
		return;
	}
 public function getSec_id() {
		return $this->sec_id;
	}
  
   public function setsSec_title( $val ) {
		$this->sec_title = $val;
		return;
	}
 public function getSec_title() {
		return $this->sec_title;
	}
  
   public function setSec_order( $val ) {
		$this->sec_order = $val;
		return;
	}
 public function getSec_order() {
		return $this->sec_order;
	}
  
   public function setSec_despription( $val ) {
		$this->sec_despription = $val;
		return;
	}
 public function getSec_despription() {
		return $this->sec_despription;
	}
    
   public function setSec_url( $val ) {
		$this->sec_url = $val;
		return;
	}
 public function getSec_url() {
		return $this->sec_url;
	}
}

?>