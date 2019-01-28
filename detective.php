<?php 
	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>detective books</title>
<style type="text/css">
			
			body {
				background-color:#FFFFFF;
				background-image:url(https://www.wallpaperup.com/uploads/wallpapers/2014/08/26/429033/d8eabd947fd62e5dde2715f875638a10-700.jpg); 
				background-position:no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				border-radius:30px;
				background-color: #ffffff;background-position: no-repeat;
				background-image: url("https://c.pxhere.com/photos/b1/0b/philatelist_stamp_collection_stamp_collecting_collection_glass_loop_zoom-1173254.jpg!d");}
			h1 {
				
				font-size:50px;font-weight:bold;text-align:center;
				margin: 5px;color:red;}
a{
        font-family:Bradley Hand, cursive;font-size:25px;
	color:#3300FF; text-decoration:none; 
	 
	 }
a:hover { color:#FFFFFF;}
marquee{font-size:20px;color:green;
font-weight:bold;}
#div1,.a{
        font-family:Bradley Hand, cursive;font-size:25px;
        line-height: 100px;
        height:500px;
        background-color:rgba(200,200,200,0.7);
        text-align:right;
	height:90px;
	color:white; 
	text-decoration:none; 
	width:1350px;
	padding-right:10px;
	top:0;
	 
	 }
a:hover { color:#666666;}

#div1{
  position: fixed;}
	
	 .logout {
		color: red;}
	  .icon {
           font-family: Times of Roman;
           font-size: 20px;
           font-weight: bold;
           text-decoration: none;
           color: white;}
				
</style>
</head>
<body>
<div id ="div1">
		 <a href="start.php?category=0&login=1" class="a">HOME</a>&nbsp&nbsp&nbsp          <a href="" class="a">MY BOOKS</a>&nbsp&nbsp&nbsp
		 <a href="addabook.php" class="a">ADD A BOOK</a>&nbsp&nbsp&nbsp      <a href="" class="a">CONTACT</a>&nbsp&nbsp&nbsp 
		 <span class ="icon"><?php if (isset($_SESSION['success'])) { echo $_SESSION['firstname']; echo "&nbsp&nbsp<a href=\"index.php?logout='1'\" class =\"logout\">logout</a>";}?></span></div> 
		 

<header>
				<h1><br><br>Detective</h1><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
                
                
  <div class="column">
 <img src="https://images-na.ssl-images-amazon.com/images/I/51sbeUclwFL._SX286_BO1,204,203,200_.jpg" width="115" height="121" border="2px solid black"  >
<a href="adventure of sherlock holmes.pdf" target="_blank">adventure of sherlock holmes<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by Sir Arthur Conan Doyle<br /></a>
</div>


<div class="column">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz-XKn0xPhSjQa2H8kEw4GdtdmDfrE-EO2VeceAhykCqeoM4HXQA" width="115" height="121" border="2px solid black"200px"  >
<a href="The Complete Sherlock Holmes.pdf" target="_blank">The Complete Sherlock Holmes
<br><br></a>
</div>

<div class="column">

<img src="https://image.slidesharecdn.com/allanpoes-morellaandthemurdersintheruemorgue-140924141748-phpapp02/95/allan-poes-morella-and-the-murders-in-the-rue-morgue-1-638.jpg?cb=1411568349" width="115" height="121" border="2px solid black"200px"  >
<a href="the_murders_in_the_rue_morgue.pdf" target="_blank">the murders in the rue morgue 
<br><br /></a>
</div>

<div class="column">

<img src="https://images-na.ssl-images-amazon.com/images/I/51eqhnR%2BVGL._SX322_BO1,204,203,200_.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="Strangers_On_A_Train.pdf" target="_blank">Strangers_On_A_Train by Raymond Chandler and Czenzi Ormonde

<br>
<br>
</a>
</div>




</header></body></html>		