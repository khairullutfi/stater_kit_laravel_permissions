@extends('layouts.app')

@section('title')
Users Manajement Rapat
@endsection

@section('content')
@if (Auth::user()->hasAnyPermission('users.edit'))
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Edit User</h3>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{ $error}} </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('apps.users.update', $user->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}"
                                            placeholder="Isi Email" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="name" name="name" class="form-control" placeholder="Isi Name"
                                            value="{{$user->name}}" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Password Users</label>
                                        <input type="Password" name="password" placeholder="Isi Password"
                                            class="form-control">
                                        <small>Kosongkan jika tidak ingin mengganti password</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Role</label>
                                        @foreach ($roles as $role)
                                        <div class="radio-inline">
                                            <label class="radio radio-success">
                                                <input type="checkbox" name="roles" value="{{$role->name}}"
                                                    id="rolecheck" {{$user->roles->contains($role->id) ? 'checked' :
                                                ''}}/>
                                                <span></span>
                                                {{ $role->name }}
                                            </label>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Save Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="dashboard-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-custom alert-danger" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">Anda Tidak Bisa Mengakses Halaman Ini!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@push('addon-style')

@endpush
@push('addon-script')
<script src="/assets/js/pages/crud/forms/widgets/select2.js"></script>
@endpush