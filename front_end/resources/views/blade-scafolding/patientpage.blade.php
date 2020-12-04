
@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/appo.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
</style>

<div id="patbutton" class="right" style="margin-right: 12%;">
    <div id="patbt">
    <a href="/patRecord"><button class="btn">My Records</button></a>
    <button class="btn" data-toggle="modal" data-target="#exampleModalCenter1">My Details</button>
    <a href="/login"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
    </div>
</div>
<div id="home" class="form">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">
                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" action="/specialization" method="post">
                            <div class="form-group">
                                <label for="" class="text-info" style="color: white;">Specialization:</label><br>
                                <select id="inputState" class="form-control">
                                    <option selected>any</option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="date" class="date-info" style="color: white;">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>

                        </form>

                        <div id="home-button">
                                <!-- <input type="submit" class="button" name=""> -->
                                <button class="btn btn-left" type="submit" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top: 30px;">SEARCH</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">My Details</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          <div class="modal-body">
                <div class="">
                    <label for="username" class="text-info">Name:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Address:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">User ID:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="nic" class="text-info">NIC no:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="phone">Telephone number:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="gender" class="text-info">Gender:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="birthday" class="date-info">Date of Birth:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="form_email">E-mail:</label>
                    <a class="" href=""></a>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
        </div>
      </div>
    </div>

            <!-- Modal search -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">Choose Your Doctor</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div id="table" class="table-responsive">
                            <table id="doctor_data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="60%">Doctor name</th>
                                        <th width="30%">Time</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><a href="/channel" class="book"><button style="background-color: pink;">book </button></a></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
          </div>

        </div>
    
</div>

@endsection 

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 
