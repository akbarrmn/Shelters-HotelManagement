@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-13">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="h3 mb-0 text-gray-800">Edit Room Category {{ $item->title }}</div>
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
                    <form action="{{ route('room-category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="title">Kategori</label>
                            <input type="text" class="form-control" name="title" placeholder="Kategori" value="{{ $item->title }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" name="image" placeholder="Image" value="{{ $item->image }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" name="price" placeholder="price" value="{{ $item->price }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Kamar</label>
                            <input type="number" class="form-control" name="jumlah" placeholder="jumlah" value="{{ $item->jumlah }}">
                        </div>
                        <div class="form-group">
                            <label for="about">Detail Kamar</label>
                            <textarea class="d-block w-100 form-control" rows="10" name="about">{{ $item->about }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
