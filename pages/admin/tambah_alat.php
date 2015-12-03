<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Tambah Alat</b>
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
									<input type="text" class="form-control" name="judul">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Harga Beli</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="konten" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Harga Sewa</label>
								<div class="col-md-6">
									<input type="text" name="tgl_mulai" class="form-control datepicker" id="">
								</div>
							</div>

							 <div class=" col-md-6 col-md-offset-2 box-footer">
				            	<button type="submit" class="btn btn-info pull-right">Create</button>
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