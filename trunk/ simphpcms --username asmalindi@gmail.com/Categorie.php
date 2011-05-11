<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
 
class Categorie {
    
    private $cat_id;
    private $cat_title;
    private $cat_despription;
    
 public function setCat_id( $val ) {
		$this->cat_id = $val;
		return;
	}
 public function getCat_id() {
		return $this->cat_id;
	}
  
 public function setCat_title( $val ) {
		$this->cat_title = $val;
		return;
	}
 public function getCat_title() {
		return $this->cat_title;
	}
  
  public function setCat_despription( $val ) {
		$this->cat_despription = $val;
		return;
	}
  public function getCat_despription() {
		return $this->cat_despription;
	}
  
}

?>