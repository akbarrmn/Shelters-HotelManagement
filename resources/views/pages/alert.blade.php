@extends('layouts.app-auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-5">
            @if($message = Session::get('Success'))
                <div class="alert alert-success alert-block" id="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @elseif($message = Session::get('Gagal'))
                <div class="alert alert-danger alert-block"  id="alert2">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <table class="table table-striped table-responsive-lg" >
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>KTP</th>
                    <th>No Hp</th>
                    <th>Kategori</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Lama Menginap</th>
                    <th>Harga Perhari</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                @php $i = 1
                @endphp
                @forelse ($items as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->ktp}}</td>
                    <td>{{ $item->nohp }}</td>
                    <td>{{ $item->catalog_room->title}}</td>
                    <td>{{ $item->checkin }}</td>
                    <td>{{ $item->checkout }}</td>
                    <td>{{ $item->lama_menginap }}</td>
                    <td>{{ 'Rp. '.$item->catalog_room->price }}</td>
                    <td>{{ 'Rp. '.($item->catalog_room->price)*($item->lama_menginap) }}</td>
                    <td>
                        <form action="{{ route('hapusbooked', $item->id) }}" method="GET" class="d-inline">
                            @csrf
                            <button class="btn btn-danger">Cancel</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">Data Kosong</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>
@endsection


