<?php 
    error_reporting(E_ALL);
    //error_reporting(0); //ปิด error ในกรณีที่เราต้องการแสดง Error ของเราเอง

    //เชื่อมต่อ Database
    $conn = new mysqli('localhost','root','','blog');
    // $conn = new mysqli('localhost','romanche_blog','4QPHz9gx','romanche_blog');
    $conn->set_charset('utf8');
    if($conn->connect_errno){
        echo "Connect Error : ".$conn->connect_error;
        exit();
    }
    $base_path_blog = 'assets/images/blog/';

    //ตั้งค่า timezone
    date_default_timezone_set('Asia/Bangkok');
?>