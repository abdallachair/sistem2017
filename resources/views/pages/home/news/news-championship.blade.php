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
            <li class="dropdown active"><a>NEWS <b class="caret"></b></a>
				<!-- submenu-wrapper -->
            <div class="submenu-wrapper submenu-wrapper-topbottom">
            <div class="submenu-inner  submenu-inner-topbottom">
            <ul class="dropdown-menu">
                <li><a href="news-event">EVENT</a></li>
                <li><a href="news-competition">COMPETITION</a></li>
                <li><a href="news-championship" class="active">CHAMPIONSHIP</a></li>
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
            <li><a href="contact.html">PRODUCTS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <!-- portfolio-section start -->
				<section class="fleets-wrap home">
					<div class="container text-center">
						<div class="section-heading text-center">
							<h1 class="section-title logo">CHAMPIONSHIP</h1>
						</div>
					</div><!--/.container-->
                    @php
                            $count_article = 0;
                            $ada_article = false;
                    @endphp
                    @for ($i = 0; $i < 4; $i++)
                        <div class="row text-center">
						  <div class="col-md-12">
                        @php
                            $count = 0;
                        @endphp
                        @foreach($articles as $article)
                            @php 
                              $count_photo = 0
                            @endphp
                                @if($count === $count_article+4)
                                    $count = 0;
                                    $ada_article = true;
                                    break;
                                @endif              
                            @if($count < $count_article)
                                $count++;
                            @else
                                @if($article->display === 1 && $article->kategori === 1)
                                <?php $ada_photo = 0; ?>
						          <div class="col-md-3">
								        <div class="item">
                                                <div class="owl-item-thumb">
                                                    @foreach($photos as $photo)
                                                        @if($article->thumbnail_id === $photo->id)
                                                            <a class="img-link" href="{{'/src/img/article_photos/'.$photo->img_src}}"><img class="pict" src="{{'/src/img/article_photos/'.$photo->img_src}}" alt=""></a>
                                                        @endif 
                                                    @endforeach
                                                </div><!-- owl-item-thumb -->
                                                <div class="owl-tem-content">
                                                    <form method="get" action="article_view">
                                                    <h3>{{$article->judul}}</a></h3>
                                                    <p>{{date('d F Y', strtotime($article->created_at))}}<p>
                                                    {{str_limit($article->konten, 70)}}
                                                    <button type="submit" class="btn btn-primary">Continue reading<i class="fa fa-long-arrow-right"></i></button>
                                                    <input type="hidden" name="article_id" value="{{$article->id}}">
                                                    </form>
                                                </div><!-- owl-item-content -->
                                           </div><!-- /item -->
						</div><!-- /item -->
                        @php
                              $count++;
                              if($count >= 4){
                                break;
                              }
                        @endphp
                        @endif
                    @endif
                    @endforeach 
                        </div>
                    </div>
                    </section>
                        @php
                            if($count < 4 && $count > 0){
                                $count_article = $count;
                                break;
                            }
                            if($ada_article === true){
                                $count_article+=4;
                            }
                        @endphp
                @endfor
                @if($count_article === 0)
                    <section class="fleets-wrap home">
                        <div class="container text-center">
                            <p>Maaf, untuk saat ini belum tersedia artikel berita</p>
                        </div>
                    </section>
                @endif
                
                        	
    
@endsection