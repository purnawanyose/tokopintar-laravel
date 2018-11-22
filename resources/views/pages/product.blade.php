@extends('layouts.sidebar')

@section('head')
<link href="{{ url('/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>
@stop

@section('header')
    Manage Products
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <br>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-danger btn-fill pull-left">Add Product</button>
                    </div>
                    <div class="col-md-3" style="float:right;">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Source</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="img/img1.jpg" width="100"></td>
                                <td>Nike Zoom YBZ 2018 New Arrival</td>
                                <td>2</td>
                                <td>Rp. 1.200.000</td>
                                <td><img src="img/BL.svg" width="30"></td>
                                <td><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple">
                                        <i class="fa fa-pencil"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="img/img2.jpg" width="100"></td>
                                <td>Hush puppies bag New Arrival</td>
                                <td>1</td>
                                <td>Rp. 11.000.000</td>
                                <td><img src="img/BL.svg" width="30"></td>
                                <td><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple">
                                        <i class="fa fa-pencil"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="img/img3.png" width="100"></td>
                                <td>Iphone 8 Garansi International</td>
                                <td>
                                    <div style="background-color: red;width: 20px;border-radius: 10px;color:white;text-align: center;">0</div>
                                </td>
                                <td>Rp. 10.600.000</td>
                                <td><img src="img/tokped.jpg" width="30"></td>
                                <td><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple">
                                        <i class="fa fa-pencil"></i>
                                    </button></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@stop
