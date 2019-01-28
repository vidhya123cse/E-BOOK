<?php 
	session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>books for children </title>
<style type="text/css">
			
			body {
				background-color:#FFFFFF;
				background-image:url(http://www.intrawallpaper.com/static/images/1582350.jpg); 
				background-position:no-repeat;
				font-family: Georgia, Times, serif;
				margin: 0px;}
			
			header {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 1px solid #000000;
				border-radius:30px;
				background-color: #ffffff;background-position: no-repeat;
				background-image: url("https://previews.123rf.com/images/iimages/iimages1609/iimages160900131/62917442-viele-kinder-b%C3%BCcher-im-park-illustration-lesen.jpg");}
			h1 {
				
				font-size:50px;font-weight:bold;text-align:center;
				margin: 5px;color:red;}
a{
        font-family:Bradley Hand, cursive;font-size:25px;
	color:black; text-decoration:none; 
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
				<h1><br><br>Books for Children</h1><br /><br /><marquee bgcolor=""
                 width="900px"> CLICK THE LINK TO DOWNLOAD THE BOOK</marquee>
                
                <div class="row" align="justify" style="margin-left:125px">
                
                
  <div class="column">
 <img src="http://ebooks.rahnuma.org/children/Stories/Charlotte_s_Web_Complete.jpg" width="115" height="121" border="2px solid black"  >
<a href="Charlotte_s_Web_Complete.pdf" target="_blank">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charlotte's Web Complete<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /></a>
</div>


<div class="column">
<img src="https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/4001/9781400109135.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="0913_cinderellarevised.pdf" target="_blank">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CINDERELLA, RUMPELSTILTSKIN,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
AND OTHER STORIES
<br></a>
</div>

<div class="column">

<img src="https://cdn3.volusion.com/jtoq7.b7owf/v/vspfiles/photos/JUNGLE_BOOK-2T.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="The_Jungle_Book_T.pdf" target="_blank">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Jungle Book<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Rudyard Kipling 
<br /></a>
</div>

<div class="column">

<img src="https://www.free-ebooks.net/2d_covers/large/1165674473.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="THE SECRET GARDEN.pdf" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE SECRET GARDEN 
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BY FRANCES HODGSON BURNETT
<br>
<br>
</a>
</div>


<div class="column">
<img src="http://www.loyalbooks.com/image/detail/Aesops-Fables.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="Aesops_Fables_NT.pdf" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aesops Fables 
<br>
<br>
</a>
</div>

<div class="column">
<img src="https://ebook3000.biz/wp-content/uploads/2018/03/Tinkle-Double-Digest-March-2018-690x1024.jpg" width="115" height="121" border="2px solid black"200px"  >
<a href="Tinkle Double Digest - March 2018.pdf" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tinkle Double Digest - March 2018
<br>
<br>
</a>
</div>

</header></body></html>		