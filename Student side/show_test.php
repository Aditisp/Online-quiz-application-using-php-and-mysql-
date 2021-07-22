<?php
include_once 'database.php';
include 'demo.html';
$id=@$_GET['id'];
$totalmark=@$_GET['tm'];
$qno=@$_GET['question_no']; 
$total=@$_GET['t'];
?>






<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    
   
</head>
<body onload="startTimer()">
<div class="wrapper">
      <div class="quiz">
        <div class="quiz_header">
          <div class="quiz_user">
            <h4>Welcome! <span class="name"></span></h4>
          </div>
          <div class="quiz_timer">
          <div ><span id="timer"></span></div>
          </div>
        </div>

  <?php

 
  
  $aq=mysqli_query($con,"SELECT * FROM add_questions WHERE subjectid='$id' AND `question_no`='$qno'");
  

  
  
  while($row=mysqli_fetch_array($aq) )
 {
    $qid=$row['qid'];
    $qno=$row['question_no'];
    $q=$row['question'];
    $iq=$row['iquestion'];
    $op1=$row['opt1'];
    $op2=$row['opt2'];
    $op3=$row['opt3'];
    $op4=$row['opt4'];
    $iop1=$row['iopt1'];
    $iop2=$row['iopt2'];
    $iop3=$row['iopt3'];
    $iop4=$row['iopt4'];
    $result=$row['result'];
    $iresult=$row['iresult'];
   ?>
 

<?php

    echo'
    <div class="quiz_body">
          <h2><div id="questions">'.$qno.'. '.$q.'</h2>
           <ul class="option_group">';

           
           echo'<form action="update.php?id='.$id.'&tm='.$totalmark.'&question_no='.$qno.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal"><br />';              
                    echo'<h3><input type="radio"  name="ans" value="'.$op1.''.$iop1.'">&nbsp;'.$op1.''.$iop1.'<br /><br /></h3>';   
                    echo'<h3><input type="radio"  name="ans" value="'.$op2.''.$iop2.'">&nbsp;'.$op2.''.$iop2.'<br /><br /></h3>';
                    echo'<h3><input type="radio"  name="ans" value="'.$op3.''.$iop3.'">&nbsp;'.$op3.''.$iop3.'<br /><br /></h3>';
                    echo'<h3><input type="radio"  name="ans" value="'.$op4.''.$iop4.'">&nbsp;'.$op4.''.$iop4.'<br /><br /></h3>';
                        }
                        echo'';
                        
                        
      
    
  
  ?>  
  <br /><button  id="form" type="submit"  class="btn-next "><h4>&nbsp;Submit</button></form></div>

  <script type="text/javascript">
  <?php		
include_once 'database.php';	
$fetchtime = "SELECT `testtime` FROM `add_tests` WHERE `id`=$id";
$fetched = mysqli_query($con,$fetchtime);
$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
$settime = $time['testtime'];		
?>
document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
  //03 + ":" + 00 ;
  function startTimer() {
    if(sessionStorage.getItem("presentTime")){
    var presentTime = sessionStorage.getItem("presentTime");
} else {
    var presentTime = document.getElementById('timer').innerHTML;
    
}
  
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  
  if(s==59){m=m-1}
  if(m==0 && s==0){window.location= "examname.php";; sessionStorage.clear();}
  presentTime=document.getElementById('timer').innerHTML =
    m + ":" + s;
    sessionStorage.setItem("presentTime",presentTime) 
  setTimeout(startTimer, 1000);
  
}
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>
