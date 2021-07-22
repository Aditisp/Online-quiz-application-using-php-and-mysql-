<?php

include 'demo.html';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>
    </head>

    <body>
        <?php
    $conn = mysqli_connect('localhost','root','','mini_project');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "files/".$fileName;
        
        $query = "INSERT INTO uploaded_files(name) VALUES ('$fileName')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo " <h2> SUCCESS <h2>";
		
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>
            <header>
                </section>
                <script>
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 50) {
                            $('.opaque-navbar').addClass('opaque');
                        } else {
                            $('.opaque-navbar').removeClass('opaque');
                        }
                    });
                </script>
                <script type="text/javascript">
                    alert("Questions added SUCCESSFULLY!");
                    window.location = "Add_Questions.php?id=<?php echo $id ?>";
                </script>
					<div class="frame">
						<div class="courses-container">
							<div class="course">
								<div class="course-info">
									<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
									<form action="u1.php" method="post" enctype="multipart/form-data">
										<input type="file" name="file">
										<button class="btn" type="submit" name="submit">Upload</button>
								</div>
							</div>
						</div>
					</div>
			
				<div>
					<button class="btn" type="button"><a href="download.php"> View Uploaded Files</a></button>
				</div>

                

            </header>
    </body>

    </html>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
        * {
            box-sizing: border-box;
        }
        
        body {
            background-image: linear-gradient(45deg, #FF0000);
            font-family: 'Muli', sans-serif;
            display: flex;
            align-items: center;
            justify-content: ;
            flex-direction: column;
            margin: 0;
        }
        
        .frame {
            position: absolute;
            top: 50%;
            left: 40%;
            width: 650px;
            height: 240px;
            margin-top: -200px;
            margin-left: -200px;
            border-radius: 2px;
            -webkit-box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: -webkit-gradient(linear, left bottom, right top, from(#8DADF8), to(#198754));
            background: linear-gradient(to top right, #8DADF8 0%, #198754 100%);
            color: #333;
            font-family: "Open Sans", Helvetica, sans-serif;
        }
        
        .courses-container {}
        
        .course {
            background-color: #DBDCDC;
            border-radius: 10px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            max-width: 100%;
            margin: 20px;
            overflow: hidden;
            width: 600px;
            height: 200px;
        }
        
        .course h6 {
            opacity: 0.6;
            margin: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .course h2 {
            letter-spacing: 1px;
            margin: 10px 0;
        }
        
        .course-preview {
            background-color: #FF0000;
            color: #fff;
            padding: 30px;
            max-width: 250px;
        }
        
        .course-preview a {
            color: #fff;
            display: inline-block;
            font-size: 12px;
            opacity: 0.6;
            margin-top: 30px;
            text-decoration: none;
        }
        
        .course-info {
            padding: 30px;
            position: relative;
            width: 100%;
        }
        
        .btn {
            background-color: #198754;
            border: none;
            outline: none;
            border-radius: 50px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 16px;
            padding: 12px 25px;
            position: absolute;
            bottom: 30px;
            right: 30px;
            letter-spacing: 1px;
        }

		a{
			color: white;
		}
        
        section {
            background: yellow;
        }
        
        .banner {
            background: #198754;
            min-height: 50px;
        }
        
        .banner .row {
            text-align: center;
            margin-top: 10px;
        }
        
        .banner h1 {
            color: white;
        }
        
        @media (max-width: 992px) {
            body {
                background: red;
            }
            .opaque-navbar {
                background-color: black;
                height: 20px;
                transition: background-color .5s ease 0s;
            }
        }
    </style>