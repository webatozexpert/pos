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
                                    <h3 >Customer list
                                      
                                    <a class="btn btn-success float-right " href="{{route('customers.add')}}"><i class="fa fa-plus-circle">Add Customer</i></a>
                                  
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Name</th>
                                            <th>Mobile No</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                             <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($allData as $key => $customer)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>{{$customer->name}}</td>
                                             <td>{{ $customer->mobile_no}}</td>
                                            <td>{{ $customer->email}}</td>
                                            <td>{{ $customer->address}}</td>
                                            <td><img src="{{(!empty($customer->image))?url('public/upload/customer_images/'.$customer->image):url('public/upload/no_imgae .png')}}" width="60px" height="65px;" ></td>
                                            <td>
                                            <a  class="btn btn-primary btn-sm" href="{{route('customers.edit',$customer->id)}}"><i class="fa fa-edit" title="Edit"></i> </a>
                                            <a id="delete" class="btn btn-danger btn-sm" href="{{route('customers.delete',$customer->id)}}"><i class="fa fa-trash" title="Delete"></i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                   
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