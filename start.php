<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-books on free</title>

<style>
header{ height:450px;
background: url(http://lh6.ggpht.com/H1PJ-9dYhUp84MXwgXYwrNqvxQx_YKMLqk9IUIWXE7tUue5Vb4wJsP4VFVuj_gMUtogUVfnqNeG8YACkASLMtpB5a3Y=s999) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;  }

#div1,.a{
        font-family:Bradley Hand, cursive;font-size:25px;
        line-height: 100px;
        height:500px;
        background-color:rgba(200,200,200,0.7);
        text-align:right;
	height:90px;
	color:white; text-decoration:none; 
	width:100%;
	top:500px;
	 
	 }
.b {
	font-family:Bradley Hand, cursive;font-size:25px;
        line-height: 100px;
        height:500px;
        background-color:rgba(200,200,200,0.7);
        text-align:right;
	height:90px;
	color:red; text-decoration:none; 
	width:100%;
	top:0;}
a:hover { color:#666666;}
b:hover { color:#FFFF00;}

#div,.e
{
font-size:90px;font-family:Brush Script MT, Brush Script Std, cursive;
    color:#99FFFF;
    text-shadow: 0 1px 0 #999999, 0 2px 0 #888888,
             0 3px 0 #777777, 0 4px 0 #666666,
             0 5px 0 #555555, 0 6px 0 #444444,
             0 7px 0 #333333, 0 8px 7px rgba(0, 0, 0, 0.4),
             0 9px 10px rgba(0, 0, 0, 0.2);
}	
form{
margin-top:-150px;margin-left:400px;}
.tx{
 
  border: 5px solid #00B4CC;
  padding:6px;
  height: 30px;
  border-radius: 10px;
  width:400px;
}

.bt {
  width: 150px;
  height: 45px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}
.logout {
		color: red;}

#div2 p
{
margin-top:100px;
font-family:Courier New, monospace;
font-size:30px; font-style:italic;
font-weight:bold;
text-shadow:5px 5px 10px black;;

color:#0000FF;}


.types{
font-size:35px;font-family:Brush Script MT, Brush Script Std, cursive;
    color:#CC66FF;font-weight:500px;

	
}

.con{ height:400px;
	width:100%;
background:url(http://files.hostgator.co.in/hostgator247543/image/invictus_aerosports_contactus_banner.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	margin-top:100px; 
	padding-bottom:100px; }

u {
    text-decoration:overline
	text-align:right;
	font-size:30px;
	color:#FFFFFF;
	font-family:FreeMono, monospace;
}
 iframe {
	
	height:400px;
	width:300px;
	border-radius:50px; 	
	
       }



	</style>
</head>

<br>
<div class="slide">
  <img class="mySlides" src="https://quotefancy.com/media/wallpaper/1600x900/4048-Haruki-Murakami-Quote-If-you-only-read-the-books-that-everyone.jpg" height="650px" width="100%" >
  <img class="mySlides" src="https://i.pinimg.com/564x/d2/68/4a/d2684aeb9b47927fb36469e4252ec552.jpg" height="650px" width="100%">
  <img class="mySlides" src="https://quotefancy.com/media/wallpaper/1600x900/15478-Margaret-Fuller-Quote-Today-a-reader-tomorrow-a-leader.jpg" height="650px" width="100%">
  <img class="mySlides" src="https://i1.wp.com/thedesibanker.com/wp-content/uploads/2017/11/4041298-book-art-wallpapers.jpg?resize=768%2C480" height="650px" width="100%"> 
  <img class="mySlides" src="https://wendycgarfinkle.files.wordpress.com/2016/02/hemingway-quotefancy-4056-3840x2160.jpg?w=900" height="650px" width="100%">
  


</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}

</script>


<header>
	
<?php  if (isset($_GET['login'])) { if ($_GET['login'] == 0) {   $_SESSION['login']=0; } else {$_SESSION['login']=$_GET['login']; } }   ?>
<div id ="div1">
<span class="e">E BOOKS</span> &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp 
<?php  if (isset($_GET['login']) && isset($_GET['category'])) {  $k=$_GET['category'];
$m=$_GET['login']; } else { $k = ""; $m = ""; }?>
 <a href="start.php?category=<?php echo $k; ?>&login=<?php echo $m; ?>" class="a">HOME</a>&nbsp&nbsp&nbsp          <a href="book.php?category=0&login=<?php echo $_SESSION['login']; session_write_close();?>&sign=1" class="a">MY BOOKS</a>&nbsp&nbsp&nbsp
 <a href="book.php?category=10&login=<?php echo $_SESSION['login']; session_write_close();?>&sign=1" class="a">ADD A BOOK</a>&nbsp&nbsp&nbsp      <a href="#dd" class="a">CONTACT</a>&nbsp&nbsp&nbsp<?php    if ($_SESSION['login'] == 1 ) {  echo $_SESSION['firstname']; echo "&nbsp&nbsp<a href=\"index.php?logout='1'\" class =\"logout\">logout</a>"; } else { echo "<a href=\"book.php?category=11&login=0&sign=0\" class=\"b\">Sign In/Up</a>"; }   ?> &nbsp&nbsp&nbsp      </div>
 </header>
<form action= "book.php?category=0&login=<?php echo $_SESSION['login'];?>&sign=1" method="POST">
  <input type="text"  class="tx" name ="searchitem" placeholder="Search the book" required />
  <input type="submit" class="bt" value="Search" name ="search" />
</form>
<body>

<div id="div2">  
<p > SELECT YOUR INTEREST</p>
<div class="row" align="left">
  <div class="column">
&nbsp&nbsp&nbsp&nbsp<a href="book.php?category=1&login=<?php echo $_SESSION['login']; ?>&sign=1 " class="a"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXFF8DgkmqnxY7-AOyrumMNYKnFdPhedAnbPsG4AW1Ip8sVzju" width="200" height="200" border="2px solid black"200px"  > </a>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="book.php?category=2&login=<?php echo $_SESSION['login']; ?>&sign=1"  class="a">  <img src="https://previews.123rf.com/images/bimdeedee/bimdeedee1507/bimdeedee150700006/42279251-science-in-speech-bubbles-above-science-books-pens-box-apple-and-mug-with-science-doodles-on-chalkbo.jpg" width="200" height="200" border="2px solid black"200px"  > </a>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;

&nbsp&nbsp&nbsp&nbsp&nbsp<a href="book.php?category=3&login=<?php echo $_SESSION['login']; ?>&sign=1" class="a">  <img src="https://image.slidesharecdn.com/fiction-vrs-nonfiction3765/95/fiction-versus-nonfiction-2-728.jpg?cb=1253021521" width="200" height="200" border="2px solid black"200px"  ></a>&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;

&nbsp&nbsp&nbsp<a href="book.php?category=4&login=<?php echo $_SESSION['login']; ?>&sign=1" class="a"> <img src="http://bethanyaroma.com/assets/books/all-books_0325.png" width="200" height="200" border="2px solid black"200px" border-radius="20px"  > </a>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;</div>
  <section class="types">&nbsp&nbsp&nbsp&nbsp&nbspbiography&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp &nbsp&nbsp&nbsp science&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbspFiction &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp&nbsp &nbsp&nbsp&nbspMalayalam
<div>
<br />
&nbsp&nbsp&nbsp<a href="book.php?category=5&login=<?php echo $_SESSION['login']; session_write_close();?>&sign=1" class="a"> <img src="https://static.sportpaleisgroep.be/sportpaleis/img/events/1734/0e3bc6485ea1ddfe1adb13b7dda881bbab04b766/billboard.jpg" width="200" height="200"   > </a> &nbsp  &nbsp &nbsp&nbsp&nbsp

&nbsp<a href="book.php?category=6&login=<?php echo $_SESSION['login']; session_write_close();?>&sign=1" class="a"> <img src="https://thumbs.dreamstime.com/z/open-book-icon-concept-detective-literary-fiction-genre-vector-81680505.jpg" width="200" height="200"   > </a>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp

&nbsp<a href="book.php?category=7&login=<?php echo $_SESSION['login']; session_write_close();?>&sign=1" class="a"> <img src="http://cispa.hk/wp-content/uploads/2016/10/creative-colorful-attractive-children-with-books-wallpaper-free-download.jpg" width="200" height="200"   > </a>&nbsp&nbsp&nbsp


</div>
</div>
<section class="types">&nbsp&nbsp&nbsp&nbsp&nbspHarry Potter &emsp;&emsp;&emsp;&emsp;&emsp;Detective &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbsp&nbsp&nbsp&nbsp Books for children


</section>
</div>

<section class="con" id ="dd">
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="start.php?category=<?php echo $k; ?>&login=<?php echo $m; ?>"><img src="facebook-Icon.png"></a>&emsp;&emsp;&emsp;&emsp;
<a href="start.php?category=<?php echo $k; ?>&login=<?php echo $m; ?>"><img src="Twitter-Icon.png"></a>&emsp;&emsp;&emsp;&emsp;
<a href="start.php?category=<?php echo $k; ?>&login=<?php echo $m; ?>"><img src="Pinterest-Icon.png"></a>&emsp;&emsp;&emsp;&emsp;
<a href="start.php?category=<?php echo $k; ?>&login=<?php echo $m; ?>"><img src="Email-Icon.png"></a>&emsp;&emsp;&emsp;&emsp;
<a href=""><img src="LinkedIn.png"></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<b>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<i class="fa fa-phone" style="font-size:36px" color:"#FFFFFF" ></i><u>9847858407</u>

<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3917.790082464856!2d76.43255031480186!3d10.903551992235352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ba7d635151d9b73%3A0xecf06761ecf4f56c!2sGovt.+Engineering+College+Palakkad%2C+Mannampatta%2C+Government+Engineering+College+Rd%2C+Sreekrishnapuram%2C+Kerala+679513!3m2!1d10.903552!2d76.434739!5e0!3m2!1sen!2sin!4v1533621319312" width="400" height="400" frameborder="0" style=border-radius: 50px 50px 10px 10px" align="left" style="margin-left:5px"></iframe>
<br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;




 
<br><br>
<br><br><br><br><br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<u><font color="yellow">Address:</u><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<u>Govt.Engineering college</u><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<u>Sreekrishnapuram</u><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u>Palakkad
</u><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
www.readthroughus@gmail.com
</b>

</section>
</body>
</html>
