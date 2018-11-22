@extends('layouts.sidebar')

@section('head')
<link href="{{ url('/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>
@stop

@section('header')
    Dashboard
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">2018 Sales</h4>
                    <p class="category">All products including Taxes</p>
                </div>
                <div class="content">
                    <div id="chartActivity" class="ct-chart"></div>

                    <div class="footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Bukalapak
                            <i class="fa fa-circle text-danger"></i> TokoPedia
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-check"></i> Data information certified
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Last Order</h4>
                    <p class="category">All Category</p>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><img src="img/bl.svg" width="50"></td>
                                    <td>Nike Zoom YBZ 2018 New Arrival</td>
                                    <td class="td-actions text-right">
                                        <img src="img/img1.jpg" width="75">
                                    </td>
                                </tr>

                                <tr>
                                    <td><img src="img/tokped.jpg" width="50"></td>
                                    <td>Hush puppies bag New Arrival</td>
                                    <td class="td-actions text-right">
                                        <img src="img/img2.jpg" width="75">
                                    </td>
                                </tr>


                                <tr>
                                    <td><img src="img/bl.svg" width="50"></td>
                                    <td>Iphone 8 Original Garansi International</td>
                                    <td class="td-actions text-right">
                                        <img src="img/img3.png" width="75">
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
