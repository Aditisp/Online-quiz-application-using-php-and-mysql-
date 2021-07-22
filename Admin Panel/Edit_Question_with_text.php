<?php
include "connections.php";
include "demo.html";
$subjectname='';
$marks='';
$duration='';
$difficulty='';

$question_no="";
$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$result="";

$id=$_GET["id"];
$id1=$_GET["id1"];

$res=mysqli_query($link, "select * from add_questions where id=$id");
while($row=mysqli_fetch_array($res))
{
    $question_no=$row["question_no"];
    $question=$row["question"];
    $opt1=$row["opt1"];
    $opt2=$row["opt2"];
    $opt3=$row["opt3"];
    $opt4=$row["opt4"];
    $result=$row["result"];
}


$res=mysqli_query($link, "select * from add_tests where id=$id");
while($row=mysqli_fetch_array($res))
{
    $subjectname=$row["testsubject"];
    $marks=$row["testmarks"];
    $duration=$row["testtime"];
    $difficulty=$row["testdifficulty"];
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

    <body style="background-color: rgb(207, 205, 205);">

        

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
                <strong style="font-size: 19px;">Edit Question in <?php echo $subjectname ?> (<?php echo $marks ?> Marks/<?php echo $duration ?> Min/<?php echo $difficulty ?>) </strong>
                <hr>
                <strong style="font-size: 15px;">Question Number - <?php echo $question_no ?></strong>
            </div>


            <div class="card-body" style="border: 1px solid black; background:rgb(233, 231, 231); width:auto; padding:1%">
                <form class="form form-group" action="#" method="POST" enctype="multipart/form-data">
                    <p>
                        Add Question:<br> <input type="text" name="question" placeholder="Enter Question" value="<?php echo $question; ?>" class="form-control">
                    </p>
                    <p>
                        Add Option 1:<br> <input type="text" name="opt1" placeholder="Enter Option 1" value="<?php echo $opt1; ?>" class="form-control">
                    </p>
                   
                    <p>
                        Add Option 2:<br> <input type="text" name="opt2" placeholder="Enter Option 2" value="<?php echo $opt2; ?>" class="form-control">
                    </p>
                   
                    <p>
                        Add Option 3:<br> <input type="text" name="opt3" placeholder="Enter Option 3" value="<?php echo $opt3; ?>"class="form-control">
                    </p>
                    
                    <p>
                        Add Option 4:<br> <input type="text" name="opt4" placeholder="Enter Option 4" value="<?php echo $opt4; ?>" class="form-control">
                    </p>
                   
                    <p>
                        Add Answer:<br> <input type="text" name="result" placeholder="Enter Answer" value="<?php echo $result; ?>" class="form-control">
                    </p>
                    <div class="form-group float-right" style="display: inline-block">
                        <input type="submit" name="Submit" value="Update Question" class="btn btn-info">
                    </div>


                </form>
            </div>

            

        </div>

        &nbsp; <br>

        <!-- <div class="container col-lg-5 col-md-6 col-sm-12 float-right" style="display:inline-block">
            <a href="View_Questions.php">
                <button type="submit" name="Submit1" value="Submit Questions" class="btn btn-success"> Submit </button>
            </a>
        </div> -->

        <div class="container col-lg-4 col-md-3 col-sm-12 float-right" style="display:inline-block">
            <a href="View_Tests.php">
                <input type="submit" name="Submit2" value="Back to Test Page" class="btn btn-primary">
            </a>
        </div>


        <?php
            
            if(isset($_POST["Submit"]))
            {

                    mysqli_query($link, "update add_questions set question='$_POST[question]', opt1='$_POST[opt1]', opt2='$_POST[opt2]', opt3='$_POST[opt3]', opt4='$_POST[opt4]', result='$_POST[result]' where id=$id");
                    // if($count==0)
                    // {
                        
                    // }

                    // else{
                    //     while($row=mysqli_fetch_array($res))
                    //     {
                    //         $loop=$loop+1;
                    //         mysqli_query($link, "update add_questions set question_no='$loop' where id=$row[subjectid]");
                    //         mysqli_query($link, "update add_questions set id='$loop' where subjectid=$row[subjectid]");
                    //     }
                    

                    // $loop=$loop+1;


                ?>
            <script type="text/javascript">
                alert("Questions updated SUCCESSFULLY!");
                window.location = "View_Questions.php?id=<?php echo $id1 ?>";
            </script>
            <?php

            }

           


        ?>



    </body>

    </html>