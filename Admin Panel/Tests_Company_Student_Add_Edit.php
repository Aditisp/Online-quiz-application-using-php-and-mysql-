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
        <title>Admin Page</title>
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

        <div class="container col-7" id="Add_Test" style="padding: 0.8rem 0px ;">
            <div style="border: 1px solid black; display:block; padding: 25px; ">
                <div>
                    <strong style="font-size: 16px;">
                    VIEW TESTS
                </strong>
                    <button type="button" style="border: none; float:right; background:none; font-size: 25px">
                        <a href="View_Tests.php" target="#" style="color: black;">
                            <i class="fas fa-arrow-circle-right" style="padding: 0rem 0.5rem; width: 50px"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="container col-7" id="Add_Test" style="padding: 0.8rem 0px ;">
            <div style="border: 1px solid black; display:block; padding: 25px; ">
                <div>
                    <strong style="font-size: 16px;">
                    ADD A TEST
                </strong>
                    <button type="button" style="border: none; float:right; background:none; font-size: 25px">
                        <a href="Add_Tests.php" target="#" style="color: black;">
                            <i class="fas fa-arrow-circle-right" style="padding: 0rem 0.5rem; width: 50px"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="container col-7" id="Add_Company" style="padding: 0.8rem 0px ;">
            <div style="border: 1px solid black; display:block; padding: 25px; ">
                <div>
                    <strong style="font-size: 16px;">
                    ADD QUESTION SET
                </strong>
                    <button type="button" style="border: none; float:right; background:none; font-size: 25px">
                    <a href="u1.php" target="#" style="color: black;">
                        <i class="fas fa-arrow-circle-right" style="padding: 0rem 0.5rem; width: 50px"></i>
                    </a>
                </button>
                </div>
            </div>
        </div>

        <div class="container col-7" id="Add_Company" style="padding: 0.8rem 0px ;">
            <div style="border: 1px solid black; display:block; padding: 25px; ">
                <div>
                    <strong style="font-size: 16px;">
                    VIEW TEST REPORT
                </strong>
                    <button type="button" style="border: none; float:right; background:none; font-size: 25px">
                    <a href="Report.php" target="#" style="color: black;">
                        <i class="fas fa-arrow-circle-right" style="padding: 0rem 0.5rem; width: 50px"></i>
                    </a>
                </button>
                </div>
            </div>
        </div>

        <!-- <div class="container col-7" id="Add_Student" style="padding: 0.8rem 0px ;">
            <div style="border: 1px solid black; display:block; padding: 25px; ">
                <div>
                    <strong style="font-size: 16px;">
                    ADD A STUDENT
                </strong>
                    <button type="button" style="border: none; float:right; background:none; font-size: 25px">
                    <i class="fas fa-arrow-circle-right" style="padding: 0rem 0.5rem; width: 50px"></i>
                </button>
                </div>
            </div>
        </div> -->




    </body>

    </html>