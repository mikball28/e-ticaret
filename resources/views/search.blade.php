@extends('layout.app')
@section('title','Ana Sayfa')
@section('pageTitle','ARANAN')
@section('content')


<div class="mb-5">
    <div class="card p-4 border shadow-none mb-0 mt-4">
         <div class="row gy-3">
             <h5 class="fs-16">Öne Çıkan Ürünler</h5>
         </div>
        <div class="row">  
            @foreach($products as $item)
            <div class="col-xl-3 col-lg-4">
                <div class="card">

                     <div class="accordion accordion-flush filter-accordion">
                         <div class="card-body border-bottom">
                                <a href="{{ route('product',$item->slug)}} "><img src="/assets/images/small/img-5.jpg" alt="" class="img-fluid" /></a>
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
             
          </div>
                                    

    </div>
                            
    <div class="pagination mb-4    ">
        {{$products->appends(['wanted'=>old('wanted')])->links()}}
    </div>
</div>

@endsection