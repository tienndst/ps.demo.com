<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="{{ asset('public/favicon.ico') }}">

    <title>@yield('title')</title>

    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('public/css/login.css') }}" rel="stylesheet"> 
    <link href="{{ asset('public/bootstrap/css/font-awesome.css') }}" rel="stylesheet"> 
    <script src="{{ asset('public/bootstrap/js/jquery.js') }}"></script>
    <script src="{{ asset('public/js/login.js') }}"></script>


</head>

<body>
    <div class="login-body">
        <article class="container-login center-block">
            <section>
                <ul id="top-bar" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#login-access" style="color: #">CỔNG THÔNG TIN ĐIỆN TỬ</a></li>
                </ul>
                <div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
                    <div id="login-access" class="tab-pane fade active in">
                        <h2 style="margin-top: 0px;"><i class="glyphicon glyphicon-plus"></i> Đăng kí</h2>                      
                        <form class="form-horizontal" method="POST" action="register">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Họ và tên</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Đăng kí
                                </button>
                            </div>
                        </div>
                    </form>
                        @if (count($errors) >0)
                        <div class="alert-tb alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}<br/>
                            @endforeach
                        </div>
                        @endif
                        @if (session('thongbao'))
                        <div class="alert-tb alert alert-warning">
                                {{ session('thongbao') }}
                        </div>
                        @endif
                    </div>
                </div>
            </section>
        </article>
    </div>
</body>