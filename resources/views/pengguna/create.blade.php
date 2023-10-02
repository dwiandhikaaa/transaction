@extends('template.main')
@section('content')
<div class="container-fluid">
	   <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Tambah Data Pengguna</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                	  <form action="{{url('/pengguna/store')}}" method="POST" class="form-horizontal">
                                     {{csrf_field()}}
                                    <form>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                        </div>
                                         <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" id="level" name="level" > 
                                   
                                           		<option>--pilih--</option>
                                           		<option value="Administrator">Administrator</option>
                                           		<option value="Kasir">Kasir</option>
                                       
                                          	</select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
</div>
@endsection