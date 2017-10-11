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
                <li><a href="news-event" class="active">EVENT</a></li>
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
            <li><a href="contact.html">PRODUCTS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <!--Service-intro-start -->
				<section class="service-intro-wrap section-padding">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="service-intro-thumb text-center">
                                    <div class="owl-carousel fleet-carousel">
                                    @foreach($photos as $photo)
                                        @if($photo->article_id === $article->id)
                                            @if($photo->id === $article->thumbnail_id)
                                                <div class="item">
                                                <div class="owl-item-thumb">
                                                    <img class="article_big_pict" src="{{'/src/img/article_photos/'.$photo->img_src}}" alt="">
                                                    <div class="owl-item-overlay"></div>
                                                    <a class="img-link" href="{{'/src/img/article_photos/'.$photo->img_src}}"><img src="img/zoomin.png" alt="+"/></a>
                                                </div>
                                            </div>
                                            @else
                                                <div class="item">
                                                <div class="owl-item-thumb">
                                                    <img class="article_pict" src="{{'/src/img/article_photos/'.$photo->img_src}}" alt="">
                                                    <div class="owl-item-overlay"></div>
                                                    <a class="img-link" href="{{'/src/img/article_photos/'.$photo->img_src}}"><img src="img/zoomin.png" alt="+"/></a>
                                                </div>
                                            </div>
                                            @endif
                                        @endif
                                    @endforeach
                                    </div>
                                        <div class="fleet-carousel-navigation 
								slider-control">
								    <span class="prev left"><i class="flaticon-previous11"></i></span>
								    <span class="next right"><i class="flaticon-next15"></i></span>
							     </div>
								</div>
							</div><!--/.col-->
							<div class="col-sm-6">

								<div class="service-intro-content">
									<div class="section-heading">
										<h2 style="text-transform: capitalize;" class="section-title">{{$article->judul}}</h2>
                                    </div>
                                    <div class="konten">{!!html_entity_decode($article->konten)!!}</div>
									<div class="row">
										<div class="col-sm-6">
											<ul>
												<li>Completely productize next generation</li>
												<li>Mind share without timely experiences</li>
												<li>Completely pontificate</li>
												<li>Resource levelling</li>
												<li>Highly potentialities</li>
											</ul>
										</div><!-- /.col -->

										<div class="col-sm-6">
											<ul>
												<li>Completely productize next generation</li>
												<li>Mind share without timely experiences</li>
												<li>Completely pontificate</li>
												<li>Resource levelling</li>
												<li>Highly potentialities</li>
											</ul>
										</div><!-- /.col -->

									</div><!--/.row-->
								</div><!--/.service-intro-content-->

							</div><!--/.col-->
						</div><!--/.row -->
					</div><!--/.container-->

				</section>
				<!--/Service-intro-end -->
<script>
    {{$article->konten}}
</script>
@endsection

