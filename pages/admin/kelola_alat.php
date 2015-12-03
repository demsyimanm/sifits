<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Kelola Alat</b>
		        </h1>
	    	</section>

    <!-- Main content -->
	    
			<section class="content">
				<div class="box">

				<div class="box-body">
					<br><div class="col-xs-2 text-left">
				        <a href="tambah_alat.php" class="btn btn-block btn-social btn-instagram">
			            	<i class="fa fa-plus"></i> Tambah Alat
			          	</a>
			      	</div><br><br><br>

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
				        	<th width="13%" class="text-center">Harga Sewa</th>
				        	<th width="8%" class="text-center">Keadaan</th>
				        	<th width="13%" class="text-center">Status</th>
				        	<th width="35%" class="text-center">Aksi</th>
				      	</tr>
				    </thead>
				    <tbody>
				    	<?php for ($i=1; $i<=15;$i++)
				    	{
				    	?>
					      	<tr>
					      		<td class="text-center"><?php echo $i ?></td>
					      		<td class="text-center">Bola <?php echo $i ?></td>
					      		<td class="text-center">95000</td>
					      		<td class="text-center">5000</td>
					      		<td class="text-center">Baik</td>
					      		<td class="text-center">Tersedia</td>
					      		<td class="text-center">
					      			<a href="update_alat.php" class="btn btn-primary" ><i class="fa fa-pencil"> Update</i></a>
				      				<a href="detail_penyewaan.php" class="btn btn-warning" ><i class="fa fa-exchange"> Ubah Status</i></a>
				      				<a href="#" class="btn btn-danger" ><i class="fa fa-trash"> Hapus</i></a>
					      		</td>
					      	</tr>
				      	<?php
				      	}
				      	?>
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