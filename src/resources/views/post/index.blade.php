@php
    $title = '投稿一覧'
@endphp

@extends('../layouts/mylayout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('タイトル') }}</th>
                    <th>{{ __('投稿内容') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            <a href="{{ url('posts/'. $post->id) }}">{{ $post->id }}</a>
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                            @component('components.btn-del')
                                @slot('table','posts')
                                @slot('id', $post->id)
                                @endcomponent
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection