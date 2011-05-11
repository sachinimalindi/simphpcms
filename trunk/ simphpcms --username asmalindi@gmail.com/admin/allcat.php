<?php

/**
 * @author asmalindi
 * @copyright 2011
 */



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
                <li><a href="#"><span>All categorie</span></a></li>
                <li><a href="#"><span>Add categorie</span></a></li>
                <li><a href="#"><span>Edit categorie</span></a></li>
                <li><a href="#"><span>Find categorie</span></a></li>
                <li><a href="#"><span>Remove categorie</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>post</span></a>
            <div><ul>
                <li><a href="#"><span>All post</span></a></li>
                <li><a href="#"><span>Add post</span></a></li>
                <li><a href="#"><span>Edit post</span></a></li>
                <li><a href="#"><span>Find post</span></a></li>
                <li><a href="#"><span>Remove post</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>section</span></a>
           <div><ul>
                <li><a href="#"><span>All section</span></a></li>
                <li><a href="#"><span>Add section</span></a></li>
                <li><a href="#"><span>Edit section</span></a></li>
                <li><a href="#"><span>Find section</span></a></li>
                <li><a href="#"><span>Remove section</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>sectioncategorie</span></a>
        <div><ul>
                <li><a href="#"><span>All sectioncategorie</span></a></li>
                <li><a href="#"><span>Add sectioncategorie</span></a></li>
                <li><a href="#"><span>Edit sectioncategorie</span></a></li>
                <li><a href="#"><span>Find sectioncategorie</span></a></li>
                <li><a href="#"><span>Remove sectioncategorie</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>users</span></a>
        <div><ul>
                <li><a href="#"><span>All users</span></a></li>
                <li><a href="#"><span>Add users</span></a></li>
                <li><a href="#"><span>Edit users</span></a></li>
                <li><a href="#"><span>Find users</span></a></li>
                <li><a href="#"><span>Remove users</span></a></li>
            </ul></div>
        </li>
        <li class="last"><a href="#"><span>view site</span></a></li>
    </ul>
</div>

<br />
        
        <div id="main">
            <h2>Column 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>
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
