@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-13">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="h3 mb-0 text-gray-800">Edit booked-list {{ $item->title }}</div>
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
                    <form action="{{ route('booked-list.update', $item->id) }}" method="POST" >
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $item->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="ktp">Ktp</label>
                            <input type="text" class="form-control" name="ktp" placeholder="Ktp" value="{{ $item->ktp }}">
                        </div>
                        <div class="form-group">
                            <label for="nohp">No Hp</label>
                            <input type="text" class="form-control" name="nohp" placeholder="No Hp" value="{{ $item->nohp }}">
                        </div>
                        <div class="form-group">
                            <label for="catalog_room_id">Kategori</label>
                            <select name="catalog_room_id" required class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach($catalog_room as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="checkin">Check-in</label>
                            <input type="date" class="form-control" name="checkin" placeholder="CheckIn" value="{{ $item->checkin }}">
                        </div>
                        <div class="form-group">
                            <label for="check-out">Check-Out</label>
                            <input type="date" class="form-control" name="checkout" placeholder="CheckOut" value="{{ $item->checkout }}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
