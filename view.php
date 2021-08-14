<?php
    include "dbconn.php";

    $idx = $_GET['idx'];
    $sql = "SELECT * FROM board WHERE idx='$idx'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    
?>
    <table width=1000 border="1" colspan=5>
        <tr>
            <th>이름</th>
            <td><?=$data['name']?></td>
        </tr>

        <tr>
            <th>제목</th>
            <td><?=$data['subject']?></td>
        </tr>

        <tr>
            <th>내용</th>
            <td><?=$data['memo']?></td>
        </tr>

        <tr>
            <th>아이피</th>
            <td><?=$data['ip']?></td>
        </tr>

        <tr>
            <td colspan="2">
                <a href="list.php">목록</a>
                <a href="delete.php?idx=<?=$data['idx']?>" onclick = "return confirm('정말 삭제할까요');">삭제</a>
            </td>
        </tr>
    </table>
