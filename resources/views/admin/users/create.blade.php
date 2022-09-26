
@extends('admin.layouts.app')

@section('content')

<section class="content" style="margin-top:79px !important;">
   <div class="container-fluid">
   <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Create User</h3>
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

            <form action="{{ route('admin.save.user') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" required class="form-control" name="name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" required class="form-control" name="password">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                   <input type="email" required name="email" class="form-control">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Select User Type</label>
                  <select class="form-control" required name="user_type" style="width: 100%;">
                  {{  user_type() }}

                  </select>
                </div>
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