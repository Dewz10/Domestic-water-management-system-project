<?php 
    //echo("Hello Index");

    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else{
        $controller = 'agency';
        $action = 'home';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to home</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Agency&Equipment</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?controller=agency&action=index">หน่วยงาน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=equipment&action=index">ทะเบียนอุปกรณ์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=addEquipmentDistrict&action=index">เพิ่มอุปกรณ์ของแต่ละหน่วยงาน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controller=addEquipmentDistrict&action=allEquipmentDistrict">แสดงอุปกรณ์ทั้งหมด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">6320500719</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!--
        <?php
            //echo ("Controller = ".$controller.", action = ".$action);
            // require("connection_db.php");
            // require("connection_close.php");
        ?>
    <br>
        [<a href="?controller=agency&action=home">Home</a>]
        [<a href="?controller=agency&action=index">Agency</a>]
        [<a href="?controller=equipment&action=index">Equipment</a>]
        [<a href="?controller=addEquipmentDistrict&action=index">addEquipmentDistrict</a>]
        [<a href="?controller=addEquipmentDistrict&action=allEquipmentDistrict">แสดงข้อมูลอุปกรณ์ของหน่วยงานทั้งหมด</a>]</br><br>
    <br>-->
    <?php 
        require_once('route.php');
    ?>
</body>
</html>