<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Penyewaan</b>
		        </h1>
	    	</section>

    <!-- Main content -->
	    
			<section class="content">
				<div class="box">

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
					        <th width="15%" class="text-center">Tanggal Sewa</th>
				        	<th width="15%" class="text-center">Penyewa</th>
				        	<th width="15%" class="text-center">Petugas</th>
				        	<th width="10%" class="text-center">Denda</th>
				        	<th width="10%" class="text-center">Total</th>
				        	<th width="30%" class="text-center">Aksi</th>
				      	</tr>
				    </thead>
				    <tbody>
				    	<?php for ($i=1; $i<=7;$i++)
				    	{
				    	?>
					      	<tr>
					      		<td class="text-center"><?php echo $i ?></td>
					      		<td class="text-center"><?php echo $i ?> November 2015</td>
					      		<td class="text-center">Penyewa <?php echo $i ?></td>
					      		<td class="text-center">Admin 1</td>
					      		<td class="text-center"><?php echo $i ?>0000</td>
					      		<td class="text-center">7<?php echo $i ?>000</td>
					      		<td class="text-center">
				      				<a href="detail_penyewaan.php" class="btn btn-primary" ><i class="fa fa-eye"> Detail Penyewaan</i></a>
				      				<!--a href="#" class="btn btn-info" ><i class="fa fa-info"></i></a>
				      				<a href="#" class="btn btn-danger" ><i class="fa fa-exclamation"></i></a-->
				      				<a href="#" class="btn btn-warning" ><i class="fa fa-print"></i> Cetak Nota</a>
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