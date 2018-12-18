<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Phụng sự - <?php echo $__env->yieldContent('title'); ?></title>
  <link type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="public/css/ps-style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="public/vendor/jquery/jquery.min.js"></script>
  <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script  src="public/js/index.js"></script>
	<script  src="public/js/ps-js.js"></script>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container wrapper">
        <a class="navbar-brand" href="/">PHỤNG SỰ - <?php echo $__env->yieldContent('title'); ?></a>
		  <form class="form-inline" action="<?php echo e(url('/search')); ?>">
        <input type="text" name="key" placeholder="Nhập từ khóa tìm kiếm.." />
		  </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Hệ thống</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<?php echo $__env->yieldContent('content'); ?>
    <!-- Footer -->
    <footer class="bot my-2">
      <div class="container wrapper">
        <p class="m-0 text-center text-black">Copyright &copy; PS Responsive demo page</p>
      </div>
      <!-- /.container -->
    </footer>
	
  </body>
</html>
