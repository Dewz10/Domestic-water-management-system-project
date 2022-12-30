<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency1</title>
</head>
<body>
    
    
    <form action="" method="get">
        <div>
            <label>ชื่อหน่วยงาน : </label>
                <select name="key" id="">
                <?php 
                    foreach($agency_list as $agency){
                        echo "<option value=$agency->agencyId>$agency->agencyName</option>";
                    }
                ?>
            </select>
            <input type="hidden" name="controller" value="addEquipmentDistrict">
            <button type="submit" name="action" value="search">Search</button>
        </div>
    </form>

    <br>[<a href="?controller=addEquipmentDistrict&action=newEquipmentDistrict">เพิ่มอุปกรณ์ของหน่วยงาน</a>]</br><br>
</body>
</html>