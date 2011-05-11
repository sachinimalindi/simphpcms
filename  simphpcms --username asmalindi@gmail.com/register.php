<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
require("UserModel.php");
//require("User.php");

 echo"Register.. !";
  if(isset($_POST['submit'])) {
    
	 if(isset($_POST['username']) && isset($_POST['fname']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['email'])) 
	 {
	     //echo"Register.. 111111111!";
		 $username = strip_tags($_POST['username']);
		 $fullname = strip_tags($_POST['fname']);
		 $password = strtolower($_POST['password']);
		 $conpassword = strtolower($_POST['cpassword']);
		 $cpassword = md5($password );
	
		 $email = strip_tags($_POST['email']);
		 
		if ((strlen($password) > "25") or (strlen($password) < "6")){
            echo "Your Password needs to be between 6 and 25 characters long.";
         }
         if ((strlen($username) > "25") or (strlen($username) < "4")){
           echo "Your name needs to be between 4 and 25 characters long.";
         }
		//if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
//		}else {
//		  echo "Please use a valid email direction";
//			exit();
//		}
		//search for illegal characters
		//if(strspn($_POST['username'],"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_") != strlen($username)) {
//			echo('illegals characters in the username');
//			exit();
//		}
	//	if(strspn($_POST['fname'],"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_") != strlen($fullname)) {
//			echo('illegals characters in the username');
//			exit();
//		}
		if(strspn($_POST['password'],"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_") != strlen($password)) {
			echo('illegals characters in the password');
			exit();
		}
		if(strspn($_POST['email'],"@.abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_") != strlen($email)) {
			echo('illegals characters in the mail address');
		exit();
		}
		//password = confirm password
			if("$password" !== "$conpassword"  ){
			echo "There is an error with the passwords";
			exit();
		}
		 else {
		 
			
		//	$con = mysql_connect("localhost","root","ijts");
		//	mysql_select_db("cms_demo", $con);
			$user->setFull_name($fullname);
            $user->setUsername($username);
            $user->setPassword($cpassword);
            $user->setEmail($email);
            $user->setDate(date("Y/m/d"));
            $user->setActivated("0");
            $rand = rand(23456789,98765432) ;
            $user->setRandom($rand);
            $user->getUserlevel("0");
           // echo "";
			//$rand = rand(23456789,98765432) ;
			$userM->addNewUser($user);
            
		//	$sql = "INSERT INTO `cms_demo`.`users` (`id`, `full_name`, `username`, `password`, 
		//	`email`, `date`) VALUES (NULL, \'sachini malindi\', \'asmalindi\', \'fidufifuodssfuo\',
		//	\'asmalindi@gmail.com\', \'2011-03-31\');";
			
			//$query = ( "INSERT INTO `users` (`id`, `full_name`, `username`, `password`, 
			//`email`, `date`) VALUES ('','$fullname','$username ','$password','$email',NOW())");
		//	$query=("INSERT INTO `users` (`id`, `full_name`, `username`, `password`, 
		//	`email`, `date`, `random`, `activated`) VALUES (NULL,'$fullname','$username','$cpassword','$email',NOW(),'$rand','0')");
		//	$lastid = mysql_insert_id();
			 $connector = new DbConnector();
             $lastid =  $connector->getLastId();
			
			// $to = $email;
//			 $subject = "Activate ur account ";
//			 $headers = "From: admin@mysitename.com";
//			 $server = "admin@LOCALHOST";
//			 
//			 ini_set("STMP",$server);
//			 
//			 $body = " hello". $fullname.",  
//			 To Confirm, click here: 
//			 <a href= 'http://localhost/cms/activate.php?id=$lastid&code=$rand'>
//			 Confirmar usuario</a>
//			 ";
//			 
//			 mail($to,$subject,$body,$headers);
			// $userM->addNewUser($user);
             echo "You have been Registered "."<br/> <a href='index.php'>click here<a/>";
			//if($result= mysql_query($query)){
//			//die("You have been Registered "."<br/> <a href='index.php'>click here<a/>");
//			 echo "You have been Registered "."<br/> <a href='index.php'>click here<a/>";
//			}else 
//			{
//			 echo mysql_errno() . ": " . mysql_error() . "\n";
//			}
		 }
	 }
 }

?>
<head>

<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all"/>


</head>
<body id="main_body" >
	
	<div id="form_container">
	
		<form id="form_151830" class="appnitro"  method="post" action="register.php">
					<div class="form_description">
			<h2>Untitled Form</h2>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="fname">Full Name </label>
		<div>
			<input id="element_1" name="fname" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="username">Username </label>
		<div>
			<input id="element_2" name="username" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="element_3" name="password" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="cpassword">Confirm Password </label>
		<div>
			<input id="element_4" name="cpassword" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="email">Email </label>
		<div>
			<input id="element_5" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="cemail">Confirm Email </label>
		<div>
			<input id="element_6" name="cemail" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="151830" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Register" />
		</li>
			</ul>
		</form>	

	</div>

	</body>
</html>