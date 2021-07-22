<?php
include_once 'database.php';
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
  {


    
    $id=@$_GET['id'];
    
    $qno=@$_GET['question_no'];
    $total=@$_GET['t'];
    $ans=$_POST['ans'];
    $qid=@$_GET['qid'];

 
    
    $q=mysqli_query($con,"SELECT * FROM add_questions WHERE qid='$qid' " );
    while($row=mysqli_fetch_array($q) )
    {  $result=$row['result']; 
      $iresult=$row['iresult'];
      
    }

    if($ans == $result || $ans == $iresult)
    {
      $q=mysqli_query($con,"SELECT * FROM add_tests WHERE id='$id' " );
      while($row=mysqli_fetch_array($q) )
      {
        $mark=$row['marksperq'];
        
       
      }
      if($qno == 1)
      {
        
        $q=mysqli_query($con,"INSERT INTO history VALUES('$id','$email','0','0','0','0',NOW())")or die('Error');
      }
      $q=mysqli_query($con,"SELECT * FROM history WHERE id='$id' AND email_id='$email' ")or die('Error115');
      while($row=mysqli_fetch_array($q) )
      {
        $s=$row['score'];
        $r=$row['rightans'];
      }
      $r++;
      $s=$s+$mark;
      $q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$qno,`rightans`=$r, date= NOW()  WHERE  email_id = '$email' AND id = '$id'")or die('Error124');
    } 
    else
    { 
      
      $q=mysqli_query($con,"SELECT * FROM add_tests WHERE id='$id' " )or die('Error129');
      while($row=mysqli_fetch_array($q) )
      {
      }
      if($qno == 1)
      {
        
        $q=mysqli_query($con,"INSERT INTO history VALUES('$id' ,'$email','0','0','0','0',NOW() )")or die('Error137');
      }
      $q=mysqli_query($con,"SELECT * FROM history WHERE id='$id' AND email_id='$email' " )or die('Error139');
      while($row=mysqli_fetch_array($q) )
      {
        $s=$row['score'];
        $w=$row['wrong'];
      }
      $w++;
      $s=$s-0;
      $q=mysqli_query($con,"UPDATE `history` SET `score`=$s,`level`=$qno,`wrong`=$w,  date=NOW()  WHERE  email_id = '$email' AND id = '$id'  ")or die('Error147');
      
    }



    if($qno != $total)
    {
      $qno++;
      header("location:show_test.php?id=$id&question_no=$qno&t=$total")or die('Error152');
    }
    else
    {
      header("location:result.php?id=$id");
    }

    


}
    ?>