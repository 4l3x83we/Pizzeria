@extends('layouts.admin')

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
                        <a href="{{ route('admin.permissions.index') }}" class="btn btn-success">{{ __('Back') }}</a>
                    </div>
                    <div class="text-bg-secondary p-2">
                        <form action="{{ route('admin.permissions.update', $permission->id) }}" method="POST" class="row g-3">
                            @csrf
                            @method('PATCH')
                            <div class="col-md-12">
                                <label for="name" class="form-label @error('name') text-danger fw-bold @enderror">{{ __('Permissions Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $permission->name }}">
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
                        <h2 class="fs-2 fw-semibold">{{ __('Roles') }}</h2>
                        <div class="d-flex flex-wrap mt-3">
                            @if($permission->roles)
                                @foreach($permission->roles as $permission_role)
                                    <form method="POST" action="{{ route('admin.permissions.roles.remove', [$permission->id, $permission_role->id]) }}" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn badge text-bg-danger me-2 fs-6"> {{ __($permission_role->name) }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-3">
                            <form action="{{ route('admin.permissions.roles', $permission->id) }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    <label for="role" class="form-label @error('role') text-danger fw-bold @enderror">{{ __('Roles') }}</label>
                                    <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->name }}">{{ __($role->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
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
