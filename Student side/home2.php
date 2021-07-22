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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home2.css">

</head>
<body>
  
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <?php 
       $result = mysqli_query($con,"SELECT * FROM student") or die('Error');
       while($row = mysqli_fetch_array($result)) 
       {
		$name = $row['name'];
        $id = $row['s_id'];
        $branch = $row['branch'];
        $email = $row['email_id'];
        $phone = $row['phone_no'];
        $roll = $row['roll_no'];
        $year = $row['year'];
        $gender = $row['gender'];
        $father = $row['father_name'];
        $test = $row['test_solved'];
        

		echo  '
        
        <h6 class="f-w-600">Name: </h6><h10>' .$name.'</h10>
        <h6 class="f-w-600">Student Id: </h6><h10>' .$id.'</h10><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
    </div>
</div>
<div class="col-sm-8">
<div class="card-block">
    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Contact Details:</h6>
    <div class="row">
        
        <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Email</p>
            <h6 class="text-muted f-w-400">'.$email.'</h6>
        </div>
        <div class="col-sm-6">
            <p class="m-b-10 f-w-600">Phone</p>
            <h6 class="text-muted f-w-400">'.$phone.'</h6>
        </div>     
        </div>
        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Academic Details:</h6>
        <div class="row">
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Branch:</p>
                <h6 class="text-muted f-w-400">'.$branch.'</h6>
            </div>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Year:</p>
                <h6 class="text-muted f-w-400">'.$year.'</h6>
            </div>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Roll number:</p>
                <h6 class="text-muted f-w-400">'.$roll.'</h6>
            </div>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Number Of Tests Solved:</p>
                <h6 class="text-muted f-w-400">'.$test.'</h6>
            </div>
            </div>
        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">General Information:</h6>
        <div class="row">
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Gender:</p>
                <h6 class="text-muted f-w-400">'.$gender.'</h6>
            </div>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Father Name:</p>
                <h6 class="text-muted f-w-400">'.$father.'</h6>
            </div>
            
        </div>
        
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
        ';
       }
      
   
?>


                       
                               

</body>
</html>
