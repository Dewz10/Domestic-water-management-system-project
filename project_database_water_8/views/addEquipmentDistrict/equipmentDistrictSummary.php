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
                        if($agency->agencyId == 10006 || $agency->agencyId == 10016 || $agency->agencyId == 10027 || $agency->agencyId == 10035 || $agency->agencyId == 10045 || $agency->agencyId == 10054){
                            echo "<option disabled value=$agency->agencyId>---$agency->agencyName---</option>";
                        }
                        else{
                            echo "<option value=$agency->agencyId";
                            if($agency->agencyId==$key){
                                echo " selected='selected'";
                            }
                            echo ">$agency->agencyName</option>";
                        }
                    }
                ?>
            </select>
            
            <input type="hidden" name="controller" value="addEquipmentDistrict">
            <button type="submit" name="action" value="search">Search</button>
        </div>
    </form>

    <br>[<a href="?controller=addEquipmentDistrict&action=newEquipmentDistrict">เพิ่มอุปกรณ์ของหน่วยงาน</a>]</br><br>
    <?php 
        foreach($agency_list as $agency){
            if($key==$agency->agencyId){
                echo "$agency->agencyName";
                break;
            }
        }
    ?>
    <br>
    
    <table border = 1>
        <tr>
            <td>ชื่ออุปกรณ์</td><td>ใช้งานได้</td><td>อยู่ระหว่างการใช้งาน</td><td>ชำรุด</td><td>จำนวนทั้งหมด</td><td>UPDATE</td><td>DELETE</td>
        </tr>
        <?php
            
            foreach($addEquipmentDistrict_list as $equipmentDistrict){
                echo "<tr>";
                foreach($equipment_list as $equipment){
                    if($equipmentDistrict->equipmentId == $equipment->equipmentId){
                        echo "<td>$equipment->equipmentName</td>";
                    }
                }
                echo "<td>$equipmentDistrict->activeStatus</td>
                      <td>$equipmentDistrict->defectiveState</td>
                      <td>$equipmentDistrict->duringUse</td>
                      <td>$equipmentDistrict->total</td>
                      <td>
                        <a href='?controller=addEquipmentDistrict&action=updateEquipmentDistrict&agency_id=$key&equipment_id=$equipmentDistrict->equipmentId'> update </a>
                      </td>
                      <td>
                        <a href='?controller=addEquipmentDistrict&action=deleteEquipmentDistrict&agency_id=$key&equipment_id=$equipmentDistrict->equipmentId'> delete </a>
                      </td>";
                      
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>