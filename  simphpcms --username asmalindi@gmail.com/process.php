<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
 
session_start();
 if (isset($_SESSION['username'])) {
         if ($_SESSION['userlevel']==12) {
            //echo "<li><a href='admin.php' >Admin </a></li>";
 	    } else{
     	   // echo "<a href='logout.php'>log out<a/>";  
           // echo "<a href='member.php'>Profile </a>";
           Header( "Location: index.php" ); 
 	    }
	} else {
      //echo "<li><a href='register.php' >Sign in</a></li>";
      //echo "<li><a href='#' onclick="."showlayer('login_menu')".">Login in</a> </li>";
       Header( "Location: index.php" ); 
   }

?>