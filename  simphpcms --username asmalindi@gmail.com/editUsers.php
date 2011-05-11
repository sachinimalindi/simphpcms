<?php

/**
 * @author asmalindi
 * @copyright 2011
 */
 
require("UserModel.php");
 $userM = new UserModel();
 $user = new User();
  include("process.php"); 
  
   if(isset($_POST['submit'])) {
    $id= $_POST['id'];
 
    if (isset($_POST['username'])) {
         $username = strip_tags($_POST['username']);
        $userM->updateUserField($cati,username,$username);    
	} 
    if (isset($_POST['full_name'])) {
         $fullname = strip_tags($_POST['full_name']);
        $userM->updateUserField($cati,full_name,$fullname);    
	} 
    if (isset($_POST['password'])) {
         $password = strtolower($_POST['password']);
         $cpassword = md5($password );
        $userM->updateUserField($cati,password,$cpassword);    
	} 
    if (isset($_POST['email'])) {
        $email = strtolower($_POST['email']);
        $userM->updateUserField($cati,email,$email);    
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
        <!--
action="/formbuilder/view.php
-->         <br /> <br /><br /><br /><br /><br /><br />
            <form id="form_156044" class="appnitro"  method="post" action="editcat.php"> 
    					<div class="form_description"> 
    			<h2>Edit categorie</h2> 
    			<p>This is your form description. Click here to edit.</p> 
    		</div>						
    			<ul > 
    			
    					<li id="li_3" > 
    		<label class="description" for="id">Drop Down </label> 
    		<div> 
    		<select class="element select medium" id="id" name="id"> 
    			<option value="1" ><?php
             
            $users=$userM->getUsers();
	          for($y=1;($y-1)<sizeof($users);$y++){
              // $categorie = $CategorieM->getCategories($categories[$y]);
              // $categories[$y]
              // echo $catID[$y];
             //echo "<li><a href='".$catID[$y]."'>".$catID[$y]."</a></li>";
             $field1=$users[$y]->getId();
             $field2=$users[$y]->getFull_name();
             echo "<option value=".$field1.">".$field2."</option>";
             
                }
	
             ?></option> 
               <!--
 <option value="2" selected="selected">Second option</option> 
                <option value="3" >Third option</option> 
-->
     
    		</select> 
    		</div> 
    		</li>			<li id="li_1" > 
		<label class="description" for="full_name">Full Name </label> 
		<div> 
			<input id="full_name" name="full_name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" > 
		<label class="description" for="username">Username </label> 
		<div> 
			<input id="username" name="username" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" > 
		<label class="description" for="password">Password </label> 
		<div> 
			<input id="password" name="password" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" > 
		<label class="description" for="email">Email </label> 
		<div> 
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
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
