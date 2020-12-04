
@extends('blade-scafolding.layout.content')

@section('content')

<!--login form-->
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/login.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
</style>
<div id="login" class="form" >
   <h3 class="text-center text-white pt-5" style="font-weight: bold;">Welcome Back!</h3>
        <div class="container">
        
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group" class="text-info">
                                <p class="forgot"><a href="#">Forgot Password?</a></p>
                                <a href="/regi" id="reg-link">Register here</a></p>
                                <button class="button button-right"/><a href="/patpage">Log In</a></button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>

@endsection 
      <!--end login form-->
     