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
                        <a href="{{ route('admin.users.index') }}" class="btn btn-success">{{ __('Back') }}</a>
                    </div>
                    <div class="text-bg-secondary p-2">
                        <div>{{ __('User Name') . ': ' . $user->name }}</div>
                        <div>{{ __('E-Mail Address') . ': ' . $user->email }}</div>
                    </div>
                    <div class="mt-3 text-bg-secondary p-2">
                        <h2 class="fs-2 fw-semibold">{{ __('Roles') }}</h2>
                        <div class="d-flex flex-wrap mt-3">
                            @if($user->roles)
                                @foreach($user->roles as $user_role)
                                    <form method="POST" action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn badge text-bg-danger me-2 fs-6"> {{ __($user_role->name) }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-3">
                            <form action="{{ route('admin.users.roles', $user->id) }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    <label for="role" class="form-label @error('role') text-danger fw-bold @enderror">{{ __('role Name') }}</label>
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
                    <div class="mt-3 text-bg-secondary p-2">
                        <h2 class="fs-2 fw-semibold">{{ __('Permissions') }}</h2>
                        <div class="d-flex flex-wrap mt-3">
                            @if($user->permissions)
                                @foreach($user->permissions as $user_permission)
                                    <form method="POST" action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn badge text-bg-danger me-2 fs-6"> {{ __($user_permission->name) }}</button>
                                    </form>
                                @endforeach
                            @endif
                        </div>
                        <div class="mt-3">
                            <form action="{{ route('admin.users.permissions', $user->id) }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    <label for="permission" class="form-label @error('ermission') text-danger fw-bold @enderror">{{ __('permissions') }}</label>
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
