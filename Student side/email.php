<?php
//Date formate is  (YYYY-MM-DD)
date_default_timezone_set('Asia/Kolkata');
$currentdate = date('Y-m-d');
$a=strtotime($currentdate);
echo $a;
echo"   ";
$date1   =   '2021-06-17';
$b=strtotime($date1);
echo $b;
$date2   =   '2020-05-01';
if(strtotime($currentdate) > strtotime($date1)){
    echo 'Date '.$currentdate.' is grater then '.$date1;
}
else{
    echo"small";
}
?>