<?php
include "header.php";
include "connection.php";
$sql="select *from personel_kayit where id=" . $_GET['id'];
$res=mysqli_query($link,$sql);
while  ($row=mysqli_fetch_array($res)){
    $deger=$row;
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Kütüphane Yönetim Sistemi</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

        <section class="login_content" style="margin-top: -40px;">
            <form name="form1" action="" method="post">
                <h2>Kütüphaneci Güncelleme Formu</h2><br>
                <input type="hidden" name="id" value="<?php echo $deger['id'] ?>" >
                <div>
                    <input type="text" class="form-control" value="<?php echo $deger['ilgili_birim']; ?>" placeholder="İlgili Birim" name="ilgili_birim" required="">
                </div>
                <div>
                    <input type="text" class="form-control" value="<?php echo $deger['adi']; ?>" placeholder="Adı" name="adi" required="">
                </div>
                <div>
                    <input type="text" class="form-control" value="<?php echo $deger['soyadi']; ?>" placeholder="Soyadı" name="soyadi" required="">
                </div>

                <div>
                    <input type="text" class="form-control" value="<?php echo $deger['dahili_tel']; ?>" placeholder="Dahili Telefon" name="dahili_tel" required="">
                </div>
                <div>
                    <input type="text" class="form-control" value="<?php echo $deger['email']; ?>" placeholder="email" name="email" required="">
                </div>
                <div>
                    <input type="text" class="form-control" value="<?php echo $deger['telefonu']; ?>" placeholder="telefon" name="telefonu" required="">
                </div>
                <div>
                <input type="text" class="form-control" value="<?php echo $deger['durum']; ?>" placeholder="Durum" name="durum" required="">
                </div>
                <div class="col-lg-12  col-lg-push-3">
                    <input class="btn btn-default submit " type="submit" name="submit1" value="Kaydet">
                </div>

            </form>
            <form action="display_user_info.php" method="post">
                <input type="submit" value="Ana Sayfa"/>
            </form>
        </section>
    </div>
    <?php
    if(isset($_POST["submit1"])){
        $id=$_POST["id"];   
        $ilgili_birim=$_POST["ilgili_birim"];
        $adi=$_POST["adi"];
        $soyadi=$_POST["soyadi"];
        $dahili_tel=$_POST["dahili_tel"];
        $email=$_POST["email"];
        $telefonu=$_POST["telefonu"];
        $durum=$_POST["durum"];
        $sorgu="update personel_kayit set ilgili_birim='$ilgili_birim',adi='$adi',soyadi='$soyadi',dahili_tel='$dahili_tel',email='$email',telefonu='$telefonu',durum='$durum' where id='$id'";
        mysqli_query($link,$sorgu);
        ?>
        <div class="alert alert-success col-lg-6 col-lg-push-3">
            Kayıt Başarıyla Tamamlandı
        </div>
        <?php 
    }
    ?>
</body>
</html>
<?php
include "footer.php";
?>