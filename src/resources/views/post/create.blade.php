@php
    $title = 'POST追加'
@endphp

@extends('../layouts/mylayout')

@section('content')

    <div class="container">
        <h1>{{ $title }}</h1>

        <form action="{{ url('posts') }}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">{{ __('Title') }}</label>
                <input type="text" name="title" class="form-control" required autofocus>
            </div>

            <div class="form-group">
                <label for="body">{{ __('投稿内容') }}</label>
                <textarea type="text" name="body" class="form-control" rows="8" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">{{ __(('Submit')) }}</button>
        </form>
    </div>

@endsection
