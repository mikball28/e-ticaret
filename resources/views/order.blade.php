@extends('layout.app')
@section('title','Siparişler')
@section('pageTitle','SİPARİŞ')
@section('page','Siparişler')
@section('content')   
<div class="col-xl-12">
                        <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Sipariş Özeti</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th style="width: 90px;" scope="col">Ürün</th>
                                                    <th scope="col"></th>
                                                    <th scope="col" class="text-end">Fiyat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-md bg-light rounded p-1">
                                                            <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">Sweatshirt for Men (Pink)</a></h5>
                                                        <p class="text-muted mb-0">$ 119.99 x <b>2 (Adet)</b></p>
                                                    </td>
                                                    <td class="text-end">$ 239.98</td>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td class="fw-semibold" colspan="2">Ara Toplam :</td>
                                                    <td class="fw-semibold text-end">$ 359.96</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Drum</span> : </td>
                                                    <td class="text-end"><span class="badge badge-soft-primary">Drum</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Toplam Tutar(KDV Dahil):</td>
                                                    <td class="text-end">$ 24.99</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Kargo: </td>
                                                    <td class="text-end">Ücretsiz</td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th colspan="2">Sipariş Toplam :</th>
                                                    <td class="text-end">
                                                        <span class="fw-semibold">
                                                            $353.15
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        @endsection