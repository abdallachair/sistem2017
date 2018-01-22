@extends('layouts.master')

@section('title')
    Sistem Fasilkom UI 2017
@endsection

@section('css')
     <link rel="stylesheet" href="assets/css/main.css">
@endsection



@section('content')
<div class="perspective">
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
            <li class="is-active"><span>Home</span></li>
            <li><span>Division</span></li>
            <li><span>News</span></li>

          </ul>
        </nav>


        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
                   <img src="assets/img/sistem.png" style="display: block;" id="home-logo" alt="Welcome">
            </div>
          </li>



          <li class="l-section section">
            <div class="work">
              <h1 style="color: black; text-align: center; ">SISTEM DIVISION</h1>

             <div style="display: inline-block; text-align: center; margin-left: 5%; margin-right: 5%;">

                   <div class="item-divisi 1">
                      <div class="slider--item-image">
                        <img src="assets/img/busdev.png" alt="Victory">
                      </div>
                      <p class="slider--item-title">Business Development</p>
                      <p class="slider--item-description"></p>
                   </div>

                   <div class="item-divisi 2">
                      <div class="slider--item-image">
                        <img src="assets/img/km.png" alt="Metiew and Smith">
                      </div>
                      <p class="slider--item-title">Knowledge Management</p>
                      <p class="slider--item-description"></p>
                   </div>


                     <div class="item-divisi 3">
                      <div class="slider--item-image">
                        <img src="assets/img/hcm.png" alt="Alex Nowak">
                      </div>
                      <p class="slider--item-title">Human Capital Management</p>
                      <p class="slider--item-description"></p>

                 </div>
                  <div class="item-divisi 4">
                      <div class="slider--item-image">
                        <img src="assets/img/im.png" alt="Alex Nowak">
                      </div>
                      <p class="slider--item-title">Information Management</p>
                      <p class="slider--item-description"></p>
                    </div>
                </div>

            </div>
          </li>

           <li class="l-section section">
            <div class="work">
              <h2 style="color: black;">NEWS</h2>
              <div class="work--lockup">
                <ul class="slider">
                  <li class="slider--item slider--item-left">
                    <a href="{{url('/news-event')}}">
                      <div class="slider--item-image">
                        <img src="assets/img/work-victory.jpg" alt="Victory">
                      </div>
                      <p class="slider--item-title">Event</p>
                      <p class="slider--item-description"></p>
                    </a>
                  </li>
                  <li class="slider--item slider--item-center">
                    <a href="{{url('/news-competition')}}">
                      <div class="slider--item-image">
                        <img src="assets/img/work-metiew-smith.jpg" alt="Metiew and Smith">
                      </div>
                      <p class="slider--item-title">Competition</p>
                      <p class="slider--item-description"></p>
                    </a>
                  </li>
                  <li class="slider--item slider--item-right">
                    <a href="{{url('/news-championship')}}">
                      <div class="slider--item-image">
                        <img src="assets/img/work-alex-nowak.jpg" alt="Alex Nowak">
                      </div>
                      <p class="slider--item-title">Winner</p>
                      <p class="slider--item-description"></p>
                    </a>
                  </li>
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
  <ul class="outer-nav" style="color: black;">
    <li ><a style="color: #D21E06;" href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
     <li><a href="{{ url('/news') }}">News</a></li>
    <li><a href="{{ url('/product') }}">Products</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</div>

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
@endsection
