@extends('layout.app')

@section('content')



<div class="container col-lg-6">
    <div class="row pt-5">
            <form action="{{route('login')}}" method="post">
            @if(session('status'))
                <div class="text-warning">{{session('status')}}</div>
            @endif

            <!-- cross site request forgery -->
                @csrf 

                <div>
                    <label for="email">Email</label>
                </div>
                <div>
                    <input class="form-control @error('email') border-danger  @enderror" type="email" name="email" id="" 
                    placeholder="example@students.ku.ac.ke" autocomplete="off">
                    @error('email')
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
                <span><input type="checkbox" name="remember" id=""> Remember Me</span>
                </div>

                <div>
                <button type="submit" class="form-control btn btn-primary mt-3 "> Login </button>
                </div>
            
            
            </form>
        </div>
 
 
 </div>



@endsection