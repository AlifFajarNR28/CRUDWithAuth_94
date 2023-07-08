@extends('layouts.app')

@section('title', 'Create Data')

@section('contents')
    <h1 class="mb-0">Add Data</h1>
    <hr />
    <form action="{{ route('hikings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="nik" class="form-control" placeholder="NIK">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="no_hp" class="form-control" placeholder="No. HP">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
