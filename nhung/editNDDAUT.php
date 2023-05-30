<?php 
    $conn =mysqli_connect("localhost","root","1234","esp8266");


    if(isset($_POST['r1_btn'])) {
        $min_temp = $_POST['min_temp1'];
        $max_temp = $_POST['max_temp1'];
        $min_humi = $_POST['min_humi1'];
        $max_humi = $_POST['max_humi1'];
    
        $sql1 = "
        UPDATE fav_temperature SET
        min_temperature = $min_temp,
        max_temperature = $max_temp
        WHERE room = 1
        ";
        
        $sql2 = "
        UPDATE fav_humidity SET
        min_humidity = $min_humi,
        max_humidity = $max_humi
        WHERE room = 1
        ";

        $query1 = mysqli_query($conn, $sql1);
        $query2 = mysqli_query($conn, $sql2);
    }

    if(isset($_POST['r2_btn'])) {
        $min_temp = $_POST['min_temp2'];
        $max_temp = $_POST['max_temp2'];
        $min_humi = $_POST['min_humi2'];
        $max_humi = $_POST['max_humi2'];
    
        $sql1 = "
        UPDATE fav_temperature SET
        min_temperature = $min_temp,
        max_temperature = $max_temp
        WHERE room = 2
        ";
        
        $sql2 = "
        UPDATE fav_humidity SET
        min_humidity = $min_humi,
        max_humidity = $max_humi
        WHERE room = 2
        ";

        $query1 = mysqli_query($conn, $sql1);
        $query2 = mysqli_query($conn, $sql2);
    }

    if(isset($_POST['r3_btn'])) {
        $min_temp = $_POST['min_temp3'];
        $max_temp = $_POST['max_temp3'];
        $min_humi = $_POST['min_humi3'];
        $max_humi = $_POST['max_humi3'];
    
        $sql1 = "
        UPDATE fav_temperature SET
        min_temperature = $min_temp,
        max_temperature = $max_temp
        WHERE room = 3
        ";
        
        $sql2 = "
        UPDATE fav_humidity SET
        min_humidity = $min_humi,
        max_humidity = $max_humi
        WHERE room = 3
        ";

        $query1 = mysqli_query($conn, $sql1);
        $query2 = mysqli_query($conn, $sql2);
    }
        
    header("Location:". 'http://localhost:8081/nhung/setting.php');
?>