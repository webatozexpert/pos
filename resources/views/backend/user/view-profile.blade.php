@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Proflie</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                <section class="col-md-8 offset-2">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-thumbnail"
                                 src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image):url('public/upload/no_imgae .png')}}" alt="User profile picture">

                            </div>

                        <!--    <h3  class="profile-username text-center">{{$user->name}}</h3>

                            <p class="text-muted text-center">{{$user->address}}</p>-->
                            <table width="100%" class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile No</td>
                                        <td>{{$user->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{$user->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>{{$user->gender}}</td>
                                    </tr>
                                </tbody>
                            </table>
                           
                            <a href="{{route('profile.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                        </div>
                        <!-- /.card-body -->
                        </section>
                    </div>
                    <!-- /.card -->

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
