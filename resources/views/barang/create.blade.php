@extends('template.main')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                               
                                <h4>Tambah Data Barang</h4>


                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form  class="form-horizontal" method="POST" action="{{url('/barang/store')}}">
                                     {{csrf_field()}}
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Barang </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang">
                                        </div>
                                    </div>
                                         <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Harga</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga">    
                                        </div>
                                    </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Stok </label>
                                            <div class="col-sm-9">
                                              <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukan Jumlah Stok">
                                        </div>
                                        </div>
                                        <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tanggal Expired</label>
                                            <div class="col-sm-9">
                                              <input type="date" class="form-control" id="tgl_expired" name="tgl_expired" placeholder="Masukan Tanggal Expired">    
                                        </div>
                                    </div>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Id Jenis</label>
                                            <select class="form-control" id="id_jenis" name="id_jenis">
                                            	<option>...pilih...</option>
                                            	@foreach ($jenis as $data)
                                            	<option value="{{$data->id_jenis}}">
                                            		{{$data->id_jenis}}
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