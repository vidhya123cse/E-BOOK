<?php 
	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fiction</title>
<style type="text/css">
			
			body {
				background-color:#FFFFFF;
				background-image: url(http://renatures.com/wp-content/uploads/2016/11/flowers-love-book-lavender-japanese-flower-wallpaper-1920x1080.jpeg); 
				background-position: center no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				background-color: #ffffff;background-position: no-repeat;
				background-image: url("http://www.nadinemuller.org.uk/wp-content/uploads/2012/11/magic-book.jpg");}
			h1 {
				
				font-size:50px;font-weight:bold;text-align:center;
				margin: 5px;color:red;}
a{
        font-family:Bradley Hand, cursive;font-size:25px;
	color:black; text-decoration:none; 
	 
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
				<h1><br><br>FICTION</h1><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
                
                
  <div class="column">
 <img src="https://www.free-ebooks.net/2d_covers/large/1343028671.jpg" width="115" height="121" border="2px solid black"  >
<a href="\books\Childhood.pdf"target="_blank"> Childhood- Leo Tolstoy<br><br /></a>
</div>


<div class="column">
<img src="https://i0.wp.com/www.hindibookspdf.com/wp-content/uploads/2017/07/The-god-of-small-things-hindi-book-download.jpg?fit=1500%2C2316" width="115" height="121" border="2px solid black"200px"  >
<a href="\books\the_god_of_small_things_by_-_arundhati_roy.pdf"target="_blank">the god of small things by -_arundhati_roy<br><br></a>
</div>

<div class="column">

<img src="https://assets.bigcartel.com/product_images/95643115/pi-800-2.jpg?auto=format&fit=max&h=1200&w=1200" width="115" height="121" border="2px solid black"200px"  >
<a href="\books\_life_of_pi_full_text_pdf.pdf"target="_blank"> life of pi<br><br /></a>
</div>

<div class="column">

<img src="https://images-na.ssl-images-amazon.com/images/I/51FqtXUscFL._SX325_BO1,204,203,200_.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="\books\_Five_Point_Someone_-_chetan_bhagat.pdf"target="_blank">Five	Point	Someone What	not	to	do	at	IIT <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-CHETAN	BHAGAT<br><br>
</a>
</div>


<div class="column">

<img src="https://images-na.ssl-images-amazon.com/images/I/51wOq6r%2BiPL._SX326_BO1,204,203,200_.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="_OceanofPDF.com_Half_Girlfriend_-_Chetan_Bhagat.pdf">Half_Girlfriend -Chetan_Bhagat<br><br />
</a>
</div>


</header></body></html>		