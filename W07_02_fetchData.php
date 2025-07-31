<?php
require_once 'W07_01_ConnectDB.php';

$sql = "SELECT * FORM products";

$result = $conn->query($sql);

//ตรวจสอบว่ามีผลลัพหรือไม่
if($result->rowCount()> 0){
    //out put data
    echo "<h2>พบข้อมูลในตารางProduct</h2>";
    
    $data = $result->fetchAll(PDO::FETCH_NUM);
    
    print_r($data); //เเสดงข้อมูลทั้งหมดในรูปเเบบ query
    
}else{
    echo "<h2>ไม่พบข้อมูลในตารางProduct</h2>";

}

?>