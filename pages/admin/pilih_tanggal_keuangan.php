<!DOCTYPE html>
<html lang="en">
<?php include "../../master/header.php"; ?>
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		<?php include "navbar.php" ?>
		<div class="content-wrapper">
			<section class="content-header">
		        <h1>
		        	<b>Pilih Tanggal Keuangan</b>
		        </h1>
	    	</section>

    <!-- Main content -->
	    
			<section class="content">
				<form id="formdomain" class="form" role="form" action="#" method="get" style="margin-bottom:5%;">
				  <div class="form-group row">
					  <select id="jenis1" name="domain" class="form-control dropdown-toggle" onChange="test(this)" style="width:20%;float:left;margin-left:5%;margin-right:3%;">
					  	 <option value=""></option>
						 <option value="minggu">Per Minggu</option>
						 <option value="bulan">Per Bulan</option>
						 <option value="tahun">Per Tahun</option>		     
					  </select>
					  <span class = "form-group" id="jenis" style="float:left;margin-right:3%;width:30%"></span>
					</div>
				</form>
			</section>
		</div>
    </div>

</body>


    <script type="text/javascript">
    $(document).ready(function(){
    
      $('#jenis1').change(function(){

		    console.log('test');
		    var theValue = $(this).child('option:selected').text();
			if ($(this).find('option:selected').val() == 'tahun') {
			 		test();
			}
		   
        });
    });

	
	function test(x)
	{
		console.log(x.children[x.selectedIndex].innerHTML);

		if (x.children[x.selectedIndex].innerHTML == "Per Tahun")
		{
			$("#jenisBulan").remove();
			if ($('#jenisTahun').length == 0)
			{
				var target1 = $('#jenis');
			    var div01 = $(document.createElement('div')).addClass('form-group row').attr({id:"jenisTahun"});
			    var select1 = $(document.createElement('select')).addClass('form-control dropdown-toggle').attr({style:"width : 47%;margin-bottom:5%;", name:"tahun"});
		        var option0 = $(document.createElement('option')).html('2015').attr({value:"2015"});

			    var button = $(document.createElement('a')).html('Lihat').addClass('btn btn-primary btn-block').attr({type:"submit", style:"width:150px;position:fixed;", href:"laporan_keuangan_perbulan.php"});
		        select1.append(option0);
			    div01.append(select1);
			    div01.append(button);
			    target1.append(div01);
			}
		}
		else if (x.children[x.selectedIndex].innerHTML == "Per Bulan")
		{
			$("#jenisTahun").remove();
			if ($('#jenisBulan').length == 0)
			{
				var target1 = $('#jenis');
			    var div01 = $(document.createElement('div')).addClass('form-group row').attr({id:"jenisBulan"});
			    var select1 = $(document.createElement('select')).addClass('form-control dropdown-toggle').attr({style:"width : 47%;margin-bottom:5%;float:left;margin-right:6%;", name:"tahun"});

		        var option0 = $(document.createElement('option')).html('2015').attr({value:"2015"});
			    var select_bulan = $(document.createElement('select')).addClass('form-control dropdown-toggle').attr({style:"width : 47%;margin-bottom:5%;", name:"bulan"});
			    var option_bulan0 = $(document.createElement('option')).html('November').attr({value:"9"});
			   	var button = $(document.createElement('a')).html('Lihat').addClass('btn btn-primary btn-block').attr({type:"submit", style:"width:150px;position:fixed;" , href:"laporan_keuangan_perbulan.php"})
			   	select1.append(option0);
			   	select_bulan.append(option_bulan0);
			    div01.append(select1);
			    div01.append(select_bulan);
			    div01.append(button);
			    target1.append(div01);
			}
		}

		else if (x.children[x.selectedIndex].innerHTML == "Per Minggu")
		{
			$("#jenisTahun").remove();
			$("#jenisBulan").remove();
			if ($('#jenisMinggu').length == 0)
			{
				var target1 = $('#jenis');
			    var div01 = $(document.createElement('div')).addClass('form-group row').attr({id:"jenisBulan"});
			    var select1 = $(document.createElement('select')).addClass('form-control dropdown-toggle').attr({style:"width : 47%;margin-bottom:5%;float:left;margin-right:6%;", name:"tahun"});

		        var option0 = $(document.createElement('option')).html('2015').attr({value:"2015"});
			    var select_bulan = $(document.createElement('select')).addClass('form-control dropdown-toggle').attr({style:"width : 47%;margin-bottom:5%;", name:"bulan"});
			    var option_bulan0 = $(document.createElement('option')).html('November').attr({value:"9"});
			    var select_minggu = $(document.createElement('select')).addClass('form-control dropdown-toggle').attr({style:"width : 47%;margin-bottom:5%;", name:"minggu"});
			    var option_minggu0 = $(document.createElement('option')).html('Minggu ke - 4').attr({value:"4"});
			   	var button = $(document.createElement('a')).html('Lihat').addClass('btn btn-primary btn-block').attr({type:"submit", style:"width:150px;position:fixed;", href:"laporan_keuangan_perbulan.php"})
			   	select1.append(option0);
			   	select_bulan.append(option_bulan0);
			   	select_minggu.append(option_minggu0);
			    div01.append(select1);
			    div01.append(select_bulan);
			    div01.append(select_minggu);
			    div01.append(button);
			    target1.append(div01);
			}
		}

		else
		{
			$("#jenisTahun").remove();
			$("#jenisBulan").remove();
			$("#jenisMinggu").remove();
		}
	}
  </script>
</html>
<?php include "../../master/footer.php"; ?>