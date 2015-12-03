<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Kelola Lapangan</b>
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
					        <th width="15%" class="text-center">Nama Lapangan</th>
				        	<th width="15%" class="text-center">Harga Sewa</th>
				        	<th width="15%" class="text-center">Status</th>
				        	<th width="10%" class="text-center">Aksi</th>
				      	</tr>
				    </thead>
				    <tbody>
				    	<?php for ($i=1; $i<=5;$i++)
				    	{
				    	?>
					      	<tr>
					      		<td class="text-center"><?php echo $i ?></td>
					      		<td class="text-center">Lapangan <?php echo $i ?></td>
					      		<td class="text-center">75000</td>
					      		<td class="text-center">Terpakai</td>
					      		<td class="text-center">
				      				<a href="detail_penyewaan.php" class="btn btn-primary" ><i class="fa fa-exchange"> Ubah Status</i></a>
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