@extends('layouts.sidebar')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title" style="float:left;">Edit Profile</h4>
                    <div style="float:right;"> <img src="img/tokped.jpg" width="30"></div><br>
                </div>
                <div class="content">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <input type="text" class="form-control" disabled placeholder="Company" value="Rangers Inc.">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="andywinata93">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Company" value="Andy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="Winata">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" value="Let Jend Sutoyo no 102">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" value="Kediri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" value="Indonesia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="5" class="form-control" placeholder="Here can be your description"
                                        value="Mike">It always seems impossible until its done</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                        alt="..." />
                </div>
                <div class="content">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="img/pp.jpg" alt="..." />

                            <h4 class="title">Andy Winata<br />
                                <small>andywinata93</small>
                            </h4>
                        </a>
                    </div>
                    <p class="description text-center">
                        It always seems impossible <br> until its done.
                    </p>
                    <div class="text-center">
                        <img src="img/tokped.jpg" width="30">
                        <img src="img/bl.svg" width="25">
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                    <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                </div>
            </div>
        </div>

    </div>
</div>
@stop