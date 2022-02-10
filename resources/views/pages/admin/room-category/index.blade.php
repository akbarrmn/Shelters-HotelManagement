@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-13">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="h3 mb-0 text-gray-800">Manage Rooms Category</div>
                <a href="{{ route('room-category.create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori Kamar
                </a>
            </div>

            <div class="row">
                <!-- DataTales Example -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Jumlah Kamar</th>
                                    <th>Kamar Digunakan</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <img src="{{Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail"/>
                                    </td>
                                    <td>{{"Rp.". $item->price." / Hari" }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->kamar_digunakan }}</td>
                                    <td>{{ $item->about }}</td>
                                    <td>
                                        <a href="{{ route('room-category.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="{{ route('room-category.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">Data Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
