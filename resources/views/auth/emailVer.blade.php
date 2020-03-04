<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin-Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Vali</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('admin.login.submit') }}">
          {{Auth::user()->email}}
        	we send you a mail form your mail please check . 
        	or if not get email . please chick here 
        	<button class="btn btn-success" type="submit">Click here</button>
        </form>
        

      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('assets/admin/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('assets/admin/') }}/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>