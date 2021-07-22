<?php
include "connections.php";
include "demo.html";
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

        <nav class="navbar">
            <div class="container col-8">

                <div class="navbar-header">
                    <button class="navbar-toggler" data-toggle="open-navbar1">
                <span></span>
                <span></span>
                <span></span>
                </button>
                    <a href="#">
                        <h4> Placement Training</h4>
                    </a>
                </div>

                <div class="navbar-menu" id="open-navbar1">
                    <ul class="navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="navbar-dropdown">
                            <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
                    Categories <i class="fa fa-angle-down"></i>
                    </a>
                            <ul class="dropdown" id="my-dropdown-id">
                                <li><a href="#">Actions</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="separator"></li>
                                <li><a href="#">Seprated link</a></li>
                                <li class="separator"></li>
                                <li><a href="#">One more seprated link.</a></li>
                            </ul>
                        </li>
                        <li class="navbar-dropdown">
                            <a href="#" class="dropdown-toggler" data-dropdown="blog">
                    Blog <i class="fa fa-angle-down"></i>
                    </a>
                            <ul class="dropdown" id="blog">
                                <li><a href="#">Some category</a></li>
                                <li><a href="#">Some another category</a></li>
                                <li class="separator"></li>
                                <li><a href="#">Seprated link</a></li>
                                <li class="separator"></li>
                                <li><a href="#">One more seprated link.</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Signin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

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
                <strong style="font-size: 19px;">Add Test</strong>
            </div>
            <hr>

            <div class="card-body" style="border: 1px solid black; background:rgb(233, 231, 231); width:auto; padding:1%">
                <form class="form form-group" action="#" method="POST">
                    <p>
                        Test Name: <br> <input type="text" name="testname" placeholder="Enter Test Name.." class="form-control">
                    </p>
                    <p>
                        Test Subject:<br> <input type="text" name="testsubject" placeholder="Enter Subject Name.." class="form-control">
                    </p>
                    <p>
                        Number of Questions:<br> <input type="text" name="total" placeholder="Enter Number of Questions.." class="form-control">
                    </p>
                    <p>
                        Duration of Test:<br> <input type="text" name="testtime" placeholder="Duration of Test in Minutes..." class="form-control">
                    </p>
                    <p>
                        Due Date:(yyyy-mm-dd)<br> <input type="text" name="testdate" placeholder="Enter the Date of Test.." class="form-control">
                    </p>
                    <p>
                        Test Marks:<br> <input type="text" name="testmarks" placeholder="Enter Total Marks of Test.." class="form-control" >
                    </p>
                    <p>
                        Test Difficulty:<br> <input type="text" name="testdifficulty" placeholder="Hard/Medium/Easy.." class="form-control" >
                    </p>
                    <p>
                        Marks per Question:<br> <input type="text" name="marksperq" placeholder="Must be Same for all.." class="form-control" >
                    </p>

                    <div class="form-group">
                        <input type="submit" name="Submit" value="Add Test" class="btn btn-success">
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
                mysqli_query($link,"insert into add_tests values (NULL, '$_POST[testname]', '$_POST[testsubject]', '$_POST[total]', '$_POST[testtime]', '$_POST[testdate]', '$_POST[testmarks]', '$_POST[testdifficulty]', '$_POST[marksperq]')") or die(mysqli_error($link));

                $loop=0;
                    $count=0;
                    $res=mysqli_query($link, "select * from add_tests order by id asc") or die(mysqli_error($link));
                    $count=mysqli_num_rows($res);

                    if($count==0)
                    {

                    }
                    else{
                        while($row=mysqli_fetch_array($res))
                        {
                            $loop=$loop+1;
                            mysqli_query($link,"update add_tests set id='$loop' where id=$row[id]");
                        }
                    }

                    $loop=$loop+1;

                ?>
                <script type="text/javascript">
                    alert("Test added SUCCESSFULLY!");
                    window.location="View_Tests.php";
                </script>
                <?php

            }

        ?>



    </body>

    </html>