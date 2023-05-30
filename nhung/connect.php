<?php
    function getNhietDo($room) {
        $conn =mysqli_connect("localhost","root","1234","esp8266");

        $sql  = "SELECT temperature from house where room = $room and created between addtime(now(),'-00:01:00') and addtime(now(),'00:05:00') ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        }else{
            return "Thiết bị không hoạt động!";
        } 

        foreach($row as $item) 
            $data = $item;
        
        return $data ;
    }


    function getDoAm($room) {
        $conn =mysqli_connect("localhost","root","1234","esp8266");

        $sql  = "SELECT humidity from house where room = $room and created between addtime(now(),'-00:01:00') and addtime(now(),'00:05:00') ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        }else{
            return "Thiết bị không hoạt động!";
        } 

        foreach($row as $item) 
            $data = $item;
        
        return $data;
    }


    function getNDUT($room) {
        $conn =mysqli_connect("localhost","root","1234","esp8266");

        $sql1  = "select min_temperature from fav_temperature where room = $room";
        $result1 = $conn->query($sql1);

        $sql2  = "select max_temperature from fav_temperature where room = $room";
        $result2 = $conn->query($sql2);

        if($result1->num_rows > 0) {
            $row = $result1->fetch_assoc();
            $data['min_temp'] = $row['min_temperature'];

        }

        if($result2->num_rows > 0) {
            $row = $result2->fetch_assoc();
            $data['max_temp'] =  $row['max_temperature'];
        }

        return $data;
    }


    function getDAUT($room) {
        $conn =mysqli_connect("localhost","root","1234","esp8266");

        $sql1  = "select min_humidity from fav_humidity where room = $room";
        $result1 = $conn->query($sql1);

        $sql2  = "select max_humidity from fav_humidity where room = $room";
        $result2 = $conn->query($sql2);

        if($result1->num_rows > 0) {
            $row = $result1->fetch_assoc();
            $data['min_humi'] = $row['min_humidity'];
        }

        if($result2->num_rows > 0) {
            $row = $result2->fetch_assoc();
            $data['max_humi'] = $row['max_humidity'];
        }

        return $data;
    }


    function DieuChinh($room) {
        $NDUT = getNDUT($room);
        $DAUT = getDAUT($room);
        $ND = getNhietDo($room);
        $DA = getDoAm($room);

        if(($ND > $NDUT['max_temp'] || $ND < $NDUT['min_temp']) || ($DA > $DAUT['max_humi'] || $DA < $DAUT['min_humi'])) {
            // $conn =mysqli_connect("localhost","root","1234","esp8266");

            // $temp = rand($NDUT['min_temp'], $NDUT['max_temp']);
            // $humi = rand($DAUT['min_humi'], $DAUT['max_humi']);

            // $sql  = "INSERT INTO house(temperature,humidity,room) VALUES($temp, $humi, $room)";
            // $result = $conn->query($sql);

            // if($result) {
                echo '<script> 
                    window.onload = function() {
                        var btn = document.getElementById("modal-btn");
                        btn.click();
                    }
                </script>';
            // }
        }
    }

?>