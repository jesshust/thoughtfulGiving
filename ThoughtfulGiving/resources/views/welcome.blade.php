@extends('layout')

@section('homeAbout')



<div class="col l12 s12 headerBG">
  <div class="container">
    <h1 class="header white-text givingTxt center">Thoughtful Giving</h1>
      <div class="row center">
          <h4 class="header white-text col s12 light">Connecting people with the needs of non-profit organizations</h4>
      </div>
      <br>
       <div class="row center">
            <a id="download-button" class="btn-large waves-effect waves-light lighten-1 searchClick">Start Searching</a>
        </div>
  </div>
</div>  

<!--     <div class="col s12 m8 l10">
        <div class="row valign-wrapper">
            <img src="css/imgs/cat-food.jpg" alt="" class="circle responsive-img">
            <img src="css/imgs/kitty.jpg" alt="" class="circle responsive-img"> 
            <img src="css/imgs/heart-pink.jpg" alt="" class="circle responsive-img">
          <div class="col s10">
            <span class="black-text">
              Find an item you want to donate.
            </span>
          </div>
        </div>
    </div> -->

<!--     <div class="col s12 m8 offset-m2 l6 offset-l3">
      <div class="grey lighten-5">
        <div class="row valign-wrapper">
          <div class="col s2">
            <img src="css/imgs/kitty.jpg" alt="" class="circle responsive-img"> 
          </div>
          <div class="col s10">
            <span class="black-text">
              Search for a charity that needs that item.
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m8 offset-m2 l6 offset-l3">
      <div class="grey lighten-5">
        <div class="row valign-wrapper">
          <div class="col s2">
            <img src="css/imgs/heart-pink.jpg" alt="" class="circle responsive-img">
          </div>
          <div class="col s10">
            <span class="black-text">
              Donate your things, and feel great doing it! 
            </span>
          </div>
        </div>
      </div>
    </div> -->

    <div class="section white">
      <div class="row container">
          <div class="col s12 m4">
          <div class="icon-block center">
            <img src="css/imgs/cat-food.jpg" alt="" style="height:100px;" class="circle responsive-img">
            <h5 class="center">First</h5>
            <p class="center">Find an item you want to donate.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block center">
            <img src="css/imgs/kitty.jpg" alt="" style="height:100px;"  class="circle responsive-img"> 
            <h5 class="center">Then</h5>

            <p class="center">Search for a charity that needs that item.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block center">
            <img src="css/imgs/heart-pink.jpg" style="height:100px;"  alt="" class="circle responsive-img">
            <h5 class="center">Finally</h5>

            <p class="center">Donate your things, and feel great doing it!</p>
          </div>
        </div>
      </div>
    </div>


</div>


@endsection

@section('content')
 <div class="col l9 s12">

  <div class="carousel carousel-slider center s12 l12" data-indicators="true">
    <div class="carousel-fixed-item center">
      <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
    </div>
    <div class="carousel-item music white-text">
      <h5 style="padding-top: 10px;">Featured Charity</h5>
      <h1>Music for Many</h1>
      <p class="white-text" style="letter-spacing: .75px;">We believe all students deserve and need music in their life.</p>
      <a class="btn waves-effect tgPinkBG white-text darken-text-2" href="/musicForMany" style="bottom: -300px;">Learn More</a>
    </div>
    <div class="carousel-item dog white-text" href="#two!">
      <h5 style="padding-top: 10px;">Featured Charity</h5>
      <h1>Fido's Rescue</h1>
      <p class="white-text" style="letter-spacing: .75px;">Our goal is to provide new happy homes to stray, abandoned, and surrendered dogs.</p>
      <a class="btn waves-effect tgPinkBG white-text darken-text-2" href= "/fidosRescue" style="bottom: -300px;">Learn More</a>
    </div>
    <div class="carousel-item orphan white-text" href="#three!">
      <h5 style="padding-top: 10px;">Featured Charity</h5>
      <h1>Project Hope</h1>
      <p class="white-text" style="letter-spacing: .75px;">We respond to disaster, prevent disease, promote wellness and save lives around the globe.</p>
      <a class="btn waves-effect tgPinkBG white-text darken-text-2" href="/projectHope" style="bottom: -300px;">Learn More</a>
    </div>
  </div>

@endsection
