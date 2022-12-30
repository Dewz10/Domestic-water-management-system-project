<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มอุปกรณ์ของหน่วยงานต่างๆ</title>
    <style>
        .inputClass {
            pointer-events: none; 
        }
    </style>
</head>
<body>
    <div>
        <br>
        <br>
        <form action="" method="GET">
            <div>
                <label>ชื่อหน่วยงาน : </label>
                    <select name="agency_id" id="">
                    <?php 
                        foreach($agency_list as $agency){
                            echo "<option value=$agency->agencyId";
                            if($agency->agencyId==$addEquipmentDistrict->agencyId){
                                echo " selected='selected'";
                            }
                            echo ">$agency->agencyName</option>";
                        }
                    ?>
                </select>
            </div><br>
            <div>
                <label>ชื่ออุปกรณ์ : </label>
                    <select name="equipment_id" id="">
                    <?php 
                        foreach($equipment_list as $equipment){
                            echo "<option value=$equipment->equipmentId";
                            if($equipment->equipmentId==$addEquipmentDistrict->equipmentId){
                                echo " selected='selected'";
                            }
                            echo ">$equipment->equipmentName</option>";
                        }
                    ?>
                </select>
            </div><br>
            <div>
                <label>จำนวนที่ใช้งานได้ :</label>
                <input type="number" id="" name="activeStatus" min="0" value="<?php echo $addEquipmentDistrict->activeStatus;?>">
            </div><br>
            <div>
                <label>จำนวนที่ชำรุด :</label>
                <input type="number" id="" name="defectiveState" min="0" value="<?php echo $addEquipmentDistrict->defectiveState;?>">
            </div><br>
            <div>
                <label>จำนวนที่อยู่ระหว่างการใช้งาน :</label>
                <input type="number" id="" name="duringUse" min="0" value="<?php echo $addEquipmentDistrict->duringUse;?>">
            </div><br>
        <br>
        <input type="hidden" name="controller" value="addEquipmentDistrict">
        <input type="hidden" name="key" value="<?php echo $addEquipmentDistrict->agencyId;?>"/>
        <button type="submit" name="action" value="search">Back</button>
        <button type="submit" name="action" value="update">Update</button>
        </form>
    </div>
</body>
</html>