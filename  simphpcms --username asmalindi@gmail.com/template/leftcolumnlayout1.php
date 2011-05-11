<?php

    /**
     * @author asmalindi
     * @copyright 2011
     */
     
    require("PostModel.php");
    require("SectionCategorieModel.php");
    require("CategorieModel.php");
    $postM = new PostModel();
    $SectionCategorieM = new SectionCategorieModel();
    $CategorieM = new CategorieModel();
   // $post = new Post();
    //$sectionM = new SectionModel();
    //$section = new section();
    if (isset($_GET['secno'])) {
       $secNow = $_GET['secno'];
	} else {
        $secNow = 1;
    }
 ?>   
  <?php  
  echo "<div id='leftColumn-layout1'>";
    if (isset($_GET['catno'])) {
       $catNow = $_GET['catno'];
       $post = $postM->getPostByCat($catNow);
       echo '<h2>'.$post->getPost_title().'</h2>'.'<p>'.$post->getPostcontent().'<p>';
       
	} else {
         $cID = $SectionCategorieM->getCategorieBySection($secNow);
         for($y=1;($y-1)<sizeof($cID);$y++){
               $categorie = $CategorieM->getCategorie($cID[$y]);
               $post = $postM->getPostByCat($cID[$y]);
               $str = $post->getPostcontent();
              // echo $catID[$y];
             //echo "<li><a href='".$catID[$y]."'>".$catID[$y]."</a></li>";
             //echo "<a href='index.php?secno=".$secNow."&catno=".$catID[$y]."'>Read More</a>";
             echo "<div id='postBox' >".
             '<h4>'.$post->getPost_title().'</h4>'.'<p>'.substr($post->getPostcontent(),0,100).'<p>'.
             "<a href='index.php?secno=".$secNow."&catno=".$cID[$y]."'>Read More</a>"
             ."</div>";
              // echo substr($str,0,100).'<br/>'.'<br/>';
           }
    }	
    
    echo "</div>";
    //<div id="postBox" style="position: fixed; width:500; height:50;"></div>
    //foreach ( $row as $sectiontemp ) {
     //echo $director . "<br />";
    
        //index.php?secno=3
?>
<!--
<div id="leftColumn-layout1">
-->

<!--
<h2>Left Column</h2>

<p>Lorem ipsum dolor sit amet, consectetuer sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>

<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
-->
<!--
</div>
--><!-- END LEFT COLUMN -->