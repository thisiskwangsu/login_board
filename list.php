<?php

    include "dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table border=1 width = 1000px>
        <tr>
            <td>idx</td>
            <td>subject</td>
            <td>regdate</td>
        </tr>

        <?php
        $sql = "SELECT *FROM board";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {?>
        <tr>
            <td><?=$data['idx']?></td>
            <td><a href="view.php?idx=<?=$data['idx']?>"><?=$data['subject']?></a></td>
            <td><?=substr($data['regdate'],0, 10)?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <a href="write.php">글쓰기</a>
</body>
</html>