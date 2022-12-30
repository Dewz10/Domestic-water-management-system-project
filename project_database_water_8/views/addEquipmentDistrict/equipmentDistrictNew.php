<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มอุปกรณ์ของหน่วยงานต่างๆ</title>
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
                            if($agency->agencyId == 10006 || $agency->agencyId == 10016 || $agency->agencyId == 10027 || $agency->agencyId == 10035 || $agency->agencyId == 10045 || $agency->agencyId == 10054){
                                echo "<option disabled value=$agency->agencyId>---$agency->agencyName---</option>";
                            }
                            else{
                                echo "<option value=$agency->agencyId>$agency->agencyName</option>";
                            }
                        }
                    ?>
                </select>
            </div><br>
            <div>
                <label>ชื่ออุปกรณ์ : </label>
                    <select name="equipment_id" id="">
                    <?php 
                        foreach($equipment_list as $equipment){
                            echo "<option value=$equipment->equipmentId>$equipment->equipmentName</option>";
                        }
                    ?>
                </select>
            </div><br>
            <div>
                <label>จำนวนที่ใช้งานได้ :</label>
                <input type="number" id="" name="activeStatus" min="0">
            </div><br>
            <div>
                <label>จำนวนที่ชำรุด :</label>
                <input type="number" id="" name="defectiveState" min="0">
            </div><br>
            <div>
                <label>จำนวนที่อยู่ระหว่างการใช้งาน :</label>
                <input type="number" id="" name="duringUse" min="0">
            </div><br>
        <br>
        <input type="hidden" name="controller" value="addEquipmentDistrict">
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="add">Save</button>
        </form>
    </div>
</body>
</html>