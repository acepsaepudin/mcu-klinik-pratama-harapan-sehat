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
			    		<td><strong>No/Kode MCU</strong></td>
			    		<td><strong>: NBT-RCK/CLK031</strong></td>
			    	</tr>
			    	<tr>
			    		<td><strong>Tanggal</strong></td>
			    		<td><strong>: 24 Mei 2016</strong></td>
			    	</tr>
			    	<tr>
			    		<td><strong>NIK</strong></td>
			    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
			    	</tr>
			    	<tr>
			    		<td><strong>Bagian</strong></td>
			    		<td><strong>: {{$mcu->employee->sectionRel->name}}</strong></td>
			    	</tr>
			    	<tr>
			    		<td><strong>Nama</strong></td>
			    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
			    	</tr>
			    	<tr>
			    		<td><strong>Umur/Jenis Kelamin</strong></td>
			    		<td><strong>: {{$mcu->employee->age}}Th / {{($mcu->employee->gender == 1) ? 'L' : 'P'}}</strong></td>
			    	</tr>
			    	<tr>
			    		<td><strong>Plant</strong></td>
			    		<td><strong>: {{$mcu->employee->companyRel->address}}</strong></td>
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
				    		<td><strong>No/Kode MCU</strong></td>
				    		<td><strong>: NBT-RCK/CLK031</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Tanggal</strong></td>
				    		<td><strong>: 24 Mei 2016</strong></td>
				    	</tr>
				    	
				    	<tr>
				    		<td><strong>Nama</strong></td>
				    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Umur/Jenis Kelamin</strong></td>
				    		<td><strong>: {{$mcu->employee->age}}Th / {{($mcu->employee->gender == 1) ? 'L' : 'P'}}</strong></td>
				    	</tr>
				    </table>
		    		
				    <table style="float: right;">
				    	<tr>
				    		<td><strong>Bagian</strong></td>
				    		<td><strong>: {{$mcu->employee->sectionRel->name}}</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Tlp</strong></td>
				    		<td>: </td>
				    	</tr>
				    	<tr>
				    		<td><strong>NIK</strong></td>
				    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
				    	</tr>
				    </table>
		    </div>
		    <hr>

		    <div class="row">
		    	<div class="title-row">
		    		<h3>HASIL PEMERIKSAAN LABORATORIUM</h3>
		    	</div>
		    	<div class="section-1">
		    		<table style="width: 100%;">
		    			<tr>
		    				<td><strong>HEMATOLOGI RUTIN</strong></td>
		    				<td><strong>Hasil</strong></td>
		    				<td><strong>Nilai Rujukan</strong></td>
		    			</tr>
		    			<tr>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Hb</td>
		    				<td><strong>{{$mcu->hemoglobin}}</strong></td>
		    				<td>12-16 g/dL</td>
		    			</tr>
		    			<tr>
		    				<td>Lekosit</td>
		    				<td><strong>{{$mcu->leukosit_a}}</strong></td>
		    				<td>4.000-10.000 Sel/ul</td>
		    			</tr>
		    			<tr>
		    				<td>Hematokrit</td>
		    				<td><strong>{{$mcu->hemotocrit}}</strong></td>
		    				<td>37-47%</td>
		    			</tr>
		    			<tr>
		    				<td>Trombosit</td>
		    				<td><strong>{{$mcu->trombosit}}</strong></td>
		    				<td>150.000-45.000 Sel/ul</td>
		    			</tr>
		    			<tr>
		    				<td>LED Alifax</td>
		    				<td><strong>{{$mcu->lajuendapdarah}}</strong></td>
		    				<td>2-30 mm/jam</td>
		    			</tr>
		    			<tr>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td><strong>IMUNO SEROLOGI</strong></td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>HBsAg</td>
		    				<td><strong>{{$mcu->virushepatitishbsag}}</strong></td>
		    				<td>{{($mcu->virushepatitishbsag == 'Positif') ? 'Positif' : 'Negatif'}}</td>
		    			</tr>
		    			<tr>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td><strong>URINE RUTIN</strong></td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td><strong>Makroskopi</strong></td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Warna</td>
		    				<td><strong>{{$mcu->warna}}</strong></td>
		    				<td>Kuning Muda</td>
		    			</tr>
		    			<tr>
		    				<td>Berat Jenis</td>
		    				<td><strong>{{$mcu->beratjenis}}</strong></td>
		    				<td>1.005 - 1.030</td>
		    			</tr>
		    			<tr>
		    				<td>Ph</td>
		    				<td><strong>{{$mcu->ph}}</strong></td>
		    				<td>4.5 - 8</td>
		    			</tr>
		    			<tr>
		    				<td>Lekosit</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Nitrit</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Protein</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Glukosa</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Keton</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Urobilinogen</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Bilirubin</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td><strong>Makroskopis</strong></td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Eritrosi</td>
		    				<td><strong>{{$mcu->eritrosit}}</strong></td>
		    				<td>0-1/LPB</td>
		    			</tr>
		    			<tr>
		    				<td>Lekosit</td>
		    				<td><strong>{{$mcu->leukosit_b}}</strong></td>
		    				<td>1-4/LPB</td>
		    			</tr>
		    			<tr>
		    				<td>Epitel Cell</td>
		    				<td><strong>{{$mcu->epitelcell}}</strong></td>
		    				<td>0-3/LPB</td>
		    			</tr>
		    			<tr>
		    				<td>Bakteri</td>
		    				<td><strong>{{$mcu->bakteri}}</strong></td>
		    				<td>{{($mcu->bakteri == 'Positif') ? 'Positif':'Negatif'}}</td>
		    			</tr>
		    			<tr>
		    				<td>Silinder</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    			<tr>
		    				<td>Kristal</td>
		    				<td><strong>Negatif</strong></td>
		    				<td>Negatif</td>
		    			</tr>
		    		</table>
		    	</div>
		    </div>
		</div>
		<div class="page-three">
			<div class="logo-bs">
				<img src="{{asset('assets/img/logo.png')}}" class="user-image img-responsive"/>
		    </div>
		    <div class="after-logo">
			    	<table style="display: inline-block;">
				    	<tr>
				    		<td><strong>No/Kode MCU</strong></td>
				    		<td><strong>: NBT-RCK/CLK031</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Tanggal</strong></td>
				    		<td><strong>: {{date('d F Y', strtotime($mcu->created_at))}}</strong></td>
				    	</tr>
				    	
				    	<tr>
				    		<td><strong>Nama</strong></td>
				    		<td>: <strong>{{$mcu->employee->nik}}</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Umur/Jenis Kelamin</strong></td>
				    		<td><strong>: {{$mcu->employee->age}}Th / {{($mcu->employee->gender == 1) ? 'L' : 'P'}}</strong></td>
				    	</tr>
				    </table>
		    		
				    <table style="float: right;">
				    	<tr>
				    		<td><strong>Bagian</strong></td>
				    		<td><strong>: {{$mcu->employee->sectionRel->name}}</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Tlp</strong></td>
				    		<td>: </td>
				    	</tr>
				    	<tr>
				    		<td><strong>NIK</strong></td>
				    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
				    	</tr>
				    </table>
		    </div>
		    <hr>
		    <div class="row">
		    	<div class="title-row">
		    		<h3>PEMERIKSAAN FISIK</h3>
		    	</div>
		    	<div class="section-1">
		    		<table style="width: 60%;">
		    			<tr>
		    				<td><strong>Keluhan Saat Ini</strong></td>
		    				<td><strong>: Tidak Ada</strong></td>
		    			</tr>
		    			<tr>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td><strong>Riwayat Penyakit</strong></td>
		    				<td><strong>: Tidak Ada</strong></td>
		    			</tr>
		    		</table>
		    		<div class="clear-fix-50"></div>

		    		<table style="width: 80%;">
		    			<tr>
		    				<td><strong>Gaya Hidup</strong></td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td><strong>Jenis Kebiasaan</strong></td>
		    				<td><strong>Y</strong></td>
		    				<td><strong>T</strong></td>
		    				<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Merokok</td>
		    				<td >
		    					{{($mcu->merokok == 1) ? '&#10003;':'-'}}
        					</td>
        					<td>
        						{{($mcu->merokok == 0) ? '&#10003;':'-'}}
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Minum Alkohol</td>
		    				<td>
        						{{($mcu->alkohol == 1) ? '&#10003;':'-'}}
        					</td>
        					<td>
        						{{($mcu->alkohol == 0) ? '&#10003;':'-'}}
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Olah Raga</td>
		    				<td>
        						{{($mcu->olahraga == 1) ? '&#10003;':'-'}}
        					</td>
        					<td>
        						{{($mcu->olahraga == 0) ? '&#10003;':'-'}}
        					</td>
        					<td>&nbsp;</td>
		    			</tr>

		    			<tr>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
        					<td><strong>Hasil/Jenis</strong></td>
		    			</tr>
		    			<tr>
		    				<td>Tekanan Darah</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>{{$mcu->tekanandarah}} mmHg</td>
		    			</tr>
		    			<tr>
		    				<td>Tinggi Badan</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>{{$mcu->tinggibadan}} Cm</td>
		    			</tr>
		    			<tr>
		    				<td>Berat Badan</td>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
		    				<td>{{$mcu->beratbadan}} Kg</td>
		    			</tr>
		    			<tr>
		    				<td>&nbsp;</td>
		    				<td>&nbsp;</td>
        					<td>&nbsp;</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>JVP</td>
		    				<td>
        						-
        					</td>
        					<td>
        						&#10003;
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Apex Beat</td>
		    				<td>
        						-
        					</td>
        					<td>
        						&#10003;
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Bising Jantung</td>
		    				<td>
        						-
        					</td>
        					<td>
        						&#10003;
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Murmur</td>
		    				<td>
        						-
        					</td>
        					<td>
        						&#10003;
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Ronkhi</td>
		    				<td>
        						-
        					</td>
        					<td>
        						&#10003;
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    			<tr>
		    				<td>Wheezing</td>
		    				<td>
        						-
        					</td>
        					<td>
        						&#10003;
        					</td>
        					<td>&nbsp;</td>
		    			</tr>
		    		</table>
		    	</div>
		    </div>
		</div>	
		<dir class="page-four">
			<div class="logo-bs">
				<img src="{{asset('assets/img/logo.png')}}" class="user-image img-responsive"/>
		    </div>
		    <div class="after-logo">
			    	<table style="display: inline-block;">
				    	<tr>
				    		<td><strong>No/Kode MCU</strong></td>
				    		<td><strong>: NBT-RCK/CLK031</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Tanggal</strong></td>
				    		<td><strong>: 24 Mei 2016</strong></td>
				    	</tr>
				    	
				    	<tr>
				    		<td><strong>Nama</strong></td>
				    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Umur/Jenis Kelamin</strong></td>
				    		<td><strong>: {{$mcu->employee->age}}Th / {{($mcu->employee->gender == 1) ? 'L' : 'P'}}</strong></td>
				    	</tr>
				    </table>
		    		
				    <table style="float: right;">
				    	<tr>
				    		<td><strong>Bagian</strong></td>
				    		<td><strong>: {{$mcu->employee->sectionRel->name}}</strong></td>
				    	</tr>
				    	<tr>
				    		<td><strong>Tlp</strong></td>
				    		<td>: </td>
				    	</tr>
				    	<tr>
				    		<td><strong>NIK</strong></td>
				    		<td><strong>: {{$mcu->employee->nik}}</strong></td>
				    	</tr>
				    </table>
		    </div>
		    <hr>
		    <div class="row">
		    	<!-- <div class="title-row">
		    		<h3>HASIL PEMERIKSAAN LABORATORIUM</h3>
		    	</div> -->
		    	<div class="clear-fix-50"></div>
		    	<div class="section-1">
		    	<div class="head-shot">
		    		<strong>I. Kesimpulan Hasil</strong>
		    	</div>
		    	<div class="head-content">
		    		<div class="head-side-left">
		    			
		    			<table width="70%">
		    				<tr>
		    					<td><strong>A. Pemeriksaan Fisik</strong></td>
		    					<td><strong>: {{$mcu->keterangan}}</strong></td>
		    				</tr>
		    				<tr>
		    					<td><strong>B. Pemeriksaan Laboratorium</strong></td>
		    					<td>&nbsp;</td>
		    				</tr>
		    				<tr>
		    					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hematologi Rutin</td>
		    					<td>: Dalam Batas Normal</td>
		    				</tr>
		    				<tr>
		    					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urine Rutin</td>
		    					<td>: Dalam Batas Normal</td>
		    				</tr>
		    				<tr>
		    					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Imuno Serologi</strong></td>
		    					<td>&nbsp;</td>
		    				</tr>
		    				<tr>
		    					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HbsAg (Hepatitis B)</td>
		    					<td>: {{$mcu->virushepatitishbsag}}</td>
		    				</tr>

		    			</table>
		    		</div>
		    	</div>
		    	<div class="clear-fix-50"></div>
		    	<div class="grid">
		    		<div class="col-2-3">
				     <strong>II. Kesimpulan</strong>
				  	</div>
				  	<div class="col-titik">
				  		:
				  	</div>
				  	<div class="col-1-3">
				     <strong>Dari Hasil Pemeriksaan Fisik Normal,<br>Hasil Pemeriksaan Laboratorium</strong>
				  	</div>
		    	</div>
		    	<!-- <div class="head-shot-right">
		    		<strong>: Dari Hasil Pemeriksaan Fisik Normal,<br>Hasil Pemeriksaan Laboratorium<br></strong>
		    	</div> -->
		    	<!-- <div class="head-shot">
		    		<div class="head-content">
	    			<table width="70%">
	    				<tr>
	    					<td><strong>II. Kesimpulan</strong></td>
	    					<td><strong>: Dari Hasil Pemeriksaan Fisik Normal,<br>Hasil Pemeriksaan Laboratorium<br></strong></td>
	    				</tr>
	    			</table>
		    	</div>
		    	</div> -->
		    	
		    		
		    	</div>
		    </div>
		</dir>
	</div>
</body>
</html>