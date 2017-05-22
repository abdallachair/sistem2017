@extends('layouts.master')

@section('title')
    Edit Artikel - Sistem Fasilkom 2017
@endsection

@section('content')
    <form method="post" action="edit_article" enctype="multipart/form-data">
        {{ csrf_field() }}
            <label>Article Id: {{$article->id}}</label>
            <input type="hidden" name="article_id" value="{{$article->id}}">
        
            <div class="form-group">
                <label for="nama_paket">Judul Berita</label>
                <input type="text" class="form-control" id="insert-judul_berita" name="judul_berita" value="{{$article->judul}}" required>
            </div>
            <div class="form-group">
                <label for="nama_paket">Konten Berita</label><br>
                <textarea name="konten_berita" rows="4" cols="50">{{$article->konten}}</textarea>
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
            <div class="form-group">
                <label for="nama_paket">Current Images</label><br>
                <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Image</th>
                        <th>Remove Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            @if($article->id === $photo->article_id)
                                <td>{{$photo->id}}</td>
                                    {{ csrf_field() }}
                                <td>
                                    <img src="{{'src/img/article_photos/'.$photo->img_src}}" style="width: 20%;">
                                </td>
                                <td>
                                    <input type="hidden" value="{{$photo->img_src}}" name="img_src">
                                    <input type="checkbox" name="photo_id[]" value="{{{$photo->id}}}">
                                 </td>
                        </tr>
                            @endif 
                    @endforeach
                </tbody>
            </table>
            </div>
            <label for="nama_paket">Upload Image</label>
            <input type="file" name="file[]" multiple><br />
        <button type="submit" class="btn btn-primary brown lighten-3">Submit</button>
    </form>

    <div id="message"></div>
@endsection

@section('script')
        <script>
        var form = document.getElementById('delete_photo');
        var request = new XMLHttpRequest();
        
        form.addEventListener('submit', function(e){
            e.preventDefault();
            var formdata = new FormData(form);
            
            request.open('post', '/delete_photo');
            request.addEventListener("load", transferComplete);
            request.send(formdata);
        });
        
        function deleteComplete(data){
            response = JSON.parse(data.currentTarget.response);
            if(response.success){
                document..getElementById('message').innerHTML = "Penghapusan foto berhasil!";
            }
        }
    </script>
@endsection