<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<?php
include_once("config.php");
$sql = "SELECT * FROM sinhvien";
$result = mysqli_query($conn,$sql);
?>
<body>
    <h1 style="text-align: center;">Danh sách sinh viên</h1>
    <form action="" method="POST">
        <table border="1" style="margin-left:43% ;">
        <tr>
            <th>Tên</th>
            <th>Giới tính</th>
            <th>Lớp</th>
            <th><a style="color: red;" href="them.php">Thêm</a></th>
        </tr>
        <?php
        while($rows = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?php echo $rows['ten'] ?></td>
            <td><?php echo $rows['gioitinh'] ?></td>
            <td><?php echo $rows['lop'] ?></td>
            <td><a href="sua.php"><input type="submit" name="sua" value="Sua"></a> <a href="xoa.php"><input type="submit" value="Xoa" name="xoa"></a></td>
        </tr>
        <?php
        }
        ?>
        
        </table>
    </form>
</body>

</html>