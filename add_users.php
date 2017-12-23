        
<?php
include "header.php";
?>
<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                  </div>
              </div>
          </div>
      </div>

      <div class="clearfix"></div>
      <div class="row" style="min-height:500px">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <section class="login_content" style="margin-top: -40px;">
                    <form name="form1" class="" action="" method="post">
                        <h2>Kullanıcı Kayıt Formu</h2><br>
                        <?php
                        if(isset($_POST["submit1"])){
                         $tm=md5(time());
                         $fnm=$_FILES["f1"]["name"];
                         $dst="./users_image/".$tm.$fnm;
                         $dst1="users_image/".$tm.$fnm;
                         move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
                         mysqli_query($link,"insert into personel_kayit(user_image,ilgili_birim,adi,soyadi,dahili_tel,email,telefonu,durum) values('$dst1','$_POST[ilgili_birim]','$_POST[adi]','$_POST[soyadi]','$_POST[dahili_tel]','$_POST[email]','$_POST[telefonu]','$_POST[durum]')");
                         ?>
                         <div class="alert alert-success col-lg-6 col-lg-push-3">
                            Kayıt başarıyla tamamlandı.
                        </div>
                        <?php
                    }
                    ?>

                    <div>
                        <input type="text" class="form-control" placeholder="İlgili Birim" name="ilgili_birim" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Adı" name="adi" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Soyadı" name="soyadi" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Dahili Telefon" name="dahili_tel" required=""/>
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="telefon" name="telefonu" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Durum" name="durum" required=""/>
                    </div>
                    <div>
                       <!--   <input type="file" name="f1"> -->
                   </div>
                   <div class="col-lg-12  col-lg-push-3">
                    <input class="btn btn-default submit " type="submit" name="submit1" value="Kaydet">
                </div>

            </form>
        </section>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /page content -->
<?php
include "footer.php";
?>


