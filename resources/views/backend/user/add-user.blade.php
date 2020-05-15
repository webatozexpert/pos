@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 ">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add User
                                <a class="btn btn-success float-right " href="{{route('users.view')}}"><i class="fa fa-list">User List</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('users.store')}}" id="myForm">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="usertype">User Role</label>
                                        <select name="usertype" id="usertype" class="form-control">
                                            <option value="">Select Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control">
                                        <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control">
                                        <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                        <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" name="password2" class="form-control">
                                        <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <input type="submit" value="submit" class="btn btn-primary">
                                    </div>

                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                </section>


                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
