<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
require_once('DbConnector.php');
require_once('User.php');

class UserModel{
    private  $connector ;
    
   	function __construct(){
	   $this->connector = new DbConnector(); 
   }
   function activateUser($id ,$ram){
    $result = $this->connector->query("SELECT * FROM users WHERE id='$id' AND random='$ram'");
    $num = mysql_num_rows($result);
	if($num==1) 
	{
	   $act =  mysql_query("UPDATE users SET activated='1'WHERE id='$id'" );
	   return $num;
	} 
	else 
	  return null;
   }
   
   function getUsers() {
    $result = $this->connector->query('SELECT * FROM users');
	//$row = $this->connector->fetchArray($result);
    $x = 0;
    while($row = $this->connector->fetchArray($result)){
         $x++;
            $user[$x] = new User();
            $user[$x]->setId($row['id']);
            $user[$x]->setFull_name($row['full_name']);
            $user[$x]->setUsername($row['username']);
            $user[$x]->setPassword($row['password']);
            $user[$x]->setEmail($row['email']);
            $user[$x]->setDate($row['date']);
            $user[$x]->setRandom($row['random']);
            $user[$x]->setActivated($row['activated']);
            $user[$x]->setUserlevel($row['userlevel']);
        
       	}
        return $user;
 }
 
   function addNewUser($user){
    $full_name=$user->getFull_name();
    $username=$user->getUsername();
    $password=$user->getPassword();
    $email=$user->getEmail();
    $ran=$user->getRandom();
    $result = $this->connector->query("INSERT INTO `users` (`id`, `full_name`, `username`, `password`, 
			`email`, `date`, `random`, `activated` ,`userlevel`) VALUES (NULL,'$full_name','$username','$password','$email',NOW(),'$ran','0','1')");
    $row= $this->connector->query($result);
    print($row);        
    //$row = $this->connector->fetchArray($result);
     //if($row = $this->connector->fetchArray($result)){
//			//die("You have been Registered "."<br/> <a href='index.php'>click here<a/>");
//		 echo "You have been Registered "."<br/> <a href='index.php'>click here<a/>";
//	}else 
//	{
//         echo mysql_errno() . ": " . mysql_error() . "\n";
//	}       
   }
   
   function getUser($UId){
     $query = $this->connector->query("SELECT * FROM `users` WHERE `id` = '$UId' LIMIT 1");
    // $row = $this->connector->fetchArray($query);
    // echo $row['firstname'];
     if($row = $this->connector->fetchArray($query)){
			$user = new User();
            $user->setId($row['id']);
            $user->setFull_name($row['full_name']);
            $user->setUsername($row['username']);
            $user->setPassword($row['password']);
            $user->setEmail($row['email']);
            $user->setDate($row['date']);
            $user->setRandom($row['random']);
            $user->setActivated($row['activated']);
            $user->setUserlevel($row['userlevel']);
            return $user;
	}else 
	{
         echo mysql_errno() . ": " . mysql_error() . "\n";
	}  
   }
   
   function updateUserField($UId,$field,$value){
     $result = $this->connector->query("UPDATE `users` SET $field = '$value' WHERE `id` = '$UId'");
     if($result){
        echo "You have been Update".$field."successfully...";
     }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
     }
   }
     
   function login( $uname ,$Pword ){
     $result = $this->connector->query("SELECT * FROM users WHERE username='$uname' AND password='$Pword'"); 
     //echo $row['firstname'];
      if($result){
		while($row = $this->connector->fetchArray($result)){
		  $_SESSION['username']=$uname;
          $_SESSION['password']=$Pword;
          $_SESSION['Status']="Loginin";
           $dbusername = $row['username'];
           $dbpassword = $row['password'];
           $dbactivated= $row['activated'];
           $userlevel=$row['userlevel'];
           $_SESSION['uid']=$row['id'];
           $_SESSION['userlevel']=$userlevel;
           echo 'U r Log In'.$dbusername;
           	 echo "<a href='member.php'>home page </a>";
		}

	}else 
	{
         echo mysql_errno() . ": " . mysql_error() . "\n";
	}  
   }
   
   function getUserInfo($UId){
     $result = $this->connector->query("SELECT * FROM `users` WHERE `id` = '$UId' LIMIT 1");
     $row = $this->connector->fetchArray($result);
     if(mysql_num_rows($result) < 1){
        echo "errorrrrrrrrrrrrrrrrrr";
        echo mysql_error();
     }else{
        return $row;
     }
   }
   
   function removeUser($UId){
      $result = $this->connector->query("DELETE FROM `users` WHERE WHERE `id` = '$UId'");
      if($result){
        echo "You have been Update".$field."successfully...";
      }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
      }
   }
    function findUsers($key){
    //SELECT * FROM categorie WHERE cat_title LIKE  '%edi%';
   // echo "SELECT * FROM categorie WHERE cat_title LIKE '%$key%'";
     $result = $this->connector->query("SELECT * FROM `users` WHERE full_name LIKE '%$key%'");
     $x = 0;
     while ($row = $this->connector->fetchArray($result)) {
       $x++;
            $user[$x] = new User();
            $user[$x]->setId($row['id']);
            $user[$x]->setFull_name($row['full_name']);
            $user[$x]->setUsername($row['username']);
            $user[$x]->setPassword($row['password']);
            $user[$x]->setEmail($row['email']);
            $user[$x]->setDate($row['date']);
            $user[$x]->setRandom($row['random']);
            $user[$x]->setActivated($row['activated']);
            $user[$x]->setUserlevel($row['userlevel']);
        
       	}
        return $user;
 }
   
   function getNumUsers(){
    $result = $this->connector->query("SELECT * FROM `users`");
     $row = $this->connector->fetchArray($result);
     $num = mysql_num_rows($result);
     if($num < 1){
        echo "errorrrrrrrrrrrrrrrrrr";
        echo mysql_error();
     }else{
        return $num;
     }
   }
}

?>