@extends('layout.app')
@section('title','Ürünler')
@section('pageTitle','ÜRÜNLER')
@section('page','Ürünler')
@section('content')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row gx-lg-5">
                                        <div class="col-xl-4 col-md-8 mx-auto">
                                            <div class="product-img-slider sticky-side-div">
                                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="/assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                        </div>
                                                        
                                                       
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-xl-12">
                                            <!-- Simple card -->
                                              <div class="card text-center">
                                                <div class="p-2 border border-dashed rounded">
                                                            
                                                        </div>
                                                      <div class="card-body">
                                                      <h5 class=" mb-3">Fiyat : <b>{{$product->price}} ₺</b></h5>

                                                    <div class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-primary">Sepete Ekle</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                
                                                <!-- end swiper thumbnail slide -->
                                                
                                                <!-- end swiper nav slide -->
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xl-8">
                                            <div class="mt-xl-0 mt-5">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h4>{{$product->productName}}</h4>
                                                        
                                                    </div>
                                                </div>

                                                <div class="product-content mt-5">
                                                    <h5 class="fs-14 mb-3">Ürün Açıklaması :</h5>
                                                    <nav>
                                                        <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Özellikler</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">Detaylar</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                    <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                                            <div class="table-responsive">
                                                                <table class="table mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row" style="width: 200px;">Category</th>
                                                                            <td>T-Shirt</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Brand</th>
                                                                            <td>Tommy Hilfiger</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Color</th>
                                                                            <td>Blue</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Material</th>
                                                                            <td>Cotton</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Weight</th>
                                                                            <td>140 Gram</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                                            <div>
                                                                <h5 class="font-size-16 mb-3">{{$product->productName}}Sweatshirt for Men (Pink)</h5>
                                                                <p>{{$product->explanation}}</p>
                                                                <div>
                                             
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-content -->

                                                <div class="mt-5">
                                                    
                                                        <div class="col-lg-12">
                                                            <div class="ps-lg-4">
                                                                <div class="d-flex flex-wrap align-items-start gap-3">
                                                                    <h5 class="fs-14">Yorumlar: </h5>
                                                                </div>

                                                                <div class="me-lg-n3 pe-lg-4" data-simplebar style="max-height: 225px;">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="py-2">
                                                                            <div class="border border-dashed rounded p-3">
                                                                                <div class="d-flex align-items-start mb-3">
                                                                                    <div class="hstack gap-3">
                                                                                        <div class="badge rounded-pill bg-success mb-0">
                                                                                            <i class="mdi mdi-star"></i> 4.2
                                                                                        </div>
                                                                                        <div class="vr"></div>
                                                                                        <div class="flex-grow-1">
                                                                                            <p class="text-muted mb-0"> Superb sweatshirt. I loved it. It is for winter.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="d-flex flex-grow-1 gap-2 mb-3">
                                                                                    <a href="#" class="d-block">
                                                                                        </img src="assets/images/small/img-12.jpg" alt="" class="avatar-sm shadow rounded object-cover">
                                                                                    </a>
                                                                                    <a href="#" class="d-block">
</img src="assets/images/small/img-11.jpg" alt="" class="avatar-sm shadow rounded object-cover">
                                                                                    </a>
                                                                                    <a href="#" class="d-block">
</img src="assets/images/small/img-10.jpg" alt="" class="avatar-sm shadow rounded object-cover">
                                                                                    </a>
                                                                                </div>

                                                                                <div class="d-flex align-items-end">
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="fs-14 mb-0">Henry</h5>
                                                                                    </div>

                                                                                    <div class="flex-shrink-0">
                                                                                        <p class="text-muted fs-13 mb-0">12 Jul, 21</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                       

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end Ratings & Reviews -->
                                                
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->    
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    


@endsection
