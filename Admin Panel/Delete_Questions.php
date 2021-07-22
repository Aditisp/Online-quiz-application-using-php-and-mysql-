<?php
    include "connections.php";
    $id=$_GET["id"];
    $id1=$_GET["id1"];
    mysqli_query($link, "delete from add_questions where id=$id");
?>

<script type="text/javascript">
    window.location="View_Questions.php?id=<?php echo $id1 ?>";
</script>