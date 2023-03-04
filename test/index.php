<!-- Nhập sản phẩm và in ra màn hình
Bao gồm: MaSP, ten, Giá, ảnh. => cái nào rỗng báo lỗi. -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post" enctype="multipart/form-data >
            <label for="">
                MaSP
                <input type="text" name="masp">
            </label>
            <lable>
                Ten
                <input type="text" name="name">
            </lable>
            <lable>
                Gia
                <input type="text" name="price">
            </lable>
            <lable>
                Anh
                <input type="file" name="photo">
            </lable>
            <input type="text" name="submit">

        </form>
        <?php
        if (isset($_POST['submit'])){
            $MaSp=isset($_POST['masp']);
            $Ten=isset($_POST['name']);
            $Gia=isset($_POST['price']);

            $file=$_FILES['photo']['name'];
            $namefile=$_FILES['photo']['tmp-name'];

            move_uploaded_file($namefile,$file);
            $n=count($_SESSION['array']);
            $_SESSION['array'][$n]['masp']=$MaSp;
            $_SESSION['array'][$n]['namesp']=$Ten;
            $_SESSION['array'][$n]['pricesp']=$Gia;
            header("Location: nhap.php");
        }
        ?>
    </div>
</body>
</html>