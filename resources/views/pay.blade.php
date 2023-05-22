@extends('layout.app')
@section('title','Ödeme')
@section('pageTitle','ÖDEME')
@section('page','Ödeme')
@section('content')                               
 <div>
                                                   
                                                    <p class="text-muted mb-4">Lütfen bilgilerinizi giriniz</p>
                                                </div>

                       


                                                    <div class="card p-4 border shadow-none mb-0 mt-4">
                                                        <div class="row gy-3">
                                                            <div class="col-md-12">
                                                                <label for="cc-name" class="form-label">Kredi Kartı Ad</label>
                                                                <input type="text" class="form-control" id="cc-name" placeholder="İsim Giriniz">
                                                                
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="cc-number" class="form-label">Kredi Kartı Numarası</label>
                                                                <input type="text" class="form-control" id="cc-number" placeholder="xxxx xxxx xxxx xxxx">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="cc-expiration" class="form-label">Yıl</label>
                                                                <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <label for="cc-cvv" class="form-label">CVV</label>
                                                                <input type="text" class="form-control" id="cc-cvv" placeholder="xxx">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-muted mt-2 fst-italic">
                                                        <i data-feather="lock" class="text-muted icon-xs"></i> İşleminiz SSL şifrelemesi ile güvence altına alınmıştır
                                                    </div>
                                            

                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>Back to Shipping</button>
                                                    <button type="button" class="btn btn-primary btn-label right ms-auto nexttab" data-nexttab="pills-finish-tab"><i class="ri-shopping-basket-line label-icon align-middle fs-16 ms-2"></i>Siparişi</button>
                                                </div>
                                           





@endsection