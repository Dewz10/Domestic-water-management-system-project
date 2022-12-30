<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency1</title>
</head>
<body>
    
    
    <br>[<a href="?controller=agency&action=newAgency">เพิ่มหน่วยงานใหม่</a>]</br><br>
    <form action="" method="get">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="agency">
        <button type="submit" name="action" value="search">Search</button>
    </form>

    <div class="container mt-3">
        <table class="table table-hover">
            <thead>
                <th scope="col">รหัสหน่วยงาน</th><th scope="col">ชื่อหน่วยงาน</th><th scope="col">UPDATE</th><th scope="col">DELETE</th>
            </thead>
            <?php
                foreach($agency_list as $agency){
                    echo "
                    <tr>
                        <td>
                            $agency->agencyId
                        </td>
                        <td>
                            $agency->agencyName
                        </td>
                        <td>
                            <a href='?controller=agency&action=updateAgency&agency_id=$agency->agencyId'> update </a>
                        </td>
                        <td>
                            <a href='?controller=agency&action=deleteAgency&agency_id=$agency->agencyId'> delete </a>
                        </td>
                    </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>