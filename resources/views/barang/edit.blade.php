@extends('template.main')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                               
                                <h4>Edit Data Barang</h4>
                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form  class="form-horizontal" method="POST" action="{{url('/barang/update/'.$barang->id_barang)}}">
                                     {{csrf_field()}}
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Barang </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{$barang->nama_barang}}">
                                        </div>
                                    </div>
                                         <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Harga</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="harga" name="harga" value="{{$barang->harga}}">    
                                        </div>
                                    </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Stok </label>
                                            <div class="col-sm-9">
                                              <input type="number" class="form-control" id="stok" name="stok" value="{{$barang->stok}}">
                                        </div>
                                        </div>
                                        <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tanggal Expired</label>
                                            <div class="col-sm-9">
                                              <input type="date" class="form-control" id="tgl_expired" name="tgl_expired" value="{{$barang->tgl_expired}}">    
                                        </div>
                                    </div>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Id Jenis</label>
                                            <select class="form-control" id="id_jenis" name="id_jenis">
                                                <option>...pilih...</option>
                                                @foreach ($jenis as $data)
                                                <option @if ($data->id_jenis==$barang->id_jenis) selected= ""@endif
                                               value="{{$data->id_jenis}}">
                                                    {{$data->nama_jenis}}
                                                </option>
                                                @endforeach

                                            </select>
                                    </div>     
                                  <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
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