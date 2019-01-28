<?php 
	session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>biographyt</title>
<style type="text/css">
			
			body {
				background-color:#FFFFFF;
				background-image: url(https://www.metsoc.org/wp-content/uploads/2014/09/Books-300x200.jpg); 
				background-position: center no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				background-color: #ffffff;
				height: 1100px;
				background-image: url("https://thumbs.dreamstime.com/b/page-old-grunge-notebook-6268795.jpg");}
			h1 {
				
				font-size:36px;font-weight:bold;text-align:center;
				margin: 5px;}
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
		 

<header>				<h1><br><br>BIOGRAPHYS</h1><br /><br /><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
  <div class="column">
 <img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7e/The_Story_of_My_Experiments_with_Truth.jpg/220px-The_Story_of_My_Experiments_with_Truth.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="https://holybooks-lichtenbergpress.netdna-ssl.com/wp-content/uploads/M.-K.-Gandhi-An-Autobiography-or-The-Story-of-my-Experiments-with-Truth.pdf"target="_blank"> The story of my experiments with truth<br>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp -Mahathma gandhy</a>
</div>


<div class="column">
<img src="https://s.pdfdrive.com/assets/thumbs/a2f/a2fa84b671971cedd93ee9932c69feed.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="https://cbambang.files.wordpress.com/2010/10/mother-teresa.pdf"> Mother Teresa- a Biography<br><br></a>
</div>

<div class="column">

<img src="https://s.pdfdrive.com/assets/thumbs/cbc/cbccfdcf43fe538b39780f4f00ef21a9.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="https://rosswolfe.files.wordpress.com/2015/02/frank-mclynn-napoleon-a-biography-2003.pdf"target="_blank"> frank-mclynn-napoleon-a-biography<br><br /></a>
</div>

<div class="column">

<img src="https://images-na.ssl-images-amazon.com/images/I/51Xi4ySeeyL.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="http://library.aceondo.net/ebooks/HISTORY/Dreams_from_My_Father-Barack_Obama.pdf"target="_blank">Dreams_from_My_Father-Barack_Obama<br><br>
</a>
</div>


<div class="column">

<img src="https://images.gr-assets.com/books/1295670969l/634583.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="https://yippiie.files.wordpress.com/2011/04/wings-of-fire-by-abdul-kalam-printers1.pdf">wings-of-fire-by-abdul-kalam<br><br />
</a>
</div>


 </header></body></html>		