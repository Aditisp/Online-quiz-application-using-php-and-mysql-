<?php
include "connections.php";
include "demo.html";
$subjectname='';
$marks='';
$duration='';
$difficulty='';

$id=$_GET["id"];


$res=mysqli_query($link, "select * from add_tests where id=$id");
while($row=mysqli_fetch_array($res))
{
    $subjectname=$row["testsubject"];
    $marks=$row["testmarks"];
    $duration=$row["testtime"];
    $difficulty=$row["difficultylevel"];
}

// $question_no='1';
// $res=mysqli_query($link, "select * from add_questions where subjectid=$id");
// while($row=mysqli_fetch_array($res))
// {
//    $question_no=$row["question_no"]+1;
// }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Tests</title>
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
                <strong style="font-size: 21px;">View Questions</strong>
            </div>
        </div>


        <div class="col-lg-11 container">
            <div class="card">

                <div class="card-header">
                    <strong class="card-title" style="font-size: 19px;">View Questions of <?php echo $subjectname ?> (<?php echo $marks ?> Marks/<?php echo $duration ?> Min/<?php echo $difficulty ?>) </strong>
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped" style="vertical-align:center; text-align:center">
                        
                        <thead>
                            <tr>
                                <th scope="col" width="1%">#</th>
                                <th scope="col">Question</th>
                                <th scope="col" >Option 1</th>
                                <th scope="col" >Option 2</th>
                                <th scope="col" >Option 3</th>
                                <th scope="col" >Option 4</th>
                                <th scope="col" >Result</th>
                                <th scope="col" width="3%" >Edit</th>
                                <th scope="col"width="3%" >Delete</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            
                            $res=mysqli_query($link, "select * from add_questions where subjectid='$id' order by question_no asc");
                            while($row=mysqli_fetch_array($res))
                            {
                            
                                echo "<tr>";

                                    echo "<td>";  echo $row["question_no"];  echo "</td>";
                                    
                                    echo "<td>";  
                                        if(strpos($row["iquestion"], 'q_opt_images/') !==false){

                                            ?>
                                            <img src="<?php echo $row["iquestion"]; ?>" height="50" width="50">
                                            <?php
                                        }

                                        else{
                                            
                                        }
                                        echo $row["question"];  
                                    echo "</td>";

                                    echo "<td>";  
                                        if(strpos($row["iopt1"], 'q_opt_images/') !==false){

                                            ?>
                                            <img src="<?php echo $row["iopt1"]; ?>" height="50" width="50">
                                            <?php
                                        }

                                        else{
                                            
                                        }
                                        echo $row["opt1"];  
                                    echo "</td>";

                                    echo "<td>";  
                                        if(strpos($row["iopt2"], 'q_opt_images/') !==false){

                                            ?>
                                            <img src="<?php echo $row["iopt2"]; ?>" height="50" width="50">
                                            <?php
                                        }

                                        else{
                                            
                                        }
                                        echo $row["opt2"];  
                                    echo "</td>";

                                    echo "<td>";  
                                        if(strpos($row["iopt3"], 'q_opt_images/') !==false){

                                            ?>
                                            <img src="<?php echo $row["iopt3"]; ?>" height="50" width="50">
                                            <?php
                                        }

                                        else{
                                            
                                        }
                                        echo $row["opt3"];  
                                    echo "</td>";

                                    echo "<td>";  
                                        if(strpos($row["iopt4"], 'q_opt_images/') !==false){

                                            ?>
                                            <img src="<?php echo $row["iopt4"]; ?>" height="50" width="50">
                                            <?php
                                        }

                                        else{
                                            
                                        }
                                        echo $row["opt4"];  
                                    echo "</td>";

                                    echo "<td>";  
                                        if(strpos($row["iresult"], 'q_opt_images/') !==false){

                                            ?>
                                            <img src="<?php echo $row["iresult"]; ?>" height="50" width="50">
                                            <?php
                                        }

                                        else{
                                            
                                        }
                                        echo $row["result"];  
                                        
                                    echo "</td>";


                                    echo "<td>";  
                                        if(strpos($row["iresult"], 'q_opt_images/') !==false){

                                            ?>
                                            <a href="Edit_Question_with_image.php?id=<?php echo $row["qid"]; ?> &id1=<?php echo $id; ?>">
                                                <div class="float-right" style="font-size: 20px;">
                                                    <button type="button" style="border: none; background:none;">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                            </div>
                                            </a>
                                            <?php
                                        }

                                        else{
                                            ?>
                                                <a href="Edit_Question_with_text.php?id=<?php echo $row["qid"]; ?> &id1=<?php echo $id; ?> ">
                                                    <div class="float-right" style="font-size: 20px;">
                                                        <button type="button" style="border: none; background:none;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </div>
                                                </a>
                                            <?php
                                        }
                                    echo "</td>";



                                    echo "<td>";
                                        ?>
                                            <a href="Delete_Questions.php?id=<?php echo $row["qid"]; ?> &id1=<?php echo $id; ?>">
                                                <div class="float-right" style="font-size: 20px;">
                                                    <button type="button" style="border: none; background:none">
                                                        <i class="fas fa-trash "></i>
                                                    </button>
                                                </div>
                                            </a>
                                        <?php

                                    echo "</td>";




                                echo "</tr>";



                                
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div style="display: block">
        <div>
            <!-- <div class="container col-3 float-right" style="display:inline-block">
                <a href="Add_Questions.php?id=<?php echo $row["subjectid"];?>">
                    <input type="submit" name="Submit" value="Add More Questions" class="btn btn-success">
                    </a>
            </div> -->

            <div class="container col-lg-2 col-md-3 col-sm-6 float-right" style="display:inline-block">
                <a href="View_Tests.php">
                    <input type="submit" name="Submit" value="Back to Test Page" class="btn btn-primary">
                    </a>
            </div>
        </div>



    </body>

    </html>