
@extends('admin.layouts.app')

@section('content')

<section class="content" style="margin-top:79px !important;">
   <div class="container-fluid">
   <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Change Password</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          @include('admin.layouts.error')

            <form action="{{ route('admin.save.password') }}" id="changePassword" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                                <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="oldpassword"
                                        required autocomplete="current-password" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input  type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="newPassword"
                                        required autocomplete="current-password" placeholder="New Password" id="newPassword">

                            </div>
                            <div class="form-group">
                                <input  type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="confirmPassword"
                                        required autocomplete="current-password" placeholder="Re-Type Password" id="confirmPassword">
                                        <span id='notMatched' style='color:red'></span>
                                        <span id='Matched' style='color:green'></span>

                            </div>
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>
              <div class="col-md-6">
                  <button class="btn btn-primary" type="submit">Submit</button>
              </div>
              <!-- /.col -->
            </div>
            
            </form>

            <!-- /.row -->

            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
   </div>
</section>

@endsection

@section('custom_js')
     <script>
          $("#changePassword").submit(function(event) {

                var newPassword     = $('#newPassword').val();
                var confirmPassword = $('#confirmPassword').val();

                if(newPassword == confirmPassword && newPassword !== '' && confirmPassword !== ''){
                    return true;
                }else{
                    document.getElementById('notMatched').innerHTML="Confirm Password Not  Matched";
                    return false ;
                }

          });
     
     </script>
@endsection