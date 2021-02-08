@extends('layout.app')


@section('content')


<div class="container col-lg-6 bg-light mt-3">
    <div class="row pt-5">
        @guest

            <p>Please Log in to create posts</p>

        @endguest

        @auth    
        <form action="{{route('posts')}}" method="post" class="mb-4">

        @csrf

        <div class="mb-4">
        
            <label for="body" class="sr-only mb-3"><strong>Post</strong></label>

            <textarea name="body" id="body" cols="30" rows="4" placeholder=" Post Something"
            class="bg-white text-dark border border-2 rounded-3 col-lg-12 @error('body') border-danger  @enderror" ></textarea>
            @error('body')
                <div class= "text-danger">
                    {{$message}}
                </div>
            @enderror
            <div>
            
                <button type="submit" class="btn btn-primary px-4 py-2 rounded">Post</button>
            
            </div>
        
        
        </div>
                        
        </form>
        @endauth
        <div>
            @if($posts->count())
                @foreach($posts as $post)
                    <div class="mb-4">
                        <div>
                            <a href="#" class="fw-bold text-dark">{{ $post->user->name }}</a><span class="fs-6 fw-lighter">
                             {{$post->created_at->diffForHumans()}}</span>   
                            <p class="mb-2">{{ $post->body}}</p>
                                @if($post->ownedBy(auth()->user()))
                                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link">Delete</button>
                                    
                                    </form>
                                    
                                @endif
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