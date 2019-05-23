<?php /* /home/rivalmsr/Documents/rdeveloper/laravel/ecommerce-adminLTE/resources/views/auth/login.blade.php */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/square/blue.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus placeholder="Email">
          <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required placeholder="Password">
          <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
              <?php if($errors->has('password')): ?>
              <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('password')); ?></strong>
              </span>
              <?php endif; ?>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                <label class="form-check-label" for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-block btn-primary">
              <?php echo e(__('Login')); ?>

            </button>




          </div>

        </div>



      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <?php if(Route::has('password.request')): ?>
          <a href="<?php echo e(route('password.request')); ?>" class="btn btn-block btn-outline-danger">
            <i class=""></i><?php echo e(__('Forgot Your Password ?')); ?>

          </a>
        <?php endif; ?>
        <a href="#" class="btn btn-block btn-outline-secondary">
          <i class=""></i> Register
        </a>
      </div>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
