@extends('layouts.app')


@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8 p-5">
                <div>

                    <div class="d-flex justify-content-between">
                        <h3>Basic info</h3>
                        <div>
                            <a href="#" class="btn btn-outline-primary">Cancel</a>
                            <a href="#" class="btn btn-primary">Save</a>
                        </div>
                    </div>
                    <hr>

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle mr-2"></i>
                            {!! session()->get('success') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="firstname">
                                <i class="far fa-user-circle mr-2"></i>
                                First Name</label>
                            <input
                                type="text"
                                name="firstname"
                                id="firstname"
                                class="form-control @error('firstname') is-invalid @enderror"
                                placeholder="Enter Your First Name"
                                value="{{ \Illuminate\Support\Facades\Auth::user()->firstname }}"

                            >
                            @error('firstname')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastname">
                                <i class="far fa-user-circle mr-2"></i>
                                Last Name</label>
                            <input
                                type="text"
                                name="lastname"
                                id="lastname"
                                class="form-control @error('lastname') is-invalid @enderror"
                                placeholder="Enter Your Last Name"
                                value="{{ \Illuminate\Support\Facades\Auth::user()->lastname }}"
                            >
                            @error('lastname')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">
                                <i class="far fa-envelope mr-2"></i>
                                Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter Your Email"
                                value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"

                            >
                            @error('email')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="bio">
                                <i class="fas fa-user-tie mr-2"></i>
                                Bio</label>
                            <textarea
                                type="text"
                                name="bio"
                                id="bio"
                                class="form-control @error('bio') is-invalid @enderror"
                                placeholder="Type Some Thing About You...">{{\Illuminate\Support\Facades\Auth::user()->bio}}</textarea>

                            @error('bio')
                            <small class="invalid-feedback">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </small>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="image">
                                <i class="far fa-image mr-2"></i>
                                Image</label>

                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input  @error('image') is-invalid @enderror"
                                       id="customFile"
                                       name="image"
                                >
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('image')
                                <small class="invalid-feedback">
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $message }}
                                </small>
                                @enderror

                            </div>


                        </div>

                        <button class="btn btn-primary">
                            <i class="far fa-save mr-2"></i>
                            Update Profile</button>
                    </form>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center p-5">

                <div>
                    @if(\Illuminate\Support\Facades\Auth::user()->image)

                        <img src="{{ asset('img/users/'.Auth::user()->image) }}" alt=""  style="width: 150px; height: 150px">

                    @else
                        <img src="{{ asset('img/woman.png') }}" alt="" style="width: 150px; height: 150px" >
                    @endif

                    <div class="py-4">
                        <h4 >{{ \Illuminate\Support\Facades\Auth::user()->firstname . " " . \Illuminate\Support\Facades\Auth::user()->lastname }}</h4>
                        <small>
                            <i class="fas fa-envelope mr2"></i>
                            {{ \Illuminate\Support\Facades\Auth::user()->email }}
                        </small>

                        <p> {{ \Illuminate\Support\Facades\Auth::user()->bio }}</p>


                    </div>
                    <a href="#" class="btn btn-primary">Delete Profile</a>

                </div>
                </div>

            </div>
        </div>

@endsection
