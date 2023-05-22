@extends('layout.app')
@section('title','Kategori')
@section('pageTitle','KATEGORİ')
@section('page','Kategori')
@section('content')
            <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-16">{{$categories->categoryName}}</h5>
                                        </div>
                                        
                                    </div>

                                    <div class="filter-choices-input">
                                        <input class="form-control" data-choices data-choices-removeItem type="text" id="filter-choices-input" value="T-Shirts" />
                                    </div>
                                </div>

                                <div class="accordion accordion-flush filter-accordion">

                                    <div class="card-body border-bottom">
                                        <div>
                                            <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Alt Kategoriler</p>
                                            <ul class="list-unstyled mb-0 filter-list">
                                                @foreach($bottom_categories as $items)
                                                <li>
                                                    <a href="{{route('category',$categories->slug)}}" class="d-flex py-1 align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-13 mb-0 listname">{{$items->categoryName}}</h5>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card-body border-bottom">
                                        <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Fiyat Aralığı</p>

                                        <div id="product-price-range" data-slider-color="primary"></div>
                                        <div class="formCost d-flex gap-2 align-items-center mt-3">
                                            <input class="form-control form-control-sm" type="text" id="minCost" value="0" /> <span class="fw-semibold text-muted">-</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000" />
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <div class="col-xl-9 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="fs-16">Sırala</h5>
                                        </div>
                                        @if(count($products)>0)
                                        <a href="?order=bestseller "  class="btn btn-outline-primary waves-effect waves-light shadow-none me-2">Çok Satanlar</button>
                                        <a href="?order=new"  class="btn btn-outline-success waves-effect waves-light shadow-none">Yeni Ürünler</a>
                                        @endif
                                    </div> 
                                    @if(count($products)==0)
                                        
                                        <div class="alert alert-primary">Bu kategorye ait ürün bulunmamaktadır</div>
                                        @endif 
                                    <div class="row">
                                       
                                        @foreach($products as $item)
                                        <div class="col-sm-6 col-xl-3">
                                            <!-- Simple card -->
                                            <div class="card text-center">
                                                <a href="{{route('product',$item->slug)}}"><img class="card-img-top img-fluid" src="/assets/images/small/img-1.jpg" alt="Card image cap"></a>
                                                <div class="card-body">
                                                    <a href="{{route('product',$item->slug)}}"><h4 class="card-title mb-2">{{$item->productName}}</h4></a>
                                                    <p class="card-text">{{$item->price}} ₺</p>
                                                    <div class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary">Ürün Ekle</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                    {{$products->links()}}

                                    
                                </div>
                                


                                
                            </div>
                            <!-- end card -->
                        </div>
</div>
    

@endsection
