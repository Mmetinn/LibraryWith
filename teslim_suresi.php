<?php
include 'connection.php';
include 'header.php';?>

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
							<form action="verildi.php?kid=<?php echo $_GET["id"]; ?>&pid=<?php echo $_GET["pid"]; ?>" >
								<input type="text" placeholder="maksimum teslim süresi" class="form-control" name="max_tes_sure" style="background-color: #ffbf80; color:black;">
								<input type="submit" name="submit1">	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	if(isset($_POST["submit1"])){
		$sql="insert into kitap_personel (max_tes_sure) values('$_POST[max_tes_sure]')";
		mysqli_query($link,$sql);
	}
?>