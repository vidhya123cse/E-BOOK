<?php 
	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Malayalam Books</title>
<style type="text/css">
			
			body {
				background-color:#FFFFFF;
				background-image:url(https://cdn.pixabay.com/photo/2017/06/01/16/42/book-2363912_960_720.jpg); 
				background-position:no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				border-radius:30px;
				background-color: #ffffff;background-position: no-repeat;
				background-image: url("http://www.toca-ch.com/data/walls/20/21840597.jpg");}
			h1 {
				
				font-size:50px;font-weight:bold;text-align:center;
				margin: 5px;color:red;}
a{
        font-family:Bradley Hand, cursive;font-size:25px;
	color:white; text-decoration:none; 
	font-weight:bold;
	 
	 }
a:hover { color:#3300FF;}
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
				<h1><br><br>Malayalam Books</h1><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
                
                
  <div class="column">
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCTtZSRcSBj2i9ZCqo2o3JmQm_A_eH5lVhU_mpmodi_VkDoAKe" width="115" height="121" border="2px solid black"  >
<a href="Aadujeevitham -by Benyamin.pdf" target="_blank">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ആടുജീവിതം<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ബെന്യാമിൻ. <br /></a>
</div>


<div class="column">
<img src="https://entebook.com/wp-content/uploads/2017/11/Image-10-300x449.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="kasakinte ithihasam - final (1).pdf" target="_blank">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ഖസാക്കിന്റെ ഇതിഹാസം |<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ഒ.വി. വിജയൻ
<br></a>
</div>

<div class="column">

<img src="https://images.gr-assets.com/books/1457772357l/23123318.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="veenapoov.pdf" target="_blank">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;വീണ പൂവ്<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
രചന: എൻ. കുമാരനാശാൻ (1907)
<br /></a>
</div>

<div class="column">

<img src="https://images.gr-assets.com/books/1359824726l/17314866.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="Indulekha.pdf" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ഇന്ദുലേഖ (നോവൽ) 
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;രചന:ഒ. ചന്തുമേനോൻ (1889)
<br>
<br>
</a>
</div>




</header></body></html>		