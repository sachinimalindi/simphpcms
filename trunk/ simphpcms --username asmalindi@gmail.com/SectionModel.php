<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
require_once('DbConnector.php');
require_once('section.php');

class SectionModel {
    
    private $connector;
  // private $connector = new DbConnector() ;
   
   	function __construct(){
   	    $this->connector = new DbConnector();
   	
   }
  
  function getSectionList() {
    $result = $this->connector->query("SELECT * FROM `section`");
	$x = 0;
	while ($row = $this->connector->fetchArray($result)) {
	   $x++;
       $sec[$x] = new section();
       $sec[$x]->setSec_id($row['sec_id']);
       $sec[$x]->setsSec_title($row['sec_title']);
       $sec[$x]->setSec_url($row['sec_url']);
       $sec[$x]->setSec_order($row['sec_order']);
       $sec[$x]->setSec_despription($row['sec_despription']);
      

    }
    return $sec;
    
 }
 
   
 function getSections($secNow) {
    $result = $this->connector->query('SELECT * FROM section');
    if(isset($result)){
       // $row = $this->connector->fetchArray($result);
        while ($row = $this->connector->fetchArray($result)) {
	       // echo "<li><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
           if ($secNow == $row['sec_id']) {
             echo "<li id='current' ><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
       	   } else {
             echo "<li><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
           }
         }
        return $row;
    }else {
        return null;
    }
	
 }
 
 function getSection($id) {
    $result = $connector->query("SELECT * FROM section WHERE `sec_id` = '$id'");
	$row = $connector->fetchArray($result);
       if($result= mysql_query($query)){
        $section= new section();
        $section->setSec_id($row['sec_id']);
        $section->setSec_title($row['sec_title']);
        $section->setSec_url($row['sec_url']);
        $section->setSec_order($row['sec_order']);
        $section->setSec_despription($row['sec_despription']);
        return $post;
       	}else 
	{
         echo mysql_errno() . ": " . mysql_error() . "\n";
	}
 }
 
  function removeSection($Id){
      $result = $connector->query("DELETE FROM `section` WHERE `sec_id` = '$Id'");
      if($result){
        echo "You have been Delete successfully...";
      }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
      }
   }
   
   function editSection($Id,$field,$value){
     $result = $connector->query("UPDATE `section` SET $field = '$value' WHERE `sec_id` = '$Id'");
     if($result){
        echo "You have been Update successfully...";
     }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
     }
   } 
   
   function addNewSection($section){
     $sec_id =$section->getSec_id();
     $sec_title =$section->getSec_title();
     $sec_url=$section->getSec_url();
     $sec_order =$section->getSec_order();
     $sec_despription =$section->getSec_despription();
    // echo "INSERT INTO `section` (`sec_id`, `sec_title`,`sec_url`,`sec_order`, `sec_despription`) VALUES (NULL,`$sec_title`,`$sec_url`,$sec_order,`$sec_despription`)" ;
    echo "INSERT INTO `cms_demo`.`section` (`sec_id`, `sec_title`, `sec_url`, `sec_order`, `sec_despription`) VALUES (NULL, '$sec_title', '$sec_url', '$sec_order', '$sec_despription')";
     $result = $this->connector->query("INSERT INTO `cms_demo`.`section` (`sec_id`, `sec_title`, `sec_url`, `sec_order`, `sec_despription`) VALUES (NULL, '$sec_title', '$sec_url', '$sec_order', '$sec_despription')");
     
     //$row = $connector->fetchArray($result);
      while($row= $this->connector->query($result)){
			//die("You have been Registered "."<br/> <a href='index.php'>click here<a/>");
		 echo "You have been add New Section"."<br/> <a href='index.php'>click here<a/>";
	} 
   } 
   
    function findSections($key){
    //SELECT * FROM categorie WHERE cat_title LIKE  '%edi%';
   // echo "SELECT * FROM categorie WHERE cat_title LIKE '%$key%'";
     $result = $this->connector->query("SELECT * FROM `section` WHERE sec_title LIKE '%$key%'");
     $x = 0;
     while ($row = $this->connector->fetchArray($result)) {
          $x++;
       $sec[$x] = new section();
       $sec[$x]->setSec_id($row['sec_id']);
       $sec[$x]->setsSec_title($row['sec_title']);
       $sec[$x]->setSec_url($row['sec_url']);
       $sec[$x]->setSec_order($row['sec_order']);
       $sec[$x]->setSec_despription($row['sec_despription']);
      

    }
    return $sec; 
 }  
    
}

?>