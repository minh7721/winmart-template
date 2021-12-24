<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">IDNCC</th>
                <th scope="col">Tên công ty</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $serverName = "DESKTOP-VIJT63S";
                $connectionInfo = array("Database" => "QuanLiSieuThi", 'CharacterSet' => 'UTF-8');
                $conn = sqlsrv_connect($serverName, $connectionInfo);
                $sql = "SELECT * FROM NhaCungCap";
                $rs = sqlsrv_query($conn, $sql);
                    while($row = sqlsrv_fetch_array($rs)){
                        ?>
                            <tr>
                                <td><?php echo $row['IDNCC']?></td>
                                <td><?php echo $row['TenCongty']?></td>
                                <td><?php echo $row['Diachi']?></td>
                                <td><?php echo $row['SDT']?></td>
                                <td><a href="./xoa.php?id=<?php echo $row['IDNCC']?>">Xóa</a></td>
                            </tr>

                        <?php
                    }
                sqlsrv_close($conn);
                ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>