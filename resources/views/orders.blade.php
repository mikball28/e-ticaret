@extends('layout.app')
@section('title','Siparişler')
@section('pageTitle','SİPARİŞ')
@section('page','Siparişler')
@section('content')   

<div>
                                                   
                                                   <p class="text-muted mb-4">Henüz siparişiniz yok </p>
                                               </div>

                      


                                                   <div class="card p-4 border shadow-none mb-0 mt-4">
                                                       <div class="row gy-3">
                                                       <table class="table table-nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Sipariş Kodu</th>
                                                                    <th scope="col">Sipariş Tarihi</th>
                                                                    <th scope="col">KDV</th>
                                                                    <th scope="col">Kargo</th>
                                                                    <th scope="col">Toplam Tutar</th>
                                                                    <th scope="col">Durum</th>
                                                                    <th scope="col">İşlem</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row"><a href="#" class="fw-semibold">SP-0128S</a></th>
                                                                    <td>28.04.2023</td>
                                                                    <td>3.99 ₺</td>
                                                                    <td>0 ₺</td>
                                                                    <td>952 ₺</td>
                                                                    <td><span class="badge badge-soft-primary mb-1">Sipariş Alındı</span><p><span class="badge badge-soft-success">Sipariş Onaylandı</span></p></td>
                                                                    <td>
                                                                          <button type="submit" class="btn btn-sm btn-light">Detay</button></td>
                                                                </tr>
                                                                
                                                            </tbody>
                                                        </table>
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