@extends('layouts.app')

@section('content')
<div class="container py-2">
    <div class="row justify-content-center py-5">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{--userName --}}
                              <div class="form-group row">
                                <div class="col-6">
                                    <label class="form-control-label text-uppercase">User Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-control-label text-uppercase">Full Name</label>
                                    <input type="text" name="fullname" class="form-control">
                                </div>
                              </div>
                              <div class="form-group row">
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">BirthDay</label>
                                        <input type="date" name="dob" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">Gender</label>
                                        <div class="row">
                                            <div class="col-12 mt-1 ml-0">
                                                <input type="radio"   name="gender" id="male" value="male" checked><label for="male" class="form-check-label">Male
                                                <input type="radio"   name="gender" id="female" value="female"><label for="female" class="form-check-label">Female
                                                <input type="radio"   name="gender" id="other" value="other"><label for="other" class="form-check-label">Other
                                            </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-8">
                                    <label class="form-control-label text-uppercase">Email</label>
                                    <input type="email" name="email" class="form-control">         
                                  </div>
                                  <div class="col-4">
                                    <label class="form-control-label text-uppercase">Phone Number</label>
                                    <input type="text" name="phone" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-6">
                                    <label class="form-control-label text-uppercase">Password</label>
                                    <input type="password" name="password" class="form-control">
                                  </div>
                                  <div class="col-6">
                                    <label class="form-control-label text-uppercase">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                  </div>                            
                              </div>
                              <div class="form-group">
                                <label class="form-control-label text-uppercase">Address</label>
                                <input type="text" name="address" class="form-control">
                              </div>
                              <div class="form-group">
                                <label class="form-control-label text-uppercase">Avatar</label>
                              </div>
                            <div class="custom-file ">
                                <input type="file" class="custom-file-input" name="feature" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <button type="reset" class="btn btn-dark">
                                        {{ __('Reset') }}
                                    </button>
                                    <button type="submit" class="btn login-btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
