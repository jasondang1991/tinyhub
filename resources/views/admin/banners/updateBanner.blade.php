@extends('admin.layout.layout')
@section('title', 'Update Account')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h3 class="text-center">Update Account</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label class="form-control-label text-uppercase">User Name</label>
                                        <input type="text" name="name" value="{{$users->name}}" class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">Email</label>
                                        <input type="email" name="email" value="{{$users->email}}" class="form-control " readonly>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">Role</label>
                                        <select class="form-control" name="role">
                                            <option value="0">User</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Mod Customer</option>
                                            <option value="3">Mod Product</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">Password</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="col-6">
                                        <label class="form-control-label text-uppercase">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>



                        </div>
                        <div class="card-footer">
                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-4">
                                    <button type="reset" class="btn btn-dark">
                                        {{ __('Reset') }}
                                    </button>
                                    <button type="submit" class="btn login-btn" style="background-color: #f47635" onclick="return confirm('Do you want update ?');">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection