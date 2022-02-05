@extends('layouts.app')

@section('content')
<div class="container">
    <div class="news">
        @foreach($news as $new)
            <h3 class="news-title"><a href="{{route('news.show',$new->id)}}">{{ $new->title }}</a></h3>
            <h5 class="news-author">{{ $new->user->first_name }} {{ $new->user->last_name }}</h5>
            <p class="preview">{{$new->preview}}</p>
            @if(!Auth::guest())
                @if(Auth::user()->is_author)
                    <div class="author-links d-flex flex-row align-items-center">
                        <a class="btn-link text-primary me-2" href="{{route('news.edit',$new->id)}}">Edit</a>
                        <form action="{{route('news.destroy', $new->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-link text-danger p-0" type="submit" >Delete</button>
                        </form>
                    </div>
                @endif
            @endif
        @endforeach
        {{ $news->links() }}
    </div>
</div>
@endsection
