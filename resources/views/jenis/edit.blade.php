@extends('template.main')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Edit Data Jenis</h4>

                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form  class="form-horizontal" method="POST" action="{{url('/jenis/update/'.$jenis->id_jenis)}}">
                                     {{csrf_field()}}
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Jenis</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" value="{{$jenis->nama_jenis}}">
                                           
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