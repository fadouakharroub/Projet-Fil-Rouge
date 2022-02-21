<x-app-layout>
    <div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
       <a href=""> <img src="/image/{{$product->image}}" alt="Image" style="width:100%; height:100px% " >
        <a class="m-2" href="{{ route('panier.card',['id' => $product->id,'qty' => 1]) }}">
          <i class="bi bi-cart"></i>     
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
       </a></a>
            <h3 class="text-dark"><a href="">{{$product->name}}</a></h3>
          <p class="price">{{$product->price}}</p>
          
        </div>
        @endforeach
    </div>
      </div>
</x-app-layout>
