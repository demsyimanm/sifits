<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Detail Penyewaan</b>
		        </h1>
	    	</section>

    <!-- Main content -->
	    
			<section class="content">
				<div class="box">

				<div class="box-body">
					<form action="" method="" class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label class="col-md-2 control-label">Nomor Penyewaan</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="judul" value="1" readonly="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Tanggal Sewa</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="konten" value="2 November 2015" readonly="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Nama Penyewa</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="tgl_mulai" value="Penyewa 2" readonly="">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Nama Petugas</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="wkt_mulai" value="Admin 2" readonly="">
								</div>
							</div><br>
							
							<div class="form-group">
								<label class="col-md-2 control-label">Lapangan</label>
								<div class="col-md-6">
									<table class="table table-bordered" style="background-color:#eee">
									  	<?php $i = 1;?>
									    <thead>
										    <tr>
										        <th width="5%" class="text-center">No</th>
										        <th width="15%" class="text-center">Nama Lapangan</th>
									        	<th width="15%" class="text-center">Jam Mulai</th>
									        	<th width="15%" class="text-center">Jam Akhir</th>
									        	<th width="15%" class="text-center">Harga</th>
									      	</tr>
									    </thead>
									    <tbody>
									    	<?php for ($i=1; $i<=2;$i++)
									    	{
									    	?>
										      	<tr>
										      		<td class="text-center"><?php echo $i ?></td>
										      		<td class="text-center">Lapangan <?php echo $i ?></td>
										      		<td class="text-center">0<?php echo $i+8 ?>.00</td>
										      		<td class="text-center">0<?php echo $i+9 ?>.00</td>
										      		<td class="text-center">75000</td>
										      	</tr>
									      	<?php
									      	}
									      	?>
									    </tbody>
									    
									  	</table>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Alat</label>
								<div class="col-md-6">
									<table class="table table-bordered" style="background-color:#eee">
									  	<?php $i = 1;?>
									    <thead>
										    <tr>
										        <th width="5%" class="text-center">No</th>
										        <th width="15%" class="text-center">Nama Alat</th>
									        	<th width="15%" class="text-center">Harga</th>

									      	</tr>
									    </thead>
									    <tbody>
									    	<?php for ($i=1; $i<=2;$i++)
									    	{
									    	?>
										      	<tr>
										      		<td class="text-center"><?php echo $i ?></td>
										      		<td class="text-center">Bola <?php echo $i ?></td>
										      		<td class="text-center">5000</td>
										      	</tr>
									      	<?php
									      	}
									      	?>
									    </tbody>
									    
									  	</table>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Denda</label>
								<div class="col-md-6">
									<table class="table table-bordered" style="background-color:#eee">
									  	<?php $i = 1;?>
									    <thead>
										    <tr>
										        <th width="5%" class="text-center">No</th>
										        <th width="15%" class="text-center">Harga Denda</th>
									        	<th width="15%" class="text-center">Keterangan</th>

									      	</tr>
									    </thead>
									    <tbody>
									    	<?php for ($i=1; $i<=1;$i++)
									    	{
									    	?>
										      	<tr>
										      		<td class="text-center"><?php echo $i ?></td>
										      		<td class="text-center">20000</td>
										      		<td class="text-center">Bola 1 rusak</td>
										      	</tr>
									      	<?php
									      	}
									      	?>
									    </tbody>
									    
									  	</table>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Total Denda</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="wkt_mulai" value="0" readonly="">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Total</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="wkt_mulai" value="180000" readonly="">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Umpan Balik</label>
								<div class="col-md-6">
									<textarea type="text" class="form-control" name="wkt_mulai" readonly="" style="resize:vertical;">Fasor ITS pelayanannya bagus</textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label">Complain</label>
								<div class="col-md-6">
									<textarea type="text" class="form-control" name="wkt_mulai" readonly="" style="resize:vertical;">-</textarea>
								</div>
							</div>
							 <div class=" col-md-6 col-md-offset-2 box-footer">
				            	<a type="submit" class="btn btn-primary pull-left" href="penyewaan.php">Kembali</a>
				        	</div><!-- /.box-footer -->
						</div><!-- /.box-body -->
				       
					</form>
				  	
				</div><!-- /.box-body -->
			</section>
		</div>
    </div>
<?php include "../../master/footer.php"; ?>
</body>
</html>


@endsection