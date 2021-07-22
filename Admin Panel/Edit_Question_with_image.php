<?php
include "connections.php";
include "demo.html";
$subjectname='';
$marks='';
$duration='';
$difficulty='';

$question_no="";
$iquestion="";
$iopt1="";
$iopt2="";
$iopt3="";
$iopt4="";
$iresult="";

$id=$_GET["id"];
$id1=$_GET["id1"];

$res=mysqli_query($link, "select * from add_questions where id=$id");
while($row=mysqli_fetch_array($res))
{
    $question_no=$row["question_no"];
    $iquestion=$row["iquestion"];
    $iopt1=$row["iopt1"];
    $iopt2=$row["iopt2"];
    $iopt3=$row["iopt3"];
    $iopt4=$row["iopt4"];
    $iresult=$row["iresult"];
}

// $res=mysqli_query($link, "select * from add_tests where id=$id");
// while($row=mysqli_fetch_array($res))
// {
//     $subjectname=$row["testsubject"];
//     $marks=$row["testmarks"];
//     $duration=$row["testtime"];
//     $difficulty=$row["testdifficulty"];
// }



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
                <strong style="font-size: 19px;">Edit Question with Images <?php echo $subjectname ?> (<?php echo $marks ?> Marks/<?php echo $duration ?> Min/<?php echo $difficulty ?>) </strong>
                <hr>
                <strong style="font-size: 15px;">Question Number - <?php echo $question_no ?></strong>
            </div>


            <div class="card-body" style="border: 1px solid black; background:rgb(233, 231, 231); width:auto; padding:1%">
                <form class="form form-group" action="#" method="POST" enctype="multipart/form-data">
                    <p>
                        Add Question:<br> <input type="file" class="form-control" name="iquestion" value="<?php echo $iquestion ?>" style="padding: 3px">
                        Your Selected Option is: <br>
                        <img src="<?php echo $iquestion; ?>" height="100" width="120">
                    </p>
                    <p>
                        Add Option 1:<br> <input type="file" class="form-control" name="iopt1" value="<?php echo $iopt1 ?>" style="padding: 3px">
                        Your Selected Option is: <br>
                        <img src="<?php echo $iopt1; ?>" height="100" width="120">
                    </p>
                    
                    <p>
                        Add Option 2:<br> <input type="file" class="form-control" name="iopt2" value="<?php echo $iopt2 ?>" style="padding: 3px">
                        Your Selected Option is: <br>
                        <img src="<?php echo $iopt2; ?>" height="100" width="120">
                    </p>
                   
                    <p>
                        Add Option 3:<br> <input type="file" class="form-control" name="iopt3" value="<?php echo $iopt3 ?>" style="padding: 3px">
                        Your Selected Option is: <br>
                        <img src="<?php echo $iopt3; ?>" height="100" width="120">
                    </p>
                  
                    <p>
                        Add Option 4:<br> <input type="file" class="form-control" name="iopt4" value="<?php echo $iiopt4 ?>" style="padding: 3px">
                        Your Selected Option is: <br>
                        <img src="<?php echo $iopt4; ?>" height="100" width="120">
                    </p>
                    
                    <p>
                        Add Answer:<br> <input type="file" class="form-control" name="iresult" value="<?php echo $iresult ?>" style="padding: 3px">
                        Your Selected Option is: <br>
                        <img src="<?php echo $iresult; ?>" height="100" width="120">
                    </p>
                  

                    <div class="form-group float-left" style="display: inline-block">
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
            <a href="Tests_Company_Student_Add_Edit.php">
                <input type="submit" name="Submit2" value="Back to Admin Page" class="btn btn-primary">
            </a>
        </div>


        <?php
            
            if(isset($_POST["Submit"]))
            {

                    $count=0;
                    $res=mysqli_query($link, "select * from add_questions where subjectid=$id") or die(mysqli_error($link));
                    $count=mysqli_num_rows($res);

                    $count=$count + 1;

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


                                
                $tm=md5(time());

                $fnm1=$_FILES["iquestion"]["name"];
                $dst1="./q_opt_images/".$tm.$fnm1;
                $dst_db1="q_opt_images/".$tm.$fnm1;
                move_uploaded_file($_FILES["iquestion"]["tmp_name"], $dst1);

                $fnm2=$_FILES["iopt1"]["name"];
                $dst2="./q_opt_images/".$tm.$fnm2;
                $dst_db2="q_opt_images/".$tm.$fnm2;
                move_uploaded_file($_FILES["iopt1"]["tmp_name"], $dst2);

                $fnm3=$_FILES["iopt2"]["name"];
                $dst3="./q_opt_images/".$tm.$fnm3;
                $dst_db3="q_opt_images/".$tm.$fnm3;
                move_uploaded_file($_FILES["iopt2"]["tmp_name"], $dst3);

                $fnm4=$_FILES["iopt3"]["name"];
                $dst4="./q_opt_images/".$tm.$fnm4;
                $dst_db4="q_opt_images/".$tm.$fnm4;
                move_uploaded_file($_FILES["iopt3"]["tmp_name"], $dst4);

                $fnm5=$_FILES["iopt4"]["name"];
                $dst5="./q_opt_images/".$tm.$fnm5;
                $dst_db5="q_opt_images/".$tm.$fnm5;
                move_uploaded_file($_FILES["iopt4"]["tmp_name"], $dst5);

                $fnm6=$_FILES["iresult"]["name"];
                $dst6="./q_opt_images/".$tm.$fnm6;
                $dst_db6="q_opt_images/".$tm.$fnm6;
                move_uploaded_file($_FILES["iresult"]["tmp_name"], $dst6);

                mysqli_query($link,"insert into add_questions values (NULL, '$count' ,'$_POST[question]','$dst_db1', '$_POST[opt1]', '$dst_db2', '$_POST[opt2]', '$dst_db3', '$_POST[opt3]', '$dst_db4', '$_POST[opt4]', '$dst_db5', '$_POST[result]' , '$dst_db6', $_GET[id])") or die(mysqli_error($link));

                



                ?>
            <script type="text/javascript">
                alert("Questions added SUCCESSFULLY!");
                window.location = "Add_Questions.php?id=<?php echo $id ?>";
            </script>
            <?php

            }

            if(isset($_POST["Submit1"]))
            {

                    $count=0;
                    $res=mysqli_query($link, "select * from add_questions where subjectid=$id") or die(mysqli_error($link));
                    $count=mysqli_num_rows($res);

                    $count=$count + 1;

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

                
                    
                                
                

                mysqli_query($link,"insert into add_questions values (NULL, '$count' ,'$_POST[question]','$_POST[iquestion]', '$_POST[opt1]', '$_POST[iopt1]', '$_POST[opt2]', '$_POST[iopt2]', '$_POST[opt3]', '$_POST[iopt3]', '$_POST[opt4]', '$_POST[iopt4]', '$_POST[result]' , '$_POST[iresult]', $_GET[id])") or die(mysqli_error($link));

                



                ?>
            <script type="text/javascript">
                alert("Questions added SUCCESSFULLY!");
                window.location = "View_Questions.php?id=<?php echo $id ?>";
            </script>
            <?php

            }


        ?>



    </body>

    </html>