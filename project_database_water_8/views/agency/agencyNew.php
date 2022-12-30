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
        <br>
        <br>
        <label for="">
            กำหนดรหัสหน่วยงาน
            <input type="text" name="agencyId" id="">
        </label>
        <br>
        <br>
        <label for="">
            ชื่อหน่วยงาน
            <input type="text" name="agencyName" id="">
        </label>
        <br>
        <br>
        <input type="hidden" name="controller" value="agency">
        <button type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="addAgency">Save</button>
    </form>
</body>
</html>