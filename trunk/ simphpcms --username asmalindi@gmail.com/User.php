<?php
/**
 * @author asmalindi
 * @copyright 2011
 */
 
class User
{
    private $id	;	 	 	 	 	 	
    private $full_name;		 	 	 	 	 	 	
	private $username;		 	 	 	 	 	 	
	private $password ;		 	 	 	 	 	 	
	private $email;		 	 	 	 	 	 	
	private $date;	 	 	 	 	 	 	
	private $random;	 	 	 	 	 	 	
	private $activated;	 	 	 	 	 	 	
	private $userlevel;
    
   public function setId( $val ) {
		$this->id = $val;
		return;
	}
	public function getId() {
		return $this->id;
	}
    
    public function setFull_name( $val ) {
		$this->full_name = $val;
		return;
	}
	public function getFull_name() {
		return $this->full_name;
	}
    
    public function setUsername( $val ) {
		$this->username = $val;
		return;
	}
	public function getUsername() {
		return $this->username;
	}
    
    
    public function setPassword( $val ) {
		$this->password = $val;
		return;
	}
	public function getPassword() {
		return $this->password;
	}
    
    public function setEmail( $val ) {
		$this->email = $val;
		return;
	}	
	public function getEmail() {
		return $this->email;
	}
    
    public function setDate( $val ) {
		$this->date = $val;
		return;
	}
	public function getDate() {
		return $this->date;
	}
    
    public function setRandom( $val ) {
		$this->random = $val;
		return;
	}
	public function getRandom() {
		return $this->random;
	}
    
    public function setActivated( $val ) {
		$this->activated = $val;
		return;
	}
	public function getActivated() {
		return $this->activated;
	}
      
    public function setUserlevel( $val ) {
		$this->userlevel = $val;
		return;
	}
	public function getUserlevel() {
		return $this->userlevel;
	}
}
?>