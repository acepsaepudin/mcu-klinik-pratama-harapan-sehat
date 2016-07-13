@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Perusahaan
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="{{URL::route('company.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Perusahaan" name="address">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Simpan</button>
                      <a href="{{URL::route('company.index')}}" class="btn btn-default">Kembali</a>
                    </div>
                  </div>
                </form>
            </div>
        </div>

</div>
<!-- /. ROW  -->
@endsection

