@extends('layouts.app')

@section('title', 'Edit Data Pendaki')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('hikings.update', $hiking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIK</label>
                <input type="number" name="nik" class="form-control" placeholder="NIK" value="{{ $hiking->nik }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $hiking->nama }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                    value="{{ $hiking->alamat }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Eamil" value="{{ $hiking->email }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No. HP</label>
                <input type="number" name="no_hp" class="form-control" placeholder="No. HP" value="{{ $hiking->no_hp }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
