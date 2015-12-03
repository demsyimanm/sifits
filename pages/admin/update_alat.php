<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Update Alat</b>
		        </h1>
	    	</section>

    <!-- Main content -->
	    
			<section class="content">
				<div class="box">

				<div class="box-body">
					<form action="#" method="" class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label class="col-md-2 control-label">Nama Alat</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="judul" value="Bola 2">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Harga Beli</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="konten" value="95000">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Harga Sewa</label>
								<div class="col-md-6">
									<input type="text" name="tgl_mulai" class="form-control" value="5000">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Keadaan</label>
								<div class="col-md-6">
									<select class="form-control" name="keadaan">
										<option value="Baik">Baik</option>
										<option value="Baik">Rusak ringan</option>	
										<option value="Baik">Rusak berat</option>
										<option value="Baik">Hilang</option>													
									</select>
								</div>
							</div>
							 <div class=" col-md-6 col-md-offset-2 box-footer">
							 	<a type="submit" class="btn btn-default pull-left" href="kelola_alat.php">Kembali</a>
				            	<button type="submit" class="btn btn-info pull-right">Simpan</button>
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