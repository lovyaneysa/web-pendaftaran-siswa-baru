<?php 

include 'head.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<div class="container-fluid">
    	<div class="col-md-4">
        <div class="jumbotron">
        	<h2>Program Ekskul</h2>
        	<ul class="misi">
        		<li>Menari</li>
        		<li>Menulis</li>
        		<li>Iqra</li>
        	</ul>
        </div> </div>
        <div class="col-md-4">
        <div class="jumbotron">
        	<h2>Program Pendukung</h2>
        	<ul class="misi">
        		<li>Kunjungan Edukatif</li>
        		<li>Porseni Anak</li>
        		<li>Makan Sehat</li>
        		<li>Pemeriksaan Kesehata</li>
        		<li>Kelas Memasak</li>
        	</ul>
        </div></div>
    <div class="col-md-4">
        <div class="jumbotron">
        	<h2>Kegiatan Tambahan</h2>
        	<ul class="misi">
        		<li>Praktek Sholat</li>
        		<li>Praktek Wudhu</li>
        		<li>Menghapal Doa-Doa Harian</li>
        		<li>Menghapal Surat-Surat Juz 30</li>
        		<li>Menghapal Asmaul Husna</li>
        	</ul>
        </div></div>
	</div>


		<div class="container">	
			<div class="header">
			<center><h1>Kegiatan Siswa</h1></center>
	</div>

		<br/>
		<div class="col-md-8 col-md-offset-2">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>	
				<li data-target="#myCarousel" data-slide-to="3"></li>	
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/latar.jpg">
				</div>
				<div class="item">
					<img src="img/foto1.jpg">
				</div>
				<div class="item">
					<img src="img/foto2.jpg">
				</div>
				<div class="item">
					<img src="img/foto3.jpg">
				</div>
				<div class="item">
					<img src="img/foto4.jpg">
				</div>
			</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
   </div>
	</body>
	<style>

		.carousel-inner {
			width:730px;
			height:400px;
				
			}

		.col-md-8{
			padding-bottom:30px;
			}

		.header {
	        background-color:#A6C6B5;
	        padding: 10px;
	        color: white;
	    }

	    .misi{
	    	text-align:justify;
	    	font-weight:bold;
	    	font-size: 17px;
	    }

	    .jumbotron{
			background-color: #A5DB89;
			text-align: center;
			height:230px;
			padding-top:10px;
		}
		
		h2{
			font-weight:bold;
		}
	</style>
	</html>

	<?php include 'foot.php'; ?>
