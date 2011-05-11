<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
require("SectionModel.php");
include("process.php");
  $SectionM = new SectionModel();


?>
<head>                           
<link href="menu.css" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<style type="text/css">
<!--
    body,
    html {
        margin:0;
        padding:0;
        color:#000;
        background:#a7a09a;
    }
    
    #wrap {
        width:750px;
        margin:0 auto;
        background:#99c;
    }
    
    #header {
        padding:5px 10px;
        background:#ddd;
    } 
    h1 {
        margin:0;
    }
    
   /* #nav {
        padding:5px 10px;
        background:#c99;
    }
    
    #nav ul {
        margin:0;
        padding:0;
        list-style:none;
    }
    
    #nav li {
        display:inline;
        margin:0;
        padding:0;
    }*/
    
    h2 {
         margin:0 0 1em;
    }
    
    #main {
       float:left;
       width:480px;
       padding:10px;
       background:#9c9;
    }
    
    #sidebar {
        float:right;
        width:230px;
        padding:10px;
        background:#99c;
    }
    
    #footer {
         clear:both;
         background:#cc9;
    }
    
    #footer p {
         margin:0;
    }
	
-->
</style>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>Admin Panal</h1>
        </div>
        
<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>categorie</span></a>
            <div><ul>
                <li><a href="allcat.php"><span>All categorie</span></a></li>
                <li><a href="addcat.php"><span>Add categorie</span></a></li>
                <li><a href="editcat.php"><span>Edit categorie</span></a></li>
                <li><a href="findcat.php"><span>Find categorie</span></a></li>
                <li><a href="removecat.php"><span>Remove categorie</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>post</span></a>
            <div><ul>
                <li><a href="allPost.php"><span>All post</span></a></li>
                <li><a href="addPost.php"><span>Add post</span></a></li>
                <li><a href="editPost.php"><span>Edit post</span></a></li>
                <li><a href="findPost.php"><span>Find post</span></a></li>
                <li><a href="removePost.php"><span>Remove post</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>section</span></a>
           <div><ul>
                <li><a href="allSection.php"><span>All section</span></a></li>
                <li><a href="addSection.php"><span>Add section</span></a></li>
                <li><a href="editSection.php"><span>Edit section</span></a></li>
                <li><a href="findSection.php"><span>Find section</span></a></li>
                <li><a href="removeSection.php"><span>Remove section</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>sectioncategorie</span></a>
        <div><ul>
                <li><a href="allSectionCategorie.php"><span>All sectioncategorie</span></a></li>
                <li><a href="addSectionCategorie.php"><span>Add sectioncategorie</span></a></li>
                <li><a href="editSectionCategorie.php"><span>Edit sectioncategorie</span></a></li>
        </ul></div>
        </li>
        <li><a href="#"><span>users</span></a>
        <div><ul>
                <li><a href="allUsers.php"><span>All users</span></a></li>
                <li><a href="addUsers.php"><span>Add users</span></a></li>
                <li><a href="editUsers.php"><span>Edit users</span></a></li>
                <li><a href="findUsers.php"><span>Find users</span></a></li>
                <li><a href="removeUsers.php"><span>Remove users</span></a></li>
            </ul></div>
        </li>
        <li class="last"><a href="index.php"><span>view site</span></a></li>
    </ul>
</div>

<br />
        
        <div id="main">
            <h2>Column 1</h2>
             <?php
              if(isset($_POST['submit'])) {
                $key= $_POST['key'];
             echo"<table border='2' cellspacing='2' cellpadding='2'><tr>
                <th><font face='Arial, Helvetica, sans-serif'>Id</font></th>
                <th><font face='Arial, Helvetica, sans-serif'>Title</font></th>
                <th><font face='Arial, Helvetica, sans-serif'>Url</font></th>
                <th><font face='Arial, Helvetica, sans-serif'>Order</font></th>
                <th><font face='Arial, Helvetica, sans-serif'>Discription</font></th>
                </tr>";
	           $sections=$SectionM->findSections($key);
	          for($y=1;($y-1)<sizeof($sections);$y++){
              // $categorie = $CategorieM->getCategories($categories[$y]);
              // $categories[$y]
              // echo $catID[$y];
             //echo "<li><a href='".$catID[$y]."'>".$catID[$y]."</a></li>";
             $field1=$sections[$y]->getSec_id();
             $field2=$sections[$y]->getSec_title();
             $field3=$sections[$y]->getSec_url();
             $field4=$sections[$y]->getSec_order();
             $field5=$sections[$y]->getSec_despription();
             echo "<tr><td>".$field1."</td><td>".$field2."</td><td>".$field3."</td><td>".$field4."</td><td>".$field5."</td></tr>";
             
                }
                echo"</table><br/><br/><br/><br/>";
                }
             
              ?>
              <form  method="post" action="findSection.php">
                Search: <input type="text" name="key" value=""  /><br />
                	<input id="saveForm" class="button_text" type="submit" name="submit" value="Search" />
              </form>
             
        </div>
        
        <div id="sidebar">
            <h2>Column 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                ...
            </ul>
        </div>
        
        <div id="footer">
            <p>Footer</p>
        </div>
    </div>
</body>
