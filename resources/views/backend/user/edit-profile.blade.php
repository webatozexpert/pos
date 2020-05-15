@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Profile</h1>
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
                <section class="col-lg-12 ">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>edit Profile
                                <a class="btn btn-success float-right " href="{{route('profile.view')}}"><i class="fa fa-plus">Your Profile</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('profile.update')}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                   
                                   <div class="form-group col-md-4">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="{{$editData->name}}" class="form-control">
                                        <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                                        <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <label for="mobile">Mobile No</label>
                                        <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control">
                                        <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" value="{{$editData->address}}" class="form-control">
                                        <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="">Select Gender</option>
                                          <option value="male" {{($editData->gender=="male")?"selected":""}}>Male</option>
                                             <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                     <label for="image">Image</label>
                                     <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <div class="form-group col-md-2">
                                     <img id="showImage"  src="{{(!empty($editData->image))?url('public/upload/user_images/'.$editData->image):url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;" >
                                    </div>
                                    
                                    <div class="form-group col-md-6" style="padding-top:120px;">

                                        <input type="submit" value="update" class="btn btn-primary">
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
