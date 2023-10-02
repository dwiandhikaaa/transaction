@extends('template.main')
@section('content')
<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pengguna</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                               
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            	<th>No</th>
                                        	<th>Id Pengguna</th>
                                        	<th>Username</th>
                                        	<th>Password</th>
                                        	<th>Level</th>
                                        	<th>Aksi</th>
                                               
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($pengguna as $data)
                                        	<tr>
                                        		<td>{{$loop->iteration}}</td>
                                                <td>{{$data->id_user}} </td>
                                                <td>{{$data->username}} </td>
                                                <td>{{$data->password}} </td>
                                                 <td>{{$data->level}} </td>
                                        		<td>
                                        			<a href="{{url('/pengguna/edit/'.$data->id_user)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>Edit</a>
                                        			 <a href="{{url('/pengguna/destroy/'.$data->id_user)}}" onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                                        		</td>
                                                @endforeach 
                                        	</tr>
                                        </tbody>
                                        
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
		</div>
	</div>
</div>
@endsection