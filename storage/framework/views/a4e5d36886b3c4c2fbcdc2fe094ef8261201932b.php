<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="<?php echo e(asset('public/favicon.ico')); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('public/css/login.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('public/bootstrap/css/font-awesome.css')); ?>" rel="stylesheet"> 
    <script src="<?php echo e(asset('public/bootstrap/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/login.js')); ?>"></script>


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
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Họ và tên</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Địa chỉ E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
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
                        <?php if(count($errors) >0): ?>
                        <div class="alert-tb alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?><br/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                        <?php if(session('thongbao')): ?>
                        <div class="alert-tb alert alert-warning">
                                <?php echo e(session('thongbao')); ?>

                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </article>
    </div>
</body>