<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="key_s">
        <input type="hidden" name="controller" value="addEquipmentDistrict">
        <button type="submit" name="action" value="searchEquipment">Search</button>
    </form>
<table border = 1>
        <tr>
            <td>รหัส</td><td>ชื่อหน่วยงาน</td><td>ชื่ออุปกรณ์</td><td>ใช้งานได้</td><td>อยู่ระหว่างการใช้งาน</td><td>ชำรุด</td><td>จำนวนทั้งหมด</td>
        </tr>
        <?php
            
            foreach($addEquipmentDistrict_list as $equipmentDistrict){
                echo "<tr><td>$equipmentDistrict->agencyId</td>";
                foreach($agency_list as $agency){
                    if($equipmentDistrict->agencyId == $agency->agencyId){
                        echo "<td>$agency->agencyName</td>";
                    }
                }
                foreach($equipment_list as $equipment){
                    if($equipmentDistrict->equipmentId == $equipment->equipmentId){
                        echo "<td>$equipment->equipmentName</td>";
                    }
                }
                echo "<td>$equipmentDistrict->activeStatus</td>
                      <td>$equipmentDistrict->defectiveState</td>
                      <td>$equipmentDistrict->duringUse</td>
                      <td>$equipmentDistrict->total</td>
                      ";
                      
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>