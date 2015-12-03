<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Kelola Penyewa</b>
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
					        <th width="15%" class="text-center">Nama Penyewa</th>
				        	<th width="15%" class="text-center">Alamat Penyewa</th>
				        	<th width="15%" class="text-center">KTP Penyewa</th>
				        	<th width="10%" class="text-center">No Telp Penyewa</th>
				        	<th width="10%" class="text-center">Email Penyewa</th>
				       		<th width="10%" class="text-center">Aksi</th> 	
				      	</tr>
				    </thead>
				    <tbody>
				    	<?php for ($i=1; $i<=8;$i++)
				    	{
				    	?>
					      	<tr>
					      		<td class="text-center"><?php echo $i ?></td>
					      		<td class="text-center">Penyewa <?php echo $i ?></td>
					      		<td class="text-center">Perumdos ITS Blok U nomor <?php echo $i ?> Sukolilo, Surabaya </td>
					      		<td class="text-center">111222333444<?php echo $i ?></td>
					      		<td class="text-center">08560722700<?php echo $i ?></td>
					      		<td class="text-center">penyewa<?php echo $i ?>@gmail.com</td>
					      		<td class="text-center">
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