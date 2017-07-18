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
                        <a  href="{{ URL::to('/sistem-admin/admin_article') }}"><span class="glyphicon glyphicon-edit"></span> Edit Artikel</a>
                    </li>
                    <li>
                        <a class="active-menu" href="{{ URL::to('/sistem-admin/admin_repository') }}"><span class="glyphicon glyphicon-th-list"></span> Edit Repository</a>
                    </li>
                </ul>
            </div>
@endsection

@section('content')
<h2>Repository Dashboard</h2>   
<h5>Welcome</h5>

<div class="row">
    <div class="repository_panel">
        <div class="col-md-12 col-md-ffset-3">
            @foreach($repository_categories as $repository_category)
            <div class="col-md-4 col-sm-4">
        <div class="article_panel panel panel-danger">
            
            <div class="panel-heading">
                {{$repository_category->nama_kategori}}
            </div>
            <div class="panel-body">
                
                <ul class="list-group">
                    <li class="list-group-item" style="margin-top: 20px">
                        <span >
                            @foreach($repositories as $repository)
                                @if($repository_category->id == $repository->kategori_repositori)
                            <a href="">{{$repository->nama}}</a></br>
                                @endif
                            @endforeach
                        </span>
                    </li>
                    
                </ul>
                
            </div>
            <div class="panel-footer">
            </div>
        </div>
            </div>
            @endforeach
            {{$repository_categories -> links()}}
    </div>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-md-6 ">
        <div>
            <h2>Upload Files</h2>
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
        <form method="post" action="repository_files" id="upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_paket">Kategori</label><br>
                <select name="pilih_kategori">
                    @foreach($repository_categories2 as $repository_category)
                        <option value='{{$repository_category->id}}'>{{$repository_category->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <input type="file" name="file[]" multiple><br />
            <input type="submit" class="btn btn-danger">
        </form>
    </div>
    <div class="col-md-6">
        <div>
            <h2>Tambah Kategori</h2>
        </div>
        <form method="post" action="repositories_category">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_paket">Nama Kategori</label>
                <input type="text" class="form-control" id="insert-nama_kategori" name="nama_kategori" required>
            </div>
            <button type="submit" class="btn btn-danger brown lighten-3">Submit</button>
        </form>
    </div>
</div>

                
 
@endsection
        
@section('style')
    <style>
        div.article_panel {
            width: 100%;
            height: 500px;
        }
        .list-group-item{
            overflow: scroll;
        }
    </style>
@endsection