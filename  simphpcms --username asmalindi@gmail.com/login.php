<head>        
		<title>OOP in PHP</title>
        <?php 
		/**
		 * @author asmalindi
		 * @copyright 2011
		 */
		include("UserModel.php"); 
        session_start();
        $userM = new UserModel();
        $username= $_POST['username'];
        $cpassword= md5($_POST['password']);
        $password=$_POST['password'];
        ?>
        
</head>
<body>
        <?php 
                // Using our PHP objects in our PHP pages. 
              
                $row = $userM->login($username,$cpassword);
               
             if($row){
            	 //echo 'U r Log In'.'<br/>';
            	// echo "<a href='member.php'>home page </a>";
                header('Location: member.php');
            	 $_SESSION['username']=$username;
                 
            	 $_SESSION['password']=$password;
            	 $_SESSION['Status']="Loginin";
            	 while ($row = mysql_fetch_assoc($result))
            		  {
            		    $dbusername = $row['username'];
            			$dbpassword = $row['password'];
            			$dbactivated= $row['activated'];
                        $_SESSION['uid']=$row['id'];;
                        $userlevel=$row['userlevel'];
                        $_SESSION['userlevel']=$userlevel;
            			if($dbactivated=='0')
            			{
            			  die (" your account is not yet active .please check ue email.");
            			  exit();
            			}
            			echo $dbusername;
            		  }
            	}
        ?>
</body>
</html>