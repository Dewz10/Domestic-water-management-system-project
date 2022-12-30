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
        <br>
        <br>
        <label for="">
                รหัสหน่วยงาน : <input class="inputClass" name="agencyId" value="<?php echo $agency->agencyId;?>">
        </label>
        <br>
        <br>
        <label for="">
                ชื่อหน่วยงาน : <input type="text" name="agencyName" value="<?php echo $agency->agencyName;?>">
        </label>
        <br>
        <br>
        <input type="hidden" name="controller" value="agency">
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="update">Update</button>
    </form>
</body>
</html>