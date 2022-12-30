<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<br> Are you sure to delete this agency? <br>
                <br> $agency->agencyId $agency->agencyName <br>"?>
    <br>
    
    <form method="get" action="">
        <input type="hidden" name="controller" value="agency">
        <input type="hidden" name="agencyId" value="<?php echo $agency->agencyId;?>">
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="delete">Delete</button>
    </form>
</body>
</html>