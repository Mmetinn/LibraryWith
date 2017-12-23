<?php
include "header.php";
include "connection.php";
?>
<link rel="stylesheet" href="css/font-awesome.css">
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Plain Page</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Go!</button>
                      </span>
                  </div>
              </div>
          </div>
      </div>
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
    <div class="clearfix"></div>
    <div class="row" style="min-height:500px">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Plain Page</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                    $res=mysqli_query($link,"select * from personel_kayit");
                    echo "<table id='tablo' class='table table-bordered'>";
                    echo "<tr>";
                    echo "<th>"; echo ""; echo "</th>";
                    echo "<th>"; echo ""; echo "</th>";
                    echo "<th>"; echo "Kullanıcı Resmi"; echo "</th>";
                    echo "<th>"; echo "İlgili Birim"; echo "</th>";
                    echo "<th>"; echo "Adı"; echo "</th>";
                    echo "<th>"; echo "Soyadı"; echo "</th>";
                    echo "<th>"; echo "Dahili Telefon"; echo "</th>";
                    echo "<th>"; echo "Email"; echo "</th>";
                    echo "<th>"; echo "Telefon"; echo "</th>";
                    echo "<th>"; echo "Durum"; echo "</th>";


                    echo "</tr>";
                    while ($row=mysqli_fetch_array($res)){
                        echo "<tr>";
                        echo "<td>";?> <a style="color: black" href="update_users.php?id=<?php echo $row['id']; ?>" onclick="return window.confirm ('Devam etmek istediğinizden emin misini')" ><i class="fa fa-refresh fa-2x" aria-hidden="true"></i></a>
                        <?php echo "</td>";
                        echo "<td>";?><a style="color: black" href="delete_users.php?id=<?php echo $row['id']; ?>" onclick="return window.confirm('Devam etmek istediğinizden emin misiniz?')"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                    </a><?php echo "</td>";?>
                    <td><img src="<?php echo $row['kitap_image'];?>" height="50" weidth="50" ></td><?php
                    echo "<td>"; echo $row["ilgili_birim"]; echo "</td>";
                    echo "<td>"; echo $row["adi"]; echo "</td>";
                    echo "<td>"; echo $row["soyadi"]; echo "</td>";
                    echo "<td>"; echo $row["dahili_tel"]; echo "</td>";
                    echo "<td>"; echo $row["email"]; echo "</td>";
                    echo "<td>"; echo $row["telefonu"]; echo "</td>";
                    echo "<td>"; echo $row["durum"]; echo "</td>";
                }
                echo "</table>";
                ?>

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


