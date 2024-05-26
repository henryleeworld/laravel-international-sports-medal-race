@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Results') }}</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('Country') }}</th>
                                    <th scope="col">{{ __('Gold') }}</th>
                                    <th scope="col">{{ __('Silver') }}</th>
                                    <th scope="col">{{ __('Bronze') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($countries as $country)
                                <tr>
                                    <th>{{ __($country->name) }}</th>
                                    <td>{{ $country->gold }}</td>
                                    <td>{{ $country->silver }}</td>
                                    <td>{{ $country->bronze }}</td>
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
