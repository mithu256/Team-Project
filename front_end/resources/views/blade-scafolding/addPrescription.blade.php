
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/patHistory.jpg');
  }

</style>
<div id="patHistory" class="container">
    <div class="right" id="history">
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn right">Patient History</button>
    </div>
    <div class="text-center" style="padding-top: 20px;"><h1>Add Prescription</h1></div>
    <!-- @include('blade-scafolding.tableLayer.patientHistryTable') -->
    <form style="padding-left: 20%;">
          <div id="patAddhistory" style="backdrop-filter: blur(5px);">
                <div class="">
                    <label for="userId" class="text-info">Patient-ID:</label><br>
                    <input type="" name="" required="required">
                </div>
                <div class="">
                    <label for="username" class="text-info">Patient Name:</label><br>
                    <input type="" name="">
                </div>
                <div class="">
                    <label for="date" class="date-info">Date:</label><br>
                    <input type="date" name="">
                </div>
                <div id="diagnostic">
                    <label for="" class="text-info">Diagnostic:</label><br>
                    <input type="" name="">
                </div>
                <div id="description">
                    <label for="description" class="text-info">Description:</label><br>
                    <textarea id="form_message" name="message" class="form-control" rows="4"></textarea>
                </div>
                <div id="description">
                    <label for="description" class="text-info">Medicine:</label><br>
                    <textarea id="form_message" name="message" class="form-control" rows="4"></textarea>
                </div>
                <div id="patadd" style="margin: 10px 65px 10px 10px;">
                  <button type="button" class="btn btn right">Add</button>
                </div>  
              </div>
            </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div id="search" class="modal-header" style=" height: 70px;">
            <div class="serch-bar" class="text-left" style="margin-left: 5%; position: absolute; width: 50%;">
                  <div id="custom-search-input" class="table-responsive" style="margin-top: 0; margin-bottom: 0;">
                     <div class="input-group col-md-12">
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                        <input type="text" class="form-control input-lg" placeholder="Patient-ID" />
                     </div>
                  </div>
               </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="patAddhistory" class="modal-body">
                <div class="">
                    <label for="userId" class="text-info">Patient Name:</label>
                    <a href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Doctor Name:</label>
                    <a href=""></a>
                </div>
                <div class="">
                    <label for="date" class="date-info">Date:</label>
                    <a href=""></a>
                </div>
                <div id="diagnostic">
                    <label for="" class="text-info">Diagnostic:</label><br>
                    <a href=""></a>
                </div>
                <div id="description">
                    <label for="description" class="text-info">Description:</label><br>
                    <a href=""></a>
                </div>
                <div id="description">
                    <label for="description" class="text-info">Medicine:</label><br>
                    <a href=""></a>
                </div>
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

