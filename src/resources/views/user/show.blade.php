@php
    $title = __('User') . ':' . $user->name;
@endphp

@extends('../layouts/mylayout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <div>
            <a href="{{ url('users/'. $user->id . '/edit') }}" class="btn btn-primary">
                {{ __('編集') }}
            </a>
        </div>


        ユーザー１件の情報
        <dl class="row">
            <dt class="col-md-2">{{__('ID')}}</dt>
            <dd class="col-md-10">{{ $user->id }}</dd>
            <dt class="col-md-2">{{__('Name')}}</dt>
            <dd class="col-md-10">{{ $user->name }}</dd>
            <dt class="col-md-2">{{__('Email')}}</dt>
            <dd class="col-md-10">{{ $user->email }}</dd>
        </dl>

    </div>
@endsection