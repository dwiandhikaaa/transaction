@extends('template.main')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                               
                                <h4>Tambah Data Pembeli</h4>


                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form  class="form-horizontal" method="POST" action="{{url('/pembeli/store')}}">
                                     {{csrf_field()}}
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                                        </div>
                                    </div>
                                         <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat">    
                                        </div>
                                    </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">NO Telepon </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan No Telepon">
                                        </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>

</div>
@endsection