@php
    $title = 'Post詳細'
@endphp

@extends('../layouts/mylayout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <div>
            <a href="{{ url('posts/' . $post->id . '/edit') }}" class="btn btn-primary">
                {{ __('編集') }}
            </a>
        </div>

        投稿１件の情報
        <dl class="row">
            <dt class="col-md-2">{{__('ID')}}</dt>
            <dd class="col-md-10">{{ $post->id }}</dd>
            <dt class="col-md-2">{{__('タイトル')}}</dt>
            <dd class="col-md-10">{{ $post->title }}</dd>
            <dt class="col-md-2">{{__('投稿内容')}}</dt>
            <dd class="col-md-10">{{ $post->body }}</dd>
            <dt class="col-md-2">{{__('作成日')}}</dt>
            <dd class="col-md-10">{{ $post->created_at }}</dd>
            <dt class="col-md-2">{{__('最終更新日')}}</dt>
            <dd class="col-md-10">{{ $post->updated_at }}</dd>
        </dl>
    </div>
@endsection