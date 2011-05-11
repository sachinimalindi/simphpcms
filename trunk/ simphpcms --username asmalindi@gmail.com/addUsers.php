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
    if (isset($_POST['full_name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
       //echo"Register.. 111111111!";
         $username = strip_tags($_POST['username']);
		 $fullname = strip_tags($_POST['full_name']);
		 $password = strtolower($_POST['password']);
		 $email = strtolower($_POST['email']);
		 $cpassword = md5($password );
         
         $user->setFull_name($fullname);
         $user->setUsername($username);
         $user->setPassword($cpassword);
         $user->setEmail($email);
         $user->setDate(date("Y/m/d"));
         $user->setActivated("0");
         $rand = rand(23456789,98765432) ;
         $user->setRandom($rand);
         $user->getUserlevel("0");
         
         $userM->addNewUser($user);
         
	} else {
        //echo"Register.. 222222222!";
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
		<form id="form_158383" class="appnitro"  method="post" action="addUsers.php"> 
					<div class="form_description"> 
			<h2>Untitled Form</h2> 
			<p>This is your form description. Click here to edit.</p> 
		</div>						
			<ul > 
			
					<li id="li_1" > 
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
