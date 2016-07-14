@extends('layout')
@section('stylesheets')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah MCU Pegawai
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="{{URL::route('mcu.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="company_name" id="company_name">
                        @foreach($companies as $cmp)
                          <option value="{{$cmp->id}}">{{$cmp->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Pegawai</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="employee_id" id="employee_id">
                          <option value="0">Pilih Pegawai</option>
                      </select>
                    </div>
                  </div>
                  <p class="help-block text-center">Pemeriksaan Fisik</p>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Merokok</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="merokok" id="merokok">
                          <option value="1">Ya</option>
                          <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alkohol</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="alkohol" id="alkohol">
                          <option value="1">Ya</option>
                          <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Olah Raga</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="olahraga" id="olahraga">
                          <option value="1">Ya</option>
                          <option value="0">Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputEmail3" placeholder="Berat Badan" name="beratbadan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tinggi Badan" name="tinggibadan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tekanan Darah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tekanan Darah" name="tekanandarah">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Hemoglobin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Hemoglobin" name="hemoglobin">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Leukosit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Leukosit" name="leukosit_a">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Hemotocrit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Hemotocrit" name="hemotocrit">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Trombosit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Trombosit" name="trombosit">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Laju Endap Darah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Laju Endap Darah" name="lajuendapdarah">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Virus Hepatitis Hbs Ag</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="virushepatitishbsag">
                          <option value="Positif">Positif</option>
                          <option value="Negatif">Negatif</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Gula Darah Sewaktu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Gula Darah Sewaktu" name="guladarahsewaktu">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Warna</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Warna" name="warna">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">pH</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="pH" name="ph">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Berat Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Berat Jenis" name="beratjenis">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Lain-lain</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="lain_lain">
                          <option value="Positif">Positif</option>
                          <option value="Negatif">Negatif</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Epitel Cell</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Epitel Cell" name="epitelcell">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Leukosit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Leukosit" name="leukosit_b">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Eritrosit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Eritrosit" name="eritrosit">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Bakteri</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="bakteri">
                          <option value="Positif">Positif</option>
                          <option value="Negatif">Negatif</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="keterangan">
                          <option value="Normal">Normal</option>
                          <option value="Haid">Haid</option>
                          <option value="Hbs Positif">Hbs Positif</option>
                          <option value="Banyak Minum">Banyak Minum</option>
                      </select>
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

@section('scripts')
<script type="text/javascript">
  $(function(){
    //trigger when page opened
    var cmpid = $('#company_name').val();
    getEmployees(cmpid);

    $('#company_name').on('change', function(){
      var idcom = $(this).val();
      getEmployees(idcom);      
    });
  });

  //get list employee
  function getEmployees(CompanyId) {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "POST",
      url: "{{URL::route('employee.getAllByCompany')}}",
      dataType: "json",
      data: {'company_id': CompanyId},
      success: function(data){
        var tagSelect = $('#employee_id');
        tagSelect.empty();
        $.each(data, function(index, element){
          tagSelect.append("<option value='"+element.id+"'>"+ element.nik +" - "+element.name + "</option>" );
        });
      }

    });
    return false;
  }
</script>
@endsection

