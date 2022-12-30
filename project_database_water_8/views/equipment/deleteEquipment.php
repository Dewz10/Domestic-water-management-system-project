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
                <br> $equipment->equipmentName <br>"?>
    <br>
    
    <form method="get" action="">
        <input type="hidden" name="controller" value="equipment">
        <input type="hidden" name="equipmentId" value="<?php echo $equipment->equipmentId;?>">
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="delete">Delete</button>
    </form>
</body>
</html>