@extends('layouts.admin_master')

@section('title')
    Admin - Sistem Fasilkom 2017
@endsection 

@section('navbar')
<div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="src/img/Cap SISTEM.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  class="active-menu" href="admin"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="admin_article"><i class="fa fa-desktop fa-3x"></i> Edit Artikel</a>
                    </li>
                    <li>
                        <a  href="admin_repository"><i class="fa fa-qrcode fa-3x"></i> Edit Repository</a>
                    </li>
                </ul>
            </div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="article_edit">
            <h2 class="text-center">Edit Article</h2>
            <a href="admin_article" class="text-center"><img class="user-image img-responsive" style="width: 50%;" src="src/img/432754-business-ad-statistics/png/067-document.png"></a>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<hr />
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="repository_edit">
            <h2 class="text-center">Edit Repository</h2>
            <a href="admin_repository" class="text-center"><img class="user-image img-responsive" style="width: 50%;" src="src/img/432754-business-ad-statistics/png/055-server.png"></a>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection
        
@section('style')
    <style>
        
    </style>
@endsection