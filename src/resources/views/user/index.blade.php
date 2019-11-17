@php
    $title = __('ユーザ 一覧');
@endphp
@extends('../layouts/mylayout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Email') }}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ url('users/'.$user->id) }}" class="btn btn-primary">
                                    {{ __('詳細') }}
                                </a>
                            </td>
                            <td>
                                @component('components.btn-del')
                                    @slot('table', 'users')
                                    @slot('id', $user->id)
                                @endcomponent
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
@endsection
