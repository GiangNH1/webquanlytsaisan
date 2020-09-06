<?php

$link= mysqli_connect("localhost","root","")or die("khong the ket noi");
    mysqli_select_db($link,"webquanlytaisan") or die("Không tìm thấy CSDL:");
    mysqli_set_charset($link,"utf8");
?>