<?php
include_once 'database.php';
include 'demo.html';
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    
    <!-- style.css -->
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<?php

$id=@$_GET['id'];
$p=mysqli_query($con,"SELECT * FROM add_tests WHERE id='$id'" )or die('Error157');
while($row=mysqli_fetch_array($p) )
   {
$totalmark=$row['testmarks'];

   


   $q=mysqli_query($con,"SELECT * FROM history WHERE id='$id' AND email_id='$email' " )or die('Error157');
   $y=mysqli_query($con,"select concat(round(((`score` / $totalmark) * 100 ),2), '%')as a from  history where id=$id  AND email_id='$email'")or die($conn->error);
   $m=mysqli_query($con,"select RN from ( SELECT `id`, `email_id`, `score`,DENSE_RANK() OVER (PARTITION BY `id` ORDER BY `score` DESC) as RN FROM history ) a where a.id = $id AND `email_id`='$email'");
   $a=mysqli_query($con," select avg (`score`) as b from history where id = $id ");
   $z = $y->fetch_assoc();
   $b = $a->fetch_assoc();
   $n = $m->fetch_assoc();
   while($row=mysqli_fetch_array($q) )
   {
       $s=$row['score'];
       $w=$row['wrong'];
       $r=$row['rightans'];
       $qa=$row['level'];
       echo '<style>
       *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
       }
       .card {
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
         transition: 0.3s;
         width: 40%;
         text-align: center;
         background: #ebebe0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
       }
       
       .card:hover {
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
       }
       
       .container {
        text-align: center;
       }
       </style>
       </head>
       <body>
       
       <div class="card">
       <h2>Well Done!!</h2>
         <img src="reward.png" alt="Avatar" style="width:30%">
         <br>
         <br>
         <h3><b>Rank '.$n['RN'].'</b></h3>
         
         <br>
           <h3><b>Score: '.$s.'</b></h3> 
           <br>
           <h3><b>Percentage: '.$z['a'].'</b></h3>
           <br>
           <h3><b>Average Marks: '.$b['b'].'</b></h3>
           <br>
           <h3><b>Number Of Right Answers: '.$r.'</b></h3>
           <br>
           <h3><b>Number Of Wrong Answers: '.$w.'</b></h3>
           <br>
           
            
         
       </div>';
   }   
   }             
?>
</html>
