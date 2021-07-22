<?php
include_once 'database.php';
include 'demo.html';
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
                    
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover table-striped">
  
  <thead>
      <tr>
      <th scope="col">Test No:</th>
          <th scope="col">Email Id</th>
          <th scope="col">Score</th>
          <th scope="col"> Right Answers</th>
          <th scope="col">Wrong Answers</th>
          <th scope="col">Rank</th>
          
          

      </tr>
  </thead>
  <tbody>
  <?php
      $count=0;
      $res=mysqli_query($con, "select * from ( SELECT `id`,`email_id`,`score`,`rightans`,`wrong`,`date`, DENSE_RANK() OVER (PARTITION BY `id` ORDER BY `score` DESC) as RN FROM history ) a");
      while($row=mysqli_fetch_array($res))
      { 

          
         
          ?>
          <tr>
          
              <td>
                  <?php echo $row['id'];?></td>
              <td><?php echo $row['email_id'];?></td>
              <td><?php echo $row["score"];?></td>
              <td><?php echo $row["rightans"];?></td>
              <td><?php echo $row["wrong"];?></td>
              <td><?php echo $row["RN"];?></td>
              
               
            
          </tr>

          <?php
      }

      ?>

  </tbody>
                    </table>
                </div>

            </div>
