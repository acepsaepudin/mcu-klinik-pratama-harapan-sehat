@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Perserta MCU
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="{{URL::route('employee.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="NIK" name="nik">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Usia</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Usia" name="age">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="gender">
                          <option value="1">Laki-laki</option>
                          <option value="2">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bagian</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="section">
                        @foreach($sections as $sec)
                          <option value="{{$sec->id}}">{{$sec->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="company">
                        @foreach($companies as $cmp)
                          <option value="{{$cmp->id}}">{{$cmp->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Simpan</button>
                      <a href="{{URL::route('employee.index')}}" class="btn btn-default">Kembali</a>
                    </div>
                  </div>
                </form>
            </div>
        </div>

</div>
<!-- /. ROW  -->
@endsection

