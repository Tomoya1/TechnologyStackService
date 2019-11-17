@php
    $title = '編集'
@endphp

@extends('../layouts/mylayout')

@section('content')
    <div class="container">
        <h1> {{ $title }}</h1>

        <div class="form-group">
            <form action="{{ url('posts/' . $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="title">{{ __('タイトル') }}</label>
                <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required autofocus>
                <label for="body">{{ __('投稿内容') }}</label>
                <textarea id="body" class="form-control" name="body" rows="8" required autofocus> {{ $post->body }}</textarea>
                <button style="margin-top: 5px" type="submit" name="submit" class="btn btn-primary">{{__('Submit')}}</button>
            </form>
        </div>
    </div>
    @endsection
