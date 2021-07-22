<?php
include "connections.php";
include "demo.html";

$id=$_GET["id"];
$res=mysqli_query($link,"select * from add_tests where id=$id");
while($row=mysqli_fetch_array($res))
{
    $testname=$row["testname"];
    $testsubject=$row["testsubject"];
    $total=$row["total"];
    $testtime=$row["testtime"];
    $testdate=$row["testdate"];
    $testmarks=$row["testmarks"];
    $testdifficulty=$row["testdifficulty"];
    $marksperq=$row["marksperq"];
    
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tests Page</title>
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="sidebar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <script src="navbar.js"></script>
        <script src="sidebar.js"></script>
    </head>

    <body>

        

        <div id="sidebar">
            <div class="toggle-btn" onclick="toggleSidebar(this)">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="list">
                <div class="item" onclick="document.location='home.php'">Home</div>
                <div class="item" onclick="document.location='meeting.php'">counselling</div>
                <div class="item" onclick="document.location='main.php'">Tests</div>
            </div>
        </div>

        <div class="container col-9" id="Heading" style="padding: 1.5rem 0.5rem ;">
            <div style="border: 1px solid black; display:block; padding: 30px; ">
                <strong style="font-size: 21px;">Admin Panel</strong>
            </div>
        </div>

        <div class="card container col-lg-4 col-md-6 col-sm-12 mt-1 justify-content-center" style="border: 1px solid black; ">
            <div class="card-header" style=" padding:1%">
                <strong style="font-size: 19px;">Edit Test</strong>
            </div>
            <hr>

            <div class="card-body" style="border: 1px solid black; background:rgb(233, 231, 231); width:auto; padding:1%">
                <form class="form form-group" action="#" method="POST">
                    <p>
                        Test Name: <br> <input type="text" name="testname" placeholder="Enter Test Name" class="form-control" value="<?php  echo $testname; ?>">
                    </p>
                    <p>
                        Test Subject:<br> <input type="text" name="testsubject" placeholder="Enter Subject Name" class="form-control" value="<?php  echo $testsubject; ?>">
                    </p>
                    <p>
                        Number of Questions:<br> <input type="text" name="total" placeholder="Enter Number of Questions.." class="form-control" value="<?php  echo $total; ?>">
                    </p>
                    <p>
                        Duration of Test:<br> <input type="text" name="testtime" placeholder="Duration of Test in min." class="form-control" value="<?php  echo $testtime; ?>">
                    </p>
                    <p>
                        Test Date:<br> <input type="text" name="testdate" placeholder="Enter the Date of Test" class="form-control" value="<?php  echo $testdate; ?>">
                    </p>
                    <p>
                        Test Marks:<br> <input type="text" name="testmarks" placeholder="Enter Total Marks of Test" class="form-control" value="<?php  echo $testmarks; ?>" >
                    </p>
                    <p>
                        Test Difficulty:<br> <input type="text" name="testdifficulty" placeholder="Hard/Medium/Easy" class="form-control" value="<?php  echo $testdifficulty; ?>" >
                    </p>
                    <p>
                        Marks per Question:<br> <input type="text" name="marksperq" placeholder="Must be Same for all.." class="form-control" value="<?php  echo $marksperq; ?>">
                    </p>

                    <div class="form-group">
                        <input type="submit" name="Submit" value="Update Test" class="btn btn-success">
                    </div>


                </form>
            </div>
        </div>

        &nbsp;

        <div class="container col-lg-3   col-md-3 col-sm-6 float-right" style="display:inline-block">
                <a href="Tests_Company_Student_Add_Edit.php">
                    <input type="submit" name="Submit" value="Back to Admin Page" class="btn btn-primary">
                    </a>
            </div>
        
        <?php
            
            if(isset($_POST["Submit"]))
            {
                mysqli_query($link,"update add_tests set testname='$_POST[testname]', testsubject='$_POST[testsubject]', total='$_POST[total]', testtime='$_POST[testtime]', testdate='$_POST[testdate]', testmarks='$_POST[testmarks]', testdifficulty='$_POST[testdifficulty]', marksperq='$_POST[marksperq]' where id=$id") or die(mysqli_error($link));

                ?>
                <script type="text/javascript">
                    alert("Exam updated Successfully!");
                    window.location="View_Tests.php";
                </script>
                <?php

            }

        ?>



    </body>

    </html>