
@extends('admin.layouts.app')

@section('content')

<section class="content" style="margin-top:79px !important;">
   <div class="container-fluid">
   <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Manage Profile</h3>
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

            <form action="{{ route('admin.update.profile') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" value="{{ $userData->name }}" required class="form-control" name="name">
                </div>
                <input type="hidden" name="id" value="{{ $userData->id }}" name="id">
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                   <input type="email" readonly value="{{ $userData->email }}" required name="email" class="form-control">
                </div>
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