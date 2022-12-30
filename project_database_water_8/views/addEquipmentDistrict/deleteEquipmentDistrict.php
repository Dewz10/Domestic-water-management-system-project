<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<br> Are you sure to delete this equipment? <br>
                <br> หน่วยงาน : $addEquipmentDistrict->activeStatus <br>อุปกรณ์ : $addEquipmentDistrict->defectiveState <br>"?>
    <br>
    
    <form method="get" action="">
        <input type="hidden" name="controller" value="addEquipmentDistrict">
        <input type="hidden" name="key" value="<?php echo $addEquipmentDistrict->agencyId;?>"/>
        <input type="hidden" name="equipment_id" value="<?php echo $addEquipmentDistrict->equipmentId;?>"/>
        <button type="submit" name="action" value="search">Back</button>
        <button type="submit" name="action" value="delete">Delete</button>
    </form>
</body>
</html>