@extends('layouts.master')

@section('title')
    Sistem Fasilkom 2017
@endsection 

@section('style')
    <style>
        
        form{
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
        }
        
        input[type="submit"]{
            background: #0098cb;
            border:0px;
            border-radius:5px;
            color:#fff;
            padding:10px;
            margin: 20px auto;
        }
    </style>
@endsection

@section('content')
    <div>
        <label>INI DIA BERITANYA!</label>
     
    </div>
    <h1>Multiple File Upload</h1>
    <form action="upload" id="upload" enctype="multipart/form-data">
            {{ csrf_field() }}
        <input type="file" name="file[]" multiple><br />
        <input type="submit">
    </form>
    <div id="upload_message"></div>

    <form method="post" action="news" enctype="multipart/form-data">
        {{ csrf_field() }}
        
            <div class="form-group">
                <label for="nama_paket">Judul Berita</label>
                <input type="text" class="form-control" id="insert-judul_berita" name="judul_berita" required>
            </div>
            <div class="form-group">
                <label for="nama_paket">Konten Berita</label>
                <textarea name="konten_berita" rows="4" cols="50"></textarea>
                <!--<input type="text" class="form-control" id="insert-deskripsi" name="deskripsi" placeholder="tuliskan deskripsi toko mu" required>-->
            </div>
            <div class="form-group">
                <label for="nama_paket">Kategori</label>
                <select name="pilih_kategori">
                    @foreach($categories as $category)
                        <option value='{{$category->id}}'>{{$category->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_paket">Display artikelnya?</label>
                <select name="display">
                    <option value=1>Ya</option>
                    <option value=0>Tidak</option>
                </select>
            </div>
            <h1>Multiple File Upload</h1>
            <input type="file" name="file[]" multiple><br />
        <button type="submit" class="btn btn-primary brown lighten-3">Submit</button>
    </form>
    <div id="upload_message"></div>
   @foreach($articles as $article)
        @if($article->display === 1)
            <h1>{{$article->judul}}</h1>
            <p>{{$article->konten}}</p>
            <p>{{$article->kategori}}</p>
            @foreach($photos as $photo)
                @if($article->id === $photo->article_id)
                    <img src="{{'src/img/article_photos/'.$photo->img_src}}">
                @endif
            @endforeach
        @endif
   @endforeach
    
    
@endsection
        
@section('script')
        <script>
        var uploadForm = document.getElementById('upload');
        var request = new XMLHttpRequest();
        
        uploadForm.addEventListener('submit', function(e){
            e.preventDefault();
            var formdata = new FormData(uploadForm);
            
            request.open('post', '/upload');
            request.addEventListener("load", transferComplete);
            request.send(formdata);
        });
    function transferComplete(data){
    response  = JSON.parse(data.currentTarget.response);
        
        if(response.success){
            document.getElementById('upload_message').innerHTML = "Successfully Uploaded Files!";
        }
    }
    </script>
@endsection