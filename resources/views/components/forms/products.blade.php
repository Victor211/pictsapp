
<div class="col-lg-3">
    <div class="card e-co-product">
        <a href="">  
            <img src="{{$image}}" alt="" class="img-fluid">
        </a>
        {{ $slot }}                                    

        <div class="card-body product-info">
            <a href="" class="product-title">{{ $title }}</a>
            
            <div class="d-flex justify-content-between my-2">
                <p class="product-price"> ₲ {{$precio}} 
                    <span class="ml-2">
                        <del> ₲ {{$rebaja}} </del>
                    </span>
                </p>
            </div>
            <button class="btn btn-gradient-warning btn-round px-3 btn-sm waves-effect waves-light" onclick="guardarDeuda('{{$title}}','{{$rebaja}}')"><i class="mdi mdi-cart mr-1"></i> Comprar</button>
        </div>
    </div>
</div>