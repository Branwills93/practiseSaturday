@extends('layout.app')

@section('content')

 <div class="container col-lg-6">
    <form action="{{route('register')}}" method="post">

    @csrf
    <div class="row pt-5">
        <div>
            <label for="name">Name</label>
        </div>
        <div>
            <input class="form-control @error('name') border-danger  @enderror" type="text"
             name="name" id="" placeholder="Your name" value="{{old('name')}}" autocomplete="off" >

            @error('name')
                <div class= "text-danger">
                    {{$message}}
                </div>
            @enderror

        </div>

        <div>
            <label for="email">Email</label>
        </div>
        <div>
            <input class="form-control @error('email') border-danger  @enderror" type="email" name="email" id="" 
            placeholder="example@students.ku.ac.ke" value="{{old('email')}}" >
            @error('email')
                <div class= "text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="username">Username</label>
        </div>
        <div>
            <input class="form-control @error('username') border-danger  @enderror" type="text"
             name="username" id="" placeholder="Your username" value="{{old('username')}}" autocomplete="off" >

            @error('username')
                <div class= "text-danger">
                    {{$message}}
                </div>
            @enderror

        </div>

        <div>
            <label for="password">Password</label>
        </div>
        <div>
            <input class="form-control @error('password') border-danger  @enderror" type="password" name="password" id="" placeholder="Enter Password">
            @error('password')
                <div class= "text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password </label>
        </div>
        <div>
            <input class="form-control @error('password_confirmation') border-danger  @enderror" type="password" name="password_confirmation" id="" placeholder="Re-enter Password">
            @error('password_confirmed')
                <div class= "text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="pt-3">
                <button type="submit" class="form-control btn btn-primary mt-2">Register </button>
        </div>

    </div>    
    
    
    
    </form>
 
 
 
 </div>
    


@endsection