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
                <strong style="font-size: 21px;">Tests Page</strong>
            </div>
        </div>


        <div class="col-lg-9 container">
            <div class="card">

                <div class="card-header">
                    <strong class="card-title">View Tests</strong>
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped" style="vertical-align:center; text-align:center">
                        
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Test Subject</th>
                                <th scope="col">Number of Questions</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total Marks</th>
                                <th scope="col">Difficulty</th>
                                <th scope="col">Marks per Question</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Add Questions</th>
                                <th scope="col">View Questions</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $count=0;
                            $res=mysqli_query($link, "select * from add_tests");
                            while($row=mysqli_fetch_array($res))
                            {
                                $count=$count+1;
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $count; ?>
                                    </th>
                                    <td>
                                        <?php echo $row["testname"];?></td>
                                    <td><?php echo $row["testsubject"];?></td>
                                    <td><?php echo $row["total"];?></td>
                                    <td><?php echo $row["testtime"];?></td>
                                    <td><?php echo $row["testdate"];?></td>
                                    <td><?php echo $row["testmarks"];?></td>
                                    <td><?php echo $row["difficultylevel"];?></td>
                                    <td><?php echo $row["marksperq"];?></td>
                                    <td>
                                        <a href="Edit_Test.php?id=<?php echo $row["id"];?>">
                                            <div class="float-right" style="font-size: 20px;">
                                                <button type="button" style="border: none; background:none;">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="Delete_Test.php?id=<?php echo $row["id"];?>">
                                            <div class="float-right" style="font-size: 20px;">
                                                <button type="button" style="border: none; background:none">
                                                    <i class="fas fa-trash "></i>
                                                </button>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="Add_Questions.php?id=<?php echo $row["id"];?>">Click Here</a></td>
                                    <td><a href="View_Questions.php?id=<?php echo $row["id"];?>">Click Here</a></td>
                                </tr>

                                <?php
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div style="display: block">
        <div>
            <div class="container col-3 float-right" style="display:inline-block">
                <a href="Add_Tests.php">
                    <input type="submit" name="Submit" value="Add Test" class="btn btn-success">
                    </a>
            </div>

            <div class="container col-lg-2 col-md-3 col-sm-6 float-right" style="display:inline-block">
                <a href="Tests_Company_Student_Add_Edit.php">
                    <input type="submit" name="Submit" value="Back to Admin Page" class="btn btn-primary">
                    </a>
            </div>
        </div>



    </body>

    </html>