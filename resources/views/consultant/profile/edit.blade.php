@extends('layouts.consultant')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Change Profile</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="align-items-stretch">
        <div class="box">
            <div class="box-title font-weight-bold">
                Personal information
            </div>
            <form method="post" action="{{ route('consultant.profile.update', $user->id) }}">
                @method('PUT')
                @csrf
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Full name</legend>
                        <div class="bv-no-focus-ring">
                            <input hidden type="text" name="id" class="form-control" value="{{ $user->id }}">
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Phone number</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Role</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="role" class="form-control" value="{{ $user->role }}" readonly>
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="box-title box-title font-weight-bold">
                    Security information
                </div>
                <div class="col-md-6">
                    <div role="alert" class="alert alert-warning">
                        <i class="fas fa-shield-alt"></i>
                        <span>This is your login information. Be careful when changing.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Email</legend>
                        <div class="bv-no-focus-ring">
                            <input type="text" name="email" class="form-control" value="{{ $user->email }}" >
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset class="form-group">
                        <legend class="bv-no-focus-ring col-form-label pt-0">Password</legend>
                        <div class="bv-no-focus-ring">
                            <input type="password" name="password" class="form-control" value="{{ $user->password }}" >
                        </div>
                        <div class="clear-fix"></div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save">
                </div>
            </form>
        </div>
    </div>        
</section>
<!-- End Main content -->
@endsection
