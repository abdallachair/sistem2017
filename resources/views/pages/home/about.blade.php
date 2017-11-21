@extends('layouts.master')

@section('title')
    About | Sistem Fasilkom UI 2017
@endsection 

@section('css')
     <link rel="stylesheet" href="assets/css/main.css">
@endsection 

@section('content')
    <div class="perspective effect-rotate-left">
  <div class="container">
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        <header class="header">
          <a class="header--logo" href="{{ url('/')}}">
            <img src="assets/img/sistem.png" width="60px" alt="SISTEM FASILKOM UI 2017">
            <p>SISTEM FASILKOM UI</p>
          </a>
         
          <div class="header--nav-toggle">
            <span></span>
          </div>
        </header>
        <nav class="l-side-nav">
          <ul class="side-nav">
            <li class="is-active"><span>About</span></li>
            <li><span>Who are we?</span></li>
            <li><span>Vision</span></li>
            <li><span>Mission</span></li>
            <li><span>Team</span></li>

            
          </ul>
        </nav>
        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
                <h1>Unleash<br>Information<br>System<br>Potential</h1>
               
                <img src="assets/img/bulb.png" alt="Welcome">
              </div>
             
            </div>
          </li>
         
          <li class="l-section section">
            <div class="intro">
              <div class="intro--banner">
                <img src="assets/img/sistem.png" alt="Welcome" id="about">
                <h1 style="color: black;">Who Are We?</h1>
                <p>SISTEM merupakan salah satu organisasi kemahasiswaan 
                  <br>Fakultas Ilmu Komputer Universitas Indonesia (Fasilkom UI) <br>
                  yang menjadi wadah pertukaran ilmu <br>
                  dan informasi antar mahasiswa, <br>
                  alumni, dan dosen dalam bidang <br>
                  sistem informasi dan teknologi informasi. <br>
                  Selain menjadi wadah pertukaran ilmu, <br>
                  SISTEM juga mewadahi para mahasiswa <br>
                  Fasilkom UI untuk mengikuti lomba terkait <br>
                  sistem informasi baik di tingkat nasional <br>
                  maupun internasional.</p>
              </div>
             
            </div>
          </li>

           <li class="l-section section">
            <div class="intro">
              <div class="intro--banner">
                <img src="assets/img/bulb.png" alt="Welcome" >
                <h1 style="color: black;">Vision</h1>
                <h2 id="visi">Mewujudkan wadah terbaik bagi <br>
                  mahasiswa Fasilkom UI <br>
                  yang memiliki minat terhadap<br>
                  ilmu serta profesi <br>
                  di bidang sistem informasi <br>
                  dan teknologi informasi.</h2>
              </div>
             
            </div>
          </li>

           <li class="l-section section">
            <div class="intro">
              <div class="intro--banner">
                <img src="assets/img/bulb.png" alt="Welcome" id="misi">
                 <h1 style="color: black;">Mission</h1>
                <p>1. Menjadi wadah berdiskusi dan bertukar informasi antar mahasiswa, alumni, dan dosen <br>
                  yang memiliki minat terhadap bidang bidang Sistem Informasi dan Teknologi Informasi.<br>
                  2. Memberikan edukasi kepada mahasiswa Fasilkom UI mengenai ilmu dan profesi <br>
                  di bidang Sistem Informasi dan Teknologi Informasi.<br>
                  3. Mewadahi dalam persiapan dan memberi dukungan pada mahasiswa Fasilkom UI<br>
                   yang berkompetisi di bidang Sistem Informasi baik di tingkat nasional maupun internasional. <br>
                  4. Menjadikan anggota SISTEM Fasilkom UI berprestasi dan berkompetensi tinggi<br>
                   di bidang Sistem Informasi dan Teknologi Informasi.</p>
                  </div>
             
            </div>
          </li>

          <li class="l-section section">
            <div class="work">
              
              <div class="work--lockup">
                <ul class="slider">
                  <li class="slider--item slider--item-left">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="assets/img/team/filip.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">Filip Stephanus <span style="color: black">| <br> Head of Consulting</span></p>
                      <p class="slider--item-description"></p>
                      <div class="slider--item-image">
                        <img src="assets/img/team/alif.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">Alif Fauzan <span style="color: black">| <br>Head of Business Intelligence</span></p>
                      <p class="slider--item-description"></p>
                      <div class="slider--item-image">
                        <img src="assets/img/team/luthfi.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">Luthfi Abdurrahim <span style="color: black">| <br>Head of Entrepreneurship</span></p>
                      <p class="slider--item-description"></p>
                     
                    </a>
                  </li>
                  <li class="slider--item slider--item-center">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="assets/img/team/gerald.png" alt="Metiew and Smith">
                      </div>
                      <p class="slider--item-title">Gerald Imanuel <span style="color: black">| President</span></p>
                         <p class="slider--item-description"></p>

                      <div class="slider--item-image">
                        <img src="assets/img/team/caca.png" alt="Metiew and Smith">
                        
                      </div>
                       <p class="slider--item-title">Ayesha Maharani <span style="color: black">| Vice President</span></p>
                         <p class="slider--item-description"></p>

                     
                    </a>
                  </li>

                  <li class="slider--item slider--item-right">
                    <a href="#0">
                     <div class="slider--item-image">
                        <img src="assets/img/team/gemma.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">GEMMA ADHATIEN <span style="color: black">| SECRETARY</span></p>
                      <p class="slider--item-description"></p>
                      <div class="slider--item-image">
                        <img src="assets/img/team/may.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">MAY IFFAH <span style="color: black">| TREASURER</span></p>
                      <p class="slider--item-description"></p>
                      <div class="slider--item-image">
                        <img src="assets/img/team/wilson.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">WILSON CHRISTIAN <span style="color: black">| MANAGER OF <br> BUSINESS-IT DEVELOPMENT GROUP</span></p>
                      <p class="slider--item-description"></p>
                    </a>
                  </li>


                    <li class="slider--item">
                    <a href="#0">
                     <div class="slider--item-image">
                        <img src="assets/img/team/ajeng.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">Ratih Ajeng <span style="color: black">| <br>Head of Human Capital <br> Management</span></p>
                      <p class="slider--item-description"></p>
                      <div class="slider--item-image">
                        <img src="assets/img/team/km.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">Sumarliyanti <span style="color: black">| Head of Knowledge <br>Management</span></p>
                      <p class="slider--item-description"></p>
                      <div class="slider--item-image">
                        <img src="assets/img/team/eva.png" alt="Victory">
                         
                      </div>
                      <p class="slider--item-title">Anisha Eva F <span style="color: black">| Head of <br>Information Management</span></p>
                      <p class="slider--item-description"></p>
                    </a>
                  </li>



                  <!-- <li class="slider--item slider--item">
                    <a href="#0">
                      <div class="slider--item-image">
                        <img src="assets/img/im.png" alt="Alex Nowak">
                      </div>
                      <p class="slider--item-title">Information Management</p>
                      <p class="slider--item-description"></p>
                    </a>
                  </li> -->
                </ul>
                <div class="slider--prev">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                </div>
                <div class="slider--next">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                </div>
              </div>
            </div>
          </li>
          
          
        </ul>
      </div>
    </div>
  </div>
 <ul class="outer-nav">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a style="color: #D21E06;" href="{{ url('/about') }}">About</a></li>
     <li><a href="{{ url('/news') }}">News</a></li>
    <li><a href="{{ url('/product') }}">Products</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</div>

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
@endsection