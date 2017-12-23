<?php 
include 'connection.php';
include 'header.php';

?>
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
							<h2>Kitap Ver</h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						<form>
							<input type="submit" name="sbm1" class="form-control" style="height: 30px; width: 15px;" value="personel sayfasına geri dön">
						</form>
							<form name="form1" action="" method="post">
								<input type="text" name="t1" class="form-control" placeholder="Kitap ismi giriniz">
								<input type="submit" name="submitt" value="Kitap Ara" class="btn btn-default">
							</form>
							<?php 
							$sql0 = "select * from tbl_kitap";
							if(isset($_POST["submitt"])){
								$sql0 = $sql0 . " where kitap_ad like ('%$_POST[t1]%') ";
							}
                            //kitap ismini tablo olarak gösterir
							$res=mysqli_query($link, $sql0); ?>
							<form action="kitap_ver.php">
							<input type="submit" name="sbm1" class="form-control" style="background-color: red; color: white; height: 45px; width: 300px;" value="personel sayfasına geri dön">
							</form>
						
							<table id="tablo" class='table table-bordered'>
								<tr>
									<th></th>
									<th>Kitap Resmi</th>
									<th>Kitap İsmi</th>
									<th>Yazar İsmi</th>
									<th>Kitap Türü</th>
									<th>Kitap Sayısı</th>
									<th></th>
									<th></th>
								</tr><?php $i=0;
								while ($row=mysqli_fetch_array($res)){$i++;
									?>
									<form action="#" method="post">
										<tr>
											<td><img src="<?php echo $row['kitap_image'];?>" height="50" weidth="50" ></td>
											<td><?php echo $row["kitap_ad"]; ?></td>
											<td><?php echo $row["yazar_ad"]; ?></td>
											<td><?php echo $row["turu"]; ?></td>
											<td> <?php echo $row["kitap_sayisi"]; ?> </td>
											<?php $varmı=$row['kitap_sayisi']; ?>
											<td><?php if($varmı<=0){ echo "Kitap Mevcut Değil";}
												else{echo "Kitap Mevcut";} ?></td>
												<td> <input type="text" placeholder="maksimum teslim süresi" class="form-control" name="max_tes_sure<?php echo $i;?>" style="background-color: #ffbf80; color:black;"> 
												</td>
												<td>
													<?php if($varmı>0){  ?>
													<input class="btn btn-default submit" style="background-color: #66c2ff" type="submit" name="submit1<?php echo $i;?>" value="Ver"><br><i class="fa fa-share-square fa-2x" aria-hidden="true"></i><?php }  ?> 
												</td>
												<?php 
												if(isset($_POST["submit1$i"])){
													//$tarih=date('d.m.Y');
													//$yeniTarih=date('$tarih',strtotime('+'.$_POST["max_tes_sure$i"].' days'));
													//print_r($yeniTarih); die;
													$sql="insert into kitap_personel (personel_id,kitap_id,max_tes_sure,verilen_tarih,alinan_tarih) values(".$_GET["pid"].",".$row["id"].",".$_POST["max_tes_sure$i"].",CURDATE(),
													DATE_ADD(now(), INTERVAL " . $_POST["max_tes_sure$i"] . " DAY))";
													//print_r($sql); die;
													mysqli_query($link,$sql);
													$sql2="update tbl_kitap set kitap_sayisi=kitap_sayisi-1 where id=".$row['id'];
													mysqli_query($link,$sql2);
													echo "<script>alert('kitap başarıyla verilmiştir');</script>";
													
													//echo $tarih;
													//echo $yeniTarih;
													//$sql3="update kitap_personel set verilen_tarih = STR_TO_DATE('$tarih', '%d.%m.%Y');";
													//mysqli_query($link,$sql3);
												}
											} 
											
											?>	
										</form>

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
		<abbr title="sayfanın başına gitmek için tıkla"> <a style=" background-color:blue;  color: white" id="top" href=""><i class="fa fa-share-square fa-2x" aria-hidden="true"></i>
		</a></abbr> 
	</center>
	<?php
	include "footer.php";
	?>
