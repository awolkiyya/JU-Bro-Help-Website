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
      <header class="header container-fluid shadow-sm pb-2" id="header">
             <nav class="nav container  pb-2">
                 <a href="#" class="nav__logo">
                     <div class="brand"><img src="{{ asset("Assets/image/brainstorm.png") }}" alt=""></div>
                 <h5> HelpBro</h5> 
                    </a>
                 <div class="nav__menu">
                     <ul class="nav__list">
                         <li class="nav__item">
                             <a href="" class="nav_link active">
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
                  <a href="javascript:;" class="trigger button nav__button page-wrapper">
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
                           Welcome To Our Website<br>
                           This Is Free For All Students....
                       </h1>
                       {{-- <p class="description">
                           This is website is help your by communicating with you simple
                           This is website is help your by communicating with you simple
                           This is website is help your by communicating with you simple
                       </p>--}}
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
      {{-- <section class="f">
             <h1>Fetures</h1>
             <div class="gr">
                <div class="f1"></div>
                <div class="f1"></div>
                <div class="f1"></div>
                <div class="f1"></div>
             </div>
      </section> --}}
      {{-- <section class="service">
              <h1>SERVICES</h1>
              <div class="gr">
                <div class="f1"></div>
                <div class="f1"></div>
                <div class="f1"></div>
                <div class="f1"></div>
              </div>
      </section> --}}
      {{-- pop up windows --}}
  <div class="window_cont">
    
  </div>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form>
        <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
  
    </div>
  </div>
          <!-- Site footer -->
    <footer class="site-footer shadow-lg">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">
                  This website will be created to help jimma university students.
                  To create the communication b/w student easly.
              </p>
            </div>
  
            <div class="col-xs-6 col-md-3">
         
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
           <a href="#">Help Bro</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a></li>
                <li><a class="twitter" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a></li>
                <li><a class="dribbble" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"/></svg></a></li>
                <li><a class="linkedin" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>   
              </ul>
            </div>
          </div>
        </div>
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