<?php

/**
 * @author asmalindi
 * @copyright 2011
 */

    require("UserModel.php");
   // require("User.php");
    $userM = new UserModel();
    //$user = new User();
    
    $id = $_GET['id'];
    $ram= $_GET['code'];
    
     if(isset($id)&&isset($ram))
  {
    $num= $userM->activateUser($id,$ram);
	
	if(isset($num)) 
	{
	   die("your account is activated.");
	} 
	else 
	  die("Invalid activation code..");
  
  }
  else
    die ("Data missing ..!");

?>