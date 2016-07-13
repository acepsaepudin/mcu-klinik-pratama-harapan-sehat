@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Data Jabatan
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="{{URL::route('section.update', ['id' => $employeesection->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="name" value="{{$employeesection->name}}">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Simpan</button>
                      <a href="{{URL::route('section.index')}}" class="btn btn-default">Kembali</a>
                    </div>
                  </div>
                </form>
            </div>
        </div>

</div>
<!-- /. ROW  -->
@endsection

