@extends('admin.layout.layout')
@section('title', 'Product Details')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h6 class="text-uppercase mb-0">Product Details </h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <!-- Image Feature And Gallery -->
                                    <div class="col-md-6">
                                        <div id="CarouselProduct" class="carousel slide" data-ride="carousel" style="max-width: 100%; max-height: auto;">
                                            <div class="carousel-inner">
                                                <div class="carousel-item  active"> <img class="rounded" src="{{asset('img/feature/'.$product->feature_image)}}" height="auto" width="90%"> </div>
                                                @foreach($galleryFea as $galleryFea)
                                                <div class="carousel-item"> <img class="rounded" src="{{asset('img/gallery/'.$galleryFea->product_gallery)}}" height="auto" width="90%"> </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product-slider">
                                            <div id="ThumbProduct" class="carousel slide" data-interval="false">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        @foreach($galleryThum as $galleryThum)
                                                        <div data-target="#CarouselProduct" data-slide-to="{{++$no}}" class="SubThumbProduct rounded">
                                                            <img src="{{asset('img/gallery/'.$galleryThum->product_gallery)}}" class="rounded" width="50px" height="50px">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Info   -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Product ID</label>
                                                    <input type="text" class="form-control" placeholder="{{$pro->id}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Product Title</label>
                                                    <input type="text" class="form-control" placeholder="{{$pro->product_title}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Price</label>
                                                    <input type="text" class="form-control" placeholder="{{$pro->price}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sold Out, Status, Category, Brand -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Sold Out</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->sold_out}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Status</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->status}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Category</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->category_name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Brand</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->brand_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Warranty Period, Create At -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Warranty Period</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->warranty_period}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Create At</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->created_at}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Short Description -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Short Description</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->short_descriptions}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Long Description -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Long Description</label>
                                            <textarea name="" id="" rows="5" class="form-control" placeholder="{{$pro->short_descriptions}}" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('admin/product/listProduct')}}"><button type="button" class="btn btn-primary">Back</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Slider -->
    <script>
        $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>
    @endsection