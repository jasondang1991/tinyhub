@extends('admin.layout.layout')
@section('title', 'product list')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Comment List</h6>
              </div>
              <div class="card-body">
                <table class="table card-text" id="dbtable">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th>Product Name</th>
                      <th>Comment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($comments as $comment)
                    <tr>
                      <th>{{$comment->name}}</th>
                      <th>{{$comment->category_name}}</th>
                      <th>{{$comment->brand_name}}</th>
                      <td>{{$comment->product_title}}</td>
                      <td>{{$comment->cmt_content}}</td>
                      <td><a href="#" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                        <a href="#" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                        <a href="#" class="badge badge-danger p-2"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection
