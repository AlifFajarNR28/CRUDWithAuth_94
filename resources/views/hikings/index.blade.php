@extends('layouts.app')

@section('title', 'Gunung Arjuno')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pendaki Gunung Arjuno</h1>
        <a href="{{ route('hikings.create') }}" class="btn btn-primary">Add New Data</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($hiking->count() > 0)
                @foreach ($hiking as $hike)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $hike->nik }}</td>
                        <td class="align-middle">{{ $hike->nama }}</td>
                        <td class="align-middle">{{ $hike->alamat }}</td>
                        <td class="align-middle">{{ $hike->email }}</td>
                        <td class="align-middle">{{ $hike->no_hp }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('hikings.show', $hike->id) }}" type="button"
                                    class="btn btn-info">Detail</a>
                                <a href="{{ route('hikings.edit', $hike->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('hikings.destroy', $hike->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Not Found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
