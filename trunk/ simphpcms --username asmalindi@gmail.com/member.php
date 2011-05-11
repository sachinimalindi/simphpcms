<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
include("UserModel.php"); 
 session_start();
 include('template/headtag.php');
 include('template/navtop.php');
 if($_SESSION['username'])
 {
   echo 'Username is :'.$_SESSION['username'].'<br/>'."<a href='logout.php'>log out<a/>".'<br/>'."<a href='changepassword.php'>Change Password<a/>".'<br/>'.'<br/>';
 }
 else die ('you have to log in');

 $userM = new UserModel();
 $user = $userM->getUser($_SESSION['uid']);
 echo " Ur ID is :".$_SESSION['uid'].'<br/>';
 echo " Ur full_name is :".$user->getFull_name().'<br/>';
 echo " Ur email is :".$user->getEmail().'<br/>';
 echo " Member since :".$user->getDate().'<br/>';
include('template/footer.php');
?>
