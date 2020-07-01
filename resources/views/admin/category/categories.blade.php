@extends('admin.layout.layout')
@section('title', 'Categories List')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Categories List</h6>
            </div>
            <div class="card-body">
              @if(Session::has('flash_message'))
                <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!!Session::get('flash_message')!!}
                </div>
              @endif 
              <!-- List Category -->
              <table class="table card-text" id="dbtable">
                <thead>
                  <tr>
                    <th>Categories ID</th>
                    <th>Categories Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cates as $cate)
                  <tr>
                    <th scope="row">{{$cate->id}}</th>
                    <td>{{$cate->category_name}}</td>
                    <td>{{$cate->description}}</td>
                    <td>
                    <a href="{{url("admin/category/updateCategories/" . $cate->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><br>
              <nav aria-label="Page navigation">
                {{ $cates->links() }}
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection
 
