<?php
include "header.php";
include 'connection.php';
?>
<script src="js/jquery.min.js"></script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_right">
                <div class="input-group">
                <center>
                    <form action="display_user_info.php" method="post">
                    <input class="btn btn-default submit"  type="submit" value="Ana Sayfa" style=" background-color: #00aeef;color:white;"/>
                    </form>
                </center>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Plain Page</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                     <form name="form1" action="" method="post" enctype="multipart/form-data">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="Kitap İsmi" name="kitap_ad" required="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="Yazar İsmi" name="yazar_ad" required="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                               <!--  Kitap Türünü Seçiniz
                                 <input type="text" class="form-control" placeholder="Kitap Turu" name="turu" required="">    -->
                                  <select name="slc1" class="form-control">
                                      <?php
                                        $sql="select tur_kitap from kitap_turu";
                                        $res=mysqli_query($link,$sql);
                                        while ($row=mysqli_fetch_array($res)) {
                                          echo "<option>";
                                          echo $row['tur_kitap'];
                                          echo "</option>";  
                                        }
                                      ?>
                                  </select>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <input type="text" class="form-control" placeholder="Kitap Sayisi" name="kitap_sayisi" required="">
                             </td>
                         </tr>
                        <tr>
                            <td>
                                <input type="file" name="f1">
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <input type="submit" name="submit1" class="btn btn-default submit" value="Kaydet">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- /page content -->
<?php
if(isset($_POST["submit1"])){
    $tm=md5(time());
    $fnm=$_FILES["f1"]["name"];
    $dst="./books_image/".$tm.$fnm;
    $dst1="books_image/".$tm.$fnm;
    move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
    mysqli_query($link,"insert into tbl_kitap values('','$dst1','$_POST[kitap_ad]','$_POST[yazar_ad]','$_POST[kitap_sayisi]','$_POST[slc1]')"); 
    ?>
    <div class="alert alert-success col-lg-6 col-lg-push-3">
        Kayıt Başarıyla Tamamlandı
    </div>
    <?php 
}
?>
<?php
include "footer.php";
?>


