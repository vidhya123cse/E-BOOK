<?php 
	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>harry potter</title>
<style type="text/css">
			
			body {
				background-color:#FFFFFF;
				background-image:url(http://getwallpapers.com/wallpaper/full/0/7/d/263156.jpg); 
				background-position:no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				background-color: #ffffff;background-position: no-repeat;
				background-image: url("http://paperlief.com/images/harry-potter-logo-wallpaper-3.jpg");}
			h1 {
				
				font-size:50px;font-weight:bold;text-align:center;
				margin: 5px;color:red;}
a{
        font-family:Bradley Hand, cursive;font-size:25px;
	color:white; text-decoration:none; 
	 
	 }
a:hover { color:#666666;}
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
				<h1><br><br>Harry  Potter Series</h1><h2 align="center">J K ROWLING</h2><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
                
                
  <div class="column">
 <img src="https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg" width="115" height="121" border="2px solid black"  >
<a href="\books\harry_potter_and_the_sorcerers_stone.pdf"target="_blank">Harry potter and the sorcerers stone<br><br /></a>
</div>


<div class="column">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTNbKKDETt4kL1XdlsktU-GpoB8Dqv6fkd41W0TGzlESzZmj7isQ" width="115" height="121" border="2px solid black"200px"  >
<a href="\books\book_2_-_harry_potter_and_the_chamber_of_secrets.pdf"target="_blank">Harry potter and the chamber of secrets<br><br></a>
</div>

<div class="column">

<img src="https://hpmedia.bloomsbury.com/rep/s/9781408855676_309040.jpeg" width="115" height="121" border="2px solid black"200px"  >
<a href="\books\book-3-harry-potter-and-the-prisoner-of-azkaban.pdf"target="_blank">Harry potter and the prisoner of azkaban<br><br /></a>
</div>

<div class="column">

<img src="https://images.penguinrandomhouse.com/cover/9780807282595" width="115" height="121" border="2px solid black"200px"  >
<a href="\books\j.k._rowling_-_hp_4_-_harry_potter_and_the_goblet_of_fire.pdf"target="_blank">harry potter and the goblet of  fire<br>
<br><br>
</a>
</div>


<div class="column">

<img src="https://images-na.ssl-images-amazon.com/images/I/51lFAzVQUxL._SX342_BO1,204,203,200_.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="j.k._rowling_-_hp_5_-_harry_potter_and_the_order_of_the_phoenix.pdf">harry potter and the order of the phoenix<br><br />
</a>
</div>


<div class="column">
<img src="https://newarena.com/wp-content/uploads/2017/07/6-3.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="j.k._rowling_-_hp_6_-_harry_potter_and_the_half-blood_prince.pdf">harry potter and the half blood prince<br><br />
</a>
</div>

<div class="column">
<img src="https://img.thriftbooks.com/api/images/l/21b86d16931064bb1a05ad4e32cafd4e3f9462a0.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="j.k._rowling_-_hp_7_-_harry_potter_and_the_deathly_hallows.pdf">harry potter and the  deathly hallows<br><br />
</a>
</div>
</header></body></html>		