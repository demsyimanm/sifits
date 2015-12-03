<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Laporan Alat Rusak</b>
		        </h1>
	    	</section>

    <!-- Main content -->
	    
			<section class="content">
				<div class="box">
					<br><div class="col-xs-2 text-left">
				        <a href="tambah_alat.php" class="btn btn-block btn-social btn-instagram">
			            	<i class="fa  fa-file-pdf-o"></i> Buat Laporan
			          	</a>
			      	</div><br><br><br>
				<div class="box-body">

			      	<script> 
					    $(function () {
					    	$("#data_table").DataTable();
					    });
				    </script>
				  	<table id="data_table" class="table table-bordered table-striped">
				  	<?php $i = 1;?>
				    <thead>
					    <tr>
					        <th width="5%" class="text-center">No</th>
					        <th width="13%" class="text-center">Nama Alat</th>
				        	<th width="13%" class="text-center">Harga Beli</th>
				        	<th width="13%" class="text-center">Status</th>
				      	</tr>
				    </thead>
				    <tbody>
				      	<tr>
				      		<td class="text-center">1</td>
				      		<td class="text-center">Bola 3</td>
				      		<td class="text-center">95000</td>
				      		<td class="text-center">Rusak ringan</td>
				      	</tr>
				      	<tr>
				      		<td class="text-center">2</td>
				      		<td class="text-center">Bola 4</td>
				      		<td class="text-center">95000</td>
				      		<td class="text-center">Rusak berat</td>
				      	</tr>
				      	<tr>
				      		<td class="text-center">3</td>
				      		<td class="text-center">Bola 8</td>
				      		<td class="text-center">95000</td>
				      		<td class="text-center">Hilang</td>
				      	</tr>
				    </tbody>
				    
				  	</table>
				</div><!-- /.box-body -->
			</section>
		</div>
    </div>
<?php include "../../master/footer.php"; ?>
</body>
</html>


@endsection