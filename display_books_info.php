    <?php

    session_start();
    include "connection.php";
    function permissionCheck() {
        if ( isset( $_SESSION['user_id']) && $_SESSION['user_id'] > 0 ) {//sessionların içerisi boş

        } else {
            //redirect to login page
            header('Location: http://localhost:81/student/login.php');
            die;
        }
    }
    permissionCheck();
    include "header.php";
    ?>
    <link rel="stylesheet" href="css/font-awesome.css"> 
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#tablo tr:odd').css('background-color','#006bb3').css('color','#000');
            $('#tablo tr:even').css('background-color','#66c2ff').css('color','#000');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#top').click(function{
                $('html , body').animate({scrollTop:0} 0); 
            });
        });
    </script>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Kitap Bilgileri</h3>
                </div>
                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Kitap Bilgileri</h2>

                                <div class="clearfix"></div>
                            </div>
                            <!--<iframe src=" display_user_info.php"  height="200" width="1000" ></iframe> -->
                            <div class="x_content">
                                <form name="form1" action="" method="post">
                                    <input type="text" name="t1" class="form-control" placeholder="Kitap ismi giriniz">
                                    <input type="submit" name="submit1" value="Kitap Ara" class="btn btn-default">
                                </form>
                                <?php
                                $sql = "select *  from tbl_kitap";
                                if(isset($_POST["submit1"])){
                                    $sql = $sql . " where kitap_ad like ('%$_POST[t1]%') ";
                                }
                            //kitap ismini tablo olarak gösterir
                                $res=mysqli_query($link, $sql); 
                                echo "<table id='tablo' class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "  "; echo "</th>";
                                echo "<th>"; echo "  "; echo "</th>";
                                echo "<th>"; echo "Kitap Resmi"; echo "</th>";
                                echo "<th>"; echo "Kitap İsmi"; echo "</th>";
                                echo "<th>"; echo "Yazar İsmi"; echo "</th>";
                                echo "<th>"; echo "Kitap Türü"; echo "</th>";
                                echo "<th>"; echo "Kitap Sayısı"; echo "</th>";
                                echo "<th>"; echo "Durum"; echo "</th>";
                                echo "</tr>";
                                while ($row=mysqli_fetch_array($res)){ ?>
                                <tr>
                                    <td><abbr title="GÜNCELLE"><a style="color: black" href="update.php?id=<?php echo $row['id'];  ?>" onclick="return window.confirm ('Devam etmek istediğinizden emin misini')" ><i class="fa fa-refresh fa-2x" aria-hidden="true"></a></abbr></td>
                                    <td><abbr title="SİL" ><a style="color: black" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return window.confirm ('Devam etmek istediğinizden emin misini')"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></a></abbr></td>
                                    <td><img src="<?php echo $row['kitap_image'];?>" height="50" weidth="50" ></td>
                                    <td><?php echo $row["kitap_ad"]; ?></td>
                                    <td><?php echo $row["yazar_ad"]; ?></td>
                                    <td><?php echo $row["turu"]; ?></td>
                                    <td> <?php echo $row["kitap_sayisi"]; ?> </td>
                                    <?php $varmı=$row['kitap_sayisi']; ?>
                                    <td><?php if($varmı==0){ echo "Kitap Mevcut Değil";}
                                        else{echo "Kitap Mevcut";} ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <a style=" background-color:blue;  color: white" id="top" href=""> sayfanın başına git </a><br><i class="fa fa-hand-pointer-o fa-3x" aria-hidden="true"></i>
    </center>
    <?php
    include "footer.php";
    ?>