<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
 require_once('DbConnector.php');
require_once('Post.php');
class PostModel {
    
   private  $connector ;
   
   	function __construct(){
	   $this->connector = new DbConnector(); 
   }
   
function getPosts() {
    $result = $this->connector->query('SELECT * FROM post');
	//$row = $this->connector->fetchArray($result);
    $x = 0;
    while($row = $this->connector->fetchArray($result)){
         $x++;
        $post[$x]= new Post();
        $post[$x]->setPost_id($row['post_id']);
        $post[$x]->setPost_title($row['post_title']);
        $post[$x]->setPost_author($row['post_author']);
        $post[$x]->setPostcontent($row['postcontent']);
        $post[$x]->setCategory($row['category']);
        $post[$x]->setLinklabel($row['linklabel']);
        $post[$x]->setPorder($row['porder']);
        $post[$x]->setShowing($row['showing']);
        $post[$x]->setKeywords($row['keywords']);
        $post[$x]->setC_date($row['c_date']);
        
       	}
        return $post;
 }
 
  function getPostByCat($cat_id) {
    $result = $this->connector->query("SELECT * FROM post WHERE `category` = '$cat_id'");
	//$row = $this->connector->fetchArray($result);
    while($row = $this->connector->fetchArray($result)){
        $post= new Post();
        $post->setPost_id($row['post_id']);
        $post->setPost_title($row['post_title']);
        $post->setPost_author($row['post_author']);
        $post->setPostcontent($row['postcontent']);
        $post->setCategory($row['category']);
        $post->setLinklabel($row['linklabel']);
        $post->setPorder($row['porder']);
        $post->setShowing($row['showing']);
        $post->setKeywords($row['keywords']);
        $post->setC_date($row['c_date']);
        return $post;
       	} 
 }
 function getPost($post_id) {
    $result = $this->connector->query("SELECT * FROM post WHERE showing='1' `id` = '$post_id'");
	$row = $this->connector->fetchArray($result);
    if($result= mysql_query($query)){
        $post= new Post();
        $post->setPost_id($row['post_id']);
        $post->setPost_title($row['post_title']);
        $post->setPost_author($row['post_author']);
        $post->setPostcontent($row['postcontent']);
        $post->setCategory($row['category']);
        $post->setLinklabel($row['linklabel']);
        $post->setPorder($row['porder']);
        $post->setShowing($row['showing']);
        $post->setKeywords($row['keywords']);
        $post->setC_date($row['c_date']);
        return $post;
       	}else 
	{
         echo mysql_errno() . ": " . mysql_error() . "\n";
	} 
 }
 
  function getNumPosts(){
    $result = $this->connector->query("SELECT * FROM `post`");
     $row = $this->connector->fetchArray($result);
     $num = mysql_num_rows($result);
     if($num < 1){
        echo "errorrrrrrrrrrrrrrrrrr";
        echo mysql_error();
     }else{
        return $num;
     }
   }
   
  function removePost($Id){
      $result = $this->connector->query("DELETE FROM `post` WHERE `post_id` = '$Id'");
      if($result){
        echo "You have been Delete successfully...";
      }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
      }
   }
   
   function editPost($Id,$field,$value){
     $result = $this->connector->query("UPDATE `post` SET $field = '$value' WHERE `id` = '$Id'");
     if($result){
        echo "You have been Update successfully...";
     }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
     }
   }
   
   function addNewPost($post){
     $post_title =$post->getPost_title();
     $post_author =$post->getPost_author();
     $postcontent =$post->getPostcontent();
     $category =$post->getCategory();
     $linklabel =$post->getLinklabel();
     $porder =$post->getPorder();
     $showing =$post->getShowing();
     $keywords =$post->getKeywords();
     $c_date =$post->getC_date();
     $result = $this->connector->query("INSERT INTO `post` (`post_id`, `post_title`, `post_author`, `postcontent`, 
			`category`, `linklabel`, `porder`, `showing` ,`keywords` ,`c_date`) VALUES (NULL,' $post_title','$post_author','$postcontent','$category',$linklabel,'$porder','$showing','$keywords','$c_date')");
    // $row = $this->connector->fetchArray($result);
     echo "INSERT INTO `post` (`post_id`, `post_title`, `post_author`, `postcontent`,`category`, `linklabel`, `porder`, `showing` ,`keywords` ,`c_date`) VALUES (NULL,' $post_title','$post_author','$postcontent','$category',$linklabel,'$porder','$showing','$keywords','$c_date')" ;
      while($row= $this->connector->query($result)){
			//die("You have been Registered "."<br/> <a href='index.php'>click here<a/>");
		 echo "You have been add New Post"."<br/> <a href='index.php'>click here<a/>";
	}
   }
   
    function findPosts($key){
    //SELECT * FROM categorie WHERE cat_title LIKE  '%edi%';
   // echo "SELECT * FROM categorie WHERE cat_title LIKE '%$key%'";
     $result = $this->connector->query("SELECT * FROM `post` WHERE post_title LIKE '%$key%'");
     $x = 0;
     while ($row = $this->connector->fetchArray($result)) {
         $x++;
        $post[$x]= new Post();
        $post[$x]->setPost_id($row['post_id']);
        $post[$x]->setPost_title($row['post_title']);
        $post[$x]->setPost_author($row['post_author']);
        $post[$x]->setPostcontent($row['postcontent']);
        $post[$x]->setCategory($row['category']);
        $post[$x]->setLinklabel($row['linklabel']);
        $post[$x]->setPorder($row['porder']);
        $post[$x]->setShowing($row['showing']);
        $post[$x]->setKeywords($row['keywords']);
        $post[$x]->setC_date($row['c_date']);
        
       	}
        return $post;
 }
   
   
 }
?>