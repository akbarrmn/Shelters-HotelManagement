@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-13">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="h3 mb-0 text-gray-800">Edit News {{ $item->title }}</div>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('manage-news.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Berita</label>
                            <input type="text" class="form-control" name="title" placeholder="Kategori" value="{{ $item->title }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" name="image" placeholder="Image" value="{{ $item->image }}">
                        </div>
                        <div class="form-group">
                            <label for="about">Detail Berita</label>
                            <textarea class="d-block w-100 form-control" rows="10" name="about">{{ $item->about }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
