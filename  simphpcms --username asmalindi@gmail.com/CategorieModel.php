<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
require_once('DbConnector.php');
require_once('Categorie.php');

class CategorieModel {
    
    private $connector ;
   
   	function __construct(){
	   $this->connector = new DbConnector(); 
   }
    
 function getCategories() {
    $result = $this->connector->query('SELECT * FROM categorie');
    $x = 0;
	while ($row = $this->connector->fetchArray($result)) {
	   $x++;
       $cat[$x] = new Categorie();
       $cat[$x]->setCat_id($row['cat_id']);
       $cat[$x]->setCat_title($row['cat_title']);
       $cat[$x]->setCat_despription($row['cat_despription']);
      // echo "<li>".$row['cat_title']."<span>".$row['cat_id']."</span> <span>".$row['cat_despription']."</span></li>";

    }
    return $cat;
    
 }
 function findCategories($key){
    //SELECT * FROM categorie WHERE cat_title LIKE  '%edi%';
   // echo "SELECT * FROM categorie WHERE cat_title LIKE '%$key%'";
     $result = $this->connector->query("SELECT * FROM categorie WHERE cat_title LIKE '%$key%'");
     $x = 0;
     while ($row = $this->connector->fetchArray($result)) {
         $x++;
       $cat[$x] = new Categorie();
       $cat[$x]->setCat_id($row['cat_id']);
       $cat[$x]->setCat_title($row['cat_title']);
       $cat[$x]->setCat_despription($row['cat_despription']);
       
       	}
      return $cat;  
 }
 
 function getCategorie($id) {
    $result = $this->connector->query("SELECT * FROM categorie WHERE `cat_id` = '$id'");
       while ($row = $this->connector->fetchArray($result)) {
        $categorie= new Categorie();
        $categorie->setCat_id($row['cat_id']);
        $categorie->setCat_title($row['cat_title']);
        $categorie->setCat_despription($row['cat_despription']);
        return $categorie;
       	}
 }
 
  function removeCategorie($Id){
      $result = $this->connector->query("DELETE FROM `categorie` WHERE `cat_id` = '$Id'");
      if($result){
        echo "You have been Delete successfully...";
      }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
      }
   }
   
   function editCategorie($Id,$field,$value){
     $result = $this->connector->query("UPDATE `categorie` SET $field = '$value' WHERE `cat_id` = '$Id'");
     if($result){
        echo "You have been Update successfully...";
     }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
     }
   } 
   
   function addNewCategorie($categorie){
     $cat_id =$categorie->getCat_id();
     $cat_title =$categorie->getCat_title();
     $cat_despription =$categorie->getCat_despription();
     
     $result = $this->connector->query("INSERT INTO `categorie` (`cat_id`, `cat_title`, `cat_despription`) VALUES (NULL,'$cat_title','$cat_despription')");
     //$row = $this->connector->fetchArray($result);
      while($row = $this->connector->query($result)){
			//die("You have been Registered "."<br/> <a href='index.php'>click here<a/>");
		 echo "You have been add New Categorie"."<br/> <a href='index.php'>click here<a/>";
	}
   }   
}

?>