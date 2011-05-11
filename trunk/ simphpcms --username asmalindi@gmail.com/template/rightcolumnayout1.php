<!-- START RIGHT COLUMN -->
<?php
	//require("SectionCategorieModel.php");
    //require("CategorieModel.php");
    
    $SectionCategorieM = new SectionCategorieModel();
    $CategorieM = new CategorieModel();
     
    if (isset($_GET['secno'])) {
       $secNow = $_GET['secno'];
	} else {
        $secNow = 1;
    }
    
    if (isset($_GET['catno'])) {
       $catNow = $_GET['catno'];
	} else {
        $catNow = 1;
    }
?>
<div id="rightColumn-layout1">
<h2>Right Column</h2>

<div id="sidebar">
    <ul>
        <?php
	       $catID = $SectionCategorieM->getCategorieBySection($secNow);
            for($y=1;($y-1)<sizeof($catID);$y++){
               $categorie = $CategorieM->getCategorie($catID[$y]);
              // echo $catID[$y];
             //echo "<li><a href='".$catID[$y]."'>".$catID[$y]."</a></li>";
             echo "<li><a href='index.php?secno=".$secNow."&catno=".$catID[$y]."'>".$categorie->getCat_title()."</a></li>";
           }
        ?>
    </ul>
</div>
<!--
<div id="sidebar">
    <ul>
        <li><a href="#sitename" title="Sitename">Page 1</a></li>
        <li><a href="#sitename" title="Sitename">Page 2</a></li>
        <li><a href="#sitename" title="Sitename">Page 3</a></li>
        <li><a href="#sitename" title="Sitename">Page 4</a></li>
        <li><a href="#sitename" title="Sitename">Page 5</a></li>
    </ul>
</div>
-->

<p>
Lorem ipsum dolor sit amet, consectetuer sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
</p> 

<p>
Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
</p>

</div><!-- END RIGHT COLUMN -->