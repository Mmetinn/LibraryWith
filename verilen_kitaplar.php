<?php
include 'header.php';
include 'connection.php';
//$sql="select kitap_image,kitap_ad,yazar_ad,turu from tbl_kitap INNER JOIN personel_kayit whe personel_id=id";
//$sql="select tbl_kitap.kitap_image,tbl_kitap.kitap_ad,tbl_kitap.yazar_ad,tbl_kitap.turu ,personel_kayit.adi,personel_kayit.dahili_tel,personel_kayit.durum,personel_kayit.ilgili_birim,personel_kayit.telefonu,personel_kayit.soyadi from tbl_kitap INNER JOIN personel_kayit ON tbl_kitap.personel_id=personel_kayit.id";

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
						<div class="x_content">
							<form name="form1" action="" method="post">
								<input type="text" name="t1" class="form-control" placeholder="Kitap ismi giriniz">
								<input type="submit" name="submit1" value="Kitap Ara" class="btn btn-default">
							</form>
							<?php
							//$sql="select tbl_kitap.*,personel_kayit.*,kitap_personel.* from tbl_kitap INNER JOIN personel_kayit ON kitap_personel.personel_id=personel_kayit.id";
							$sql="select tbl_kitap.*,personel_kayit.*,kitap_personel.* from tbl_kitap INNER JOIN personel_kayit INNER JOIN kitap_personel ON kitap_personel.kitap_id=tbl_kitap.id && kitap_personel.personel_id=personel_kayit.id";
							
							 if(isset($_POST["submit1"])){
                                    $sql = $sql . " and personel_kayit.adi like ('%$_POST[t1]%') ";
                                }
							$res=mysqli_query($link,$sql);?>
							<table id="tablo" class='table table-bordered'>
								<tr>
									<th>Kitap Resim</th>
									<th>Kitap Adı</th>
									<th>Yazar Adı</th>
									<th>Türü</th>
									<th>İlgili Birim</th>
									<th>Personel Adı</th>
									<th>Personel Soyadı</th>
									<th>Dahili Telefon</th>
									<th>Email</th>
									<th>Telefon</th>
									<th>Durum</th>									
								</tr><?php
								while ($row=mysqli_fetch_array($res)){
									?>
									<tr>
										<td><img src="<?php echo $row['kitap_image'];?>" height="50" weidth="50" ></td>
										<td><?php echo $row["kitap_ad"]; ?></td>
										<td><?php echo $row["yazar_ad"]; ?></td>
										<td><?php echo $row["turu"]; ?></td>
										<td><?php echo $row["ilgili_birim"]; ?> </td>
										<td><?php echo $row["adi"];  ?></td>
										<td><?php echo $row["soyadi"];  ?></td>
										<td><?php echo $row["dahili_tel"];  ?></td>
										<td><?php echo $row["email"];  ?></td>
										<td><?php echo $row["telefonu"];  ?></td>
										<td><?php echo $row["durum"];  ?></td>

										<?php 	} ?>	
									</table>
								</div>
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