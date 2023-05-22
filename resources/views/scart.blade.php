@extends('layout.app')
@section('title','Sepet')
@section('pageTitle','SEPET')
@section('page','Sepet')
@section('content')
<div class="row">
<div class="col-xl-8">
                            
                            <div class="card product">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-sm-auto">
                                            <div class="avatar-lg bg-light rounded p-1">
                                                <img src="/assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h5 class="fs-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Sweatshirt for Men (Pink)</a></h5>
                                            <ul class="list-inline text-muted">
                                                <li class="list-inline-item">Color : <span class="fw-medium">Pink</span></li>
                                                <li class="list-inline-item">Size : <span class="fw-medium">M</span></li>
                                            </ul>

                                            <div class="input-step light">
                                                <button type="button" class="minus shadow">–</button>
                                                <input type="number" class="product-quantity" value="5" min="0" max="100">
                                                <button type="button" class="plus shadow">+</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="text-lg-end">
                                                <p class="text-muted mb-1">Item Price:</p>
                                                <h5 class="fs-14">$<span id="ticket_price" class="product-price">119.99</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-footer">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <div class="d-flex flex-wrap my-n1">
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex align-items-center gap-2 text-muted">
                                                <div>Total :</div>
                                                <h5 class="fs-14 mb-0">$<span class="product-line-price">239.98</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card footer -->
                            </div>
                            <!-- end card -->

                            <div class="card product">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-sm-auto">
                                            <div class="avatar-lg bg-light rounded p-1">
                                                </img src="/assets/images/products/img-7.png" alt="" class="img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h5 class="fs-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Noise NoiseFit Endure Smart Watch</a></h5>

                                            <ul class="list-inline text-muted">
                                                <li class="list-inline-item">Color : <span class="fw-medium">Black</span></li>
                                                <li class="list-inline-item">Size : <span class="fw-medium">32.5mm</span></li>
                                            </ul>

                                            <div class="input-step light">
                                                <button type="button" class="minus shadow">–</button>
                                                <input type="number" class="product-quantity" value="1" min="0" max="100">
                                                <button type="button" class="plus shadow">+</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="text-lg-end">
                                                <p class="text-muted mb-1">Item Price:</p>
                                                <h5 class="fs-14">$<span class="product-price">94.99</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-footer">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <div class="d-flex flex-wrap my-n1">
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex align-items-center gap-2 text-muted">
                                                <div>Total :</div>
                                                <h5 class="fs-14 mb-0">$<span class="product-line-price">94.99</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card footer -->
                            </div>
                            <!-- end card -->

                            <div class="card product">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-sm-auto">
                                            <div class="avatar-lg bg-light rounded p-1">
                                                <img src="/assets/images/products/img-3.png" alt="" class="img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h5 class="fs-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">350 ml Glass Grocery Container</a></h5>

                                            <ul class="list-inline text-muted">
                                                <li class="list-inline-item">Color : <span class="fw-medium">White</span></li>
                                                <li class="list-inline-item">Size : <span class="fw-medium">350 ml</span></li>
                                            </ul>

                                            <div class="input-step light">
                                                        <button type="button" class="minus shadow">–</button>
                                                <input type="number" class="product-quantity" value="1" min="0" max="100">
                                                <button type="button" class="plus shadow">+</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="text-lg-end">
                                                <p class="text-muted mb-1">Item Price:</p>
                                                <h5 class="fs-14">$<span class="product-price">24.99</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <!-- card body -->
                                <div class="card-footer">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <div class="d-flex flex-wrap my-n1">
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex align-items-center gap-2 text-muted">
                                                <div>Total :</div>
                                                <h5 class="fs-14 mb-0">$<span class="product-line-price">24.99</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card footer -->
                            </div>
                            <!-- end card -->


                            <div class="text-end mb-4">
                                <a href="apps-ecommerce-checkout.html" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i> Checkout</a>
                            </div>
                        </div>
                        <div class="col-xl-4">
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
                                                    <th scope="col">Ürün Bilgi</th>
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
                                                        <p class="text-muted mb-0">$ 119.99 x 2</p>
                                                    </td>
                                                    <td class="text-end">$ 239.98</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-md bg-light rounded p-1">
                                                            <img src="assets/images/products/img-7.png" alt="" class="img-fluid d-block">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">Noise Evolve Smartwatch</a></h5>
                                                        <p class="text-muted mb-0">$ 94.99 x 1</p>
                                                    </td>
                                                    <td class="text-end">$ 94.99</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-md bg-light rounded p-1">
                                                            <img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">350 ml Glass Grocery Container</a></h5>
                                                        <p class="text-muted mb-0">$ 24.99 x 1</p>
                                                    </td>
                                                    <td class="text-end">$ 24.99</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold" colspan="2">Sub Total :</td>
                                                    <td class="fw-semibold text-end">$ 359.96</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Discount <span class="text-muted">(VELZON15)</span> : </td>
                                                    <td class="text-end">- $ 50.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Shipping Charge :</td>
                                                    <td class="text-end">$ 24.99</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Estimated Tax (12%): </td>
                                                    <td class="text-end">$ 18.20</td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th colspan="2">Toplam :</th>
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

</div>
                        
</div>



@endsection