@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Customer</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Customer</li>
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
                            <h3>Add Customer
                                <a class="btn btn-success float-right " href="{{route('customers.view')}}"><i class="fa fa-plus">Customer List</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('customers.store')}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                     <label for="name">Customer Name</label>
                                     <input type="text" name="name" class="form-control" id="name">
                                     <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="mobile_no">Mobile No</label>
                                     <input type="text" name="mobile_no" class="form-control" id="mobile_no">
                                     <font style="color:red">{{($errors->has('mobile_no'))?($errors->first('mobile_no')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="email">Email</label>
                                     <input type="email" name="email" class="form-control" id="email">
                                     <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="address">Address</label>
                                     <input type="text" name="address" class="form-control" id="address">
                                     <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</font>
                                    </div>
                                    

                                    <div class="form-group col-md-4">
                                     <label for="image">Image</label>
                                     <input type="file" name="image" class="form-control" id="image">
                                     <font style="color:red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                     <img id="showImage"  src="{{url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;" >
                                    </div>
                                    
                                    <div class="form-group col-md-2" style="padding-top:120px;">

                                        <input type="submit" value="Submit" class="btn btn-primary">
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
