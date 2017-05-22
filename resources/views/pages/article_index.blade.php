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
                        <a   href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a class="active-menu" href="ui.html"><i class="fa fa-desktop fa-3x"></i> Edit Artikel</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Edit Repository</a>
                    </li>
                </ul>
            </div>
@endsection

@section('content')
        <br>
        <br>
        <div class="article_panel">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Judul</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <form method="post" action="edit_article_open">
                                {{ csrf_field() }}
                            <td>{{$article -> judul}}</td>
                            <td><button type="submit" class="btn btn-primary brown lighten-3">Edit</button>
                                <input type="hidden" name="article_id" value="{{$article->id}}"></td>
                             </form>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    <br>
    <br>

    <div>
        <h2>Buat Berita</h2>
    </div>
    <form method="post" action="news" enctype="multipart/form-data">
        {{ csrf_field() }}
        
            <div class="form-group">
                <label for="nama_paket">Judul Berita</label>
                <input type="text" class="form-control" id="insert-judul_berita" name="judul_berita" required>
            </div>
            <div class="form-group">
                <label for="nama_paket">Konten Berita</label><br>
                <textarea name="konten_berita" rows="4" cols="50"></textarea>
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
        <button type="submit" class="btn btn-primary brown lighten-3">Submit</button>
    </form>
    <div id="upload_message"></div>
    
    
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