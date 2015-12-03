<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Laporan Keuangan Per Bulan tahun 2015</b>
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
					        <th width="15%" class="text-center">Bulan</th>
				        	<th width="15%" class="text-center">Total Transaksi</th>
				        	<th width="10%" class="text-center">Total Denda</th>
				        	<th width="10%" class="text-center">Total Pemasukan</th>
				      	</tr>
				    </thead>
				    <tbody>
				    	<?php for ($i=1; $i<=11;$i++)
				    	{
				    	?>
					      	<tr>
					      		<td class="text-center"><?php echo $i ?></td>
					      		<td class="text-center"><?php echo $i ?></td>
					      		<td class="text-center">10.000.000</td>
					      		<td class="text-center">1.000.000</td>
					      		<td class="text-center">11.000.000</td>
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