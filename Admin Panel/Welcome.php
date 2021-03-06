<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="navbar.js"></script>
</head>

<body>


    <nav class="navbar">
        <div class="container">

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

    <div class="container col-9" id="Heading" style="padding: 1.5rem 0.5rem ;">
        <div style="border: 1px solid black; display:block; padding: 30px; ">
            <strong style="font-size: 21px;">Welcome, Admin!</strong>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover container table-striped">
            <caption>*List of Students attempting Exams</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Test Attempted</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Prachiti Gholap</td>
                    <td>4</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jayant Kumar</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Aditi Parab</td>
                    <td>7</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>