@extends('frontend.template.default')

@section('content')
    <div class="container">
        <h3>Register akun</h3>
        <form action="{{route('register')}}" class="col s12" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                        <input id="icon_prefix" type="text" 
                        class="@error('name') invalid @enderror" name="name" value="{{old('name')}}">
                    <label for="icon_prefix">Nama</label>
                    @error('name')
                        <span class="helper-text" data-error="{{$message}}"></span>
                    @enderror
                  </div>

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

                  <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                        <input id="icon_passsword_conf" type="password" 
                        class="@error('password_confirmation') invalid @enderror" name="password_confirmation">
                    <label for="icon_passsword_conf">Password Confirmation</label>
                    @error('password_confirmation')
                        <span class="helper-text" data-error="{{$message}}"></span>
                     @enderror
                  </div> 

                  <div class="input field right">
                      <input type="submit" value="register" class="vawes-effect waves-light btn red accent-1">
                  </div>
            </div>
        </form>
    </div>
@endsection
