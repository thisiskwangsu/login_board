<?php

    include "dbconn.php";

    $idx = $_GET['idx'];
    $sql = "DELETE FROM board WHERE idx = '$idx'";
    $result = mysqli_query($conn, $sql);
?>
<script>
    location.href = "list.php";
</script>