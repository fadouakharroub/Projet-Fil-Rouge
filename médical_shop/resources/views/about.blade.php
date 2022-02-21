
{{-- 
<h1>About Us</h1>
<div class="about">
<div class="text" style="font-size: 15px">
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
    Quo enim eos ratione voluptates alias totam veritatis voluptas<br> 
    repudiandae fuga suscipit odio sit harum temporibus maxime culpa, <br>
    velit quas debitis eaque Lorem ipsum dolor sit amet consectetur,<br>
    adipisicing elit. Magni, quam esse accusantium veritatis molestias <br>
    aut sequi voluptates? Asperiores voluptatum dicta placeat ratione<br>
    accusantium, nobis tempore, repellat, accusamus libero sapiente minus?<br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
    Quo enim eos ratione voluptates alias totam veritatis voluptas<br> 
    repudiandae fuga suscipit odio sit harum temporibus maxime culpa, <br>
    velit quas debitis eaque Lorem ipsum dolor sit amet consectetur,<br>
    adipisicing elit. Magni, quam esse accusantium veritatis molestias <br>
    aut sequi voluptates? Asperiores voluptatum dicta placeat ratione<br>
    accusantium, nobis tempore, repellat, accusamus libero sapiente minus?</p></div>
<div class="test">
    <img class="image" src="/image/img.jpg">
</div>
 </div> --}}



 <div class="offer">
    <div class="offer-container">
        <div class="row">
            <div class="OFFRE">
                <h2 class="titleText"><span>A</span>bout Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
                    Quo enim eos ratione voluptates alias totam veritatis voluptas<br> 
                    repudiandae fuga suscipit odio sit harum temporibus maxime culpa, <br>
                    velit quas debitis eaque Lorem ipsum dolor sit amet consectetur,<br>
                    adipisicing elit. Magni, quam esse accusantium veritatis molestias <br>
                    aut sequi voluptates? Asperiores voluptatum dicta placeat ratione<br>
                    accusantium, nobis tempore, repellat, accusamus libero sapiente minus?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
                    Quo enim eos ratione voluptates alias totam veritatis voluptas<br> 
                    repudiandae fuga suscipit odio sit harum temporibus maxime culpa, <br>
                    velit quas debitis eaque Lorem ipsum dolor sit amet consectetur,<br>
                    adipisicing elit. Magni, quam esse accusantium veritatis molestias <br>
                    aut sequi voluptates? Asperiores voluptatum dicta placeat ratione<br>
                    accusantium, nobis tempore, repellat, accusamus libero sapiente minus?</p>
            </div>

            <div class="OFFRE">
                <img src="/image/img.jpg">
            </div>
        </div>
        <div class="text-right">
            <a href="{{ route('home')}}">Back at home</a>
        </div>
    </div>
</div>





 <style>
     /* h1{
         margin-top: 10px
     }
 .about{
     padding: 5%;
     display: flex;
     justify-content:space-around;
    
 }
 .image{
     width: 100%;
     height: 100%;
 }
  */

  @media (max-width: 991px)
.row {
    flex-direction: column;
}

.row {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
}
.OFFRE {
    flex-basis: 50%;
    min-width: 300px;
}

.offer-container {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}


.offer
{background: #72ca9e;
    /* margin-top: 80px; */
    padding: 30px 0;
    margin: 10%;
}

 </style>