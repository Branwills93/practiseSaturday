@extends('layout.app')


@section('content')


<div class="container col-lg-6 bg-light">
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
            Post Index
        </div>
    </div>
</div>


@endsection