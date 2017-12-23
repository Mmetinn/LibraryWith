<?php
include 'connection.php';
//include 'header.php';
$sql2="update tbl_kitap set kitap_sayisi=kitap_sayisi+1 where id=".$_GET['kid'];

mysqli_query($link,$sql2);
$sql3="delete from kitap_personel where kp_id=".$_GET['verilecek_id'];
mysqli_query($link,$sql3);
?>
<script language="JavaScript">
<!--
alert("kitap başarıyla alınmıştır.");
self.location.href = 'kitap_al.php?kid=<?php echo $_GET["kid"]; ?>&verilecek_id=<?php echo $_GET["verilecek_id"]; ?>';

//-->
</script>
