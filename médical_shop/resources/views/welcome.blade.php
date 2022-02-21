<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Médical Shop</title>
</head>
<body>
    <nav>
        <div class="navbar">
          <div class="logo">YouPharma</div>
          <ul class="navList">
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('about')}}">About Us</a></li>
           <li >
              <a href="{{ route('login') }}">Login</a>
             </li>
             <li >
              <a  href="{{ route('register') }}">Sign Up</a>
          </li>
          <li>
          <a href="{{ route('panier') }}"><i class="bi bi-cart"></i>     
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg></a>
       </li>
          </ul>
        </div>
    </nav>
        
<div class="site-blocks-cover">
    <div class="container">
        <div class="row">
            <div class="site-block-cover-content">
              <h2 class="sub-title">Mieux Vaut Prévenir Que Guérir</h2>
              <h1>Welcome To YouPharma</h1>
            </div>
        </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="title-section text-center col-12">
          <h2 class="text-uppercase" style="margin-top:5%; margin-bottom:5%">Récents Products</h2>
        </div>
      </div>

      <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
          <div class="content_shop">
            <div class="content-overlay"></div>
            <a href=""> <img class="content-image" src="/image/{{$product->image}}" alt="Image" style="width:100%; height:100px% " >
            <div class="content-details fadeIn-bottom">
              <a class="m-2" href="{{ route('panier.card',['id' => $product->id,'qty' => 1]) }}">
                <i class="bi bi-cart"></i>  
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>  
             </a></a>
             
            </div>
          </div>
          <h3 class="text-dark"><a href="">{{$product->name}}</a></h3>
          <p class="price">{{$product->price}}DH</p>
        </div>
        @endforeach
      </div>

        
      <div class="row mt-5">
        <div class="col-12 text-center">
          <a href="{{ route('login') }}" class="btn btn-success"style="margin-top:-100px">View All Products</a>
        </div>
      </div>
    </div>
  </div>
   
  <div class="category">
    <div class="title-section text-center col-12">
      <h2 class="text-uppercase" style=" margin-top:5%;margin-bottom:8%">Popular Categories</h2>
    </div>
    <div class="containers">
      @foreach ($categories as $cat)
      <div class="parent">
        <a href=""><img src="{{$cat->image}}" alt="Image" style="width:100%; height:100px% " ><h2>{{$cat->name}}</h2></a>
      </div>
      @endforeach
    </div>
  <div class="containers" style="margin-top: 5%; margin-bottom:5%" >
        <div class="desc" >
          <div class="ss">
            <h2>Pharma Products</h2>
            <p>Lorem, ipsum dolor sit amet consectetur<br> adipisicing elit. Molestiae ex <br>ad minus rem odio voluptatem.
            </p>
          </div>
        </div>
      
        <div class="desc" style="background-image: url('images/bg_2.jpg');">
          <div class="dd">
            <h2>Rated by Experts</h2>
            <p>Lorem, ipsum dolor sit amet consectetur<br> adipisicing elit. Molestiae ex<br> ad minus rem odio voluptatem.
            </p>
          </div>
        </div>
  </div>
  

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

          <div class="block-7">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
              sed dolorum excepturi iure eaque, aut unde.</p>
          </div>

        </div>
        <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
          <h3 class="footer-heading mb-4">à Propos</h3>
          <ul class="list-unstyled">
            <li><a href="#">Médicaments</a></li>
            <li><a href="#">Parapharmacie</a></li>
            <li><a href="#">Vétérinaire</a></li>
            <li><a href="#">Matériel Médical</a></li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li class="address">203 Fake St.Youssoufia, MAROC</li>
              <li class="phone"><a href="tel://212 698120345">+212 698120345</a></li>
              <li class="email">YouPharma@gmail.com</li>
            </ul>
          </div>
</div>

</footer>

  <script>
    const burger = document.querySelector('.icon');
    const dropdown = document.querySelector('.dropdown');
    let collapsed = true;

    burger.addEventListener("click", () => {
    if(collapsed){
        dropdown.style.maxHeight = dropdown.scrollHeight + "px";
        collapsed = false;
    }
    else{
        dropdown.style.maxHeight = "";
        collapsed = true;
    }
    if(burger.innerHTML == 'menu') burger.innerHTML = 'close';
    else burger.innerHTML = 'menu';
    })

    window.addEventListener("resize", () => {
    if(!collapsed){
        dropdown.style.maxHeight = "";
        collapsed = true;
    }
    burger.innerHTML = 'menu';
    })
</script>
</body>
</html>