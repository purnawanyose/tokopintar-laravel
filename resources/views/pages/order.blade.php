@extends('layouts.sidebar')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <br>

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
                            <th>No Tagihan</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th width="120px;">Total Tagihan</th>
                            <th width="150px;">Status</th>
                            <th>Source</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>NVJK2000019</td>
                                <td><img src="img/img1.jpg" width="100"></td>
                                <td>Nike Zoom YBZ 2018 New Arrival</td>
                                <td>Rp. 1.200.000</td>
                                <td>Dikirim <br>
                                    <p style="font-size: 8pt">(29 Mei 2018, 19:29 WIB)</p>
                                </td>
                                <td><img src="img/BL.svg" width="25"></td>
                                <td><button type="button" rel="tooltip" title="Di proses pelapak" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/send.png" width="25">
                                    </button>
                                    <button type="button" rel="tooltip" title="Dikirim" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/recieved.png" width="25">
                                    </button>

                                    <button type="button" rel="tooltip" title="Selesai dan diterima" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/done.png" width="25">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>YVJK2000029</td>
                                <td><img src="img/img2.jpg" width="100"></td>
                                <td>Hush puppies bag New Arrival</td>
                                <td>Rp. 11.000.000</td>
                                <td>Diproses <br>
                                    <p style="font-size: 8pt">(29 Mei 2018, 19:29 WIB)</p>
                                </td>
                                <td><img src="img/BL.svg" width="25"></td>
                                <td><button type="button" rel="tooltip" title="Proses Pelapak" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/send.png" width="25">
                                    </button>
                                    <button type="button" rel="tooltip" title="Dikirim" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/recieved.png" width="25">
                                    </button>

                                    <button type="button" rel="tooltip" title="Selesai dan diterima" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/done.png" width="25">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TJIK2000029</td>
                                <td><img src="img/img3.png" width="100"></td>
                                <td>Iphone 8 Garansi International</td>
                                <td>Rp. 10.600.000</td>
                                <td>Dikirim <br>
                                    <p style="font-size: 8pt">(29 Mei 2018, 19:29 WIB)</p>
                                </td>
                                <td><img src="img/BL.svg" width="25"></td>
                                <td><button type="button" rel="tooltip" title="Proses Pelapak" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/send.png" width="25">
                                    </button>
                                    <button type="button" rel="tooltip" title="Dikirim" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/recieved.png" width="25">
                                    </button>

                                    <button type="button" rel="tooltip" title="Selesai dan diterima" class="btn btn-danger btn-simple"
                                        style="width: 20px;">
                                        <img src="img/done.png" width="25">
                                    </button>
                                </td>
                            </tr>



                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@stop