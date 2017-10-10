@extends('layouts.admin_master')

@section('title')
    Edit Artikel - Sistem Fasilkom 2017
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
    <div class="row">
        <div class="col-md-12">
    <form method="post" action="edit_article" enctype="multipart/form-data">
        {{ csrf_field() }}
            <h2>Article Id: {{$article->id}}</h2>
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
                    @if($article->display == 1)
                        <option value=1 selected>Ya</option>
                        <option value=0>Tidak</option>
                    @else
                        <option value=1>Ya</option>
                        <option value=0 selected>Tidak</option>
                    @endif
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
                        <th>Set as thumbnail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0;?>
                    @foreach($photos as $photo)
                        <tr>
                            @if($article->id === $photo->article_id)
                                <td>{{$photo->id}}</td>
                                    {{ csrf_field() }}
                                <td>
                                    <img src="{{'/src/img/article_photos/'.$photo->img_src}}" style="width: 20%;">
                                </td>
                                <td>
                                    <input type="hidden" value="{{$photo->img_src}}" name="img_src">
                                    <input type="checkbox" name="photo_id[]" value="{{{$photo->id}}}">
                                 </td>
                                <td>
                                    @if($photo->thumbnail === true)
                                        <input type="radio" name="photo_thumbnail" value="{{{$photo->id}}}" checked>
                                    @else
                                        <input type="radio" name="photo_thumbnail" value="{{{$photo->id}}}">
                                    @endif
                                </td>
                        </tr>
                            <?php $count++; ?>
                            @endif 
                    @endforeach
                </tbody>
            </table>
            </div>
            @if($count === 0)
                <label for="nama_paket">Upload Image</label>
                <input type="file" name="file[]" multiple><br />
            @endif
            <button type="submit" class="btn btn-primary brown lighten-3">Submit</button>
    </form>

    <div id="message"></div>
            </div>
        </div>
<hr />
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