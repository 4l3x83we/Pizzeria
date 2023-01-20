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
                    <form action="{{ route('backend.roles.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label @error('name') text-danger fw-bold @enderror">{{ __('Roles Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">{{ __('Create') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
