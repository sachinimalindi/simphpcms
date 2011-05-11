<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
 require("PostModel.php");
 include("process.php");
  require("CategorieModel.php");
 $CategorieM = new CategorieModel();
 $postM = new PostModel();
 $post = new Post(); 
  include("process.php");
 if(isset($_POST['submit'])) {
   
    if (isset($_POST['post_title']) && isset($_POST['postcontent']) && isset($_POST['category']) && isset($_POST['linklabel']) && isset($_POST['showing']) && isset($_POST['keywords'])  && isset($_POST['porder'])) {
      // echo"Registeraaaaaaaaaaaaaaaaaa!"."<br/>";
       $post_title = $_POST['post_title'];
       //echo "post_title  ".$post_title."<br/>";
       $postcontent =$_POST['postcontent'];
      // echo "postcontent  ".$postcontent."<br/>" ;
       $category =$_POST['category'];
      // echo "category  ".$category."<br/>";
       $linklabel =$_POST['linklabel'];
      // echo "linklabel  ".$linklabel."<br/>";
       $showing =$_POST['showing'];
      // echo "showing  ".$showing."<br/>";
       $keywords =$_POST['keywords'];
      // echo "keywords  ".$keywords."<br/>";
       $c_date =date("Y-m-d");
     //  echo "c_date  ".$c_date."<br/>";
       $porder =$_POST['porder'];
    //   echo "porder  ".$porder."<br/>" ;
       $post_author = $_SESSION['uid'];
    //   echo "post_author  ".$post_author."<br/>";

       $post->setPost_title($post_title);
       $post->setPostcontent($postcontent);
       $post->setCategory($category);
       $post->setLinklabel($linklabel);
       $post->setShowing($showing);
       $post->setKeywords($keywords);
       $post->setC_date($c_date);
       $post->setPost_author($post_author);
       $post->setPorder($porder);
        $postM->addNewPost($post);
      // $categorie->setCat_title($cat_title);
      // $categorie->setCat_despription($cat_despription);
      // $CategorieM->addNewCategorie($categorie);
	} else {
        echo"Register.. 222222222!";
    }
 }

?>
<head>
<link href="menu.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="view.css" media="all"/>

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
        <br /> <br /> <br /> <br /><br /><br /><br />
		<form id="form_157405" class="appnitro"  method="post" action="addPost.php"> 
					<div class="form_description"> 
			<h2>Untitled Form</h2> 
			<p>This is your form description. Click here to edit.</p> 
		</div>						
			<ul > 
			
					<li id="li_1" > 
		<label class="description" for="post_title">Title </label> 
		<div> 
			<input id="post_title" name="post_title" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" > 
		<label class="description" for="postcontent">Content </label> 
		<div> 
			<textarea id="postcontent" name="postcontent" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_7" > 
		<label class="description" for="category">Category </label> 
		<div> 
		<select class="element select medium" id="category" name="category"> 
			<?php
             
            $categories=$CategorieM->getCategories();
            
	          for($y=1;($y-1)<sizeof($categories);$y++){
              // $categorie = $CategorieM->getCategories($categories[$y]);
              // $categories[$y]
              // echo $catID[$y];
             //echo "<li><a href='".$catID[$y]."'>".$catID[$y]."</a></li>";
             $field1=$categories[$y]->getCat_id();
             $field2=$categories[$y]->getCat_title();
             echo "<option value=".$field1.">".$field2."</option>";
             
                }
	
             ?>
             
		</select> 
		</div> 
		</li>		<li id="li_3" > 
		<label class="description" for="linklabel">Tags </label> 
		<div> 
			<input id="linklabel" name="linklabel" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" > 
		<label class="description" for="showing">Showing </label> 
		<span> 
			<input id="showing" name="showing" class="element checkbox" type="checkbox" value="1" /> 
<label class="choice" for="showing">showing</label> 
 
		</span> 
		</li>		<li id="li_4" > 
		<label class="description" for="keywords">Keywords </label> 
		<div> 
			<input id="keywords" name="keywords" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" > 
		<li id="li_6" > 
		<label class="description" for="porder">Order </label> 
		<div> 
			<input id="porder" name="porder" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li> 
			
					<li class="buttons"> 
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" /> 
		</li> 
			</ul> 
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
