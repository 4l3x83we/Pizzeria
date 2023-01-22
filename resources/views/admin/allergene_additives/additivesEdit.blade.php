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
                        <a href="{{ route('admin.additive.index') }}" class="btn btn-success">{{ __('Back') }}</a>
                    </div>
                    <form action="{{ route('admin.additive.update', $additive->id) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-6">
                            <label for="add_labelling" class="form-label @error('add_labelling') text-danger fw-bold @enderror">{{ __('Labelling') }}</label>
                            <input type="text" class="form-control @error('add_labelling') is-invalid @enderror" id="add_labelling" name="add_labelling" value="{{ $additive->add_labelling }}">
                            @error('add_labelling')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="add_name" class="form-label @error('add_name') text-danger fw-bold @enderror">{{ __('Additive') }}</label>
                            <input type="text" class="form-control @error('add_name') is-invalid @enderror" id="add_name" name="add_name" value="{{ $additive->add_name }}">
                            @error('add_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">{{ __('Edit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
