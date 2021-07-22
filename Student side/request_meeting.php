<?php
include 'demo.html';
include_once 'database.php';
session_start();
if(!(isset($_SESSION['email'])))
{
    header("location:index_student.php");
}
else
{
    
    $email = $_SESSION['email'];
    include_once 'database.php';
}
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REQUEST MEETING</title>
	<link rel="stylesheet" type="text/css" >
</head>
<body>
    
<header>
 
    <section class="banner">
<div class="container">
  <div class="row">
  <h1>NEED COUNSELLING ?</h1>
  </div>
  </div>
  </section>

<script>
	$(window).scroll(function() {
    if($(this).scrollTop() > 50)  
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});
</script>

<?php 
       
       $result = mysqli_query($con,"SELECT * FROM prof_name") or die('Error');
       while($row = mysqli_fetch_array($result)) 
       {
		
		$profname = $row['p_name'];
		$pemail =$row['email'];
		echo  '<div class="courses-container">
	   <div class="course">		
		   <div class="course-info">			
			   <h2>Prof.'.$profname.' </h2>
			   <a href="c.php?profmail='.$pemail.'&stumail='.$email.'" class="btn">Request For Meeting </a>
			   
		   </div>
	   </div>
   </div>';
       }
      
   
?>
</header>
</body>
</html>

<style>
	@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}


body {
	background-image: linear-gradient(45deg, 	#FF0000);
	font-family: 'Muli', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	min-height: 100vh;
	margin: 0;
}

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 700px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: 	#FF0000;
	color: #fff;
	padding: 30px;
	max-width: 250px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.btn {
	background-color: #bd3333	;
	border: none;
	outline: none;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}

section
{
  background:yellow;
}
.banner
{
  background:#bd3333;
  min-height:50px;
}
.banner .row
{
  text-align:center;
  margin-top:10px;
}
.banner h1
{
  color:white;
}



@media (max-width: 992px) {
  body
  {
    background:red;
  }
  .opaque-navbar {
    background-color: black;
    height: 20px;
    transition: background-color .5s ease 0s;
}

}



</style>



