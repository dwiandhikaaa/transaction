@extends('template.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h4>Data Jenis </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Jenis</th>
                                    <th>Nama Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis as $data)

                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$data->id_jenis}} </td>
                                    <td>{{$data->nama_jenis}} </td>
                                    <td class="color-primary">
                                        <a href="{{url('/jenis/edit/'.$data->id_jenis)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>Edit</a>

                                        <a href="{{url('/jenis/destroy/'.$data->id_jenis)}}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class=" fa fa-trash"></i>Hapus</a>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection