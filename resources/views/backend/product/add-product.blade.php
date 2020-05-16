@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                            <h3>Add Product
                                <a class="btn btn-success float-right " href="{{route('products.view')}}"><i class="fa fa-plus">Product List</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('products.store')}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                     <label for="supplier_id">Supplier Name</label>
                                     <select name="supplier_id" id="" class="form-control">
                                         <option value="">Select Supplier</option>
                                         @foreach($suppliers as $supplier)
                                         <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                         @endforeach
                                     </select>
                                     <font style="color:red">{{($errors->has('supplier_id'))?($errors->first('supplier_id')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="category_id">Category Name</label>
                                     <select name="category_id" id="" class="form-control">
                                         <option value="">Select Category</option>
                                         @foreach($categories as $category)
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                     </select>
                                     <font style="color:red">{{($errors->has('category_id'))?($errors->first('category_id')):''}}</font>
                                    </div>

                                    <div class="form-group col-md-6">
                                     <label for="name">Product Name</label>
                                     <input type="text" name="name" class="form-control" id="name">
                                     <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="unit_id">Unit</label>
                                    <select name="unit_id" id="" class="form-control">
                                         <option value="">Select Unit</option>
                                         @foreach($units as $unit)
                                         <option value="{{$unit->id}}">{{$unit->name}}</option>
                                         @endforeach
                                     </select>
                                     <font style="color:red">{{($errors->has('unit_id'))?($errors->first('unit_id')):''}}</font>
                                    </div>

                                    <div class="form-group col-md-6">
                                     <label for="quantity">Quantity</label>
                                     <input type="quantity" name="quantity" class="form-control" id="quantity">
                                     <font style="color:red">{{($errors->has('quantity'))?($errors->first('quantity')):''}}</font>
                                    </div>
                                   
                                    <div class="form-group col-md-4">
                                     <label for="image">Image</label>
                                     <input type="file" name="image" class="form-control" id="image">
                                     <font style="color:red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                     <img id="showImage"  src="{{url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;" >
                                    </div>
                                    
                                    <div class="form-group col-md-2" >

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
