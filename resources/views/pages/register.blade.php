@extends('layouts.default')

@section('head')
<style type='text/css'>
    * {
        font-family: 'Lato';
    }

    html {
        /* -moz-transform: scale(0.8, 0.8); Moz-browsers */
        zoom: 0.8;
        /* Other non-webkit browsers */
        zoom: 80%;
        /* Webkit browsers */
    }

    body {
        background: url("img/bg_login.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .form-control,
    .btn {
        border-radius: 0px;
    }

    div.form-login {
        width: 300px;
    }

    div.container {
        max-width: 930px;
        min-width: 300px;
        margin-top: 12px;
        box-shadow: 0 10px 18px #080808;
        padding: 16px;
    }

    #gambar {
        margin-bottom: 16px;
        overflow: hidden;
        /*background-color: #f9f9f9;*/
    }

</style>
@stop

@section('content')
<div style='width: 100%; height: 100%; left: 0px; top: 0px; position: fixed; display: table;'>
    <div style='text-align: center; vertical-align: middle; display: table-cell;'>
        <center>
            <div class='container' style='width:400px;background-color:#283e4a;'><br /><img src='img/logo_login.png'
                    style='width:150px;' id='gambar'>
                <div style="border-bottom:1px solid #a7a7a7;width:100px;"></div><br />
                <?php echo Form::open(array('url' => 'dashboard',  'method' => 'get')); ?>
                    <div class="form-login">
                    <div class="form-group"><?php echo Form::text('name','', array('class' => 'form-control', 'placeholder' => 'Full Name')); ?></div>
                    <div class="form-group"><?php echo Form::text('email','', array('class' => 'form-control', 'placeholder' => 'Email')); ?></div>
                    <div class="form-group"><?php echo Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')); ?></div>
                    <div class="form-group"><?php echo Form::password('password', array('class' => 'form-control', 'placeholder' => 'Confrim Password')); ?></div>
                    <div class="form-group"><?php echo Form::submit('Register', array('class' => 'btn btn-success btn-block', 'style' => 'font-size:16px;font-weight:bold;color:#404040;')); ?></div>
                </div>
                <?php  echo Form::close(); ?>
                <p style='font-weight:bold;color:#FAFAFA;'>Already have a account? <a href="/">Login here</a></p>
            </div>
        </center>
    </div>
</div>
@stop
