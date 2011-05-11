<?php

    /**
     * @author asmalindi
     * @copyright 2011
     */
     
    require("SectionModel.php");
    
    $sectionM = new SectionModel();
    $section = new section();
    
    if (isset($_GET['secno'])) {
       $secNow = $_GET['secno'];
	} else {
        $secNow = 1;
    }	
    
    
    //foreach ( $row as $sectiontemp ) {
     //echo $director . "<br />";
    
        //index.php?secno=3
?>
<!-- START NAVIGATION TOP -->
<div id="navTop">
        <ul>
        
        <?php
        $row = $sectionM->getSections($secNow);
       // while($row)
     //{
        //print_r($row);
        //echo "<li><a href='index.php'> HOME</a></li>";
        //if ($secNow == $row['sec_id']) {
        //   echo "<li id='current' ><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
    //	} else {
       //    echo "<li><a href='index.php?secno=".$row['sec_id']."'>".$row['sec_title']."</a></li>";
      //  }
     // }
	        
        ?>


    
        </li>
    </ul>
<!--<div id="navTop">
        <ul>
        <li id="current"><a href="index.html">Layout 1</a></li>
        <li><a href="layout-2.html">Layout 2</a></li>
        <li><a href="layout-3.html">Layout 3</a></li>
        <li><a href="layout-4.html">Layout 4</a></li>
        <li><a href="site-elements.html">Site Elements</a></li>
        <li><a href="#">Colors</a>
            <ul>
                <li><a href="colors.html">Colors</a></li>
                <li><a href="site-elements.html">Layout Blue</a></li>
                <li><a href="layout-green.html">Layout Green</a></li>
                <li><a href="layout-red.html">Layout Red</a></li>
                <li><a href="layout-yellow.html">Layout Yellow</a></li>
                <li><a href="layout-brown.html">Layout Brown</a></li>
                <li><a href="layout-grey.html">Layout Grey</a></li>
            </ul>
        </li>
    </ul>-->

</div><!-- END NAVIGATION TOP -->