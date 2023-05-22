@extends('layout.app')
@section('title','Ana Sayfa')
@section('pageTitle','ÜRÜNLER')
@section('content')
    <div class="row">
            <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                            <h5 class="fs-16">Kategoriler</h5>
                                </div>

                                <div class="accordion accordion-flush filter-accordion">

                                    <div class="card-body border-bottom">
                                        <div>
                                            
                                            <ul class="list-unstyled mb-0 filter-list">
                                                @foreach($categories as $items)
                                                <li>
                                                    <a href="{{route('category',$items->slug)}}" class="d-flex py-1 align-items-center">
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-13 mb-0 listname">{{ $items->categoryName}}</h5>
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
                        <div class="col-xl-6 col-lg-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                               @for($i=0;$i<count($product_slider);$i++)
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="{{ $i==0 ? 'active' : '' }}"></li>
                               @endfor
                                
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                @foreach($product_slider as $index=>$product_detail)
                                <div class="carousel-item {{ $index==0 ? 'active' : ''}}">
                                    <img class="d-block img-fluid mx-auto" src="/assets/images/small/img-4.jpg" alt="First slide">
                                    <div class="carousel-caption">
                                        {{$product_detail->product->productName}}
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        </div>   
                        <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                     <h5 class="fs-16">Günün Fırsatı</h5>
                                </div>

                                <div class="accordion accordion-flush filter-accordion mt-5">
                                    <div class="card-body border-bottom">
                                    <img src="/assets/images/small/img-5.jpg" alt="" class="img-fluid" />
                                        <a href="{{ route('product',$product_day_opportunity->slug)}}"><div class="mt-2 text-center">{{$product_day_opportunity->productName}}</div></a>
                                        <a href="{{ route('product',$product_day_opportunity->slug) }}"><div class="mt-2 text-center"><b>Fiyat : </b>{{$product_day_opportunity->price}} ₺</div></a>
                                        <div class="text-center mt-2"><a href="javascript:void(0);" class="btn btn-primary">Sepete Ekle</a></div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                   
    </div>
                                             <div class="mb-5">
                                                    <div class="card p-4 border shadow-none mb-0 mt-4">
                                                        <div class="row gy-3">
                                                            <h5 class="fs-16">Öne Çıkan Ürünler</h5>
                                                        </div>
                                                      <div class="row">  
                                                      @foreach($product_featured as $item)
                                                            <div class="col-xl-3 col-lg-4">
                                                                <div class="card">

                                                                    <div class="accordion accordion-flush filter-accordion">
                                                                     <div class="card-body border-bottom">
                                                                        <img src="/assets/images/small/img-5.jpg" alt="" class="img-fluid" />
                                                                        <div class="mt-2 text-center">{{$item->productName}}</div>
                                                                        <div class="mt-2 text-center"><b>Fiyat : </b>{{$item->price}} ₺</div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                            <!-- end card -->
                                                 </div>
                                                         @endforeach
                                                         

                                                    </div>
                                                    
                                                </div>
                                                
                                                    
                                            
                                           


@endsection
