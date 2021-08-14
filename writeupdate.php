<?php

    include "dbconn.php";

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $name = mysqli_real_escape_string($conn, $name);
    $subject = mysqli_real_escape_string($conn, $subject);
    $memo = mysqli_real_escape_string($conn, $memo);

    $sql = "INSERT INTO board (subject, name, memo, regdate, ip)
            VALUES ('$subject', '$name','$memo', NOW(), '$ip')";
    $result = mysqli_query($conn, $sql);
?>
<script>
    location.href="write.php";
</script>