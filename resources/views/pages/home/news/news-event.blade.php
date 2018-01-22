@extends('layouts.master')

@section('title')
    Event | Sistem Fasilkom UI 2017
@endsection


@section('css')
     <link rel="stylesheet" href="assets/css/main.css">
     <link rel="stylesheet" href="assets/css/bootstrap.css">
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

            <li class="is-active"><span>Event</span></li>

          </ul>
        </nav>


        <ul class="l-main-content main-content">




          <li class="l-section section section--is-active">
            <div class="work">

            <section class="fleets-wrap home">
              <div class="row">
                    @php
                            $count_article = 0;
                    @endphp
                        @foreach($articles as $article)
                                @if($article->display === 1 && $article->kategori === 1)
                                @php
                                  $count_article++;
                                @endphp
                                  <div class="col-md-3">
                                                    @foreach($photos as $photo)
                                                        @if($article->thumbnail_id === $photo->id)
                                                            <a class="img-link" href="{{'/src/img/article_photos/'.$photo->img_src}}"><img class="pict" src="{{'/src/img/article_photos/'.$photo->img_src}}" alt="" style="width: 100%;"></a>
                                                        @endif
                                                    @endforeach
                                                    <form method="get" action="article_view">
                                                    <h3 style="text-transform: capitalize;">{{$article->judul}}</a></h3>

                                                    <p>{{date('d F Y', strtotime($article->created_at))}}<p>
                                                    {!!html_entity_decode(str_limit($article->konten, 20))!!}...</br>

                                                    <button type="submit" class="btn btn-primary">Continue reading<i class="fa fa-long-arrow-right"></i></button>
                                                    <input type="hidden" name="article_id" value="{{$article->id}}">
                                                    </form>
                                          </div>
                        @endif
                    @endforeach
                  </div>
                    </section>
                @if($count_article === 0)
                    <section class="fleets-wrap home">
                        <div class="container text-center">
                            <p>Maaf, untuk saat ini belum tersedia artikel berita</p>
                            <a href="{{ url('/news')}}" class="btn btn-primary">Back to News Category<i class="fa fa-long-arrow-right"></i></a>

                        </div>
                    </section>
                @endif
          </li>


        </ul>
      </div>
    </div>
  </div>
   <ul class="outer-nav" style="color: black;">
    <li ><a  href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
     <li><a style="color: #D21E06;" href="{{ url('/news') }}">News</a></li>
    <li><a href="{{ url('/product') }}">Products</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</div>

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
@endsection


@section('pagination')
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center">{{$articles -> links()}}</div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
        </div>
    </div>
@endsection
