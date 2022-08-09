@extends('layouts.app')

@section('title')
Create Ruangan
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Tambah Ruangan
        </h3>
    </div>
    <!--begin::Form-->
    <form class="form">
        <div class="card-body">


            <div class="form-group">
                <label>Lantai</label>
                <input type="email" class="form-control" readonly placeholder="Isi Lantai" />
            </div>
            <div class="form-group">
                <label>Nama Ruangan</label>
                <input type="email" class="form-control" readonly placeholder="Isi Nama Ruangann" />
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Deskripsi Ruangan</label>
                <textarea class="form-control" readonly rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Kapasitas</label>
                <input type="email" class="form-control" readonly placeholder="Isi Kapasitas" />
            </div>
            <div class="form-group">
                <label>Fasilitas</label>
                <input type="email" class="form-control" readonly placeholder="Isi Fasilitas" />
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection