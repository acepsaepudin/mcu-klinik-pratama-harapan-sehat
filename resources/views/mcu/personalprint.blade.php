<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pemeriksaan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" /> -->
	<link href="{{ asset('assets/css/pdf.css') }}" rel="stylesheet" />
</head>
<body>
	<div class="container">
		
		<div class="page-one">
		    <div class="logo-bs">
				<img src="{{asset('assets/img/logo.png')}}" class="user-image img-responsive"/>
		    </div>
		    <center><h3>HASIL PEMERIKSAAN MEDICAL CHECK UP<br>KARYAWAN / KARYAWATI<br>{{strtoupper($mcu->employee->companyRel->name)}}</h3></center><hr>
		    <br><br><br><br><br><br>
		    <center>
		    	<table>
			    	<tr>
			    		<td>No/Kode MCU</td>
			    		<td>: NBT-RCK/CLK031</td>
			    	</tr>
			    	<tr>
			    		<td>Tanggal</td>
			    		<td>: 24 Mei 2016</td>
			    	</tr>
			    	<tr>
			    		<td>NIK</td>
			    		<td>: {{$mcu->employee->nik}}</td>
			    	</tr>
			    	<tr>
			    		<td>Bagian</td>
			    		<td>: {{$mcu->employee->sectionRel->name}}</td>
			    	</tr>
			    	<tr>
			    		<td>Nama</td>
			    		<td>: {{$mcu->employee->nik}}</td>
			    	</tr>
			    	<tr>
			    		<td>Umur/Jenis Kelamin</td>
			    		<td>: {{$mcu->employee->age}}Th / {{($mcu->employee->gender == 1) ? 'L' : 'P'}}</td>
			    	</tr>
			    	<tr>
			    		<td>Plant</td>
			    		<td>: {{$mcu->employee->companyRel->address}}</td>
			    	</tr>
			    </table>
		    </center>
		</div>
		<div class="page-two">
		   <div class="logo-bs">
				<img src="{{asset('assets/img/logo.png')}}" class="user-image img-responsive"/>
		    </div>
		    <div class="after-logo">
			    	<table style="display: inline-block;">
				    	<tr>
				    		<td>No/Kode MCU</td>
				    		<td>: NBT-RCK/CLK031</td>
				    	</tr>
				    	<tr>
				    		<td>Tanggal</td>
				    		<td>: 24 Mei 2016</td>
				    	</tr>
				    	
				    	<tr>
				    		<td>Nama</td>
				    		<td>: {{$mcu->employee->nik}}</td>
				    	</tr>
				    	<tr>
				    		<td>Umur/Jenis Kelamin</td>
				    		<td>: {{$mcu->employee->age}}Th / {{($mcu->employee->gender == 1) ? 'L' : 'P'}}</td>
				    	</tr>
				    	<tr>
				    		<td>Plant</td>
				    		<td>: {{$mcu->employee->companyRel->address}}</td>
				    	</tr>
				    </table>
		    		
				    <table style="float: right;">
				    	<tr>
				    		<td>Bagian</td>
				    		<td>: {{$mcu->employee->sectionRel->name}}</td>
				    	</tr>
				    	<tr>
				    		<td>Tlp</td>
				    		<td>: </td>
				    	</tr>
				    	<tr>
				    		<td>NIK</td>
				    		<td>: {{$mcu->employee->nik}}</td>
				    	</tr>
				    </table>
		    </div>
		    <hr>

		    <div class="row">
		    	<div class="title-row">
		    		<h3>HASIL PEMERIKSAAN LABORATORIUM</h3>
		    	</div>
		    </div>
		</div>
		<div class="page-three">
			asdf
		</div>	
	</div>
</body>
</html>