<html>
<title> ADD A BOOK </title>
<style type="text/css">
<?php session_start(); ?>

body{
	background:url(https://i.pinimg.com/originals/5e/1b/a5/5e1ba5370dc603dac2f21ef5f9d3454a.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;  }
.boxed {
	background-color:rgba(0,0,0,.7);
	color:yellow;
	font:bold 50px "Times New Roman", Times, serif;
	text-align:center;
	margin-left:350px;margin-top:100px;
	width:800px;
	height:500px;
	border-radius:30px;   } 

#div1,.a{
        font-family:Bradley Hand, cursive;font-size:25px;
        line-height: 100px;
        height:75px;
	width:100%;
        background-color:rgba(200,200,200,0.7);
        text-align:right;
	color:white; 
	text-decoration:none; 
	
	padding-right:10px;
	top:0;
	 
	 }
.logout {
		color: red;}


#div1{
  position: fixed;}


input[type=text] {
    width: 50%;
	height:40px;
    border: 3px solid #ccc;
}

input[type=text]:focus {
    border: 3px solid #555;
}
q{
font-size:25px;
color:white;
}
label{
color:white;
font-size:35px;}

.me {
  cursor: pointer;
  font-size: 30px;
 }	


p{ 

color:#FFB732;
font-size:30px;
}


.tx{
 
  border: 5px solid #00B4CC;
  padding:3px;
  height: 30px;
  border-radius:10px;
  width:200px;
padding-left:200px;
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
 .error {
	font-family: times roman;
	color: red;}
.m{
margin-top:10px;
border: 2px solid white;
width:100%}


</style>
</head>
<body>
<div id ="div1">
		 <a href="start.php?category=0&login=1" class="a">HOME</a>&nbsp&nbsp&nbsp          <a href="" class="a">MY BOOKS</a>&nbsp&nbsp&nbsp
		 <a href="addabook.php" class="a">ADD A BOOK</a>&nbsp&nbsp&nbsp      <a href="" class="a">CONTACT</a>&nbsp&nbsp&nbsp 
		 <span class ="icon"><?php    if ($_SESSION['login'] == 1 ) {  echo $_SESSION['firstname']; echo "&nbsp&nbsp<a href=\"index.php?logout='1'\" class =\"logout\">logout</a>"; } else { echo "<a href=\"book.php?category=0&login=0&sign=0\" class=\"b\">Sign In/Up</a>"; }   ?> &nbsp&nbsp&nbsp</span></div> 
<br><br><br><br><section class="m">
<p>
Make sure that, the book is not in our library
Go a quick Search.................</p>
<?php include ("check.php"); ?>	
<form action= "addabook.php" method="POST">
  <input type="text"  class="tx" name ="searchitem" placeholder="Search the book" required />
  <input type="submit" class="bt" value="Search" name ="search" /><br><span class="error">&nbsp&nbsp* <?php echo $errors1; ?></span>
</form></section>
<div class="boxed"> Add A Book :) <br><br>

<form action="upload.php" method ="POST" enctype="multipart/form-data">
 <label for="fname">Name of the Book </label>&emsp;
  <input type="text" id="fname" value="" placeholder ="Book Name" name ="temp_name">
  <label>Author</label>&nbsp&emsp;&emsp;&emsp;&emsp;
  <input type="text" value="" placeholder ="Author" name ="author"><br><br>
&emsp;&emsp;&nbsp&nbsp<input type="file" class="me" name ="myfile">
<input type ="submit" name ="upload" value ="upload">

</form>
<?php if (isset($_GET['upload'])) { if ($_GET['upload'] == 1) { echo "Uploaded Successfully"; } else { echo $_SESSION['error1']; } } ?>


</div>
</body>


</html>