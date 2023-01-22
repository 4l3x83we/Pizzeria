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
                        <a href="{{ route('admin.allergene.create') }}" class="btn btn-success">{{ __('Create Allergene') }}</a>
                    </div>
                    <div class="table-responsive-xl">
                        <table class="table table-secondary table-striped table-hover">
                            <thead>
                            <tr>
                                <th>{{ __('Labelling') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allergenes as $allergene)
                                <tr>
                                    <td>{{ __($allergene->all_labelling) }}</td>
                                    <td>{{ __($allergene->all_name) }}</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('admin.allergene.edit', $allergene->id) }}" class="btn btn-link text-primary"><em class="bi bi-pen"></em> </a>
                                            <form method="POST" action="{{ route('admin.allergene.destroy', $allergene->id) }}" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger"><em class="bi bi-trash"></em></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
