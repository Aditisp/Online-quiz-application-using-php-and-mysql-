<?php
$pemail=@$_GET['profmail'];
$abcd=@$_GET['stumail'];

echo shell_exec("python test.py $pemail $abcd " );

?>