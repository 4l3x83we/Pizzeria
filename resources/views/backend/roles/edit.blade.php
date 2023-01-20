@extends('layouts.backend')

@section('title') {{ __($page_title) }} @endsection

@push('css') @endpush
@push('js') @endpush
@push('script') @endpush

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">{{ __($page_title) }}</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap p-2 rounded-3 shadow-lg bg-white">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('backend.roles.index') }}" class="btn btn-success">{{ __('Back') }}</a>
                    </div>
                    <div class="text-bg-secondary p-2">
                        <form action="{{ route('backend.roles.update', $role->id) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PATCH')
                            <div class="col-md-12">
                                <label for="name" class="form-label @error('name') text-danger fw-bold @enderror">{{ __('Roles Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $role->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">{{ __('Update') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-3 text-bg-secondary p-2">
                        <h2 class="fs-2 fw-semibold">{{ __('Role Permissions') }}</h2>
                        <div class="d-flex flex-wrap mt-3">
                            @if($role->permissions)
                                @foreach($role->permissions as $role_permission)
                                    <form method="POST" action="{{ route('backend.roles.permissions.revoke', [$role->id, $role_permission->id]) }}" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn badge text-bg-danger me-2 fs-6"> {{ __($role_permission->name) }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-3">
                            <form action="{{ route('backend.roles.permissions', $role->id) }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    <label for="permission" class="form-label @error('permission') text-danger fw-bold @enderror">{{ __('Permission Name') }}</label>
                                    <select class="form-select @error('permission') is-invalid @enderror" id="permission" name="permission">
                                        @foreach($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ __($permission->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('permission')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">{{ __('Assign') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
