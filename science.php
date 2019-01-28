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
				background-image:url(https://wallup.net/wp-content/uploads/2016/07/20/32861-science-Albert_Einstein-formula-mathematics-physics-special_relativity.jpg); 
				background-position:no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				border-radius:30px;
				background-color: #ffffff;background-position: no-repeat;
				background-image: url("https://cdn.wallpapersafari.com/6/58/F52vlU.jpeg");}
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
				<h1><br><br>Science</h1><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
                
                
  <div class="column">
 <img src="http://s.pdfdrive.com/assets/thumbs/02a/02ab78d0dc98bd89ce165079ee86138e.jpg" width="115" height="121" border="2px solid black"  >
<a href="_OceanofPDF.com_A_Briefer_History_of_Time_-_Stephen_Hawking.pdf" target="_blank">A Briefer History of Time - Stephen Hawking<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Stephen Hawkingbr /></a>
</div>


<div class="column">
<img src="http://oceanofpdf.com/wp-content/uploads/2017/12/PDF-EPUB-The_Origin_of_Species-Download.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="darwin.pdf" target="_blank">The origin of Species <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Charles Darwin
<br><br></a>
</div>

<div class="column">

<img src="https://bookoftheday.org/wp-content/uploads/2018/07/B07D9VZZ92.01.LZZZZZZZ-292x450.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="The-Earth-s-orbit-Space-exploration-Book-1.pdf" target="_blank">SPACE EXPLORATION. THE EARTH’S ORBIT <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by Serdyuk Oleksiy and Shkurat Natalia
<br><br /></a>
</div>

<div class="column">

<img src="https://s.pdfdrive.com/assets/thumbs/164/164f85c01ef70d003cdaec0e78a415e8.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="Encyclopedia+of+Biology.pdf" target="_blank">Encyclopedia of Biology
<br>
<br>
</a>
</div>


<div class="column">

<img src="https://s.pdfdrive.com/assets/thumbs/a68/a689fff7852a4e17b345fd08c6b568ee.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="astrophysics, gravitation and quantum physics.pdf" target="_blank">astrophysics, gravitation and quantum physics<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by Vahram Mekhitarian<br />
</a>
</div>


<div class="column">
<img src="http://www.loyalbooks.com/image/detail/Relativity-The-Special-and-Ge.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="einstein.pdf" target="_blank">Einstein’s
General Theory of Relativity<br><br />
</a>
</div>

<div class="column">
<img src="https://upload.wikimedia.org/wikipedia/en/4/41/Clrs3.jpeg" width="115" height="121" border="2px solid black"200px"  >
<a href="introduction-to-algorithms-3rd-edition-sep-2010.pdf"  target="_blank">introduction-to-algorithms-3rd-edition<br><br />
</a>
</div>

</header></body></html>		