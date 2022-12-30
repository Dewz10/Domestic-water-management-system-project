<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .inputClass {
            pointer-events: none; 
        }
        </style>
</head>
<body>
    <form action="" method="get">
        
        <label for="">
                <input type="hidden" name="equipmentId" value="<?php echo $equipment->equipmentId;?>">
        </label>
        <br>
        <br>
        <label for="">
                ชื่ออุปกรณ์ : <input type="text" name="equipmentName" value="<?php echo $equipment->equipmentName;?>">
        </label>
        <br>
        <br>
        <input type="hidden" name="controller" value="equipment">
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="update">Update</button>
    </form>
</body>
</html>