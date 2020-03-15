@extends('frontend.template.default')

@section('content')
    <div class="container">
        <h3>Login akun</h3>
        <form action="{{route('login')}}" class="col s12" method="post">
            @csrf
            <div class="row">
             
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                        <input id="icon_telephone" type="email" 
                        class="@error('email') invalid @enderror"  name="email" value="{{old('email')}}">
                    <label for="icon_telephone">Email</label>
                    @error('email')
                        <span class="helper-text" data-error="{{$message}}"></span>
                    @enderror
                  </div>

                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                        <input id="icon_passsword" type="password" 
                        class="@error('password') invalid @enderror"   name="password">
                    <label for="icon_passsword">Password</label>
                    @error('password')
                        <span class="helper-text" data-error="{{$message}}"></span>
                     @enderror
                  </div>


                  <div class="input field right">
                      <input type="submit" value="Login" class="vawes-effect waves-light btn red accent-1">
                  </div>
            </div>
        </form>
    </div>
@endsection
