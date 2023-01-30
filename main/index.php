<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAYAN</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--nav/home section starts-->
    <section>
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center" bis_skin_checked="1">
          <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-white" href="#home">HOME</a>
            <a class="mr-5 hover:text-white" href="#project">PROJECTS</a>
            <a class="mr-5 hover:text-white" href="#contact">CONTACTS</a>
            <a class="mr-5 hover:text-white" href="../logout.php">LOGOUT</a>
          </nav>
        </div>
      </header>
      <section class="home" id="home">

        <div class="content">
            <h3>Hello </h3>
            <p>Everyone</p>
        </div>
    
        <div class="video-container">
            <video src="images/main.mp4" id="video-slider" loop autoplay></video>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2"
 width="1280.000000pt" height="1079.000000pt" viewBox="0 0 1280.000000 1079.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,1079.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M7100 10730 c-36 -31 -528 -453 -1095 -936 -566 -483 -1351 -1152
-1742 -1486 l-713 -608 -1533 0 c-996 0 -1553 -4 -1588 -10 -193 -37 -379
-216 -419 -406 -7 -33 -10 -644 -8 -1899 3 -1773 4 -1852 22 -1899 46 -125
150 -243 265 -305 122 -65 23 -61 1698 -61 l1523 0 1253 -1067 c688 -587 1512
-1289 1829 -1560 318 -270 580 -488 583 -483 12 19 34 178 44 315 79 1045 89
5271 21 8665 -19 944 -49 1730 -68 1779 -6 16 -15 12 -72 -39z"/>
<path d="M10847 10100 c-98 -109 -177 -200 -177 -202 0 -2 55 -60 123 -129
270 -273 505 -616 726 -1059 652 -1311 890 -2979 640 -4485 -158 -954 -481
-1811 -992 -2631 -101 -163 -301 -452 -374 -540 l-33 -41 217 -163 217 -163
22 26 c42 49 242 332 336 477 229 351 419 700 583 1069 587 1325 789 2790 589
4281 -188 1410 -728 2714 -1455 3517 -61 68 -141 149 -178 182 l-68 60 -176
-199z"/>
<path d="M9730 8794 c-91 -102 -169 -191 -174 -197 -5 -9 18 -38 74 -92 720
-698 1123 -2299 965 -3835 -106 -1032 -455 -1890 -969 -2389 -42 -41 -75 -77
-74 -82 4 -11 349 -389 355 -389 14 0 118 99 205 195 679 749 1058 1944 1058
3335 0 1358 -368 2615 -984 3360 -85 103 -262 280 -279 279 -7 0 -86 -84 -177
-185z"/>
<path d="M8189 7733 l-196 -176 91 -107 c616 -722 838 -1675 627 -2691 -106
-507 -320 -1004 -627 -1456 l-83 -122 197 -139 c108 -76 208 -146 221 -155 29
-19 22 -26 138 148 374 562 624 1192 722 1815 39 251 46 343 46 635 0 295 -8
399 -46 633 -97 590 -347 1149 -716 1605 -83 103 -161 187 -171 187 -4 -1 -95
-80 -203 -177z"/>
</g>
<rect onclick="toggleAudio()" fill="currentColor" width="24" height="24" />
</svg>
        </div>
    
    </section>
</section>
<!--nav/home section ends-->
<!--project showcase starts-->
<section id="project">  
     
<div class="container my-24 px-6 mx-auto">

    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <h2 class="text-3xl font-bold mb-12 text-center">Projects we are proud of</h2>
  
      <div class="grid lg:grid-cols-3 gap-x-6">
        <div class="mb-12 lg:mb-0">
          <div class="shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover mb-6"
            style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="images/weatherapp.png" class="w-full" />
            <a href="second/weather.html">
              <div
                class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>
          <h5 class="text-lg font-bold mb-3">WEATHER APP</h5>
          <div class="mb-3 text-red-600 font-medium text-sm flex items-center justify-center lg:justify-start">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path fill="currentColor"
                d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z" />
              </svg>Hot
          </div>
          <p class=" text-black-900 font-bold ">
          SHOWS YOU THE REAL TIME WEATHER.
          <br>
          <br>
          </p>
        </div>
  
        <div class="mb-12 lg:mb-0">
          <div class="shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover mb-6"
            style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="images/tiktaktoelogo.png" class="w-full" />
            <a href="tiktaktoe/index.html">
              <div
                class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>
  
          <h5 class="text-lg font-bold mb-3">TIK-TAC-TOE</h5>
          <div class="mb-3 text-blue-600 font-medium text-sm flex items-center justify-center lg:justify-start">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor"
                d="M437.2 403.5L320 215V64h8c13.3 0 24-10.7 24-24V24c0-13.3-10.7-24-24-24H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h8v151L10.8 403.5C-18.5 450.6 15.3 512 70.9 512h306.2c55.7 0 89.4-61.5 60.1-108.5zM137.9 320l48.2-77.6c3.7-5.2 5.8-11.6 5.8-18.4V64h64v160c0 6.9 2.2 13.2 5.8 18.4l48.2 77.6h-172z" />
              </svg>Experiment
          </div>
          <p class=" text-black-900 font-bold ">
        ITS A GAME <br>
          JUST PLAY SAY HOW YOU FEEL<br><br>
          </p>
        </div>
  
        <div class="mb-0">
          <div class="shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover mb-6"
            style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
            <img src="images/movieengine.png" class="w-full" />
            <a href="moviesearchengine/index.html">
              <div
                class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                style="background-color: rgba(251, 251, 251, 0.2)"></div>
            </a>
          </div>
  
          <h5 class="text-lg font-bold mb-3">MOVIE SEARCH ENGINE</h5>
          <div class="mb-3 text-yellow-500 font-medium text-sm flex items-center justify-center lg:justify-start">
            <svg class="w-6 h-6 mr-2"
            fill="currentColor" 
            viewBox="0 -13.54 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 95.8" xml:space="preserve">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> 
                <path d="M12.14,0H32.8h29.43h28.8h19.71c3.34,0,6.38,1.37,8.58,3.56c2.2,2.2,3.56,5.24,3.56,8.58v7.13v57.25v7.09 c0,3.34-1.37,6.38-3.56,8.58c-2.2,2.2-5.24,3.56-8.58,3.56h-19.2c-0.16,0.03-0.33,0.04-0.51,0.04c-0.17,0-0.34-0.01-0.51-0.04 H62.74c-0.16,0.03-0.33,0.04-0.51,0.04c-0.17,0-0.34-0.01-0.51-0.04H33.31c-0.16,0.03-0.33,0.04-0.51,0.04 c-0.17,0-0.34-0.01-0.51-0.04H12.14c-3.34,0-6.38-1.37-8.58-3.56S0,86.95,0,83.61v-7.09V19.27v-7.13C0,8.8,1.37,5.76,3.56,3.56 C5.76,1.37,8.8,0,12.14,0L12.14,0z M55.19,31.24l20.53,14.32c0.32,0.2,0.61,0.48,0.84,0.81c0.92,1.33,0.58,3.14-0.74,4.06 L55.37,64.57c-0.5,0.41-1.15,0.66-1.85,0.66c-1.62,0-2.93-1.31-2.93-2.93V33.63h0.01c0-0.58,0.17-1.16,0.52-1.67 C52.05,30.64,53.87,30.32,55.19,31.24L55.19,31.24z M93.95,79.45V89.9h16.78c1.73,0,3.3-0.71,4.44-1.85 c1.14-1.14,1.85-2.71,1.85-4.44v-4.16H93.95L93.95,79.45z M88.1,89.9V79.45H65.16V89.9H88.1L88.1,89.9z M59.31,89.9V79.45H35.73 V89.9H59.31L59.31,89.9z M29.87,89.9V79.45H5.85v4.16c0,1.73,0.71,3.3,1.85,4.44c1.14,1.14,2.71,1.85,4.44,1.85H29.87L29.87,89.9z M5.85,73.6H32.8h29.43h28.8h26V22.2h-26h-28.8H32.8H5.85V73.6L5.85,73.6z M88.1,16.35V5.85H65.16v10.49H88.1L88.1,16.35z M93.95,5.85v10.49h23.07v-4.2c0-1.73-0.71-3.3-1.85-4.44c-1.14-1.14-2.71-1.85-4.44-1.85H93.95L93.95,5.85z M59.31,16.35V5.85 H35.73v10.49H59.31L59.31,16.35z M29.87,16.35V5.85H12.14c-1.73,0-3.3,0.71-4.44,1.85c-1.14,1.14-1.85,2.71-1.85,4.44v4.2H29.87 L29.87,16.35z">
              </path> </g> </g>
            </svg>MOVIE
          </div>
          <p class=" text-black-900 font-bold">
            GIVES YOU THE INFO ABOUT THE MOVIE YOU SEARCHED
          </p>
        </div>
          
        <div class="mb-0">
            <div class="shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover mb-6"
              style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/city/047.jpg" class="w-full" />
              <a href="">
                <div
                  class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
                  style="background-color: rgba(251, 251, 251, 0.2)"></div>
              </a>
            </div>
    
            <h5 class="text-lg font-bold mb-3">COMING SOON</h5>
            <div class="mb-3 text-yellow-500 font-medium text-sm flex items-center justify-center lg:justify-start">
              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z" />
                </svg>
            </div>
            <p class=" text-black-900 font-bold ">
             SOME THING BIG IS COMMING
            </p>
          </div>
      </div>
  
    </section>
    <!-- Section: Design Block -->
  
  </div>
</section>
<!--project showcase ends-->
<!--Contact section starts-->
<section id="contact">
    

<footer class="relative bg-blueGray-200 pt-8 pb-6">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full lg:w-6/12 px-4">
        <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
        <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
          Find us on any of these platforms, we respond 1-2 business days.
        </h5>
        <div class="mt-6 lg:mb-0 mb-6">
          <button   class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
           <a  href="https://www.twitter.com/Na_Yan1357"> <i class="fab fa-twitter"></i></button><button  class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button"></a>
            <a  href="https://www.facebook.com/naa135"> <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button"></a>
                <a  href="https://www.instagram.com/___na_yan___"> <i class="fab fa-instagram"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button"></a>
                    <a  href="https://www.github.com/NAyan135">  <i class="fab fa-github"></i></a>
          </button>
        </div>
      </div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">MIT License</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Terms &amp; Conditions</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Privacy Policy</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-blueGray-300">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Copyright © <span id="get-current-year">2023</span>
          <a href="https://www.facebook.com/naa135" class="text-blueGray-500 hover:text-blueGray-800">NAYAN</a>.
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
<!--contact section ends-->



<script type="text/javascript">
    function toggleAudio() {
        var audio = document.querySelector("video");
        if (audio.muted) {
            audio.muted = false;
        } else {
            audio.muted = true;
        }
    }
</script
</body>
</html>