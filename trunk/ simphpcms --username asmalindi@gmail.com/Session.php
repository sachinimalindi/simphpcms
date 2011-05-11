<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
 
require_once('DbConnector.php');
class Session
{
	var $username;     //Username given on sign-up
   var $userid;       //Random value generated on current login
   var $userlevel;    //The level to which the user pertains
   var $time;         //Time user was last active (page loaded)
   var $logged_in;    //True if user is logged in, false otherwise
   var $userinfo = array();  //The array holding all user info
   var $url;          //The page url current being viewed
   var $referrer;     //Last recorded site page viewed
   
   function  __construct(){
      $this->time = time();
      $this->startSession();
   }

  function startSession(){
     session_start(); 
	 $this->logged_in = $this->checkLogin();
  }
  
   function checkLogin(){
      $db = new DbConnector;
     

         return true;
      }
      /* User not logged in */
      else{
         return false;
      }
   }

}
?>