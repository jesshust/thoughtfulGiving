@extends('layout')

@section('content')
 <div class="col l9 s12 white z-depth-2" style="padding-top:50px">
<br>
<!-- <img height="262" src="css/imgs/music-hero.jpg" alt="" class="z-depth-2 responsive-img"> -->

<!-- Charity page content  -->

<div class= "row valign-wrapper">
<!--     <div class="col s12 m6 l2">
       
    </div> -->
    <div class="col s12 m12 l9 valign">
        <div>
            <h1> Hello {{ Auth::user()->company }}!</h1>
        </div>
        <p class="left-align s12 m12" style="font-size:17px;">Add some more items to your wish list</p>
    </div>
</div>

<div class="row">
    <div class="col s12 l3">
    </div>
  
        <form>
            <div class="input-field col s6 l6 valign-wrapper">
              <i class="material-icons prefix tgPink">redeem</i>
              <input id="icon_prefix" type="text" class="validate tgPink">
              <label for="icon_prefix blue">What are you in need of?</label>
              <a style="margin-left:20px" class="waves-effect waves-light btn">Add</a>
            </div>
        </form>
</div>

<div class="row" style="margin-bottom:100px">
    <div class="col s12 l3"></div>

    <div class="col s12 m4 l4 valign">
        <table class="striped">
            <thead>
              <tr>
                  <th data-field="id" style="font-size:30px; color:#479ac4;">Your Wish List</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Keyboards</td>
              </tr>
              <tr>
                <td>Headphones</td>
              </tr>
              <tr>
                <td>Drum Set</td>
              </tr>
            </tbody>
        </table>
    </div>
</div>



</div>
@endsection
