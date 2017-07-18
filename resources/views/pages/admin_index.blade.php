@extends('layouts.admin_master')

@section('title')
    Admin - Sistem Fasilkom 2017
@endsection 

@section('navbar')
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{ URL::to('/') }}/src/img/Cap SISTEM.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="{{ URL::to('/sistem-admin') }}"><span class="glyphicon glyphicon-modal-window"></span> Dashboard</a>
                    </li>
                      <li>
                        <a  href="{{ URL::to('/sistem-admin/admin_article') }}"><span class="glyphicon glyphicon-edit"></span> Edit Artikel</a>
                    </li>
                    <li>
                        <a  href="{{ URL::to('/sistem-admin/admin_repository') }}"><span class="glyphicon glyphicon-th-list"></span> Edit Repository</a>
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
            <a href="{{ URL::to('/sistem-admin/admin_article') }}" class="text-center"><img class="user-image img-responsive" style="width: 50%;" src="{{ URL::to('/') }}/src/img/432754-business-ad-statistics/png/067-document.png"></a>
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
            <a href="{{ URL::to('/sistem-admin/admin_repository') }}" class="text-center"><img class="user-image img-responsive" style="width: 50%;" src="{{ URL::to('/') }}/src/img/432754-business-ad-statistics/png/055-server.png"></a>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
@endsection
        
@section('style')
    <style>
        
    </style>
@endsection