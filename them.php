<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
</head>
<?php
include_once("config.php");
if(isset($_POST['quit'])){
    header("location:index.php");
}
if(isset($_POST['them'])){
    $ten=$_POST['ten'];
    $gioitinh = $_POST['nam'];
    $lop = $_POST['select'];
    $sql = "INSERT INTO sinhvien(ten,gioitinh,lop) VALUES ('$ten','$gioitinh','$lop')";
    $result = mysqli_query($conn,$sql);
    header("location:index.php");
}
?>
<body>
    <h1>Thêm</h1>
    <form action="" method="POST">
        <table border="1">
            <tr>
                <td>tên</td>
                <td><input type="text" name="ten"></td>
            </tr>
            <tr>
                <td>giới tính</td>
                <td><input type="radio" name="nam" value="Nam">Nam <br> <input type="radio" name="nam" value="Nu">Nữ</td>
            </tr>
            <tr>
                <td>lớp</td>
                <td>
                    <select name="select">
                        <option>D09.48.01</option>
                        <option>D09.48.02</option>
                        <option>D09.48.03</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="them" value="Thêm" style="margin-left:50px;"><input type="submit" name="quit" value="Quit" style="margin-left:20px;"></td>
            </tr>
        </table>
    </form>
</body>

</html>