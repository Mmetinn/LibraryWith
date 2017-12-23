<?php
include 'connection.php';
include "header.php";
$sayac=1;
$sql="select tbl_kitap.*,personel_kayit.*,kitap_personel.* from tbl_kitap INNER JOIN personel_kayit INNER JOIN kitap_personel ON kitap_personel.kitap_id=tbl_kitap.id && kitap_personel.personel_id=personel_kayit.id where DATEDIFF(curdate(), verilen_tarih) >max_tes_sure ";
$res=mysqli_query($link,$sql);

?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function()
	{
		$('#tablo tr:odd').css('background-color','#006bb3').css('color','#000');
		$('#tablo tr:even').css('background-color','#66c2ff').css('color','#000');
	});
</script>
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

		<div class="clearfix"></div>
		<div class="row" style="min-height:500px">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Plain Page</h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<table id="tablo" class="table table-bordered">
							<tr>
							    <td> </td>
								<td> Kitap Resmi </td>
								<td> Kitap İsmi </td>
								<td> Yazar İsmi </td>
								<td> Türü </td>
								<td> ---Kim Almış--- </td>
								<td> İlgili Birim </td>
								<td> ismi </td>
								<td> Soyismi </td>
								<td> Dahili Telefon </td>
								<td> Email </td>
								<td> Telefon </td>
								<td> Maksimum Teslim Süresi </td>
								<td> Verilen Tarih </td>
								<td> Alınacak Tarih </td>
							</tr>
							<?php 
							while ($row=mysqli_fetch_array($res)) {
								?>
								<tr>
								<th> <?php echo $sayac."."; ?> </th>
								<th> <img src="<?php echo $row['kitap_image']; ?>" height="50" weidth="50">  </th>
									<th> <?php echo $row['kitap_ad']; ?> </th>
									<th> <?php echo $row['yazar_ad']; ?> </th>
									<th> <?php echo $row['turu']; ?> </th>
									<th> <?php echo "==>"; ?> </th>
									<th> <?php echo $row['ilgili_birim']; ?> </th>
									<th> <?php echo $row['adi']; ?> </th>
									<th> <?php echo $row['soyadi']; ?> </th>
									<th> <?php echo $row['dahili_tel']; ?> </th>
									<th> <?php echo $row['email']; ?> </th>
									<th> <?php echo $row['telefonu']; ?> </th>
									<th> <?php echo $row['max_tes_sure']; ?> </th>
									<th> <?php echo $row['verilen_tarih']; ?> </th>
									<th> <?php echo $row['alinan_tarih']; ?> </th>
								</tr>
								<?php
								$sayac++;
							}
							?>
						</table>
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


