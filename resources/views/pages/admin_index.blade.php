@extends('layouts.admin_master')

@section('title')
    Admin - Sistem Fasilkom 2017
@endsection 

@section('navbar')
<div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  class="active-menu" href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> Edit Artikel</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Edit Repository</a>
                    </li>
                </ul>
            </div>
@endsection

@section('content')
@endsection
        
@section('style')
    <style>
        div.article_panel {
            background-color: #00FFFF;
            width: 200px;
            height: 200px;
            overflow: scroll;
        }   
    </style>
@endsection