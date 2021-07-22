<?php
include "connections.php";
$id=$_GET["id"];
mysqli_query($link,"delete from add_tests where id=$id");

?>

<script type="text/javascript">
    window.location="View_Tests.php";
</script>