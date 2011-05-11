
<?php
	

/**
 * @author asmalindi
 * @copyright 2011
 */
require_once('DbConnector.php');
require_once('SectionCategorie.php');

class SectionCategorieModel {
    
   private $connector ;
   
   	function __construct(){
	   $this->connector = new DbConnector(); 
   }
    
 function getSectionCategorieModels() {
    $result = $this->connector->query("SELECT * FROM `sectioncategorie`");
		$x = 0;
	   while ($row = $this->connector->fetchArray($result)) {
    	   $x++;
           $secc[$x] = new SectionCategorie();
           $secc[$x]->setSec_id($row['sec_id']);
           $secc[$x]->setCat_id($row['cat_id']);
     }
    return $secc;
 }
 
 function getCategorieBySection($sid){
    $result = $this->connector->query("SELECT * FROM sectioncategorie WHERE `sec_id` = '$sid'");
    	$x=0; 
   // echo "<li><a href='#'>".$row['cat_id']."</a></li>";
    while ($row = $this->connector->fetchArray($result)) {
        $x++;
        $catID[$x]= $row['cat_id'];
        //echo "<li><a href='".$catID[$x]."'>".$row['cat_id']."</a></li>";
	       // echo "<li><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
          // if ($secNow == $row['sec_id']) {
//             echo "<li id='current' ><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
//       	   } else {
//             echo "<li><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
//           }
         }
        // for($y=1;($y-1)<sizeof($catID);$y++){

        //  echo "<li><a href='".$catID[$y]."'>".$catID[$y]."</a></li>";

        // }
        return $catID;
 }
 
 function getSectionCategorieModel($sec_id ,$cat_id) {
    $result = $this->connector->query("SELECT * FROM sectioncategorie WHERE `sec_id` = '$sec_id' AND `cat_id` = '$cat_id'");
	$row = $this->connector>fetchArray($result);
       if($result= mysql_query($query)){
        $sectionCategorie= new SectionCategorie();
        $sectionCategorie->setSec_id($row['sec_id']);
        $sectionCategorie->setCat_id($row['cat_id']);
        return $sectionCategorie;
     //  while($row) 
      //  { 
       //  echo $result['fname']; 
       //  echo " "; 
       //  echo $result['lname']; 
       //  echo "&lt;br&gt;"; 
       //  echo $result['info']; 
       //  echo "&lt;br&gt;"; 
       //  echo "&lt;br&gt;"; 
       //     } 
       	}else 
	{
         echo mysql_errno($con) . ": " . mysql_error($con) . "\n";
	}
 }
 
  function removeSectionCategorieModel($sec_id ,$cat_id){
      $result = $this->connector->query("DELETE FROM `sectioncategorie` WHERE `sec_id` = '$sec_id' AND `cat_id` = '$cat_id'");
      if($result){
        echo "You have been Delete successfully...";
      }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
      }
   }
   
   function editSectionCategorieModel($Id,$field,$value){
     $result = $this->connector->query("UPDATE `section_categorie` SET $field = '$value' WHERE `sec_id` = '$Id'");
     if($result){
        echo "You have been Update successfully...";
     }else{
        echo mysql_errno() . ": " . mysql_error() . "\n";
     }
   } 
   
   function addNewSectionCategorieeModel($section_categorie){
     $sec_id =$section_categorie->getSec_id();
     $cat_id =$section_categorie->getCat_id();
     
     $result = $this->connector->query("INSERT INTO `sectioncategorie` (`sec_id`, `cat_id`) VALUES ('$sec_id','$cat_id')");
    // $row = $this->$connector->fetchArray($result);
      while($row = $this->connector->query($result)){
			//die("You have been Registered "."&lt;br/&gt; &lt;a href='index.php'&gt;click here&lt;a/&gt;");
		 echo "You have been add New SectionCategorie"."&lt;br/&gt; &lt;a href='index.php'&gt;click here&lt;a/&gt;";
	   } 
    } 
    
   //  function findSectionCategories($key){
//    //SELECT * FROM categorie WHERE cat_title LIKE  '%edi%';
//   // echo "SELECT * FROM categorie WHERE cat_title LIKE '%$key%'";
//     $result = $this->connector->query("SELECT * FROM categorie WHERE cat_title LIKE '%$key%'");
//     $x = 0;
//     while ($row = $this->connector->fetchArray($result)) {
//         $x++;
//       $cat[$x] = new Categorie();
//       $cat[$x]->setCat_id($row['cat_id']);
//       $cat[$x]->setCat_title($row['cat_title']);
//       $cat[$x]->setCat_despription($row['cat_despription']);
//       
//       	}
//      return $cat;  
// }
       
}

?>