@extends('layouts.master')

@section('title')
    Sistem Fasilkom UI 2017
@endsection

@section('css')

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
            <li class="is-active"><span>Products</span></li>


          </ul>
        </nav>


        <ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
            <section>

                <div>
                    <div>
                        @php
                            $count = $repository_categories->count();
                        @endphp
                            <div class="row">
                            @foreach($repository_categories as $repository_category)
                                <div class="col-md-3">
                                    <form method="get" action="product-kategori">
                                        <button class="buttons products-{{$repository_category->id}}" name="product_id" value="{{$repository_category->id}}">
                                        {{$repository_category->nama_kategori}}</button>
                                    </form>
                                   <!--  @foreach($repositories as $repository)
                                        @if($repository_category->id == $repository->kategori_repositori)
                                            <a href="/src/files/{{$repository->nama}}" name="file_name" value="{{$repository->nama}}">
                                                <li class="p{{$repository_category->id}}">{{$repository->nama}}</li></a>
                                        @endif
                                    @endforeach -->
                                </div>
                            @endforeach
                            </div>
                    </div>
                </div>
                @if($count === 0)
                    <section class="fleets-wrap home">
                        <div class="container text-center">
                            <p>Maaf, untuk saat ini belum tersedia produk</p>
                        </div>
                    </section>
                @endif

            </section>
        </div>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="outer-nav" style="color: black;">
    <li class="is-active"><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/news') }}">News</a></li>
    <li><a style="color: #D21E06;" href="{{ url('/product') }}">Products</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</div>

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
@endsection

@section('footer')
    <script>
    @foreach($repository_categories as $repository_category)

                            $(document).ready(function(){

                                $(".p{{$repository_category->id}}").hide();

                                  $(".product-{{$repository_category->id}}").click(function(){
                                  $(".p{{$repository_category->id}}").toggle(500);
                                  });

                            });

    @endforeach
    </script>
@endsection
