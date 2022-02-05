@extends('layouts.app')

@section('content')
<div class="container">
    <div class="news">
        <h3 class="news-title">{{ $new->title }}</h3>
        <h5 class="news-author">{{ $new->user->first_name }} {{ $new->user->last_name }}</h5>
        <p class="content">{{$new->content}}</p>
    </div>
</div>
@endsection