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
                        <a href="{{ route('admin.allergene.index') }}" class="btn btn-success">{{ __('Back') }}</a>
                    </div>
                    <form action="{{ route('admin.allergene.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="all_labelling" class="form-label @error('all_labelling') text-danger fw-bold @enderror">{{ __('Labelling') }}</label>
                            <input type="text" class="form-control @error('all_labelling') is-invalid @enderror" id="all_labelling" name="all_labelling">
                            @error('all_labelling')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="all_name" class="form-label @error('all_name') text-danger fw-bold @enderror">{{ __('Allergene') }}</label>
                            <input type="text" class="form-control @error('all_name') is-invalid @enderror" id="all_name" name="all_name">
                            @error('all_name')
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
