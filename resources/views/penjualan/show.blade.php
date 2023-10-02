@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-title">
                                <h4>Data detail Transaksi </h4>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Penjualan</th>
                                                <th>Barang</th>
                                                <th>Jumlah Beli</th>
                                                <th>Sub Total</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($penjualan as $data)
                                         
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$data->id_penjualan}}</td>
                                                <td>{{$data->barang->nama_barang}}</td>
                                                <td>{{$data->jumlah_beli}}</td>
                                                <td>Rp. {{$data->sub_total}}</td>                                               
                                                <td>
                                                	
                                                </td>
                                                @endforeach
                                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
	</div>
</div>
@endsection