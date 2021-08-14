<?php
    include "dbconn.php";


?>
<form action="writeupdate.php" method="POST">
    <table width=1000 border="1" colspan=5>
        <tr>
            <th>이름</th>
            <td><input type="text" name="name"></td>
        </tr>

        <tr>
            <th>제목</th>
            <td><input type="text" name="subject" style="width:100%; "></td>
        </tr>

        <tr>
            <th>내용</th>
            <td><textarea name="memo" style="width:100%; heigh:300px; "></textarea></td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="text-align:center; ">
                    <input type="submit" value="저장">
                </div>
            </td>
        </tr>
    </table>
    <a href="list.php">글 목록 보러가기</a>
</form>