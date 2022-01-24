@extends('layouts.nav')

@section('content')


<div class="row">
    <div class="profile">
        <div class="header">
            <h1>Profile</h1>
        </div>
        <div class="profile-details">
            <div class="profile-header">
                <div class="profile-avatar">
                    <img src="{{ asset('images') }}/{{ $userProfile->profilePicture }}" alt="">
                </div>
                <div class="user-name">
                    <h1>@if (!empty($userProfile))
                        {{$userProfile->name}}
                        @endif</h1>
                </div>
            </div>

            <div class="user-details">
                <div class="information">
                    <div class="information-header">
                        <h1>Information</h1>
                        <button class="modal-open" data-modal="changeInformationModal">Change information</button>

                    </div>
                    <div class="information-container">
                        <div class="user-details-row">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3>@if (!empty($userProfile))
                                {{$userProfile->email}}
                                @endif</h3>
                        </div>

                        <div class="user-details-row">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h3>@if (!empty($userProfile))
                                {{$userProfile->phoneNo}}
                                @endif</h3>
                        </div>

                        <div class="user-details-row">
                            <div class="icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>@if (!empty($userProfile))
                                {{$userProfile->address}}
                                @endif</h3>
                        </div>
                    </div>
                </div>

                <div class="password">
                    <div class="information-header">
                        <h1>Password</h1>
                        <button class="modal-open" data-modal="changePasswordModal">Change password</button>
                    </div>
                    <div class="information-container">
                        <div class="user-details-row">
                            <div class="icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h3>**********</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--=============== Change Information modal start ===================-->


<div class="modal" id="changeInformationModal">
    <div class="profile-container">
        <div class="table-title border-bottom">
            <h1 class="font-white">Change information</h1>
            <span class="modal-close"><i class="fas fa-times-circle"></i></span>

        </div>
        <form method="POST" action="{{route('edit')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="@if (!empty($userProfile)){{$userProfile->id}}@endif" id="userID">
            <div class="form-row">
                <div class="input">
                    <div class="icon">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <input type="text" name='name' placeholder="Username" id="username" value="@if (!empty($userProfile)){{$userProfile->name}}@endif">
                </div>
            </div>

            <div class="form-row">
                <div class="input">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <input type="text" name="email" placeholder="Email" id="email" value="@if (!empty($userProfile)){{$userProfile->email}}@endif">
                </div>
            </div>

            <div class="form-row">
                <div class="input">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <input type="text" name="phoneNo" placeholder="Phone No" id="phoneNo" value="@if (!empty($userProfile)){{$userProfile->phoneNo}}@endif">
                </div>
            </div>

            <div class="form-row">
                <div class="input">
                    <div class="icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <input type="text" name="address" placeholder="Home Address" id='address' value="@if (!empty($userProfile)){{$userProfile->address}}
                @endif">

                </div>

            </div>


            <div class="form-row">
                <div class="input">
                    <div class="icon" style="margin-right: 5px;">
                        <i class="far fa-file-image"></i>
                    </div>
                    <input type="file" name="profilePicture" class="custom-file-input"
                        style="padding:5px;" id="profilePicture">
                </div>
            </div>

            <div class="form-row">
                <input type="submit" id="updateProfile" value="Edit" class="btn-login">
            </div>

        </form>
    </div>
</div>
    <!--=============== Change Information modal end ===================-->


    <!--=============== Change Password modal start ===================-->

<div class="modal" id="changePasswordModal">
    <div class="profile-container">
        <div class="table-title border-bottom">
            <h1 class="font-white">Change password</h1>
            <span class="modal-close"><i class="fas fa-times-circle"></i></span>

        </div>

        <form action="{{ route('passwordUpdate') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="@if (!empty($userProfile)){{$userProfile->id}}@endif" id="userID">
            <div class="form-row">
                <div class="input">
                    <div class="icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="password" name='password' placeholder="Password">
                </div>
            </div>
            <div class="form-row">
                <div class="input">
                    <div class="icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="password" name="password_confirmation" placeholder="Confirm password">
                </div>
            </div>

            <div class="form-row">
                <button class="btn-login" type="submit">Edit</button>
            </div>

        </form>
    </div>
</div>
    <!--=============== Change Password modal end ===================-->

@endsection