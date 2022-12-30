<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency1</title>
</head>
<body>
    
    
    <br>[<a href="?controller=equipment&action=newEquipment">เพิ่มอุปกรณ์</a>]</br><br>
    <form action="" method="get">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="equipment">
        <button type="submit" name="action" value="search">Search</button>
    </form>
    
    <table border = 1>
        <tr>
            <td>ชื่ออุปกรณ์</td><td>UPDATE</td><td>DELETE</td>
        </tr>
        <?php
            foreach($equipment_list as $equipment){
                echo "
                <tr>
                    <td>
                        $equipment->equipmentName
                    </td>
                    <td>
                        <a href='?controller=equipment&action=updateEquipment&equipment_id=$equipment->equipmentId'> update </a>
                    </td>
                    <td>
                        <a href='?controller=equipment&action=deleteEquipment&equipment_id=$equipment->equipmentId'> delete </a>
                    </td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>