@extends('layouts.master')

@section('title')
    Sistem Fasilkom UI 2017
@endsection 

@section('navbar')
    <div class="collapse navbar-collapse navbar-collapse">
        <span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>
        <ul class="nav navbar-nav hidden-sm">
            <li class="active"><a href="/">Home</a></li>
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
            <li><a href="contact.html">PRODUCTS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <section class="about-us-intro-wrap section-padding">
        <div class="container text-center flash">
            <img class="logo" src="img/sistem.png" alt="thumb" width="400">
        </div><!-- /.container -->
    </section>

    <section class="about-us-intro-wrap section-padding">
				<div class="text-center">
					<img src="img/aspect.png" alt="thumb" width="500"></div>
					<br>
					<br>
					<div class="container text-center aspect">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="team-member">
									<div class="member-thumb">
										<img class="img-responsive" src="img/busdev.png" alt="team">
									</div>
									<div class="member-info text-center">
										<h2 class="text-center">BUSINESS IT<br>DEVELOPMENT</h2>

									</div><!-- /.member- -->
								</div><!-- /.team-member -->
							</div><!-- /.col -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="team-member">
									<div class="member-thumb">
										<img class="img-responsive" src="img/hcm.png" alt="team">
									</div>
									<div class="member-info">
										<h2>HUMAN CAPITAL MANAGEMENT</h2>

									</div><!-- /.member- -->
								</div><!-- /.team-member -->
							</div><!-- /.col -->
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="team-member">
									<div class="member-thumb">
										<img class="img-responsive" src="img/km.png" alt="team">
									</div>
									<div class="member-info">
										<h2>KNOWLEDGE MANAGEMENT</h2>

									</ul>
								</div><!-- /.member- -->
							</div><!-- /.team-member -->
						</div><!-- /.col -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="team-member">
								<div class="member-thumb">
									<img class="img-responsive" src="img/im.png" alt="team">
								</div>
								<div class="member-info">
									<h2>INFORMATION MANAGEMENT</h2>

								</div><!-- /.member- -->
							</div><!-- /.team-member -->
						</div><!-- /.col -->
					</div><!-- /.row -->

				</div><!-- /.container -->
			</section>

<!-- portfolio-section start -->
			<section class="fleets-wrap home">
				<div class="container text-center">
					<div class="section-heading">
						<img src="img/latest.png" alt="thumb" width="500"></div>
						<br>
						<br>
					</div> <!--section-heading-->
				</div><!--/.container-->

                <div class="container-fluid">
					<div class="no-padding">
						<div class="row">
							<div class="col-md-12">
								<div class="owl-carousel fleet-carousel">   
                                    @foreach($articles->reverse() as $article)
                                            @if($article->display === 1)
                                                <?php $ada_photo = 0; ?>
                                                <?php $count = 0; ?>
                                                <div class="item">
                                                <div class="owl-item-thumb">
                                                    @foreach($photos as $photo)
                                                    <?php if($count === 1){break;} ?>
                                                        @if($article->id === $photo->article_id)
                                                            <img class="pict" src="{{'/src/img/article_photos/'.$photo->img_src}}" alt="">
                                                            <div class="owl-item-overlay"></div>
                                                             <a class="img-link" href="{{'/src/img/article_photos/'.$photo->img_src}}"><img src="img/zoomin.png" alt="+"/></a>
                                                        <?php $count++;$ada_photo++; ?>
                                                        @endif 
                                                    @endforeach
                                                    @if($ada_photo === 0)
                                                        <img class="pict" src="{{'/src/img/article_photos/dummy-article-img.jpg'}}" alt="">
                                                    @endif
                                                </div><!-- owl-item-thumb -->
                                                <div class="owl-tem-content">
                                                    <h3><a href="#">{{$article->judul}}</a></h3>
                                                    <p>{{$article->created_at}}<p>
                                                    <p>{{str_limit($article->konten, 70)}}</p>
                                                    <a class="btn btn-primary" href="#">Continue reading<i class="fa fa-long-arrow-right"></i></a>
                                                </div><!-- owl-item-content -->
                                           </div><!-- /item -->    
                                            @endif
                                    @endforeach
                                </div>
                                <div class="fleet-carousel-navigation 
								slider-control">
								    <span class="prev left"><i class="flaticon-previous11"></i></span>
								    <span class="next right"><i class="flaticon-next15"></i></span>
							     </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection