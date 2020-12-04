
@extends('blade-scafolding.layout.content')

@section('content')

<!--register form-->
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/regi.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  @media (max-width: 767px){
    body{
        background-image: linear-gradient(red, yellow, green);
        }
   }
}
</style>
<div id="reg" class="form" >
    
        <div class="container" class="text-center">
        <h2 style="text-align: right;">Already a member? <a href="/login" style="color: #0040FF;">Login</a> </h2>
            <div id="reg-row" class="row justify-content-center align-items-center">
                <div id="reg-column" class="col-md-6">
                    <div id="reg-box" class="col-md-12">
                        <form id="reg-form" class="form" action="" method="post">

                            <h2 class="text-center text-info" style="font-weight: bold; color: white;">Patient Registration</h2>
                            <div style=" margin-top: 10px; position: relative;">
                                <h2>Profile Photo</h2>
                                <img class="img" src="<?php echo url('/'); ?>/images/profile-photo/patphoto.png" height="120" width="130" alt="avatar" style=" cursor: pointer;">
                                <input type="file" name="image" accept="image/*" id="file" style="display: none;">
                                <p>
                                    <label for="file" style="cursor: pointer;" >Upload Image</label>
                                </p>
                                <img id="output" width="200">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Patient Name:</label><br>
                                <input type="text" name="PatName" id="PatName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address" class="control-label">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nic" class="text-info">NIC no:</label><br>
                                <input type="text" name="nic" id="nic" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telephone number:</label><br>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sex" class="text-info">Gender:</label><br>
                                <select id="inputState" class="form-control">
                                    <option selected></option>
                                    <option> Male</option>
                                    <option> Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="birthday" class="date-info">Date of Birth:</label><br>
                                <input type="date" name="birthday" id="birthday" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="form_email">E-mail:</label><br>
                                <input type="email" name="email" id="form_email" class="form-control" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label for="psw">Password</label>
                                <input type="password" class="form-control"name="psw" required> 
                            </div>   
                            <div class="form-group">
                                <label for="psw-repeat">Repeat Password</label>
                                <input type="password" class="form-control"name="psw-repeat" required>
                            </div>

                            <div id="note" style="color: black;">
                                * If you co-operate with us again, you can directly login by using your user name and password
                            </div>

                            <div class="divider"></div>
                            <label id="subtopic" class="text-center text-info">Emergency Contact</label>

                            <div class="form-group">
                                <label class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">Relationship:</label><br>
                                <input type="text" name="relation" id="relation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telephone number:</label><br>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <button href="/login" class="button button-block"/><a href="/patpage">Register</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>

@endsection 
      <!--end login form-->
     