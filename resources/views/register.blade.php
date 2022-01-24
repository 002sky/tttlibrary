@extends('layouts.nav')

@section('content')


<div class="login-section">
    <div class="layer"></div>
    <div class="container">
        <div class="top-section">
            <h1 class="page-title">Register</h1>
        </div>
        <div class="left-section">
            <img src="{{asset('/images/logo.png')}}" alt="">

        </div>
        <div class="right-section">
            <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <input type="text" name='name' placeholder="Username" value="{{old('name')}}">
                </div>
                    <div class="message">
                        @error('name')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                    </div>
                    <div class="message">
                        @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name='password' placeholder="Password">
                    </div>
                    <div class="message">
                        @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="password_confirmation" placeholder="Confirm password">
                    </div>
                    <div class="message">
                        @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <input type="text" name="phoneNo" placeholder="Phone No"value="{{old('phoneNo')}}">
                    </div>
                    <div class="message">
                        @error('phoneNo')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="input">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <input type="text" name="address" placeholder="Home Address"value="{{old('address')}}">
                  </div>
                </div>


                <div class="form-row">
                    <div class="input">
                        <div class="icon" style="margin-right: 5px;">
                            <i class="far fa-file-image"></i>
                        </div>
                        <input type="file" name="profilePicture" class="custom-file-input" placeholder="profilePicture" style="padding:5px;">
                    </div>
                </div>

                <div class="form-row">
                    <button class="btn-login">Register</button>
                </div>
                <div class="form-row">
                    <span>Already have an account? <a href="{{route('login')}}">Click here</a> </span>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
