<?php

    $conn = mysqli_connect('localhost', 'root', '******', '******');

    if(!$conn) {
        die('연결실패: '.mysqli_connect_error());
    }
?>