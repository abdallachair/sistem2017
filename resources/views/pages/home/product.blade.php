@extends('layouts.master')

@section('title')
    Sistem Fasilkom UI 2017
@endsection 

@section('navbar')
    <div class="collapse navbar-collapse navbar-collapse">
        <span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>
        <ul class="nav navbar-nav hidden-sm">
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <!-- Services -->
            <li class="dropdown"><a>NEWS <b class="caret"></b></a>
				<!-- submenu-wrapper -->
            <div class="submenu-wrapper submenu-wrapper-topbottom">
            <div class="submenu-inner  submenu-inner-topbottom">
            <ul class="dropdown-menu">
                <li><a href="news-event">EVENT</a></li>
                <li><a href="news-competition">COMPETITION</a></li>
                <li><a href="news-championship">CHAMPIONSHIP</a></li>
            </ul>
            </div>
            </div>
            <!-- /submenu-wrapper -->
            </li>
            <!-- /Services -->

            <!-- Blog -->
            <li><a href="article.html?">ARTICLE </a>
            </li>

            <!-- /Blog -->
            <li><a href="product" class="active">PRODUCTS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
@endsection

@section('content')

    
        
    <section class="about-us-intro-wrap section-padding home">
                <div class="container text-center">
				    <div class="section-heading text-center">
				        <h1 class="section-title logo">PRODUCT</h1>
				    </div>
				</div>
				<div class="text-center">
                    <div class="container text-center aspect">
                        @php
                            $count = $repository_categories->count();
                            $count_3 = 0;
                        @endphp
                        @for ($i = 0; $i < $count/4; $i++)
                            @php
                                $count_2 = 0;
                            @endphp
                            <div class="row">
                            @foreach($repository_categories as $repository_category)
                                @php
                                    if($count_2 === $count_3 + 4){
                                        $count_2 = 0;
                                        break;
                                    }
                                @endphp
                                @if($count_2 < $count_3)
                                    @php
                                        $count_2++;
                                    @endphp
                                @else
                                <div class="col-md-3">
                                        <button class="buttons product-{{$repository_category->id}}">
                                        {{$repository_category->nama_kategori}}</button>
                                    @foreach($repositories as $repository)
                                        @if($repository_category->id == $repository->kategori_repositori)
                                            <a href="/src/files/{{$repository->nama}}" name="file_name" value="{{$repository->nama}}"><li class="{{$repository_category->id}}">{{$repository->nama}}</li></a>
                                        @endif
                                    @endforeach
                                </div>
                                @php
                                    $count_2++;
                                @endphp
                                @endif
                                
                            @endforeach
                            </div>
                            @php
                                $count_3 += 4;
                            @endphp
                        @endfor
                    </div>
				</div>
				@if($count_3 === 0)
                    <section class="fleets-wrap home">
                        <div class="container text-center">
                            <p>Maaf, untuk saat ini belum tersedia produk</p>
                        </div>
                    </section>
                @endif
			</section>
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