@extends('backend.layouts.master') 
       @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manage product</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">product</li>
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
                                    <h3 >product list
                                      
                                    <a class="btn btn-success float-right " href="{{route('products.add')}}"><i class="fa fa-plus-circle">Add product</i></a>
                                  
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Supplier Name</th>
                                            <th>Category </th>
                                            <th>Name</th>
                                             <th>Unit</th>
                                              <th>Quantity</th>
                                             <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($allData as $key => $product)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>{{$product['supplier']['name']}}</td>
                                             <td>{{$product['category']['name']}}</td>
                                            <td>{{ $product->name}}</td>
                                           <td>{{$product['unit']['name']}}</td>
                                            <td>{{ $product->quantity}}</td>
                                            <td><img src="{{(!empty($product->image))?url('public/upload/product_images/'.$product->image):url('public/upload/no_imgae .png')}}" width="60px" height="65px;" ></td>
                                            <td>
                                            <a  class="btn btn-primary btn-sm" href="{{route('products.edit',$product->id)}}"><i class="fa fa-edit" title="Edit"></i> </a>
                                            <a id="delete" class="btn btn-danger btn-sm" href="{{route('products.delete',$product->id)}}"><i class="fa fa-trash" title="Delete"></i> </a>
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