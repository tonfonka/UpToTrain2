<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    
</head>
      

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
    <a hef = "/"><h1>Log In</h1></a>

    <form class="form" method="post" action="/">

      <p class="field">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="Agencyemail" placeholder="อีเมลล์" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" placeholder="รหัสผ่าน" required/>
        <i class="fa fa-lock"></i>
      </p>

      
      <p class="submit">
        <a href="home"><input type="submit" name="login" value="เข้าสู่ระบบ"></a>
      </p>
      <p class="regis">
        <a href="register"><input type="regis" name="login" value="สมัครสมาชิก"></a>
      </p>

    </form>
  </div> <!--/ Login-->
<!--
<div class="copyright">
    <p>Copyright &copy; 2017. Created by <a href="/uptotrain/resources/index" target="_blank">UpToTrain</a></p>
  
  -->
</body>
</html>
