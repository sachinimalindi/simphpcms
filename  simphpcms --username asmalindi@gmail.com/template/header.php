<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
include("UserModel.php"); 
 session_start();
 //if($_SESSION['username'])
// {
//   //echo 'Username is :'.$_SESSION['username'].'<br/>'."<a href='logout.php'>log out<a/>".'<br/>'."<a href='changepassword.php'>Change Password<a/>".'<br/>'.'<br/>';
// //$userM = new UserModel();
// //$user = $userM->getUser($_SESSION['uid']);
// }
// else die ('you have to log in');

 


?>
<!-- START HEADER -->

<div id="header">
    <div id="head_nav" >
    <ul>
    <?php
    if (isset($_SESSION['username'])) {
         echo "<a href='logout.php'>log out<a/>";  
         echo "<a href='member.php'>Profile </a>";
         if ($_SESSION['userlevel']==12) {
           echo "<li><a href='admin.php' >Admin </a></li>";
 	    } 
	} else {
      echo "<li><a href='register.php' >Sign in</a></li>";
      echo "<li><a href='#' onclick="."showlayer('login_menu')".">Login in</a> </li>";
   }
    ?>

    </ul>
    </div>
    <div id="login_menu"style="display:none;">
        <div id="new-user-col">New User:<br /><br />
          <a href="register.php" class="green-button">Register</a>
        </div>
        <div id="signup-user-col">
            Existing User log in below:<br /><br />
            <form action="login.php" method="post">
                <ul>
                    <li>
                        <!--
<label for="email">Email:</label>
                        <input type="text" id="email" size="18"/>
--> Username: <input type='text' name='username' />
                    </li>
                    <li>
                        <!--
<label for="psw">Password:</label>
                        <input type="text" id="psw" size="18"/>
-->Password: <input type='password' name='password' />
                    </li>
                <button type="submit" class="green-button">Log-in</button>
                </ul>
            </form>
        </div>
    </div>
    <div class="spacer"></div>
    <div id="headerBox">Lorem ipsum dolor sit amet, consectetuer sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</div>
    
    <h1>Header</h1>

</div><!-- END HEADER -->