@extends('backend.layouts.master') 
       @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manage Purchase</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Purchase</li>
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
                                    <h3 >Purchase list
                                      
                                    <a class="btn btn-success float-right " href="{{route('purchase.add')}}"><i class="fa fa-plus-circle">Add Purchase</i></a>
                                  
                                    </h3>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.</th>
                                            <th>Purchase No</th>
                                            <th>Date </th>
                                            <th> Product Name</th>
                                             <th>Unit</th>
                                              <th>Quantity</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($allData as $key => $purchase)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>{{ $purchase->purchase_no}}</td>
                                            <td>{{ $purchase->date}}</td>
                                             <td>{{$purchase['product']['name']}}</td>
                                            <td>{{$purchase['supplier']['name']}}</td>
                                             <td>{{$purchase['category']['name']}}</td>
                                           <td>{{$purchase['unit']['name']}}</td>
                                            <td>{{ $purchase->quantity}}</td>
                                           
                                            <a  class="btn btn-primary btn-sm" href="{{route('purchase.edit',$purchase->id)}}"><i class="fa fa-edit" title="Edit"></i> </a>
                                            <a id="delete" class="btn btn-danger btn-sm" href="{{route('purchase.delete',$purchase->id)}}"><i class="fa fa-trash" title="Delete"></i> </a>
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