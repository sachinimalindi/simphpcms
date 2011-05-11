<?php
/**
 * @author asmalindi
 * @copyright 2011
 */
class Post {

 private $post_id ;
 private $post_title ;
 private $post_author;
 private $postcontent;
 private $category ;
 private $linklabel;
 private $porder;
 private $showing;
 private $keywords;
 private $c_date;
 
 public function setPost_id( $val ) {
		$this->post_id = $val;
		return;
	}
 public function getPost_id() {
		return $this->post_id;
	}
  
  public function setPost_title( $val ) {
		$this->post_title= $val;
		return;
	}
	public function getPost_title() {
		return $this->post_title;
	}
    
    public function setPost_author( $val ) {
		$this->post_author = $val;
		return;
	}
	public function getPost_author() {
		return $this->post_author;
	}
    
    public function setPostcontent( $val ) {
		$this->postcontent = $val;
		return;
	}
	public function getPostcontent() {
		return $this->postcontent;
	}
    
    public function setCategory( $val ) {
		$this->category = $val;
		return;
	}
	public function getCategory() {
		return $this->category;
	}
    
    public function setLinklabel( $val ) {
		$this->linklabel = $val;
		return;
	}
	public function getLinklabel() {
		return $this->linklabel;
	}
    
    public function setPorder( $val ) {
		$this->porder = $val;
		return;
	}
	public function getPorder() {
		return $this->porder;
	}
    
    public function setShowing( $val ) {
		$this->showing = $val;
		return;
	}
	public function getShowing() {
		return $this->showing;
	}
    
    public function setKeywords( $val ) {
		$this->keywords = $val;
		return;
	}
	public function getKeywords() {
		return $this->keywords;
	}
    
    public function setC_date( $val ) {
		$this->c_date = $val;
		return;
	}
	public function getC_date() {
		return $this->c_date;
	}
     
}
 
?>