@extends('layouts.app')

@section('title')
Roles Manajement Rapat
@endsection

@section('content')
<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Edit Roles</h3>
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
                        <form action="{{route('apps.roles.update', $role->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Roles Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$role->name}}"
                                            placeholder="isi roles name" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Permissions</label>

                                        <div class="radio-inline">
                                            @foreach ($permissions as $permission)
                                            <label class="radio radio-success">
                                                <input type="checkbox" name="permissions[]"
                                                    value="{{$permission->name}}" id="permissionscheck"
                                                    {{$role->hasPermissionTo($permission->name) ? 'checked' : ''}}
                                                />
                                                <span></span>
                                                {{ $permission->name }}
                                            </label>
                                            @endforeach
                                        </div>


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
@endsection
@push('addon-style')

@endpush
@push('addon-script')
<script src="/assets/js/pages/crud/forms/widgets/select2.js"></script>
@endpush