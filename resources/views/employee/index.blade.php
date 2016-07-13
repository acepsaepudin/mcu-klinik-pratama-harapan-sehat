@extends('layout')
@section('stylesheets')
<!-- TABLE STYLES-->
<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="pull-left">
                     Data Peserta MCU
                </div>
                <div class="text-right">
                    <a href="{{URL::route('employee.add')}}" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Bagian</th>
                                <th>Nama Perusahaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($lists as $employee)
                                <tr>
                                    <td> {{$employee->nik}}</td>
                                    <td> {{$employee->name}}</td>
                                    <td> {{$employee->age}}</td>
                                    <td> {{($employee->gender == 1) ? 'Laki-laki' : 'Perempuan' }}</td>
                                    <td> {{$employee->sectionRel->name}}</td>
                                    <td> {{$employee->companyRel->name}}</td>
                                    <td><a href="{{URL::route('employee.edit', ['id' => $employee->id])}}" class="btn btn-primary">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
@endsection
@section('scripts')
 <!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
@endsection
