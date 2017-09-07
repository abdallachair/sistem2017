@extends('layouts.master')

@section('title')
    Sistem Fasilkom UI 2017
@endsection 

@section('navbar')
    <div class="collapse navbar-collapse navbar-collapse">
        <span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>
        <ul class="nav navbar-nav hidden-sm">
            <li ><a href="/">Home</a></li>
            <li class="active"><a href="about">About</a></li>
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
            <li><a href="product">PRODUCTS</a></li>
            <li><a href="contact.html">CONTACT</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <!--about-us-intro-wrap  -->
					<section class="about-us-intro-wrap about-us">
						<div class="container">
							<div class="section-heading">
								<h2 class="section-title text-center" style="color:  #cc0000;"></h2>
							</div> <!--section-heading-->
						</div><!--/.container-->
						<div class="container">
							<div class="row text-center">
								<img class="box-title first" src="img/about.png" width="240" alt="thumb">
								<br>
								<br>
								<div class="member-info box first">
									<h3>SISTEM merupakan salah satu organisasi kemahasiswaan Fakultas Ilmu Komputer Universitas Indonesia (Fasilkom UI) yang menjadi wadah pertukaran ilmu dan informasi antar mahasiswa, alumni, dan dosen dalam bidang sistem informasi dan teknologi informasi. Selain menjadi wadah pertukaran ilmu, SISTEM juga mewadahi para mahasiswa Fasilkom UI untuk mengikuti lomba terkait sistem informasi baik di tingkat nasional maupun internasional.</h3>	
								</div><!-- /.member- -->
							</div>
							<br>
							<br>
							<div class="row">

								<div class="col-sm-5">

									<img class="box-title first" src="img/visi.png" width="200" alt="thumb">
									<br>
									<br>
									<div class="member-info box first">
										<h3>Mewujudkan wadah terbaik bagi mahasiswa Fasilkom UI yang memiliki minat terhadap ilmu serta profesi di bidang sistem informasi dan teknologi informasi.</h3>	
									</div><!-- /.member- -->
								</div><!-- /.col -->


								<div class="col-sm-7">

									<div class="row">
										

										<img class="box-title first" src="img/misi.png" width="200" alt="thumb">
										<br>
										<br>
										<div class="member-info box first">
											<h3>1. Menjadi wadah berdiskusi dan bertukar informasi antar mahasiswa, alumni, dan dosen yang memiliki minat terhadap bidang bidang Sistem Informasi dan Teknologi Informasi.<br>
												2. Memberikan edukasi kepada mahasiswa Fasilkom UI mengenai ilmu dan profesi di bidang Sistem Informasi dan Teknologi Informasi.<br>
												3. Mewadahi dalam persiapan dan memberi dukungan pada mahasiswa Fasilkom UI yang berkompetisi di bidang Sistem Informasi baik di tingkat nasional maupun internasional. <br>
												4. Menjadikan anggota SISTEM Fasilkom UI berprestasi dan berkompetensi tinggi di bidang Sistem Informasi dan Teknologi Informasi.</h3>	
											</div><!-- /.member- -->
										</div><!-- /.col -->
									</div>


								</div><!--/.col--> -->
							</div><!-- /.row -->
						</div><!-- /.container -->

					</section>





					<!-- team-wrap-->
					<section class="team-wrap section-padding">
						<div class="container">
							<div class="section-heading text-center">
								<h1 class="section-title logo">BOARD OF DIRECTORS</h1>
							</div>
							<div class="row text-center">
								<div class="col-md-6 col-sm-6 ">
									<div class="team-member member-lead">
										<div class="member-thumb text-center">
											<img  src="img/team/president.png" alt="team">
										</div>
										<div class="member-info">
											<h4>GERALD IMMANUEL</h4>
											<h2>President</h2>

										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-6 col-sm-6">
									<div class="team-member member-lead">
										<div class="member-thumb text-center">
											<img src="img/team/vicepres.png" alt="team">
										</div>
										<div class="member-info">
											<h4>AYESHA MAHARANI</h4>
											<h2>Vice President</h2>

										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
							</div><!-- /.row -->


							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member1.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>James Smith</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member2.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Robert Williams</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member3.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Michael Davis</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member4.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Daniel Lee</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
							</div><!-- /.row -->

							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member5.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Mathew Moore</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member6.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Timothy White</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member7.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Stephen Clark</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="team-member">
										<div class="member-thumb">
											<img class="img-responsive" src="img/team/member8.jpg" alt="team">
										</div>
										<div class="member-info">
											<h3>Scott Lewis</h3>
											<span>Warehouse manager</span>
											<ul class="list-inline social-links">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>

											</ul>
										</div><!-- /.member- -->
									</div><!-- /.team-member -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.container -->
					</section>
					<!-- /.team-wrap -->
@endsection