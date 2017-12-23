<?php 
include 'header.php';
include 'connection.php';
$sorgu="delete from personel_kayit where id=" . $_GET['id'];
mysqli_query($link,$sorgu);
?>
<center>
    <form action="display_books_info.php" method="post">
        <input class="btn btn-default submit"  type="submit" value="Ana Sayfa" style=" background-color: #00aeef;color:white;"/>
    </form>
    <div class="alert alert-success col-lg-6 col-lg-push-3">
 Silme işlemi başarıyla tamamlandı.
</div>
</center>