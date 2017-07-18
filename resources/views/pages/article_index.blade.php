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
                        <a   href="{{ URL::to('/sistem-admin') }}"><span class="glyphicon glyphicon-modal-window"></span> Dashboard</a>
                    </li>
                      <li>
                        <a class="active-menu" href="{{ URL::to('/sistem-admin/admin_article') }}"><span class="glyphicon glyphicon-edit"></span> Edit Artikel</a>
                    </li>
                    <li>
                        <a  href="{{ URL::to('/sistem-admin/admin_repository') }}"><span class="glyphicon glyphicon-th-list"></span> Edit Repository</a>
                    </li>
                </ul>
            </div>
@endsection

@section('content')
<h2>Article Dashboard</h2>   
<h5>Welcome</h5>

<div class="row">
    <div class="col-md-12 col-md-ffset-3">
        <div class="article_panel panel panel-danger">
            <div class="panel-heading">
                Articles
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($articles as $article)
                    <li class="list-group-item" style="margin-top: 20px">
                        <span >
                            {{$article->id}}
                        </span>
                        <form method="post" action="edit_article_open">
                                    {{ csrf_field() }}
                            <span>{{$article -> judul}}</span>
                            <span class="pull-right clearfix">
                            @if($article->display == 1)
                                <span>Displayed,</span>
                            @else
                                <span>Not Displayed,</span>
                            @endif
                            Created({{$article->created_at->diffForHumans()}})
                            <button type="submit" class="btn btn-danger brown lighten-3">Edit</button>
                            <input type="hidden" name="article_id" value="{{$article->id}}"></span>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="panel-footer">
                {{$articles -> links()}}
            </div>
        </div>
    </div>
</div>

<hr />

<div class="row">
    
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="article_edit">
                <div>
        <h2>Buat Artikel</h2>
    </div>
    <span>
    @if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    </span>
    <form method="post" action="news" enctype="multipart/form-data">
        {{ csrf_field() }}
        
            <div class="form-group">
                <label for="nama_paket">Judul Berita</label>
                <input type="text" class="form-control" id="insert-judul_berita" name="judul_berita" required>
            </div>
            <div class="form-group">
                <label for="nama_paket">Konten Berita</label><br>
                <textarea name="konten_berita" rows="7" cols="78"></textarea>
                <!--<input type="text" class="form-control" id="insert-deskripsi" name="deskripsi" placeholder="tuliskan deskripsi toko mu" required>-->
            </div>
            <div class="form-group">
                <label for="nama_paket">Kategori</label><br>
                <select name="pilih_kategori">
                    @foreach($categories as $category)
                        <option value='{{$category->id}}'>{{$category->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_paket">Display artikelnya?</label><br>
                <select name="display">
                    <option value=1>Ya</option>
                    <option value=0>Tidak</option>
                </select>
            </div>
            <label for="nama_paket">Image</label>
            <input type="file" name="file[]" multiple><br />
        <button type="submit" class="btn btn-danger brown lighten-3">Submit</button>
    </form>
    <div id="upload_message"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
</div>

                
 
@endsection
        
@section('style')
    <style>
        div.article_panel {
            width: 100%;
            height: 500px;
        }
    </style>
@endsection