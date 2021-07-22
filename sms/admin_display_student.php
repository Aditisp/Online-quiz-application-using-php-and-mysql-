<?php
include "config.php";
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

        <div class="col-lg-9 container">
            <div class="card">

                <div class="card-header">
                    <strong class="card-title">View Tests</strong>
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped" style="vertical-align:center; text-align:center">
                        
                        <thead>
                            <tr>
                                <th scope="col">ROLL NO.</th>
                                <th scope="col">NAME</th>
                                <th scope="col">FATHER'S NAME</th>
                                <th scope="col">CLASS</th>
                                <th scope="col">MOBILE</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">REMARK</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $count=0;
                            $res=mysqli_query($link, "select * from students");
                            while($row=mysqli_fetch_array($res))
                            {
                                // $count=$count+1;
                                // ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $row["roll_no"]; ?>
                                    </th>
                                    <td>
                                        <?php echo $row["name"];?></td>
                                    <td><?php echo $row["father_name"];?></td>
                                    <td><?php echo $row["class"];?></td>
                                    <td><?php echo $row["mobile"];?></td>
                                    <td><?php echo $row["email"];?></td>
                                    <td><?php echo $row["remark"];?></td>
                                </tr>

                                <?php
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

            </div>



    </body>

    </html>