<?php
include "header.php";
include "connection.php";

?>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tablo tr:odd').css('background-color','#006bb3').css('color','#000');
        $('#tablo tr:even').css('background-color','#66c2ff').css('color','#000');
    })
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
                        <div class="x_content">
                         <form name="form1" action="" method="post">
                            <input type="text" name="arama" class="form-control" placeholder="İsim giriniz" style="background-color: #b3ffff; color:black; width: 350px; height: 30px;"><br>
                            <input type="submit" name="submit1" value="ARA" style="background-color: #8cff66; color:black;">
                        </form>
                        <?php
                        $sql = "select *  from personel_kayit";
                        if(isset($_POST["submit1"])){
                            $sql = $sql . " where adi like ('%$_POST[arama]%') ";
                        }
                        ?>
                        <br>
                        <table id="tablo" class="table table-bordered">
                            <tr>
                                <th>

                                </th>
                                <th>
                                    İlgili Birim      
                                </th>
                                <th>
                                    Adi
                                </th>
                                <th>
                                    Soyadi
                                </th>
                                <td>
                                    Dahili Telefon
                                </td>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telefonu
                                </th>
                                <th>
                                    Durum
                                </th>
                            </tr>
                            <?php
                            $deger=mysqli_query($link,$sql);
                            while ($row=mysqli_fetch_array($deger)) {
                                echo "<tr>";
                                echo "<th>"; ?> <a style="color: black" href="kitap_ver_listek.php?pid=<?php echo $row['id']; ?>">Kitap Ver <i style="color:blue" class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i>
                            </a> <?php echo "</th>";
                            echo "<th>"; echo $row['ilgili_birim']; echo "</th>";
                            echo "<th>"; echo $row['adi']; echo "</th>";
                            echo "<th>"; echo $row['soyadi']; echo "</th>";
                            echo "<th>"; echo $row['dahili_tel']; echo "</th>";
                            echo "<th>"; echo $row['email']; echo "</th>";
                            echo "<th>"; echo $row['telefonu']; echo "</th>";
                            echo "<th>"; echo $row['durum']; echo "</th>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>