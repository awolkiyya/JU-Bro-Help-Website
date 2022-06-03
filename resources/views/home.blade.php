@extends('layout.common')
@section('tittle',"Home Page")
@section('home')
 {{-- the start advert --}}
 <section class="advert container">
    <div class="row">
        <div class="col-lg-7 col-sm-12 col-md-6 left">
              <h1 class="title">
                  Welcome To Our Website<br>
                  This Is Free For All Students....
              </h1>
              <p class="description">
                  This is website is help your by communicating with you simple
                  This is website is help your by communicating with you simple
                  This is website is help your by communicating with you simple
              </p>
               <div class="info">
                   <h5 class="message">The Peoples You Can Get For Communications<br> In Jimma Universty........</h5>
                   <div class="container-fluid">
                       <div class="row r">
                            <div class="col-lg-3 col-md-4 col-sm-12 shadow-lg">
                                <h4>Students</h4>
                                <h3>+50</h3>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 shadow-sm">
                               <h4>Teachers</h4>
                               <h3>+10</h3> 
                           </div>
                           <div class="col-lg-3 col-md-4 col-sm-12 shadow-lg">
                               <h4>Prophesers</h4>
                               <h3>+10</h3>
                           </div>
                       </div>
                   </div>
              </div>
        </div>
        <div class="col-lg-5 col-sm-12 col-md-6 right">
                <div class="image mt-5">
                    <img src="{{ asset("Assets/image/external-advice-training-and-coaching-wanicon-flat-wanicon.png") }}" alt="The image is not found">
                </div>
        </div>
    </div>
</section>
{{-- pop up windows --}}
<div class="service1">
<h1>Service</h1> 
<div class="list">
<div class="l"></div>
<div class="l"></div>
<div class="l"></div>
</div>
</div>
<div class="wrapper fadeInDown">
<div id="formContent">
<!-- Tabs Titles -->
<h2 class="active"> Contact Us </h2>
<!-- Icon -->
{{-- <div class="fadeIn first">
<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
</div> --}}

<!-- Login Form -->
{{-- <form>
<input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
<input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
<input type="submit" class="fadeIn fourth" value="Log In">
</form>

<!-- Remind Passowrd -->
<div id="formFooter">
<a class="underlineHover" href="#">Forgot Password?</a>
</div> --}}

</div>
</div>
@endsection