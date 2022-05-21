<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("tittle")</title>
    <!--the css link for bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--the css link for fontawsome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!--the css link for boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- external css link-->
    <link rel="stylesheet" href="{{ asset("Assets/Css/main.css") }}">
</head>
<body class="">
      <!--this is the header part -->
      <header class="header shadow-sm pb-2" id="header">
             <nav class="nav container">
                 <a href="#" class="nav__logo"><div class="brand"><img src="{{ asset("Assets/image/brainstorm.png") }}" alt=""></div>HelpBro</a>
                 <div class="nav__menu">
                     <ul class="nav__list">
                         <li class="nav__item">
                             <a href="" class="nav_link">
                                 <i class="bx bx-home-alt-2"></i>
                                 <span>Home</span>
                             </a>
                         </li>
                         <li class="nav__item">
                            <a href="" class="nav_link">
                                <i class='bx bx-server'></i>
                                <span>Service</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="" class="nav_link">
                                <i class='bx bxs-phone'></i>
                                <span>Contact</span>
                            </a>
                        </li>
                     </ul>
                 </div>
                 <div class="group_button">
                  <i class="bx bx-sun change-theme" id="dark"></i>
                  <a href="{{ url('Guest') }}" class="button nav__button">
                        Guest
                  </a>
                  <a href="{{ url('Login') }}" class="button nav__button">
                        Login
                 </a>
                 </div>
                
             </nav>
      </header>
      {{-- the start advert --}}
      <section class="advert container">
             <div class="row">
                 <div class="col-lg-7 col-sm-12 col-md-6 left">
                       <h1 class="title">
                           Welcome To Our Website
                       </h1>
                       <p class="description">
                           This is website is help your by communicating with you simple
                           This is website is help your by communicating with you simple
                           This is website is help your by communicating with you simple
                       </p>
                       <div class="info text-center">
                            <h5 class="message" style="color: black;">The People You Can Get For Communication</h5>
                            <div class="container">
                                <div class="row r">
                                     <div class="col-lg-3 col-md-4 col-sm-12 pl-3 shadow-lg">
                                         <h4>Students</h4>
                                         <h3>+0</h3>
                                     </div>
                                     <div class="col-lg-3 col-md-4 col-sm-12 shadow-sm">
                                        <h4>Teachers</h4>
                                        <h3>+0</h3>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12 shadow-lg">
                                        <h4>Prophesers</h4>
                                        <h3>+0</h3>
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


      {{-- the end advert--}}
      <main>
        @yield('home')
      </main>
      <!--this is the footer part-->
      <footer class="footer section">
          
      </footer>
      {{-- animation icon in the page --}}
      <div class="p"><img src="{{ asset("Assets/image/half-rest.png") }}" alt=""></div>
      <div class="c"><img src="{{ asset("Assets/image/experimental-camera-arcade.png") }}" alt=""></div>
      <div class="a"><img src="{{ asset("Assets/image/external-audio-disability-flaticons-flat-flat-icons-3.png") }}" alt=""></div>
      <div class="v"><img src="{{ asset("Assets/image/external-audio-video-conference-kosonicon-flat-kosonicon.png") }}" alt=""></div>
      <!--the js link for the bootrap-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <!--the external js link-->
      <script src="{{ asset("Assets/Js/main.js")}}"></script>
      <script src="main.js"></script>
</body>
</html>