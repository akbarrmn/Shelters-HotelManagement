@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-13">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="h3 mb-0 text-gray-800">Manage Booking</div>
                <a href="{{ route('booked-list.create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Booking List
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
                                    <th>Nama</th>
                                    <th>Ktp</th>
                                    <th>No Hp</th>
                                    <th>Kategori</th>
                                    <th>Check-in</th>
                                    <th>Check-Out</th>
                                    <th>Lama Menginap</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->ktp}}</td>
                                    <td>{{ $item->nohp }}</td>
                                    <td>{{ $item->catalog_room->title}}</td>
                                    <td>{{ $item->checkin }}</td>
                                    <td>{{ $item->checkout }}</td>
                                    <td>{{ $item->lama_menginap }}</td>
                                    <td>
                                        <a href="{{ route('booked-list.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="{{ route('booked-list.destroy', $item->id) }}" method="POST" class="d-inline">
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
                                    <td colspan="9" class="text-center">Data Kosong</td>
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
