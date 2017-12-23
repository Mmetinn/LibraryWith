        
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

                    </span>
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
                    <br>
                    <div class="col-lg-12 text-center ">
                        <h1 style="font-family:Lucida Console">Kitap Alış Veriş</h1>
                    </div>
                    <body class="login" style="margin-top: -20px;">
                        <div class="login_wrapper">
                            
                            <form  action="kitap_al.php" method="post">
                               <input class="btn btn-default submit" type="submit"  value="KİTAP AL" style="width: 500px; height: 60px; background-color: blue; color: white" >
                           </form>
                           <form action="kitap_ver.php" method="post" >
                            <input class="btn btn-default submit" type="submit"  value="KİTAP VER"  style="width: 500px; height: 60px; background-color: red; color: white" >
                        </form>
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


