@extends('layout.app')


@section('content')


<div class="container col-lg-6 bg-light mt-3">
    <div class="row pt-5">
       <h3 class="mb-3"> {{$user->username}}'s posts ({{$posts->count()}}) </h3>
        <div>
            @if($posts->count())
                @foreach($posts as $post)                    
                    <div class="mb-4">
                        <div>
                            <span class="fw-bold text-dark">{{ $post->user->name }}</span><span class="fs-6 fw-lighter">
                             {{$post->created_at->diffForHumans()}}</span>   
                            <p class="mb-2">{{ $post->body}}</p>
                                @can('delete', $post)
                                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link">Delete</button>
                                    
                                    </form>
                                @endcan
                                
                        </div>
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>There are no posts</p>
            @endif
           
        </div>
    </div>
</div>


@endsection