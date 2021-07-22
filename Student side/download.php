<?php
include_once 'database.php';
include 'demo.html';
session_start();
if(!(isset($_SESSION['email'])))
{
    header("location:index_student.php");
}
else
{
    
    $email = $_SESSION['email'];
    include_once 'database.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="examp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>   

<div class="col-lg-9 container">
            <div class="card">

                <div class="card-header">
                   QUESTION SETS 
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        
                        <thead>
                            <tr>
                                <th scope="col">File Name</th>
                                <th scope="col">Download</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            
                            $query2 = "SELECT * FROM uploaded_files ";
                            $run2 = mysqli_query($con,$query2);
                            while($rows = mysqli_fetch_assoc($run2))
                            {
                                ?>
                                <tr>
                                    
                                    <td>
                                        <?php echo $rows["name"];?></td>
                                    
                                    <td>  
                                    <a href="download2.php?file=<?php echo $rows['name'] ?>" class="button">Download</a><br>
                                   
           </td>
                                </tr>

                                <?php
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

            </div>
 <style>
 .button {
    font: bold 16px ;
  text-decoration: none;
  background-color: #bd3333 ;
  color: white;
  padding: 3px 7px 3px 7px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;

}
</style>