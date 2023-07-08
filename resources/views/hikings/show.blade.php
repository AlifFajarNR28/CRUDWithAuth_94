@extends('layouts.app')

@section('title', 'Show Data Pendaki')

@section('contents')
    <h1 class="mb-0">Info Data Diri Pendaki</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIK</label>
            <input type="number" name="nik" class="form-control" placeholder="NIK" value="{{ $hiking->nik }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="price" class="form-control" placeholder="Nama" value="{{ $hiking->nama }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $hiking->alamat }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $hiking->email }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No. HP</label>
            <input type="number" name="no_hp" class="form-control" placeholder="No. HP" value="{{ $hiking->no_hp }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $hiking->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $hiking->updated_at }}" readonly>
        </div>
    </div>
@endsection
